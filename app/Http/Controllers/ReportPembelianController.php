<?php

namespace App\Http\Controllers;

use App\Models\ReportPembelian;
use Illuminate\Http\Request;

class ReportPembelianController extends Controller
{
    public function __construct()
    {
        $this->reportpembelian = new ReportPembelian();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('report-pembelian');
    }
}
