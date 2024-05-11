<?php

namespace App\Http\Controllers;

use App\Models\ImageBiaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageBiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.info-pendaftaran.index', [
            'infos' => ImageBiaya::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.info-pendaftaran.create');
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
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        ImageBiaya::create([
            'nama' => $request->nama,
            'image' => $request->file('image')->store('info-pendaftaran', 'public'),
        ]);

        return redirect()->route('informasi-pendaftaran.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageBiaya  $imageBiaya
     * @return \Illuminate\Http\Response
     */
    public function show(ImageBiaya $imageBiaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageBiaya  $imageBiaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imageBiaya = ImageBiaya::findOrFail($id);

        return view('belakang.info-pendaftaran.edit', [
            'imageBiaya' => $imageBiaya,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageBiaya  $imageBiaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);

        $imageBiaya = ImageBiaya::findOrFail($id);

        $image = $imageBiaya->image;
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|file|image|mimes:jpeg,png,jpg',
            ]);

            if (Storage::exists('storage/'.$imageBiaya->image)) {
                Storage::delete('storage/'.$imageBiaya->image);
            }

            $image = $request->file('image')->store('info-pendaftaran', 'public');
        }

        $imageBiaya->update([
            'nama' => $request->nama,
            'image' => $image,
        ]);

        return redirect()->route('informasi-pendaftaran.index')->with('info', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageBiaya  $imageBiaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imageBiaya = ImageBiaya::findOrFail($id);
        if (Storage::exists('storage/'.$imageBiaya->image)) {
            Storage::delete('storage/'.$imageBiaya->image);
        }
        $imageBiaya->delete();

        return redirect()->route('informasi-pendaftaran.index')->with('danger', 'Data berhasil dihapus');
    }
}
