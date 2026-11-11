<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = [
        'siswa_id',
        'category_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'nama',
        'ruangan',
        'deskripsi',
        'status',
    ];
}
