<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use illuminate\Http\Request;

class GuruController extends Controller
{
    
    public function index()
    {
        $guru = Guru::paginate(5);
        return view ('guru.index', compact('guru'));
    }

    public function create()
    {
       return view ('guru.add');
    }

    public function store(Request $request)
    {
       dd($request->id_guru);
        // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namaguru'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $guru = new Guru();
        $guru->id_guru = $request->id_guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->gender = $request->gender;
        $guru->alamat = $request->alamat;
        $guru->phone = $request->phone;


        // $guru->jam_mulai = $request->jam_mulai;
        // $guru->hari = $request->hari;
        // $guru->id_pelajaran= $request->id_pelajaran;
        // $guru->nama_guru = $request->nama_guru;
        // $guru->img      = $image->hashName();
        $guru->save();
        return redirect('guru');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $guru = Guru::find($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, string $id)
    {
        $guru = Guru::find($id);
        $guru->nama_guru = $request->nama_guru;
        $guru->save();
        return redirect('guru');
    }

    public function destroy(string $id)
    {
        $product = Guru::findOrFail($id);
        $product->delete();
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}
