<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Hari_model;
use App\Models\Jadwal_model;
use App\Models\Pelajaran_model;
use App\Models\Siswa;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal_model::select('jadwal.*', 'guru.nama_guru','pelajaran.nama_pelajaran')
                ->join('guru', 'guru.id_guru','=','jadwal.id_guru')
                ->join('pelajaran', 'pelajaran.id','=','jadwal.id_pelajaran')
                ->get();
        return view ('jadwal/index', compact('jadwal'));
    }

    public function create()
    {
        $idguruplh = "";
        $guru = Guru::get();
        $pelajaran = Pelajaran_model::get();
        $hari = Hari_model::get();
       return view ('jadwal/add', compact('guru','idguruplh','pelajaran','hari'));
    }

    public function store(Request $request)
    {  
        $jadwal = new Jadwal_model();
        $jadwal->jam_mulai = $request->jam_mulai;
        $jadwal->hari = $request->HariID;
        $jadwal->id_pelajaran= $request->id_pelajaran;
        $jadwal->id_guru = $request->id_guru;
       // $jadwal->nama_kelas = $request->nama_kelas;
       // $jadwal->img      = $image->hashName();    
        // $Jadwal = new Jadwal_model();
        // $Jadwal->tahunid = $request->tahunid;
        // $Jadwal->id_guru = $request->id_guru;
        // $Jadwal->id_pelajaran = $request->id_pelajaran;
        // $Jadwal->HariID = $request->HariID;
        // $Jadwal->NamaKelas = $request->NamaKelas;
        // $Jadwal->jam_mulai = $request->jam_mulai;
        $jadwal->save();
        return redirect()->route('jadwal.index');        
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        // $Jadwal = Jadwal::find($id);
        // return view('Jadwal.edit', compact('Jadwal'));
    }

    public function update(Request $request, string $id)
    {
        // $Jadwal = Jadwal::find($id);
        // $Jadwal->nama_Jadwal = $request->nama_Jadwal;
        // $Jadwal->tahun = $request->tahun;
        // $Jadwal->update();
        // return redirect()->route('Jadwal.index');
    }


    public function destroy(string $id)
    {
        $jadwal = Jadwal_model::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
    public function cetak_jadwal(){
        $jadwal = Jadwal_model::get();
        return view('jadwal/cetak_jadwal', compact('jadwal'));

    }
    
}
