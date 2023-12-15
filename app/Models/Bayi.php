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
        return $this->hasMany(Ibu::class, 'id','ibu_id');
    }
    public function kesehatanBayi(){
        return $this->hasMany(KesehatanBayi::class,'bayi_id','id');
    }
    public function statusBayi(){
        return $this->belongsTo(KesehatanBayi::class,'id','bayi_id');
    }
}
