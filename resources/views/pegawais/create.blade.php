@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Tambah Data Pegawai</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pegawais.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" name="nip" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="bidang">Bidang:</label>
                <input type="text" name="bidang" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Tambah Data Pegawai</button>
        </form>
    </div>
@endsection
