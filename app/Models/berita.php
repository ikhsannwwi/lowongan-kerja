<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory,HasSlug;

    protected $guarded = ['id'];

    public function slugConfigs(): array
    {
        return [
            'slug' => 'judul_berita'
        ];
    }
}
