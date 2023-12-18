<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'barang_id', 'pegawai_id', 'borrowed_at'];

    protected $dates = ['borrowed_at'];

    public function scopedByPegawai($query, $pegawaiId){
        return $query->where('pegawai_id', $pegawaiId);
    }

    public function scopedByBarang($query, $barangId){
        return $query->where('barang_id', $barangId);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
