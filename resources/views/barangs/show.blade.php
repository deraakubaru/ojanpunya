@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Barang Details</h1>

        <table class="table mt-4">
            <tr>
                <th>ID</th>
                <td>{{ $barang->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $barang->name }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ $barang->quantity }}</td>
            </tr>
            <!-- Add other details as needed -->
        </table>

        <a href="{{ route('barangs.index') }}" class="btn btn-primary">Back to Barang List</a>
    </div>
@endsection
