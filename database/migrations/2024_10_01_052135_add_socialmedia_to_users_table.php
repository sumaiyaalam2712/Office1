<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('facebook')->nullable()->after('profile_picture');
            $table->string('tiktok')->nullable()->after('facebook');
            $table->string('instagram')->nullable()->after('tiktok');
            $table->string('twitter')->nullable()->after('instagram');
            $table->string('youtube')->nullable()->after('twitter');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('facebook');
           $table->dropColumn('tiktok');
           $table->dropColumn('instagram');
           $table->dropColumn('twitter');
           $table->dropColumn('youtube');
        });
    }
};
