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
        Schema::create('forumpost', function (Blueprint $table) {
            $table->id();
            $table->datetime("datetime");
            $table->string('description',2000);
            $table->string('title',200);
            $table->unsignedBigInteger('petowner_id')->nullable();
            $table->unsignedBigInteger('forumcategory_id');
            $table->unsignedBigInteger('animalrescuersandshelters_id')->nullable();
            $table->foreign('petowner_id')->references('id')->on('petowner');
            $table->foreign('forumcategory_id')->references('id')->on('forumcategory');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forumpost');
    }
};
