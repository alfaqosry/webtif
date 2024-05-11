<x-templates.depan>
    <x-slot name="appname">Berita Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">BERITA TERBARU</x-slot>

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($beritas as $item)
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('storage/' . $item->cover) }}" alt="{{ $item->judul }}">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">
                                        {{ $item->kategoris[0]->name}}
                                    </a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $item->user->name }}</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $item->updated_at }}</small>
                                    </div>
                                    <h4 class="mb-3">{{ $item->judul }}</h4>
                                    <p class="mb-0">{!! \Str::limit($item->isi, 300)  !!}</p>
                                    <a class="text-uppercase" href="{{ route('berita-detail', $item->slug) }}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            {!! $beritas->links() !!}
                        </div>
                    </div>
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
                                <img class="img-fluid" src="{{ asset('storage/'. $item->cover) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
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
    
                    {{-- <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
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
                    </div>
                    <!-- Tags End --> --}}
    
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