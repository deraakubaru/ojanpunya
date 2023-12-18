@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Dashboard</h1>

        <div class="row mt-4">
            <!-- Card for Barang -->
            <div class="col-md-4 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Barang</h5>
                        <p class="card-text">Total: {{ $barangCount }}</p>
                        <a href="{{ route('barangs.index') }}" class="decoration-none text-light">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Card for Pegawai -->
            <div class="col-md-4 mb-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title">Pegawai</h5>
                        <p class="card-text">Total: {{ $pegawaiCount }}</p>
                        <a href="{{ route('pegawais.index') }}" class="decoration-none text-light">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Card for Pinjaman -->
            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Pinjaman</h5>
                        <p class="card-text">Total: {{ $pinjamanCount }}</p>
                        <a href="{{ route('pinjamans.index') }}" class="decoration-none text-light">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
