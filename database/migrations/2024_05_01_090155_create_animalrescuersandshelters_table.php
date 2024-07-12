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
        Schema::create('animalrescuersandshelters', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->integer('structure');
            $table->string('location',150);
            $table->string('phonenumber',15);
            $table->string('taxidentificationnumber',30);
            $table->string('businesslicense');
            $table->string('description',100);
            $table->unsignedBigInteger('petowner_id');
            $table->foreign('petowner_id')->references('id')->on('petowner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animalrescuersandshelters');
    }
};
