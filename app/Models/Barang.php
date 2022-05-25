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
        return DB::table('barang')->get();
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
