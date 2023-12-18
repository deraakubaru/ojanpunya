@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Barang</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="quantity">Stok:</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Tambah Barang</button>
        </form>
    </div>
@endsection
