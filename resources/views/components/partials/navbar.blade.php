<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{ route('index') }}" class="navbar-brand p-0">
        <h1 class="m-0">
            <!-- Digital Bisnis -->
            <img src="{{ asset('depan/img/logo-qe.png') }}" alt="">
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
                    <a href="{{ route('visi-misi') }}" class="dropdown-item">Visi & Misi</a>
                    <a href="{{ route('tujuan-keunggulan') }}" class="dropdown-item">Tujuan & Keunggulan</a>
                    <a href="{{ route('struktur-organisasi') }}" class="dropdown-item">Struktur Organisasi</a>
                    <a href="{{ route('sambutan') }}" class="dropdown-item">Sambutan Ketua Prodi Bisnis Digital</a>
                    <a href="{{ route('dosen-staff') }}" class="dropdown-item">Staff & Dosen Pengajar</a>
                    <a href="{{ route('pendekatan-perkuliahan') }}" class="dropdown-item">Pendekatan Perkuliahan</a>
                    <a href="{{ route('prestasi-unit') }}" class="dropdown-item">Prestasi Unit Kerja</a>
                    <a href="{{ route('dokumen-akreditasi') }}" class="dropdown-item">Dokumen Akreditasi</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pendidikan</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('capaian-pembelajaran') }}" class="dropdown-item">Capaian Pembelajaran</a>
                    <a href="{{ route('kurikulum') }}" class="dropdown-item">Kurikulum Program Studi</a>
                    <a href="{{ route('dokumen-rps') }}" class="dropdown-item">RPS Mata Kuliah</a>
                    <a href="{{ route('kalender-akademik') }}" class="dropdown-item">Kalender Akademik</a>
                    <a href="{{ route('jadwal-kuliah') }}" class="dropdown-item">Jadwal Kuliah</a>
                    <a href="#" class="dropdown-item">Program MBKM</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                {{-- <a href="https://universitaspahlawan.ac.id/tentang-universitas-pahlawan-tuanku-tambusai/11697-2/" target="_blank" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fasilitas</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('fasilitas', 'Laboratoium Komputer') }}" class="dropdown-item">Laboratorium Komputer</a>
                    <a href="{{ route('fasilitas', 'Ruang Kelas') }}" class="dropdown-item">Ruang Kelas</a>
                    <a href="{{ route('fasilitas', 'Perpustakaan') }}" class="dropdown-item">Perpustakaan</a>
                    <a href="{{ route('fasilitas', 'Laboratorium Bahasa') }}" class="dropdown-item">Laboratorium Bahasa</a>
                    <a href="{{ route('fasilitas', 'Taman Digital') }}" class="dropdown-item">Taman Digital</a>
                    <a href="{{ route('fasilitas', 'Sarana Olahraga') }}" class="dropdown-item">Sarana Olahraga</a>
                </div> --}}
                <a href="https://universitaspahlawan.ac.id/tentang-universitas-pahlawan-tuanku-tambusai/11697-2/" target="_blank" class="nav-link" >Fasilitas</a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('berita-depan') }}" class="dropdown-item">Berita</a>
                    <a href="{{ route('pendaftaran') }}" class="dropdown-item">Pendaftaran</a>
                    <a href="{{ route('prospek-karir') }}" class="dropdown-item">Prospek Karir</a>
                    <a href="#" class="dropdown-item">Beasiswa</a>
                    <a href="#" class="dropdown-item">Kesehatan</a>
                    <a href="#" class="dropdown-item">Download Dokumen</a>
                    <a href="{{ route('testimoni') }}" class="dropdown-item">Testimoni Dosen & Mahasiswa</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kemahasiswaan</a>
                <div class="dropdown-menu m-0">
                    <a href="https://universitaspahlawan.ac.id/pusat-inkubasi/" target="_blank" class="dropdown-item">Pusat Inkubasi Bisnis</a>
                    <a href="https://pusat-pelatihan.universitaspahlawan.ac.id/" target="_blank" class="dropdown-item">Pusat Pelatihan dan Kewirausahaan</a>
                    {{-- <a href="#" class="dropdown-item">UKM Kewirausahaan</a>
                    <a href="#" class="dropdown-item">UKM PKM</a>
                    <a href="#" class="dropdown-item">UKM Olahraga</a>
                    <a href="#" class="dropdown-item">UKM Mapala</a>
                    <a href="#" class="dropdown-item">UKM Usaha Kecil Menengah</a>
                    <a href="#" class="dropdown-item">UKM Energi Terbarukan</a> --}}
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kerjasama</a>
                <div class="dropdown-menu m-0">
                    <a href="https://iro.universitaspahlawan.ac.id/interactive-maps/" target="_blank" class="dropdown-item">Kerjasama Universitas Negeri</a>
                    <a href="#" class="dropdown-item">Kerjasama Industri</a>
                </div>
            </div>
            <a href="https://pmb.universitaspahlawan.ac.id/" target="_blank" class="nav-item nav-link">DAFTAR</a>
        </div>
    </div>
</nav>
