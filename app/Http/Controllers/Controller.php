<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Barang;
use App\Models\Pegawai;
use App\Models\Pinjaman;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard()
{
    $barangCount = Barang::count();
    $pegawaiCount = Pegawai::count();
    $pinjamanCount = Pinjaman::count();

    return view('dashboard', compact('barangCount', 'pegawaiCount', 'pinjamanCount'));
}

}
