<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class JenisController extends Controller
{
    public function __construct()
    {
        $this->jenis = new Jenis();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'jenis' => $this->jenis->list()
        ];
        return view('jenis', $data);
    }
}
