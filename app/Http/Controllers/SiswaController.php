<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::get();
        return view ('siswa.index', compact('siswa'));
        // )->with([
        //     'siswa' => Siswa::all()
        // ]
    
    }

    
    public function create()
    {
        return view ('siswa.add');
    }

    
    public function store(Request $request)
    {
       $validate =$request->validate(['id_siswa' => 'required']);
       $siswa = new Siswa;
       $siswa->id_siswa     = $request->id_siswa;
       $siswa->nama_siswa   = $request->nama_siswa;
       $siswa->alamat       = $request->alamat;
       $siswa->phone        = $request->phone;
       $siswa->gender       = $request->gender;
       $siswa->save();
       return redirect('siswa')->with('msg', 'Add Sukses');

    }
    public function show(string $id)
    {

   // public function edit($siswa, $id_siswa)
    // {        
        // echo $id_siswa;
       // $siswa = $siswa->find($id_siswa);
       // return view('siswa.edit')->with([
           // 'id_siswa'      => $id_siswa,
           // 'nama_siswa'    => $data->nama_siswa,
            //'alamat'        => $data->alamat,
            //'gender'        => $data->gender,
            //'phone'         => $data->phone,            
       // ]);

        $siswa = Siswa_model::find($id);
        return view ('siswa.edit', compact('siswa'));
        
    }

    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        $data = $siswa->find($request->id_siswa);
        $data->nama_siswa   = $request->nama_siswa;
        $data->alamat       = $request->alamat;
        $data->phone        = $request->phone;
        $data->gender       = $request->gender;
        $data->save();
        return redirect('siswa')->with('msg', 'Edit'. $data->nama_siswa.' berhasil');
    }

     public function destroy(Siswa $siswa, $id_siswa)
     {
         $data = $siswa->find($id_siswa);    
         $data->delete();
         return redirect('siswa')->with('msg', 'Hapus'. $data->nama_siswa.' berhasil');
     }

    public function cetak_siswa(){
        $siswa = Siswa::get();
        return view ('siswa.cetak_siswa', compact('siswa'));
    }
}
