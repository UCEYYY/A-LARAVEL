{{-- resources/views/books/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Buku</h2>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $book->judul) }}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" value="{{ old('penulis', $book->penulis) }}">
            @error('penulis')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ old('penerbit', $book->penerbit) }}">
            @error('penerbit')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
            @error('tahun_terbit')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
