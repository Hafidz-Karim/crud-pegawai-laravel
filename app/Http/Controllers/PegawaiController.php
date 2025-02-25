<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiPostRequest;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pegawais = Pegawai::all();
       return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PegawaiPostRequest $request)
    {
        //
        $pegawai_baru = new Pegawai();
        $pegawai_baru->nama = $request->nama;
        $pegawai_baru->alamat = $request->alamat;
        $pegawai_baru->gaji = $request->gaji;
        $pegawai_baru->umur = $request->umur;
        $pegawai_baru->phone = $request->phone;
        $pegawai_baru->keterangan = $request->keterangan;
        $pegawai_baru->save();
        return redirect("/pegawai/$pegawai_baru->id");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->umur = $request->umur;
        $pegawai->gaji = $request->gaji;
        $pegawai->phone = $request->phone;
        $pegawai->save();
        return redirect('/pegawai/' .  $pegawai->id);
    }
    // 
    public function delete($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.delete', compact('pegawai'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pegawai = Pegawai::findOrfail($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
