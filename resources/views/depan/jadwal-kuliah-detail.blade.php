<x-templates.depan>
    <x-slot name="appname">Dokumen RPS Mata Kuliah Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">DOKUMEN {{ \Str::upper($jadwal->nama) }}</x-slot>

    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <embed type="application/pdf" src="{{ asset('storage/' . $jadwal->file) }}" width="100%" height="800"></embed>
                </div>
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->

</x-templates.depan>