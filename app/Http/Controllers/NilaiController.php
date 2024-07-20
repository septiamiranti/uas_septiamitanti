<?php

namespace App\Http\Controllers;

use App\Models\Nilai_model;
use App\Models\Guru;
use App\Models\Pelajaran_model;
use App\Models\Siswa;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai_model::select('nilai.*', 'guru.nama_guru','pelajaran.nama_pelajaran','siswa.nama_siswa','nilai.nilai')
                ->join('guru', 'guru.id_guru','=','nilai.id_guru')
                ->join('pelajaran', 'pelajaran.id','=','nilai.id_pelajaran')
                ->join('siswa', 'siswa.id_siswa', '=', 'nilai.id_siswa')
                ->get();
        return view ('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $idguruplh = "";
        $guru = Guru::get();
        $pelajaran = Pelajaran_model::get();
        $siswa = Siswa::get();
       return view ('nilai.add', compact('guru','pelajaran','siswa'));
    }

    public function store(Request $request)
    {  
        $nilai = new Nilai_model();
        $nilai->id_siswa = $request->id_siswa;
        $nilai->id_pelajaran = $request->id_pelajaran;
        $nilai->id_guru = $request->id_guru;
        $nilai->nilai = $request->nilai;
       
       // $jadwal->img      = $image->hashName();    
        // $Jadwal = new Jadwal_model();
        // $Jadwal->tahunid = $request->tahunid;
        // $Jadwal->id_guru = $request->id_guru;
        // $Jadwal->id_pelajaran = $request->id_pelajaran;
        // $Jadwal->HariID = $request->HariID;
        // $Jadwal->NamaKelas = $request->NamaKelas;
        // $Jadwal->jam_mulai = $request->jam_mulai;
        $nilai->save();
        return redirect()->route('nilai.index');        
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
        $nilai = Nilai_model::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
    public function cetak_nilai(){
        $nilai = Nilai_model::get();
        return view('nilai/cetak', compact('nilai'));
    }
}