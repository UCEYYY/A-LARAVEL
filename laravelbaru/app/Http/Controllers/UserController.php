<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Pastikan model User di-import

class UserController extends Controller
{
    public function index()

    {
        $users = User::paginate(10); // Mengambil semua data user
        // $users = User::limit(5)->get(); // Mengambil 10 data user
        $Petugas = new Petugas(); // Mengambil semua data user
        // $user = User::latets(); // Mengambil data user terbaru
        // Untuk debug, gunakan salah satu saja, tidak perlu var_dump + dd
        // dd($Petugas); // Gunakan ini untuk melihat output dalam format array
        // var_dump($users); // Gunakan ini jika ingin melihat output dalam format array

        return view('user', compact('users'));
    }
}