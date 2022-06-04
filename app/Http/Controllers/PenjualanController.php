<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->penjualan = new Penjualan();
        $this->supplier = new Supplier();
        $this->barang = new Barang();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'penjualan' => $this->penjualan->list()
        ];
        return view('penjualan', $data);
    }

    public function add()
    {
        $datenow = date('Y-m-d');

        $generateRandom = rand(100, 999);
        $generateDate = date('YmdHis');
        $generatefaktur = 'KL-' . $generateDate . $generateRandom;
        $data = [
            'detail' => $this->penjualan->detail($generatefaktur),
            'supplier' => $this->supplier->list(),
            'barang' => $this->barang->list(),
            'faktur' => $generatefaktur,
            'datenow' => $datenow
        ];
        return view('tambah-penjualan', $data);
    }
}
