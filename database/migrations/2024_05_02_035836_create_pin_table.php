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
        Schema::create('pin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('forumspecialuser_id');
            $table->unsignedBigInteger('lostandfoundannouncement_id')->nullable()->unique();
            $table->unsignedBigInteger('announcement_id')->nullable()->unique();
            $table->foreign('forumspecialuser_id')->references('id')->on('forumspecialuser')->onDelete('cascade');
            $table->foreign('lostandfoundannouncement_id')->references('id')->on('lostandfoundannouncement')->onDelete('cascade');
            $table->foreign('announcement_id')->references('id')->on('announcement')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pin');
    }
};
