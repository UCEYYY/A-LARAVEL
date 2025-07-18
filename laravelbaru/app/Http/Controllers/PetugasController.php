<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetugasController extends Controller
{
 public function index()
 {
    $petugas = Petugas::all(); // atau ->paginate(10)
    return view('petugas.petugas' , compact('petugas')); // Ganti dengan nama view yang sesuai
    // Logic to display a list of petugas
 }
}
