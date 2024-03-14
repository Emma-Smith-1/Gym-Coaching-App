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
        Schema::create('replies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('coach_id')->unsigned();
            $table->bigInteger('comment_id')->unsigned();
            $table->string('coach_name');
            $table->text('content');
            $table->unsignedInteger('likes')->default(0);
            $table->dateTime('date_posted')->nullable();
            $table->enum('visibility', ['public', 'draft', 'private'])->default('draft');

            $table->foreign('comment_id')->references('id')->on('comments')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('coach_id')->references('id')->on('coaches')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
    }
};
