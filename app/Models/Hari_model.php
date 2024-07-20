<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari_model extends Model
{
    use HasFactory;

     protected $table="hari";
     protected $primaryKey="HariID";
     public $timestamps = false;
}
