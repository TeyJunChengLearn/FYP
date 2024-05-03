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
        Schema::create('reply', function (Blueprint $table) {
            $table->id();
            $table->string('description',2000);
            $table->datetime('datetime');
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->unsignedBigInteger('petowner_id')->nullable();
            $table->unsignedBigInteger('animalrescuersandshelters_id')->nullable();
            $table->unsignedBigInteger('reply_id')->nullable();
            $table->foreign('comment_id')->references('id')->on('comment');
            $table->foreign('petowner_id')->references('id')->on('petowner');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters');
            $table->foreign('reply_id')->references('id')->on('reply');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply');
    }
};
