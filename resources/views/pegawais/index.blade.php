@extends('layouts.app')

@section('content')
    <div class="container mt-4 p-3">
        <h1>Data Pegawai</h1>
        @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
        @endif
        <a href="{{ route('pegawais.create') }}" class="btn btn-primary mb-2 justify-content-end">Tambah Data Pegawai</a>
        <table id="pegawais-table" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Name</th>
                    <th>Bidang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawais as $pegawai)
                    <tr>
                        <td>{{ $pegawai->id }}</td>
                        <td>{{ $pegawai->nip }}</td>
                        <td>{{ $pegawai->name }}</td>
                        <td>{{ $pegawai->bidang }}</td>
                        <td>
                            <a href="{{ route('pegawais.show', $pegawai->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('pegawais.edit', $pegawai->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pegawais.destroy', $pegawai->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ?')">Delete</button>
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
            $('#pegawais-table').DataTable();
        });
    </script>
@endsection
