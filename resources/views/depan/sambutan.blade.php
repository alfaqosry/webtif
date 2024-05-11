<x-templates.depan>
    <x-slot name="appname">Kata Sambutan Ketua Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">KATA SAMBUTAN</x-slot>

    <!-- Sambutan Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-0">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h1 class="fw-bold text-primary text-uppercase">Kata Sambutan</h1>
                    </div>
                    <p class="mb-4" style="text-align: justify;">
                        Program Sarjana (S1) Bisnis Digital merupakan program studi baru yang ada di Universitas Pahlawan Tuanku Tambusai dengan nomor SK 429/E/O/2021 tentang izin pembukaan program studi Bisnis Digital.
                    </p>
                    <p class="mb-4" style="text-align: justify;">
                        Dengan dibukanya program studi ini menjadi suatu kebanggan bagi Universitas Pahlawan dalam mendukung Visi nya Kualitas dan Berorientasi Kewirausahaan.
                    </p>
                    <p class="mb-4" style="text-align: justify;">
                        Bisnis Digital memiliki peran yang sangat penting di era teknologi saat ini. Program Studi yang memiliki dua kompetensi (bisnis dan Informtika) ini diharapkan mampu menghasilkan lulusan yang bersaing dan memberikan nilai tambah pada setiap sektor bisnis dan terus adaptif terhadap perubahan lingkungan serta kemajuan teknologi. Selamat bergabung di Prodi Bisnis Digital.
                    </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                            <div class="team-item bg-light rounded wow zoomIn overflow-hidden" data-wow-delay="0.9s">
                                <div class="team-img position-relative overflow-hidden" >
                                    <img class="img-fluid w-100" style="max-height: 30em;" src="{{ asset('storage/' . $kaprodi->image) }}" alt="">
                                    {{-- <div class="team-social">
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                                class="fab fa-twitter fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                                class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                                class="fab fa-instagram fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                                class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div> --}}
                                </div>
                                <div class="text-center py-4">
                                    <h4 class="text-primary">{{ $kaprodi->nama }}</h4>
                                    <p class="text-uppercase m-0">Ketua Program Studi</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sambutan End -->

</x-templates.depan>