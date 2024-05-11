<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Rps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Rps::with('kurikulum')->get();

        return view('belakang.rps.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kurikulums = Kurikulum::get();

        return view('belakang.rps.create', ['kurikulums' => $kurikulums]);
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
            'kurikulum_id' => 'required',
            'file' => 'required|file|mimes:pdf',
            'tahun_ajaran' => 'required',
        ]);

        Rps::create([
            'kurikulum_id' => $request->kurikulum_id,
            'file' => $request->file('file')->store('rps', 'public'),
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()->route('rps.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function show(Rps $rps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function edit(Rps $rps)
    {
        $kurikulums = Kurikulum::get();

        return view('belakang.rps.edit', ['rps' => $rps, 'kurikulums' => $kurikulums]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rps $rps)
    {
        $this->validate($request, [
            'kurikulum_id' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $file = $rps->file;
        if ($request->hasFile('file')) {
            $this->validate($request, [
                'file' => 'required|file|mimes:pdf',
            ]);

            if (File::exists('storage/'.$rps->file)) {
                File::delete('storage/'.$rps->file);
            }

            $file = $request->file('file')->store('rps', 'public');
        }

        $rps->update([
            'kurikulum_id' => $request->kurikulum_id,
            'file' => $file,
            'tahun_ajaran' => $request->tahun_ajaran,
        ]);

        return redirect()->route('rps.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rps $rps)
    {
        if (File::exists('storage/'.$rps->file)) {
            File::delete('storage/'.$rps->file);
        }

        $rps->delete();

        return redirect()->route('rps.index')->with('success', 'Data berhasil dihapus');
    }
}
