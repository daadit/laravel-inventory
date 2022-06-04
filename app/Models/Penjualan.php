<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penjualan extends Model
{
    use HasFactory;

    public function list()
    {
        return DB::table('penjualan')
            ->select('penjualan.nofaktur AS nofaktur', 'penjualan.tglkeluar AS tglkeluar', 'penjualan.totalitem AS totalitem', 'penjualan.totalbayar AS totalbayar')
            ->get();
    }

    public function detail($nofaktur)
    {
        return DB::table('detailpenjualan')
            ->select('detailpenjualan.id AS id', 'detailpenjualan.nofaktur AS nofaktur', 'detailpenjualan.kodebarang AS kodebarang', 'detailpenjualan.qty AS qty', 'detailpenjualan.jumlah AS jumlah', 'barang.nama AS namabarang', 'barang.hargabeli AS hargabeli')
            ->join('barang', 'detailpenjualan.kodebarang', '=', 'barang.kode')
            ->where('detailpenjualan.nofaktur', '=', 'KL-20220604010520778')
            ->get();
    }
}
