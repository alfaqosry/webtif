<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JadwalKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = JadwalKuliah::get();

        return view('belakang.jadwal-kuliah.index', [
            'jadwals' => $jadwals,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.jadwal-kuliah.create');
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
            'tahun_ajaran' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        JadwalKuliah::create([
            'nama' => $request->nama,
            'tahun_ajaran' => $request->tahun_ajaran,
            'file' => $request->file('file')->store('jadwal-kuliah', 'public'),
        ]);

        return redirect()->route('jadwal-kuliah.index')->with('success', 'Jadwal kuliah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalKuliah $jadwalKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalKuliah $jadwalKuliah)
    {
        return view('belakang.jadwal-kuliah.edit', [
            'jadwal' => $jadwalKuliah,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalKuliah $jadwalKuliah)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $file = $jadwalKuliah->file;
        if ($request->hasFile('file')) {
            $this->validate($request, [
                'file' => 'required|file|mimes:pdf',
            ]);

            if (File::exists('storage/'.$jadwalKuliah->file)) {
                File::delete('storage/'.$jadwalKuliah->file);
            }

            $file = $request->file('file')->store('jadwal-kuliah', 'public');
        }

        $jadwalKuliah->update([
            'nama' => $request->nama,
            'tahun_ajaran' => $request->tahun_ajaran,
            'file' => $file,
        ]);

        return redirect()->route('jadwal-kuliah.index')->with('info', 'Jadwal kuliah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalKuliah $jadwalKuliah)
    {
        if (File::exists('storage/'.$jadwalKuliah->file)) {
            File::delete('storage/'.$jadwalKuliah->file);
        }

        $jadwalKuliah->delete();

        return redirect()->route('jadwal-kuliah.index')->with('danger', 'Jadwal kuliah berhasil dihapus');
    }
}
