<x-templates.depan>
    <x-slot name="appname">{{ $berita->judul }} - Berita Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">BERITA TERBARU</x-slot>

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('storage/' . $berita->cover) }}" alt="{{ $berita->judul }}">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $berita->user->name }}</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $berita->updated_at }}</small>

                            &nbsp; &nbsp; 
                            <small><i class="fa fa-tag text-primary me-2"></i>
                                @foreach ($berita->kategoris as $item)
                                    {{ $item->name }},
                                @endforeach
                            </small>
                        </div>
                        <h1 class="mb-4">{{ $berita->judul }}</h1>
                        

                        {!! $berita->isi !!}
                    </div>
                    <!-- Blog Detail End -->
    
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Popular Post</h3>
                        </div>
                        @foreach ($populars as $item)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('storage/' . $item->cover) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{ route('berita-detail', $item->slug) }}" class="h6 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                                    {{ \Str::limit($item->judul, 60) }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('depan/img/blog-1.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    {{-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div> --}}
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

</x-templates.depan>