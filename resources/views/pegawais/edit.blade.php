@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Edit Pegawai</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" name="nip" class="form-control" value="{{ $pegawai->nip }}" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $pegawai->name }}" required>
            </div>
            <div class="form-group">
                <label for="bidang">Bidang:</label>
                <input type="text" name="bidang" class="form-control" value="{{ $pegawai->bidang }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Pegawai</button>
        </form>
    </div>
@endsection
