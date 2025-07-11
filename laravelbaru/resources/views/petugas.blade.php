{{-- resources/views/petugas.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Petugas</h1>

        <a href="" class="btn btn-primary">Tambah Petugas</a>

        @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama Petugas</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>

                @foreach($petugas as $p)
                    <tr>
                        <td>{{ $p->nama_petugas }}</td>
                        <td>{{ $p->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $p->agama }}</td>
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->alamat }}</td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="2">Total Petugas:</td>
                    <td colspan="4">{{ $petugas->count() }}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection