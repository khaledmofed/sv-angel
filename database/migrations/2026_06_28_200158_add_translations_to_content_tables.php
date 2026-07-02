<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['heroes', 'about_stories', 'principles'] as $tbl) {
            Schema::table($tbl, function (Blueprint $table) {
                $table->json('translations')->nullable();
            });
        }
    }

    public function down(): void
    {
        foreach (['heroes', 'about_stories', 'principles'] as $tbl) {
            Schema::table($tbl, function (Blueprint $table) {
                $table->dropColumn('translations');
            });
        }
    }
};
