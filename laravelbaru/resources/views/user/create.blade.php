
{{-- filepath: d:\A LARAVEL\laravelbaru\resources\views\user\create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah User Baru</h2>
    <form action="{{ route('user.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" required>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-select" required>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
                <option value="user">User</option>
            </select>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="" class="btn btn-secondary">Kembali</a>