<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    public function __construct()
    {
        $this->stokbarang = new StokBarang();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'stokbarang' => $this->stokbarang->list()
        ];
        return view('stok-barang', $data);
    }

    public function report()
    {
        $tglawal = Request()->tglawal;
        $tglakhir = Request()->tglakhir;

        $data = [
            'stokbarang' => $this->stokbarang->list($tglawal, $tglakhir),
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir
        ];

        return view('reports/report-stok-barang', $data);
    }
}
