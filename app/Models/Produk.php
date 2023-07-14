<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    
    public function user() {
        return $this->belongsTo(User::class,'id_user');
    }

    public function kategori() {
        return $this->belongsTo(Kategori::class,'id_kategori');
    }
}
