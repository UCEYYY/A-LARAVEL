<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Petugas;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamen';

    protected $fillable = [
        'id_buku',
        'id_petugas',
        'id_anggota',
        'tanggal_pinjam',
        'tanggal_pengembalian',
    ];

    public function buku()
    {
        return $this->belongsTo(Book::class, 'id_buku');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
