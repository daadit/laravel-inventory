<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->user = new User();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'user' => $this->user->list()
        ];
        return view('user', $data);
    }

    public function save(Request $request)
    {
        // Membuat validasi
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'role' => 'required'
        ]);

        if ($validated->fails()) {
            // Jika validasi gagal
            return redirect('/user')->with('failed-message', 'Data failed to save')->withErrors($validated, 'content');
        } else {
            // Jika validasi berhasil
            $data = [
                'name' => Request()->name,
                'email' => Request()->email,
                'password' => Hash::make(Request()->password),
                'role' => Request()->role
            ];
            $this->user->saveData($data);
            return redirect('/user')->with('success-message', 'Data saved successfully');
        }
    }
}
