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
        Schema::create('adoptpets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('pettype');
            $table->string('petbreed');
            $table->integer('gender');
            $table->string('age');
            $table->integer('vacinated');
            $table->string('condition');
            $table->string('location');
            $table->string('phonenumber');
            $table->integer('adoptionfee');
            $table->string('image');
            $table->string('description',3000)->nullable();
            $table->unsignedBigInteger('animalrescuersandshelters_id');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptpets');
    }
};
