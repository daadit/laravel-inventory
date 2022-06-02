<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->penjualan = new Penjualan();
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
}
