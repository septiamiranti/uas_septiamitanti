<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman_model extends Model
{
    use HasFactory;

    protected $table="pengumuman";
    protected $primaryKey ="id_pengumuman";
}
