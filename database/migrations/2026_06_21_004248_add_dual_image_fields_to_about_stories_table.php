<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_stories', function (Blueprint $table) {
            $table->string('image_link')->nullable()->after('image');
            $table->string('second_image')->nullable()->after('image_link');
            $table->string('second_image_link')->nullable()->after('second_image');
        });
    }

    public function down(): void
    {
        Schema::table('about_stories', function (Blueprint $table) {
            $table->dropColumn(['image_link', 'second_image', 'second_image_link']);
        });
    }
};
