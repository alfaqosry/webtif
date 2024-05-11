<x-templates.depan>
    <x-slot name="appname">Kalender Akademik Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">KALENDER AKADEMIK</x-slot>

    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">

                    {{-- Dokumen RPS Start --}}
                    <embed src="{{ asset('storage/' . $kalender->file) }}" width="100%" height="1000" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                    {{-- Dokumen RPS end --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->

</x-templates.depan>