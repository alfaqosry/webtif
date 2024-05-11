<x-templates.depan>
    <x-slot name="appname">Informasi Pendaftaran Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">Informasi Pendaftaran</x-slot>

    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    {{-- Dokumen Informasi Pendaftaran Start --}}
                    <embed src="{{ asset('storage/' . $data->image) }}" width="100%" height="100%" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                    {{-- Dokumen Informasi Pendaftaran end --}}
                </div>
            </div>
            <div class="row g-0 mt-5">
                <div class="col-lg12 wow slideInUp bg-light" data-wow-delay="0.6s">
                    <div class="text-center">
                        <h4 class="fw-bold text-primary text-uppercase">Link Pendafatran</h4>
                        Link Pendaftaran : <a href="https://pmb.universitaspahlawan.ac.id" target="_blank">PMB Universitas Pahlawan (pmb.universitaspahlawan.ac.id)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->

</x-templates.depan>