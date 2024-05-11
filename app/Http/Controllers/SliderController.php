<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.sliders.index', [
            'datas' => Slider::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.sliders.create');
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
            'title' => 'required',
            'aktif' => 'required',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        Slider::create([
            'title' => $request->title,
            'aktif' => $request->aktif,
            'path' => $request->file('path')->store('sliders', 'public'),
        ]);

        return redirect()->route('slider.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('belakang.sliders.edit', [
            'data' => $slider,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $image = $slider->path;
        if ($request->hasFile('path')) {
            $this->validate($request, [
                'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            if (Storage::exists('storage/'.$slider->path)) {
                Storage::delete('storage/'.$slider->path);
            }

            $image = $request->file('path')->store('sliders', 'public');
        }
        
        $slider->update([
            'title' => $request->title ?? $slider->title,
            'aktif' => $request->aktif ?? $slider->aktif,
            'path' => $image,
        ]);

        return redirect()->route('slider.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if (Storage::exists('storage/'.$slider->path)) {
            Storage::delete('storage/'.$slider->path);
        }

        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Data berhasil dihapus');
    }
}
