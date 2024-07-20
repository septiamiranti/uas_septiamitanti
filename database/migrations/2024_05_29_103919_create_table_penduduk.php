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
        Schema::create('penduduk', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->bigIncrements('nik');
            $table->string('nama_penduduk');
            $table->integer('pendapatan_perbulan');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['Pria', 'Wanita'])->default('Pria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
