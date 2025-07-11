
<!-- filepath: resources/views/books/create.blade.php -->
@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    Judul: <input name="judul" value="{{ old('judul') }}"> @error('judul')<div>{{ $message }}</div>@enderror<br>
    Penulis: <input name="penulis" value="{{ old('penulis') }}"> @error('penulis')<div>{{ $message }}</div>@enderror<br>
    Penerbit: <input name="penerbit" value="{{ old('penerbit') }}"> @error('penerbit')<div>{{ $message }}</div>@enderror<br>
    Tahun Terbit: <input name="tahun_terbit" value="{{ old('tahun_terbit') }}"> @error('tahun_terbit')<div>{{ $message }}</div>@enderror<br>
    <button type="submit">Simpan</button>
</form>
@endsection