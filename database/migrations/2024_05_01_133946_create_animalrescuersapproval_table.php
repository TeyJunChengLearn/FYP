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
        Schema::create('animalrescuersapproval', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('animalrescuersandshelters_id')->unique();
            $table->boolean('approval')->default(false);
            $table->boolean('confirm')->default(false);
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animalrescuersapproval');
    }
};
