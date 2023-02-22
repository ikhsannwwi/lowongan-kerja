<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowongan_kerja extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori_loker(){
        return $this->belongsTo(kategori_loker::class,'kategori_id');
    }
}
