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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nirm')->unique();
            $table->string('email')->unique();
            $table->string('pass');
            $table->string('nama');
            $table->string('hp');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->text('alamat');
            $table->string('prodi');
            $table->date('tgldaftar');
            $table->string('status');
            $table->string('ta');
            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
