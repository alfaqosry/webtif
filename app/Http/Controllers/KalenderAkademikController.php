<?php

namespace App\Http\Controllers;

use App\Models\KalenderAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KalenderAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.kalender-akademik.index', [
            'kalenderAkademiks' => KalenderAkademik::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.kalender-akademik.create');
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
            'tahun' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        KalenderAkademik::create([
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            'file' => $request->file('file')->store('kalender-akademik', 'public'),
        ]);

        return redirect()->route('kalender-akademik.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KalenderAkademik  $kalenderAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(KalenderAkademik $kalenderAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KalenderAkademik  $kalenderAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit(KalenderAkademik $kalenderAkademik)
    {
        return view('belakang.kalender-akademik.edit', ['kalenderAkademik' => $kalenderAkademik]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KalenderAkademik  $kalenderAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KalenderAkademik $kalenderAkademik)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tahun' => 'required',
        ]);

        $file = $kalenderAkademik->file;

        if ($request->hasFile('file')) {
            $this->validate($request, [
                'file' => 'required|file|mimes:pdf',
            ]);

            if (File::exists('storage/'.$kalenderAkademik->file)) {
                File::delete('storage/'.$kalenderAkademik->file);
            }

            $file = $request->file('file')->store('kalender-akademik', 'public');
        }

        $kalenderAkademik->update([
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            'file' => $file,
        ]);

        return redirect()->route('kalender-akademik.index')->with('info', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KalenderAkademik  $kalenderAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy(KalenderAkademik $kalenderAkademik)
    {
        if (File::exists('storage/'.$kalenderAkademik->file)) {
            File::delete('storage/'.$kalenderAkademik->file);
        }

        $kalenderAkademik->delete();

        return redirect()->route('kalender-akademik.index')->with('danger', 'Data berhasil dihapus');
    }
}
