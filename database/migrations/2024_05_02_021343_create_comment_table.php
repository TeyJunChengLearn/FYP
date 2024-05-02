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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('description',2000);
            $table->datetime('datetime');
            $table->unsignedBigInteger('lostandfoundannouncement_id')->nullable();
            $table->unsignedBigInteger('announcement_id')->nullable();
            $table->unsignedBigInteger('forumpost_id')->nullable();
            $table->unsignedBigInteger('petowner_id')->nullable();
            $table->unsignedBigInteger('animalrescuersandshelters_id')->nullable();
            $table->foreign('lostandfoundannouncement_id')->references('id')->on('lostandfoundannouncement');
            $table->foreign('announcement_id')->references('id')->on('announcement');
            $table->foreign('forumpost_id')->references('id')->on('forumpost');
            $table->foreign('petowner_id')->references('id')->on('petowner');
            $table->foreign('animalrescuersandshelters_id')->references('id')->on('animalrescuersandshelters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
