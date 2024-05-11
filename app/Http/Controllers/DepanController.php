<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Fasilitas;
use App\Models\ImageBiaya;
use App\Models\JadwalKuliah;
use App\Models\KalenderAkademik;
use App\Models\Kerjasama;
use App\Models\Kurikulum;
use App\Models\Rps;
use App\Models\Slider;
use App\Models\Testimoni;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DepanController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('kategoris')->orderBy('created_at', 'desc')->take(3)->get();
        $dosens = Dosen::where('pejabat_lain', '-')->orwhere('pejabat_lain', 'Kaprodi')->get();
        $testimonis = Testimoni::get();
        $sliders = Slider::where('aktif', 1)->get();

        return view('components.depan', [
            'beritas' => $beritas,
            'dosens' => $dosens,
            'testimonis' => $testimonis,
            'sliders' => $sliders,
        ]);
    }

    public function sejarah()
    {
        $rektor = Dosen::where('pejabat_lain', 'Rektor')->first();
        $dekan = Dosen::where('pejabat_lain', 'Dekan')->first();
        $kaprodi = Dosen::where('pejabat_lain', 'Kaprodi')->first();

        return view('depan.sejarah', [
            'rektor' => $rektor,
            'dekan' => $dekan,
            'kaprodi' => $kaprodi,
        ]);
    }

    public function strukturOrganisasi()
    {
        $dosens = Dosen::where('pejabat_lain', '-')->get();
        $kaprodi = Dosen::where('pejabat_lain', 'Kaprodi')->first();

        return view('depan.struktur', [
            'dosens' => $dosens,
            'kaprodi' => $kaprodi,
        ]);
    }

    public function sambutanKaProdi()
    {
        $kaprodi = Dosen::where('pejabat_lain', 'Kaprodi')->first();

        return view('depan.sambutan', [
            'kaprodi' => $kaprodi,
        ]);
    }

    public function dosenStaff()
    {
        $dosens = Dosen::where('pejabat_lain', '-')->orWhere('pejabat_lain', 'Kaprodi')->get();

        return view('depan.dosen-staff', [
            'dosens' => $dosens,
        ]);
    }

    public function dosenStaffDetail($slug)
    {
        $dosen = Dosen::where('slug', $slug)->first();

        $staffsite = Http::get($dosen->link_staff);
        $htmlString = $staffsite->getBody();
        //add this line to suppress any warnings
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML($htmlString);
        $xpath = new DOMXPath($doc);
        $titles = $xpath->evaluate('//h5/a');
        $uniqueAjar = [];
        foreach ($titles as $key => $title) {
            if (!in_array(Str::upper($title->textContent), $uniqueAjar)) {
                array_push($uniqueAjar, Str::upper($title->textContent));
            }
        }

        $uniqueAjar = collect($uniqueAjar);

        $schoolars = Http::get('https://cse.bth.se/~fer/googlescholar-api/googlescholar.php?user=' . $dosen->google_scholar);
        $schoolars_decode = [];
        if (json_decode($schoolars, true) != null) {
            $schoolars_decode = collect(json_decode($schoolars->getBody(), true)['publications'])->sortByDesc('year');
        }

        return view('depan.dosen-staff-detail', [
            'dosen' => $dosen,
            'uniqueAjars' => $uniqueAjar,
            'schoolars' => $schoolars_decode,
        ]);
    }

    public function rpsDepan()
    {
        $rps = Rps::with('kurikulum')->get();

        return view('depan.dokumen-rps', [
            'rps' => $rps,
        ]);
    }

    public function detailRps(Rps $rps)
    {
        return view('depan.detail-rps', [
            'rps' => $rps,
        ]);
    }

    public function kalenderAkademik()
    {
        $file = KalenderAkademik::orderBy('tahun', 'desc')->first();

        return view('depan.kalender-akademik', [
            'kalender' => $file,
        ]);
    }

    public function jadwalKuliah()
    {
        $datas = JadwalKuliah::orderBy('tahun_ajaran', 'desc')->get();

        return view('depan.jadwal-kuliah', [
            'datas' => $datas,
        ]);
    }

    public function jadwalKuliahDetail(JadwalKuliah $jadwalKuliah)
    {
        return view('depan.jadwal-kuliah-detail', [
            'jadwal' => $jadwalKuliah,
        ]);
    }

    public function fasilitas($item)
    {
        $images = Fasilitas::where('kategori', $item)->get();

        return view('depan.fasilitas', [
            'images' => $images,
            'title' => $item,
        ]);
    }

    public function pendaftaran()
    {
        $data = ImageBiaya::orderBy('created_at', 'desc')->first();

        return view('depan.pendaftaran', [
            'data' => $data,
        ]);
    }

    public function prospekKarir()
    {
        return view('depan.prospek-karir');
    }

    public function testimoni()
    {
        return view('depan.testimoni', [
            'testimonis' => Testimoni::get(),
        ]);
    }

    public function kurikulum()
    {
        $alls = Kurikulum::orderBy('semester', 'asc')->get();
        $mkus = Kurikulum::where('keterangan', 'Mata Kuliah Umum')->orderBy('semester', 'asc')->get();
        $mkfs = Kurikulum::where('keterangan', 'Mata Kuliah Fakultas')->orderBy('semester', 'asc')->get();
        $mkps = Kurikulum::where('keterangan', 'Mata Kuliah Inti')->orderBy('semester', 'asc')->get();

        return view('depan.kurikulum', [
            'alls' => $alls,
            'mkus' => $mkus,
            'mkfs' => $mkfs,
            'mkps' => $mkps,
        ]);
    }

    public function dokumenAkreditasi()
    {
        return view('depan.dokumen-akreditasi');
    }
}
