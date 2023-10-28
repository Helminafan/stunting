<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBBBoys extends Model
{
    use HasFactory;
    protected $table = 'tb_bbperusiaboy';
    protected $primaryKey = 'id';
   
}
