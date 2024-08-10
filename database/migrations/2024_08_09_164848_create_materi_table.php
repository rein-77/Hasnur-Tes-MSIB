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
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kursus_id');
            $table->string('judul', length:100);
            $table->text('deskripsi')->nullable();
            $table->string('link_embed')->nullable();
            $table->timestamps();

            $table->foreign('kursus_id')->references('id')->on('kursus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
