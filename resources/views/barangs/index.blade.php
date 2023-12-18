@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Data Barang</h1>
        @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
        @endif
        <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-2">Tambah Data Barang</a>
        <table id="barangs-table" class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->name }}</td>
                        <td>{{ $barang->quantity }}</td>
                        <td>
                            <a href="{{ route('barangs.show', $barang->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add the DataTables script -->
    <script>
        $(document).ready(function() {
            $('#barangs-table').DataTable();
        });
    </script>
@endsection
