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
        Schema::create('student_clubs', function (Blueprint $table) {
            $table->id('student_club_id');
            $table->string('title');
            $table->longText('description');
            $table->string('image_url');
            $table->string('facebook')->default('');
            $table->string('instagram')->default('');
            $table->string('discord')->default('');
            $table->string('linkedin')->default('');
            $table->string('youtube')->default('');
            $table->string('whatsapp')->default('');
            $table->string('telegram')->default('');
            $table->string('web_site')->default('');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_posts');
    }
};