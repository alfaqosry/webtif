<x-templates.depan>
    <x-slot name="appname">Sejarah Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">History of Bisnis Digital</x-slot>

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="fw-bold text-primary text-uppercase">Sejarah</h1>
                    </div>
                    <p class="mb-4" style="text-align: justify;">
                         Universitas Pahlawan Tuanku Tambusai merupakan lembaga pendidikan tinggi (perguruan tinggi) yang berada dalam naungan Yayasan Pahlawan Tuanku Tambusai Riau. Kendatipun nama Universitas Pahlawan Tuanku Tambusai baru ada sejak Tahun Akademik 2017, sesuai izin Dikti nomor 97/KPT/I/2017, tertanggal 20 Januari 2017, pada dasarnya Universitas Pahlawan Tuanku Tambusai merupakan penyatuan dari dua Sekolah Tinggi yaitu Sekolah Tinggi Ilmu Kesehatan (STIKes) Tuanku Tambusai (berdiri sejak 2006) dengan Sekolah Tinggi Keguruan dan Ilmu Pendidikan (STKIP) Pahlawan Tuanku Tambusai (berdiri sejak 2012).
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                        STIKes Tuanku Tambusai yang akan menjadi cikal bakal Fakultas Ilmu Kesehatan pada Universitas Pahlawan Tuanku Tambusai sejatinya adalah gabungan dari Akademi Keperawatan (beridiri 1996), Akademi Kebidanan (berdiri 2003), serta S1 Keperawatan (berdiri 2006). Dengan kemauan keras untuk mengembangkan dirinya, maka tahun 2009 mendapatkan izin untuk menyelenggarakan program studi DIV Bidan Pendidik dan berturut-turut izin Program Studi S1 Kesehatan Masyarakat (2011), S1 Gizi (2012) dan Profesi Ners (2014).
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                        Sedangkan STKIP Pahlawan Tuanku Tambusai berdiri pada Tahun 2012 dengan menyelenggarakan Program Studi S1 Pendidikan Guru Sekolah Dasar (2012), S1 Pendidikan Guru Pendidikan Anak Usia Dini (PG-PAUD, 2012), S1 Pendidikan Matematika (2012) dan S1 Pendidikan Bahasa Inggris (2015).
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                        Dengan kemauan dan usaha yang keras dari seluruh stakeholder, maka pada tahun 2017 Yayasan Pahlawan Tuanku Tambusai mendapat kabar baik dengan disetujuinya perubahan bentuk dan penggabungan dari STIKes dan STKIP menjadi Universitas Pahlawan Tuanku Tambusai sekaligus untuk menyelenggarakan tambahan lima Program Studi, yaitu S1 Pendidikan Jasmani Kesehatan dan Rekreasi, S1 Teknik Informatika, S1 Teknik Sipil, S1 Teknik Industri, dan S1 Hukum.
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                         -
                    </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('depan/img/AKPER008.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">Team Leaders</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' . $rektor->image) }}" alt="">
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
                            <h4 class="text-primary">{{ $rektor->nama }}</h4>
                            <p class="text-uppercase m-0">Rektor UP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' . $dekan->image) }}" alt="">
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
                            <h4 class="text-primary">{{ $dekan->nama }}</h4>
                            <p class="text-uppercase m-0">Dekan FEB</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' .  $kaprodi->image) }}" alt="">
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
    <!-- Team End -->

</x-templates.depan>