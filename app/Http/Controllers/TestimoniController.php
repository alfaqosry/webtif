<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.testimoni.index', [
            'datas' => Testimoni::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.testimoni.create');
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
            'pekerjaan' => 'required',
            'testimoni' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        Testimoni::create([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'testimoni' => $request->testimoni,
            'image' => $request->file('image')->store('testimoni', 'public'),
        ]);

        return redirect()->route('testimoni.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        return view('belakang.testimoni.edit', [
            'data' => $testimoni,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $this->validate($request, [
            'nama' => 'required',
            'pekerjaan' => 'required',
            'testimoni' => 'required',
        ]);

        $image = $testimoni->image;

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            if (Storage::exists('storage/'.$testimoni->image)) {
                Storage::delete('storage/'.$testimoni->image);
            }

            $image = $request->file('image')->store('testimoni', 'public');
        }

        $testimoni->update([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'testimoni' => $request->testimoni,
            'image' => $image,
        ]);

        return redirect()->route('testimoni.index')->with('info', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        if (Storage::exists('storage/'.$testimoni->image)) {
            Storage::delete('storage/'.$testimoni->image);
        }

        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('danger', 'Data berhasil dihapus');
    }
}
