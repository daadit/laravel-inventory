<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->barang = new Barang();
        $this->jenis = new Jenis();
        $this->satuan = new Satuan();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'barang' => $this->barang->list(),
            'jenis' => $this->jenis->list(),
            'satuan' => $this->satuan->list()
        ];
        return view('barang', $data);
    }

    public function save(Request $request)
    {
        // Membuat validasi
        $validated = Validator::make($request->all(), [
            'kode' => 'required|max:255',
            'nama' => 'required|max:255',
            'jenis' => 'required|max:255',
            'satuan' => 'required|max:255',
            'stok' => 'required|max:255',
            'hargabeli' => 'required|max:255',
            'hargajual' => 'required|max:255',
            'biayapesan' => 'required|max:255',
            'biayasimpan' => 'required|max:255',
            'leadtime' => 'required|max:255',
        ]);

        if ($validated->fails()) {
            // Jika validasi gagal
            return redirect('/barang')->with('failed-message', 'Data failed to save')->withErrors($validated, 'content');
        } else {
            // Jika validasi berhasil
            $data = [
                'kode' => Request()->kode,
                'nama' => Request()->nama,
                'jenis' => Request()->jenis,
                'satuan' => Request()->satuan,
                'stok' => Request()->stok,
                'hargabeli' => Request()->hargabeli,
                'hargajual' => Request()->hargajual,
                'biayapesan' => Request()->biayapesan,
                'biayasimpan' => Request()->biayasimpan,
                'leadtime' => Request()->leadtime,
            ];
            $this->barang->saveData($data);
            return redirect('/barang')->with('success-message', 'Data saved successfully');
        }
    }

    public function update(Request $request)
    {
        // Membuat validasi
        $validated = Validator::make($request->all(), [
            'kode' => 'required',
            'name' => 'required|max:255'
        ]);

        if ($validated->fails()) {
            return redirect('/barang')->with('failed-message', 'Data failed to update')->withErrors($validated, 'content');
        } else {
            $id = Request()->kode;
            $data = [
                'nama' => Request()->name
            ];
            $this->barang->updateData($id, $data);
            return redirect('/barang')->with('success-message', 'Data updated successfully');
        }
    }

    public function delete()
    {
        $id = Request()->kode;
        $this->barang->deleteData($id);
        return redirect('/barang')->with('success-message', 'Data deleted successfully');
    }

    public function report()
    {
        $data = [
            'barang' => $this->barang->list()
        ];
        return view('reports/report-barang', $data);
    }
}
