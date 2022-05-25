<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->barang = new Barang();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'barang' => $this->barang->list()
        ];
        return view('barang', $data);
    }

    public function save(Request $request)
    {
        // Membuat validasi
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validated->fails()) {
            // Jika validasi gagal
            return redirect('/barang')->with('failed-message', 'Data failed to save')->withErrors($validated, 'content');
        } else {
            // Jika validasi berhasil
            $data = [
                'nama' => Request()->name,
            ];
            $this->barang->saveData($data);
            return redirect('/barang')->with('success-message', 'Data saved successfully');
        }
    }

    public function update(Request $request)
    {
        // Membuat validasi
        $validated = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required|max:255'
        ]);

        if ($validated->fails()) {
            return redirect('/barang')->with('failed-message', 'Data failed to update')->withErrors($validated, 'content');
        } else {
            $id = Request()->id;
            $data = [
                'nama' => Request()->name
            ];
            $this->barang->updateData($id, $data);
            return redirect('/barang')->with('success-message', 'Data updated successfully');
        }
    }

    public function delete()
    {
        $id = Request()->id;
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
