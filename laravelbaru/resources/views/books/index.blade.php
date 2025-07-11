{{-- resources/views/books/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Buku</h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary">Tambah Buku</a>

        @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                    <tr>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->tahun_terbit }}</td>
                        <td>
                            <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada buku tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
