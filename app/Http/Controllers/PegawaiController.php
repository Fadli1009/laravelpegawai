<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Http\Requests\UpdatePegawaiRequest;
use App\Http\Requests\StorePegawaiRequest;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::latest()->get();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.tambah');
    }

    public function store(StorePegawaiRequest $request)
    {
        // dd($request);
        // $attribute = $request->validate();
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(UpdatePegawaiRequest $request, Pegawai $pegawai)
    {
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index');
    }

    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai.index');
    }
}