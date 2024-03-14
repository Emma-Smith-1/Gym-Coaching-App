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
        Schema::create('coach_member', function (Blueprint $table) {
            $table->primary(['member_id', 'coach_id']);
            $table->bigInteger('member_id')->unsigned();
            $table->bigInteger('coach_id')->unsigned();
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('coach_id')->references('id')->on('coaches')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_coach');
    }
};
