<?php

namespace App\Http\Controllers;

use App\Models\Perkiraan_model;
use Illuminate\Http\Request;

class PerkiraanController extends Controller
{

    public function index()
    {
        $perkiraan = Perkiraan_model::get();
       return view ('admin/perkiraan/index', compact('perkiraan'));
    }


    public function create()
    {
       return view ('admin/perkiraan/tambah');
    }


    public function store(Request $request)
    {
       $perkiraan = new Perkiraan_model();
       $perkiraan->nomor_perkiraan = $request->nomor_perkiraan;
       $perkiraan->nama_perkiraan = $request->nama_perkiraan;
       $perkiraan->tipe = $request->tipe;
       $perkiraan->save();
       return redirect('perkiraan'); 
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $perkiraan = Perkiraan_model::find($id);
        return view ('admin/perkiraan/edit', compact('perkiraan'));
    }


    public function update(Request $request, string $id)
    {
       $perkiraan = Perkiraan_model::find($id);
       $perkiraan->nomor_perkiraan = $request->nomor_perkiraan;
       $perkiraan->nama_perkiraan = $request->nama_perkiraan;
       $perkiraan->tipe = $request->tipe;
       $perkiraan->save();
       return redirect('perkiraan'); 
    }

    public function destroy(string $id)
    {
        $perkiraan = Perkiraan_model::find($id);
        $perkiraan->delete();
        return redirect('perkiraan')->with(' berhasil');
    }

    public function cetak_perkiraan(){
        $perkiraan = Perkiraan_model::get();
        return view('admin/perkiraan/cetak_perkiraan', compact('perkiraan'));
    }
}
