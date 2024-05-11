<x-templates.depan>
    <x-slot name="appname">Testimoni Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">TESTIMONIAL <br /> DOSEN & MAHASISWA</x-slot>

     <!-- Testimonial Start -->
     <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-0">
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

</x-templates.depan>