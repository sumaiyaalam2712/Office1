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
        Schema::create('commens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commentable_id'); // This will hold the ID of the related model
            $table->string('commentable_type'); // This will hold the model type (Blog or Vidio)
            $table->string('name');
            $table->text('comment');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commens');
    }
};