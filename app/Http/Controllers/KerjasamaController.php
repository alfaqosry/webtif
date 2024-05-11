<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.kerjasama.index', [
            'datas' => Kerjasama::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.kerjasama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tahun' => 'required',
        ]);

        $mou = null;
        if ($request->hasFile('mou')) {
            $this->validate($request, [
                'mou' => 'required|mimes:pdf',
            ]);
            $mou = $request->file('mou')->store('mou', 'public');
        }

        $moa = null;
        if ($request->hasFile('moa')) {
            $this->validate($request, [
                'moa' => 'required|mimes:pdf',
            ]);

            $moa = $request->file('moa')->store('moa', 'public');
        }

        Kerjasama::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $request->file('logo')->store('kerjasama', 'public'),
            'mou' => $mou,
            'moa' => $moa,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('kerjasama.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function show(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerjasama $kerjasama)
    {
        return view('belakang.kerjasama.edit', [
            'data' => $kerjasama
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerjasama $kerjasama)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tahun' => 'required',
        ]);

        $logo = $kerjasama->logo;
        if ($request->hasFile('logo')) {
            $this->validate($request, [
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if (Storage::exists('storage/'.$kerjasama->logo)) {
                Storage::delete('storage/'.$kerjasama->logo);
            }

            $logo = $request->file('logo')->store('kerjasama', 'public');
        }

        $mou = $kerjasama->mou;
        if ($request->hasFile('mou')) {
            $this->validate($request, [
                'mou' => 'required|mimes:pdf',
            ]);

            if (Storage::exists('storage/'.$kerjasama->mou)) {
                Storage::delete('storage/'.$kerjasama->mou);
            }

            $mou = $request->file('mou')->store('mou', 'public');
        }

        $moa = $kerjasama->moa;
        if ($request->hasFile('moa')) {
            $this->validate($request, [
                'moa' => 'required|mimes:pdf',
            ]);

            if (Storage::exists('storage/'.$kerjasama->moa)) {
                Storage::delete('storage/'.$kerjasama->moa);
            }

            $moa = $request->file('moa')->store('moa', 'public');
        }

        $kerjasama->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $logo,
            'mou' => $mou,
            'moa' => $moa,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('kerjasama.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerjasama $kerjasama)
    {
        if (Storage::exists('storage/'.$kerjasama->logo)) {
            Storage::delete('storage/'.$kerjasama->logo);
        }

        if (Storage::exists('storage/'.$kerjasama->mou)) {
            Storage::delete('storage/'.$kerjasama->mou);
        }

        if (Storage::exists('storage/'.$kerjasama->moa)) {
            Storage::delete('storage/'.$kerjasama->moa);
        }

        $kerjasama->delete();

        return redirect()->route('kerjasama.index')->with('success', 'Data berhasil dihapus');
    }
}
