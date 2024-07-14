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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('title',400);
            $table->string('description',2000);
            $table->datetime('datetime');
            $table->unsignedBigInteger('forumspecialuser_id');
            $table->unsignedBigInteger('petowner_id');
            $table->foreign('forumspecialuser_id')->references('id')->on('forumspecialuser')->onDelete('cascade');
            $table->foreign('petowner_id')->references('id')->on('petowner')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
