<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruControllerr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::paginate(5);
        return view ('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('guru.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'id_guru'        => 'required|unique:guru',
        ]);
        // $image = $request->file('img');
        $guru = new Guru();
        $guru->id_guru = $request->id_guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->gender = $request->gender;
        $guru->alamat = $request->alamat;
        $guru->phone = $request->phone;
        $guru->save();
        return redirect('guru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
