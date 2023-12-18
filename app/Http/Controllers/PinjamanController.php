<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\Barang;
use App\Models\Pegawai;
use App\Models\User;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjamans = Pinjaman::all();
        return view('pinjamans.index', compact('pinjamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        $pegawais = Pegawai::all();
        return view('pinjamans.create', compact('barangs', 'pegawais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'pegawai_id' => 'required',
        ]);

        try {
            if (auth()->check()) {
                $barangId = $request->input('barang_id');
                $pegawaiId = $request->input('pegawai_id');
                $userId = auth()->id();
                // dd($barangId, $pegawaiId, $userId);
                $pinjaman = Pinjaman::create([
                    'barang_id' => $barangId,
                    'pegawai_id' => $pegawaiId,
                    'user_id' => $userId,
                    'borrowed_at' => now(),
                ]);
    
                // If you want to see the ID of the newly created Pinjaman, you can use:
                // dd($pinjaman->id);
    
                return redirect()->route('pinjamans.index')->with('success', 'Pinjaman created successfully!');
            } else {
                // Handle the case where the user is not authenticated
                return redirect()->route('login')->with('error', 'You need to be logged in to create a Pinjaman.');
            }
        } catch (QueryException $e) {
            // Log or dd the exception to see what went wrong
            dd($e);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        return view('pinjamans.show', compact('pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $barangs = Barang::all();
        $pegawais = Pegawai::all();
        return view('pinjamans.edit', compact('pinjaman', 'barangs', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'barang_id' => 'required',
            'pegawai_id' => 'required',
        ]);

        $pinjaman = Pinjaman::findOrFail($id);

        $pinjaman->update([
            'barang_id' => $request->input('barang_id'),
            'pegawai_id' => $request->input('pegawai_id'),
        ]);

        return redirect()->route('pinjamans.index')->with('success', 'Pinjaman updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pinjaman::findOrFail($id)->delete();

        return redirect()->route('pinjamans.index')->with('success', 'Pinjaman deleted successfully!');
    }

    public function findByPegawai($pegawaiId){
        $pinjamans = Pinjaman::byPegawai($pegawaiId)->get();
        return view('pinjamans.index', compact('pinjamans'));
    }

    public function findByBarang($barangId){
        $pinjamans = Pinjaman::byBarang($barangId)->get();
        return view('pinjamans.index', compact('pinjamans'));
    }
}
