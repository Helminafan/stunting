<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanBayi extends Model
{
    use HasFactory;
    protected $table = 'kesehatanbayi';
    protected $primaryKey = 'id';

    public function bayi(){
        return $this->belongsTo(Bayi::class,'bayi_id','id');
    }
}
