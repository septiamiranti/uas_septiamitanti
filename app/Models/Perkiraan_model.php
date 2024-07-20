<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkiraan_model extends Model
{
    use HasFactory;
    protected $table="tabel_akuntansi_master";
    protected $primaryKey="id_perkiraan";

    //public $timestamps = false;

}
