<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTBBoys extends Model
{
    use HasFactory;
    protected $table = 'tb_tbperusiaboy';
    protected $primaryKey = 'id';
}
