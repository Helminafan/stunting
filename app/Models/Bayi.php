<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    use HasFactory;
    protected $table = 'bayi';
    protected $primaryKey = 'id';

    public function ibuBayi(){
        return $this->belongsTo(Ibu::class,'ibu_id','id');
    }
}
