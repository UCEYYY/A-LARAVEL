<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'nama_petugas',
        'jenis_kelamin',
        'agama',
        'status',
        'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
