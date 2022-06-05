<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function __construct()
    {
        $this->pembelian = new Pembelian();
        $this->supplier = new Supplier();
        $this->barang = new Barang();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pembelian' => $this->pembelian->list()
        ];
        return view('pembelian', $data);
    }

    public function add()
    {
        $datenow = date('Y-m-d');

        $generateRandom = rand(100, 999);
        $generateDate = date('YmdHis');
        $generatefaktur = 'MS-' . $generateDate . $generateRandom;
        $data = [
            'detail' => $this->pembelian->detail($generatefaktur),
            'supplier' => $this->supplier->list(),
            'barang' => $this->barang->list(),
            'faktur' => $generatefaktur,
            'datenow' => $datenow
        ];
        return view('tambah-pembelian', $data);
    }

    public function tabledetail(Request $request)
    {
        $faktur = Request()->faktur;

        $data = [
            'detail' =>  $this->pembelian->detail($faktur)
        ];

        echo view('ajax.pembelian', $data);
    }
}
