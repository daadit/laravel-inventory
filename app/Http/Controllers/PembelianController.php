<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function __construct()
    {
        $this->pembelian = new Pembelian();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pembelian' => $this->pembelian->list()
        ];
        return view('pembelian', $data);
    }
}
