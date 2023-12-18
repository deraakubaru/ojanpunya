@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Edit Pinjaman</h1>
        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('pinjamans.update', $pinjaman->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="barang_id">Barang:</label>
                <select name="barang_id" class="form-control" required>
                    @foreach($barangs as $barang)
                        <option value="{{ $barang->id }}" {{ $pinjaman->barang_id == $barang->id ? 'selected' : '' }}>{{ $barang->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pegawai_id">Pegawai:</label>
                <select name="pegawai_id" class="form-control" required>
                    @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->id }}" {{ $pinjaman->pegawai_id == $pegawai->id ? 'selected' : '' }}>{{ $pegawai->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Pegawai</button>
        </form>
    </div>
@endsection
