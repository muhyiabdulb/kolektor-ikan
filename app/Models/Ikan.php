<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'photo', 'harga', 'penjual', 'tanggal_beli'
    ];
    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->photo;
    }
}
