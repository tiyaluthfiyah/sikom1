<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ulasanbuku()
    {
       return $this->hasMany(ulasanBuku::class);
    }
    
    public function koleksiPribadi()
    {
        return $this->hasMany(koleksiPribadi::class);
    }

    public function kategoriBuku_Relasi()
    {
        return $this->hasMany(kategoriBuku_Relasi::class);
    }

    public function peminjaman()
    {
        return $this->hasMany(peminjaman::class);
    }
}