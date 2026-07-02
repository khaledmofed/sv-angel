#!/bin/sh

PORT="${PORT:-8080}"
sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
sed -i "s/\*:80/\*:$PORT/g" /etc/apache2/sites-available/000-default.conf

grep -v '^APP_URL=' /var/www/html/.env | grep -v '^DB_CONNECTION=' | grep -v '^DATABASE_URL=' | grep -v '^DB_URL=' > /tmp/.env.runtime
mv /tmp/.env.runtime /var/www/html/.env
{
  echo "APP_URL=${APP_URL:-http://localhost}"
  echo "DB_CONNECTION=${DB_CONNECTION:-pgsql}"
  printf 'DATABASE_URL="%s"\n' "$DATABASE_URL"
  printf 'DB_URL="%s"\n' "${DB_URL:-$DATABASE_URL}"
} >> /var/www/html/.env
chown www-data:www-data /var/www/html/.env
chmod 644 /var/www/html/.env

php artisan config:clear || true
php artisan migrate --force || echo "[startup] migrate skipped"
rm -rf /var/www/html/public/storage && ln -sfn /var/www/html/storage/app/public /var/www/html/public/storage
chmod -R 755 /var/www/html/storage/app/public
php artisan db:seed --force || echo "[startup] seed skipped"

echo "Startup complete. Starting Apache on port $PORT..."
exec apache2-foreground
