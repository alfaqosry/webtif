<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.kurikulum.index', [
            'kurikulums' => Kurikulum::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.kurikulum.create');
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
            'semester' => 'required|numeric',
            'kode' => 'required',
            'mata_kuliah' => 'required',
            'sks_teori' => 'required|numeric',
            'sks_praktek' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        Kurikulum::create($request->except('_token'));

        return redirect()->route('kurikulum.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(Kurikulum $kurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurikulum $kurikulum)
    {
        return view('belakang.kurikulum.edit', [
            'kurikulum' => $kurikulum,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        $this->validate($request, [
            'semester' => 'required|numeric',
            'kode' => 'required',
            'mata_kuliah' => 'required',
            'sks_teori' => 'required|numeric',
            'sks_praktek' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        $kurikulum->update($request->except('_token'));

        return redirect()->route('kurikulum.index')->with('info', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurikulum $kurikulum)
    {
        $kurikulum->delete();

        return redirect()->route('kurikulum.index')->with('danger', 'Data berhasil dihapus');
    }
}
