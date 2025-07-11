<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petugas;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends \Illuminate\Database\Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //     \App\Models\User::factory(20)->create();

    //     User::factory()->create([
    //        'name' => 'Test User',
    //        'email' => 'test@example.com',
    //    ]);
    User::create([
            'username' => 'Exlyn',
            'email' => 'b@gmail.com',
            'no_hp' => '08123456789',
            'password' => bcrypt('12345678')
        ]);

        Petugas::insert([
    [
        'nama_petugas'   => 'Exlyn',
        'jenis_kelamin'  => 'P',
        'agama'          => 'Islam',
        'status'         => 'Aktif',
        'alamat'         => 'Jl. Contoh Alamat No. 123'
    ],
    [
        'nama_petugas'   => 'Raka',
        'jenis_kelamin'  => 'L',
        'agama'          => 'Kristen',
        'status'         => 'Aktif',
        'alamat'         => 'Jl. Melati No. 45'
    ],
    [
        'nama_petugas'   => 'Salsa',
        'jenis_kelamin'  => 'P',
        'agama'          => 'Hindu',
        'status'         => 'Tidak Aktif',
        'alamat'         => 'Jl. Kenanga No. 78'
    ]
]);
    Book::insert([
    [
        'judul' => 'Belajar Laravel',
        'penulis' => 'Exlyn',
        'penerbit' => 'Gramedia',
        'tanggal_terbit' => '2023-06-01',
        'jumlah_halaman' => 250
    ],
    [
        'judul' => 'Pemrograman PHP',
        'penulis' => 'Raka', 
        'penerbit' => 'Elex Media',
        'tanggal_terbit' => '2022-01-15',
        'jumlah_halaman' => 300
    ],
    [
        'judul' => 'Dasar-dasar HTML',
        'penulis' => 'Salsa',
        'penerbit' => 'Andi Publisher',
        'tanggal_terbit' => '2021-05-20',
        'jumlah_halaman' => 150
    ]
]);
        }
        
}
