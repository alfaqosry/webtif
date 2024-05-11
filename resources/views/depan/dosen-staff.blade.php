<x-templates.depan>
    <x-slot name="appname">Dosen dan Staff Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">DOSEN & STAFF</x-slot>

    <!-- Team Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">Dosen & Staff</h1>
            </div>
            <div class="row g-5">
                @foreach ($dosens as $item)
                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/{{ $item->instagram }}" target="_blank"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com/in/{{ $item->linkdin }}"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a href="{{ route('dosen-staff-show', $item->slug) }}"><h4 class="text-primary">{{ \Str::upper($item->nama) }}</h4></a>
                            <p class="text-uppercase m-0">{{ \Str::upper($item->jabatan_prodi) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Team End -->

</x-templates.depan>