<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{ config('app.name') }}
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai" name="keywords">
    <meta content="Program Studi Bisnis Digital diharapkan mampu menciptakan calon sarjana yang mampu menintegrasikan pemahaman dalam ilmu ekonomi dan bisnis (makroekonomi, mikroekonomi, dan ekonometrika) dengan disiplin data science (machine learning, analisis algoritma, artificial inteligent dan internet of things)" name="description">

    <!-- Favicon -->
    <link href="{{ asset('depan/img/logo-up.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    @include('components.partials.css')
    @stack('css-tambahan')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('components.partials.top-header')
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('components.partials.navbar')

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @if ($sliders->count() > 0)
                @foreach ($sliders as $item)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->title }}">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->title }}">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                @endif
                @endforeach
                @else
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('depan/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('depan/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Mahasiswa</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">27</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Akreditasi</h5>
                            <h1 class="mb-0">-</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Dosen</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{ count($dosens) ?? 5 }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Apa itu Program Studi Bisnis Digital ?</h1>
                    </div>
                    <p class="mb-4">
                        Program Studi Bisnis Digital diharapkan mampu menciptakan calon sarjana yang mampu
                        menintegrasikan pemahaman dalam ilmu ekonomi dan bisnis (makroekonomi, mikroekonomi, dan
                        ekonometrika) dengan disiplin data science (machine learning, analisis algoritma, artificial
                        inteligent dan internet of things).
                        Lulusan Bisnis Digital diharapkan memiliki:
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Jiwa Wirausaha Mandiri</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Mampu memberikan nilai tambah
                                bagi ekonomi kreatif berbasis digital di Indonesia</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Memiliki kemampuan untuk
                                membuat strategi‐strategi pengembangan usaha</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Mampu menintegrasikan
                                pemahaman dalam ilmu ekonomi dan bisnis dengan disiplin data science</h5>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Selengkapnya</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('depan/img/wisuda-up.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">PROSPEK KARIR</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        {{-- <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div> --}}
                        <img src="{{ asset('depan/img/undraw_nakamoto_-2-iv6.svg') }}" alt="Digital Enterpreneur"
                            height="50%">
                        <h4 class="mb-3">Digital Enterpreneur</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        {{-- <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div> --}}
                        <img src="{{ asset('depan/img/undraw_project_team_lc5a.svg') }}" alt="Startup Consultant"
                            height="50%">
                        <h4 class="mb-3">Startup Consultant</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        {{-- <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div> --}}
                        <img src="{{ asset('depan/img/undraw_manage_chats_re_0yoj.svg') }}"
                            alt="Digital Business Manager" height="50%">
                        <h4 class="mb-3">Digital Business Manager</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        {{-- <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div> --}}
                        <img src="{{ asset('depan/img/undraw_software_engineer_re_tnjc.svg') }}"
                            alt="Digital Bisnis Aplication Developer" height="50%">
                        <h4 class="mb-3">Digital Bisnis Aplication Developer</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        {{-- <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div> --}}
                        <img src="{{ asset('depan/img/undraw_marketing_re_7f1g.svg') }}"
                            alt="Marketing Digital Analysis" height="50%">
                        <h4 class="mb-3">Marketing Digital Analysis</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        {{-- <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div> --}}
                        <img src="{{ asset('depan/img/undraw_progress_data_re_rv4p.svg') }}" alt="Data Analyst"
                            height="50%">
                        <h4 class="mb-3">Data Analyst</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">DOSEN & MAHASISWA</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach ($testimonis as $item)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $item->image) }}"
                            style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">{{ $item->nama }}</h4>
                            <small class="text-uppercase">{{ $item->pekerjaan }}</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5 text-center">
                        {{ $item->testimoni }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">DOSEN PENGAJAR</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp">
                @foreach ($dosens as $item)
                <div class="testimonial-item bg-light my-4" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;"
                                src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/{{ $item->instagram }}" target="_blank"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.linkedin.com/in/{{ $item->linkdin }}"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a href="{{ route('dosen-staff-show', $item->slug) }}">
                                <h4 class="text-primary">{{ \Str::upper($item->nama) }}</h4>
                            </a>
                            <p class="text-uppercase m-0">{{ \Str::upper($item->jabatan_prodi) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest News</h5>
                <h1 class="mb-0">Berita Terbaru</h1>
            </div>
            <div class="row g-5">
                @foreach ($beritas as $item)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('storage/'.$item->cover) }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">
                                {{ $item->kategoris[0]->name}}
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $item->user->name
                                    }}</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $item->created_at
                                    }}</small>
                            </div>
                            <h4 class="mb-3">
                                {{ $item->judul }}
                            </h4>
                            <p class="mb-0">{!! \Str::limit($item->isi, 250) !!}</p>
                            <a class="text-uppercase" href="{{ route('berita-detail', $item->slug) }}">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Footer Start -->
    @include('components.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('components.partials.javascript')
    @stack('js-tambahan')
</body>

</html>
