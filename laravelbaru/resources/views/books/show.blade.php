{{-- resources/views/books/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Buku</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->judul }}</h5>
            <p class="card-text"><strong>Penulis:</strong> {{ $book->penulis }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
            <p class="card-text"><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
