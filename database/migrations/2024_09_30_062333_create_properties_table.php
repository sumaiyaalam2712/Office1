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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('apartment_category_id');
            $table->foreign('apartment_category_id')->references('id')->on('apartment_categories')->onDelete('cascade');
            $table->unsignedBigInteger('appartment_type_id');
            $table->foreign('appartment_type_id')->references('id')->on('appartment_types')->onDelete('cascade');
            $table->string('property_title')->nullable();
            $table->integer('price')->nullable();
            $table->unsignedBigInteger('service_type_id');
            $table->foreign('service_type_id')->references('id')->on('service_types')->onDelete('cascade');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('all_cities')->onDelete('cascade');
            $table->text('address')->nullable();
            $table->string('images')->nullable();
            $table->integer('area')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->string('parking')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('website')->nullable();
            $table->text('details')->nullable();
            $table->string('amenities')->nullable();
            $table->string('brochure')->nullable();
            $table->string('keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
