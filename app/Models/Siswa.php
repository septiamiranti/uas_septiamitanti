<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table ="siswa";
    protected $primaryKey ="id_siswa";
    protected $fillable = ['nama_siswa','gender','alamat','phone'];
    public $incrementing = false;
    public $timestamps = true;
}
