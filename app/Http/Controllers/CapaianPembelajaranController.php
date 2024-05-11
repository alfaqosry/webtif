<?php

namespace App\Http\Controllers;

use App\Models\CapaianPembelajaran;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CapaianPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastUrl = request()->segment(count(request()->segments()));

        $kategori = '';
        $name = '';
        if ($lastUrl == 'sikap') {
            $kategori = 'sikap';
            $name = 'Sikap';
        } elseif ($lastUrl == 'pengetahuan') {
            $kategori = 'pengetahuan';
            $name = 'Pengetahuan';
        } elseif ($lastUrl == 'ketum') {
            $kategori = 'keterampilan umum';
            $name = 'Keterampilan Umum';
        } elseif ($lastUrl == 'ketkhus') {
            $kategori = 'keterampilan khusus';
            $name = 'Keterampilan Khusus';
        } else {
            return redirect()->route('home');
        }

        $capaianPembelajaran = CapaianPembelajaran::where('kategori', $kategori)->orderBy('kode_capaian', 'asc')->get();

        return view('belakang.capaian-pembelajaran.index', [
            'capaianPembelajarans' => $capaianPembelajaran,
            'name'  => $name,
            'lastUrl'  => $lastUrl,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lastUrl = request()->segment(count(request()->segments()) - 1);

        $kategori = '';
        $name = '';
        if ($lastUrl == 'sikap') {
            $kategori = 'sikap';
            $name = 'Sikap';
        } elseif ($lastUrl == 'pengetahuan') {
            $kategori = 'pengetahuan';
            $name = 'Pengetahuan';
        } elseif ($lastUrl == 'ketum') {
            $kategori = 'keterampilan umum';
            $name = 'Keterampilan Umum';
        } elseif ($lastUrl == 'ketkhus') {
            $kategori = 'keterampilan khusus';
            $name = 'Keterampilan Khusus';
        } else {
            return redirect()->route('home');
        }

        return view('belakang.capaian-pembelajaran.create', [
            'name'  => $name,
            'kategori' => $kategori,
            'lastUrl'  => $lastUrl,
            'name'  => $name,
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
        $lastUrl = request()->segment(count(request()->segments()) - 1);

        $this->validate($request, [
            'kode_capaian' => Rule::unique('capaian_pembelajarans', 'kode_capaian')->where('tahun_pembuatan', $request->tahun_pembuatan),
            'nama_capaian' => 'required',
            'kategori' => 'required',
            'tahun_pembuatan' => 'required',
        ]);

        CapaianPembelajaran::create([
            'kode_capaian' => $request->kode_capaian,
            'nama_capaian' => $request->nama_capaian,
            'kategori' => $request->kategori,
            'tahun_pembuatan' => $request->tahun_pembuatan,
        ]);

        return redirect()->route('capaian-pembelajaran.index', [$lastUrl])->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sikaps = CapaianPembelajaran::where('kategori', 'sikap')->orderByRaw('LENGTH(kode_capaian) asc')->orderBy('kode_capaian', 'asc')->get();

        $pengetahuans = CapaianPembelajaran::where('kategori', 'pengetahuan')->orderByRaw('LENGTH(kode_capaian) asc')->orderBy('kode_capaian', 'asc')->get();

        $ketums = CapaianPembelajaran::where('kategori', 'keterampilan umum')->orderByRaw('LENGTH(kode_capaian) asc')->orderBy('kode_capaian', 'asc')->get();

        $ketkhus = CapaianPembelajaran::where('kategori', 'keterampilan khusus')->orderByRaw('LENGTH(kode_capaian) asc')->orderBy('kode_capaian', 'asc')->get();

        return view('depan.capaian-pembelajaran', [
            'sikaps' => $sikaps,
            'pengetahuans' => $pengetahuans,
            'ketums' => $ketums,
            'ketkhus' => $ketkhus,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($lastUrl, $id)
    {
        $data = CapaianPembelajaran::find($id);

        $kategori = '';
        $name = '';
        if ($lastUrl == 'sikap') {
            $kategori = 'sikap';
            $name = 'Sikap';
        } elseif ($lastUrl == 'pengetahuan') {
            $kategori = 'pengetahuan';
            $name = 'Pengetahuan';
        } elseif ($lastUrl == 'ketum') {
            $kategori = 'keterampilan umum';
            $name = 'Keterampilan Umum';
        } elseif ($lastUrl == 'ketkhus') {
            $kategori = 'keterampilan khusus';
            $name = 'Keterampilan Khusus';
        } else {
            return redirect()->route('home');
        }

        return view('belakang.capaian-pembelajaran.edit', [
            'data' => $data,
            'lastUrl' => $lastUrl,
            'kategori' => $kategori,
            'name'  => $name,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cpl, $id)
    {
        $this->validate($request, [
            'kode_capaian' => Rule::unique('capaian_pembelajarans', 'kode_capaian')->where('tahun_pembuatan', $request->tahun_pembuatan)->ignore($id),
            'nama_capaian' => 'required',
            'kategori' => 'required',
            'tahun_pembuatan' => 'required',
        ]);

        CapaianPembelajaran::where('id', $id)->update([
            'kode_capaian' => $request->kode_capaian,
            'nama_capaian' => $request->nama_capaian,
            'kategori' => $request->kategori,
            'tahun_pembuatan' => $request->tahun_pembuatan,
        ]);

        return redirect()->route('capaian-pembelajaran.index', [$cpl])->with('info', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($cpl, $id)
    {
        CapaianPembelajaran::destroy($id);

        return redirect()->route('capaian-pembelajaran.index', [$cpl])->with('danger', 'Data berhasil dihapus');
    }
}
