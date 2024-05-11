<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('belakang.dosen.index', [
            'dosens' => Dosen::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.dosen.create');
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
            'nidn' => 'required',
            'email' => 'required',
            'wa' => 'required',
            'jabatan_prodi' => 'required',
            'riwayat_jabatan' => 'required',
            'pejabat_lain' => 'required',
            'pendidikan' => 'required',
            'google_scholar' => 'required',
            'sinta' => 'required',
            'scopus' => 'required',
            'research_gate' => 'required',
            'link_staff' => 'required',
            'link_orchid' => 'required',
            'instagram' => 'required',
            'linkdin' => 'required',
            'website' => 'required',
        ]);

        $image = [];

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('dosen', 'public');
        }

        Dosen::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama.'-'.$request->nidn),
            'nidn' => $request->nidn,
            'email' => $request->email,
            'wa' => $request->wa,
            'jabatan_prodi' => $request->jabatan_prodi,
            'riwayat_jabatan' => $request->riwayat_jabatan,
            'pejabat_lain' => $request->pejabat_lain,
            'pendidikan' => $request->pendidikan,
            'google_scholar' => $request->google_scholar,
            'sinta' => $request->sinta,
            'scopus' => $request->scopus,
            'research_gate' => $request->research_gate,
            'link_staff' => $request->link_staff,
            'link_orchid' => $request->link_orchid,
            'instagram' => $request->instagram,
            'linkdin' => $request->linkdin,
            'website' => $request->website,
            'image' => $image,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        $schoolars = Http::get('https://cse.bth.se/~fer/googlescholar-api/googlescholar.php?user=STETijEAAAAJ');

        $schoolars_decode = collect(json_decode($schoolars->getBody(), true)['publications'])->sortByDesc('year');

        $staffsite = Http::get('https://staff.universitaspahlawan.ac.id/site/lecturerdetail?id=75');
        $htmlString = $staffsite->getBody();
        //add this line to suppress any warnings
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML($htmlString);
        $xpath = new DOMXPath($doc);
        $titles = $xpath->evaluate('//h5/a');
        // $semesters = $xpath->evaluate('//div[@id="prod-class"]//table//tr//td');
        // $ke = 0;
        $uniqueAjar = [];
        foreach ($titles as $key => $title) {
            // $ke = 2+$ke;
            // echo $title->textContent . '<br>' . $semesters[$ke]->textContent . '<br>';
            // $ke = $ke+12;
            if (! in_array($title->textContent, $uniqueAjar)) {
                array_push($uniqueAjar, $title->textContent);
            }
        }
        $uniqueAjar = collect($uniqueAjar);
        dd($uniqueAjar, $schoolars_decode);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('belakang.dosen.edit', [
            'dosen' => $dosen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'wa' => 'required',
            'jabatan_prodi' => 'required',
            'riwayat_jabatan' => 'required',
            'pejabat_lain' => 'required',
            'pendidikan' => 'required',
            'google_scholar' => 'required',
            'sinta' => 'required',
            'scopus' => 'required',
            'research_gate' => 'required',
            'link_staff' => 'required',
            'link_orchid' => 'required',
            'instagram' => 'required',
            'linkdin' => 'required',
            'website' => 'required',
        ]);

        $image = $dosen->image;

        if ($request->hasFile('image')) {
            if (Storage::exists('storage/'.$dosen->image)) {
                Storage::delete('storage/'.$dosen->image);
            }
            $image = $request->file('image')->store('dosen', 'public');
        }

        $dosen->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama.'-'.$request->nidn),
            'nidn' => $request->nidn,
            'email' => $request->email,
            'wa' => $request->wa,
            'jabatan_prodi' => $request->jabatan_prodi,
            'riwayat_jabatan' => $request->riwayat_jabatan,
            'pejabat_lain' => $request->pejabat_lain,
            'pendidikan' => $request->pendidikan,
            'google_scholar' => $request->google_scholar,
            'sinta' => $request->sinta,
            'scopus' => $request->scopus,
            'research_gate' => $request->research_gate,
            'link_staff' => $request->link_staff,
            'link_orchid' => $request->link_orchid,
            'instagram' => $request->instagram,
            'linkdin' => $request->linkdin,
            'website' => $request->website,
            'image' => $image,
        ]);

        return redirect()->route('dosen.index')->with('info', 'Data Dosen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('danger', 'Data Dosen berhasil dihapus');
    }
}
