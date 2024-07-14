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
        Schema::create('volunteerrequest', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('phonenumber',15);
            $table->string('placebirth',50);
            $table->string('occupation',50);
            $table->string('workingplace',50);
            $table->string('icpicture',50);
            $table->boolean('approval')->default(false);
            $table->boolean('confirm')->default(false);
            $table->unsignedBigInteger('animalrescuersandshelters_id');
            $table->unsignedBigInteger('petowner_id');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters')->onDelete('cascade');
            $table->foreign('petowner_id')->references('id')->on('petowner')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteerrequest');
    }
};
