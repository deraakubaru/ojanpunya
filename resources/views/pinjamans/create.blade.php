@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Tambah Pinjaman</h1>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('pinjamans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pegawai_id">Pegawai:</label>
                <select name="pegawai_id" class="form-control" required>
                    @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->id }}">{{ $pegawai->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="barang_id">Barang:</label>
                <select name="barang_id" class="form-control" required>
                    @foreach($barangs as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Tambah Pinjaman</button>
        </form>
    </div>
@endsection
