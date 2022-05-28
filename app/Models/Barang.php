<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Barang extends Model
{
    use HasFactory;

    public function list()
    {
        return DB::table('barang')
            ->select('barang.kode AS kode', 'barang.nama AS namabarang', 'jenis.nama AS namajenis', 'barang.stok AS stok', 'satuan.nama AS namasatuan')
            ->join('jenis', 'jenis.id', '=', 'jenis')
            ->join('satuan', 'satuan.id', '=', 'satuan')
            ->get();
    }

    public function saveData($data)
    {
        DB::table('barang')->insert($data);
    }

    public function updateData($id, $data)
    {
        DB::table('barang')
            ->where('id', '=', $id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('barang')
            ->where('id', '=', $id)
            ->delete();
    }
}
