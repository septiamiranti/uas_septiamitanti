<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hari', function (Blueprint $table) {
         $table->increments('HariID');
         $table->string('NamaHari');
         $table->string('img')->default('default.jpg');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hari');
    }
};
