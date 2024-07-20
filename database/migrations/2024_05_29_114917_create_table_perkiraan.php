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
        Schema::create('tabel_akuntansi_master', function (Blueprint $table) {
            $table->increments('id_perkiraan');
            $table->string('nomor_perkiraan')->nullable();
            $table->string('nama_perkiraan')->nullable();
            $table->string('tipe')->nullable();
            $table->string('induk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_master');
    }
};
