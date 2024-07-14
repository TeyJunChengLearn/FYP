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
        Schema::create('rescuerequestreply', function (Blueprint $table) {
            $table->id();
            $table->string('description',2000);
            $table->datetime('datetime');
            $table->unsignedBigInteger('petowner_id');
            $table->unsignedBigInteger('rescuerequest_id');
            $table->unsignedBigInteger('animalrescuersandshelters_id');
            $table->foreign('petowner_id')->references('id')->on('petowner')->onDelete('cascade');
            $table->foreign('rescuerequest_id')->references('id')->on('rescuerequest')->onDelete('cascade');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rescuerequestreply');
    }
};
