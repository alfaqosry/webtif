<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Partners and Cooperation</h5>
    </div>
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                @php
                $datas = App\Models\Kerjasama::get();
                @endphp
                @if ($datas->count() > 0)
                @foreach ($datas as $data)
                <img src="{{ asset('storage/' . $data->logo) }}" alt="">
                @endforeach

                @else
                <img src="{{ asset('depan/img/vendor-1.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-2.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-3.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-4.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-5.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-6.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-7.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-8.jpg') }}" alt="">
                <img src="{{ asset('depan/img/vendor-9.jpg') }}" alt="">
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

{{-- Footer --}}
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="{{ route('index') }}" class="navbar-brand">
                        <h1 class="m-0 text-white">Bisnis Digital</h1>
                    </a>
                    <p class="mt-3 mb-4">Menjadi Program Studi Bisnis Digital Yang Berkualitas dan Berdaya Saing melalui
                        Penerapan Teknologi Informasi dan komunikasi (TIK/ICT) di Kawasan Asia Tenggara 2042.</p>
                    {{-- <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Jl. Tuanku Tambusai No.23, Bangkinang, Kec. Bangkinang, Kabupaten Kampar,
                                Riau 28412</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@universitaspahlawan.ac.id</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+62 852 6351 3813</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2"
                                href="https://www.linkedin.com/school/universitas-pahlawan-tuanku-tambusai/"
                                target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="https://www.instagram.com/univpahlawan"
                                target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="https://universitaspahlawan.ac.id/" target="_blank"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Universitas Pahlawan</a>
                            <a class="text-light mb-2" href="https://lpm.universitaspahlawan.ac.id/" target="_blank"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Lembaga Penjamin Mutu</a>
                            <a class="text-light mb-2"
                                href="https://universitaspahlawan.ac.id/lembaga-pengabdian-pengembangan-masyarakat/"
                                target="_blank"><i class="bi bi-arrow-right text-primary me-2"></i>LPPM UP</a>
                            <a class="text-light mb-2" href="https://iro.universitaspahlawan.ac.id/" target="_blank"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Kantor Urusan International</a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About
                                Us</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our
                                Services</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet
                                The Team</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact
                                Us</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="{{ route('index') }}">Bisnis
                            Digital UP</a>. All
                        Rights Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>