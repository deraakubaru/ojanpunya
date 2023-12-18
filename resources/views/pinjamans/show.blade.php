@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Pinjaman Details</h1>

        <table class="table mt-4">
            <tr>
                <th>ID</th>
                <td>{{ $pinjaman->id }}</td>
            </tr>
            <tr>
                <th>Pegawai</th>
                <td>{{ optional($pinjaman->pegawai)->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>Barang</th>
                <td>{{ optional($pinjaman->barang)->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ optional($pinjaman->user)->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>Borrowed At</th>
                <td>{{ $pinjaman->borrowed_at }}</td>
            </tr>
        </table>

        <a href="{{ route('pinjamans.index') }}" class="btn btn-primary">Back to Pinjaman List</a>
    </div>
@endsection
