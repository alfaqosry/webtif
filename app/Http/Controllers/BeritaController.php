<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use CyrildeWit\EloquentViewable\Support\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function indexDepan()
    {
        $beritas = Berita::with('kategoris')->orderBy('created_at', 'desc')->paginate(6);
        $populars = Berita::orderByViews('desc', Period::pastMonths(7))
            ->take(10)
            ->get();

        return view('depan.berita', [
            'beritas' => $beritas,
            'populars' => $populars,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::with('kategoris')->orderBy('created_at', 'DESC')->get();

        return view('belakang.berita.index', ['beritas' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Kategori::get();

        return view('belakang.berita.create', [
            'categories' => $categories,
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
            'judul' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        $image = [];
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->store('berita', 'public');
        }

        $berita = Berita::create([
            'judul' => $request->judul,
            'user_id' => auth()->user()->id,
            'slug'  => Str::slug($request->judul),
            'keywords' => $request->keyword,
            'description' => $request->description,
            'isi' => $request->isi,
            'cover' => $image,
        ]);

        if ($request->kategori) {
            $berita->kategoris()->attach($request->kategori);
        } else {
            $berita->kategoris()->attach([6]);
        }

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        views($berita)->cooldown($minutes = 10)->record();

        $populars = Berita::orderByViews('desc', Period::pastMonths(7))
            ->take(10)
            ->get();

        return view('depan.details', [
            'berita' => $berita,
            'populars' => $populars,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        $categories = Kategori::get();

        return view('belakang.berita.edit', [
            'berita' => $berita,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $this->validate($request, [
            'judul' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'isi' => 'required',
        ]);

        $image = $berita->cover;
        if ($request->hasFile('gambar')) {
            if (Storage::exists('storage/'.$berita->cover)) {
                Storage::delete('storage/'.$berita->cover);
            }
            $image = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'slug'  => Str::slug($request->judul),
            'keywords' => $request->keyword,
            'description' => $request->description,
            'isi' => $request->isi,
            'cover' => $image,
        ]);

        if ($request->kategori) {
            $berita->kategoris()->sync($request->kategori);
        }

        return redirect()->route('berita.index')->with('info', 'Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('berita.index')->with('danger', 'Berita berhasil dihapus');
    }
}
