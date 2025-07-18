<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User di-import

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // Mengambil semua data user
        $Petugas = new Petugas();    // Tidak digunakan, bisa dihapus kalau tidak perlu

        return view('user.user', compact('users'));
    }

    public function create()
    {
        return view('user.create'); // Pastikan view create.blade.php ada
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'no_hp'    => 'required|string|max:20',
            'password' => 'required|string|min:6',
            'role'     => 'required|in:admin,petugas,anggota',
        ]);

        User::create([
            'username' => $validated['name'],
            'email'    => $validated['email'],
            'no_hp'    => $validated['no_hp'],
            'password' => bcrypt($validated['password']),
            'role'     => $validated['role'],
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }
}
