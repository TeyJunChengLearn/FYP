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
        Schema::create('inquiriesreply', function (Blueprint $table) {
            $table->id();
            $table->string('description',2000);
            $table->datetime('datetime');
            $table->unsignedBigInteger('inquiries_id');
            $table->unsignedBigInteger('forumspecialuser_id');
            $table->foreign('forumspecialuser_id')->references('id')->on('forumspecialuser');
            $table->foreign('inquiries_id')->references('id')->on('inquiries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiriesreply');
    }
};
