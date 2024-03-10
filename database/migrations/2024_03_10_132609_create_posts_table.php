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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('content');
            $table->dateTime('creationDate')->nullable();
            $table->dateTime('lastUpdated')->nullable();
            $table->string('category')->nullable();
            $table->enum('visibility', ['public', 'draft', 'private'])->default('draft');
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('comments')->default(0);
            $table->string('media')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
