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
        Schema::create('notesreply', function (Blueprint $table) {
            $table->id();
            $table->datetime('datetime');
            $table->string('description');
            $table->unsignedBigInteger('notes_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('notesreply_id')->nullable();
            $table->foreign('notes_id')->references('id')->on('notes');
            $table->foreign('admin_id')->references('id')->on('admin');
            $table->foreign('notesreply_id')->references('id')->on('notesreply');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notesreply');
    }
};
