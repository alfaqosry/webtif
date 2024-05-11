<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.fasilitas.index', [
            'fasilitas' => Fasilitas::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = [
            'Laboratoium Komputer',
            'Ruang Kelas',
            'Perpustakaan',
            'Laboratorium Bahasa',
            'Taman Digital',
            'Sarana Olahraga',
        ];

        return view('belakang.fasilitas.create', [
            'kategoris' => $kategori,
        ]);
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
            'kategori' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        Fasilitas::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'kategori' => $request->kategori,
            'image' => $request->file('image')->store('fasilitas', 'public'),
        ]);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas)
    {
        $kategori = [
            'Laboratoium Komputer',
            'Ruang Kelas',
            'Perpustakaan',
            'Laboratorium Bahasa',
            'Taman Digital',
            'Sarana Olahraga',
        ];

        return view('belakang.fasilitas.edit', [
            'fasilitas' => $fasilitas,
            'kategoris' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kategori' => 'required',
        ]);

        $image = $fasilitas->image;
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg',
            ]);

            if (Storage::exists('storage/'.$fasilitas->image)) {
                Storage::delete('storage/'.$fasilitas->image);
            }

            $image = $request->file('image')->store('fasilitas', 'public');
        }

        $fasilitas->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'kategori' => $request->kategori,
            'image' => $image,
        ]);

        return redirect()->route('fasilitas.index')->with('info', 'Fasilitas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilitas)
    {
        if (Storage::exists('storage/'.$fasilitas->image)) {
            Storage::delete('storage/'.$fasilitas->image);
        }

        $fasilitas->delete();

        return redirect()->route('fasilitas.index')->with('danger', 'Fasilitas berhasil dihapus');
    }
}
