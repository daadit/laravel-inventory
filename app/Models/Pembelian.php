<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembelian extends Model
{
    use HasFactory;

    public function list()
    {
        return DB::table('pembelian')
            ->select('pembelian.nofaktur AS nofaktur', 'pembelian.tglmasuk AS tglmasuk', 'pembelian.supplier AS idsupplier', 'pembelian.totalitem AS totalitem', 'pembelian.totalbayar AS totalbayar', 'supplier.nama AS namasupplier')
            ->join('supplier', 'supplier.id', '=', 'pembelian.supplier')
            ->get();
    }

    public function detail($nofaktur)
    {
        return DB::table('detailpembelian')
            ->select('detailpembelian.id AS id', 'detailpembelian.nofaktur AS nofaktur', 'detailpembelian.kodebarang AS kodebarang', 'detailpembelian.qty AS qty', 'detailpembelian.jumlah AS jumlah', 'barang.nama AS namabarang', 'barang.hargabeli AS hargabeli')
            ->join('barang', 'detailpembelian.kodebarang', '=', 'barang.kode')
            ->where('detailpembelian.nofaktur', '=', 'MS-20220604010520778')
            ->get();
    }
}
