@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Barang</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $barang->name }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" class="form-control" value="{{ $barang->quantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Barang</button>
        </form>
    </div>
@endsection
