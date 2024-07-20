<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa_model;

class SiswaController extends Controller
{
    public function tampilsiswa()
    {
        return view('tampilsiswa');
    }

    public function tambahsiswa()
    {
        return view('tambahsiswa');
    }

    public function simpansiswa(Request $request)
    {
        $santri = Siswa_model::create([
            'nama_siswa' => $request->nama_siswa,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
        ]);

        return redirect()->route('tampilsiswa');
    }
}