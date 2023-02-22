<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_loker extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lowongan_kerja(){
        return $this->hasMany(lowongan_kerja::class, 'kategori_id','id');
    }
}
