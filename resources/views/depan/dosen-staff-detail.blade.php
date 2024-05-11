<x-templates.depan>
    <x-slot name="appname">Dosen {{ $dosen->nama }} Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai
    </x-slot>
    <x-slot name="keywords">{{ $dosen->nama }}</x-slot>
    <x-slot name="description">{{ $dosen->nama }}</x-slot>
    <x-slot name="title">DOSEN {{ \Str::upper($dosen->nama) }}</x-slot>

    <!-- Team Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">{{ \Str::upper($dosen->nama) }}</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;"
                                src="{{ asset('storage/' . $dosen->image) }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.instagram.com/{{ $dosen->instagram }}" target="_blank"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                    href="https://www.linkedin.com/in/{{ $dosen->linkdin }}"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ \Str::upper($dosen->nama) }}</h4>
                            <p class="text-uppercase m-0">{{ \Str::upper($dosen->jabatan_prodi) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden table-responsive">
                        <h4 class="text-uppercase">Biodata</h4>
                        <table class="table table-responsive bg-light" id="table-biodata">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ \Str::upper($dosen->nama) }}</td>
                            </tr>
                            <tr>
                                <td>NIDN</td>
                                <td>:</td>
                                <td>{{ $dosen->nidn }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ \Str::upper($dosen->jabatan_prodi) }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td>{!! $dosen->pendidikan !!}</td>
                            </tr>
                            <tr>
                                <td>Sinta</td>
                                <td>:</td>
                                <td>
                                    <a href="https://sinta3.kemdikbud.go.id/authors/profile/{{ $dosen->sinta }}"
                                        target="_blank">
                                        <img src="{{ asset('depan/img/sinta_logo.png') }}" height="20px;"
                                            alt="{{ $dosen->nama }}">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Scopus</td>
                                <td>:</td>
                                <td>
                                    <a href="https://www.scopus.com/authid/detail.uri?authorId={{ $dosen->scopus }}"
                                        target="_blank">
                                        <img src="{{ asset('depan/img/scopus-logo.png') }}" height="20px;"
                                            alt="{{ $dosen->nama }}">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Google Scholar</td>
                                <td>:</td>
                                <td>
                                    <a href="https://scholar.google.com/citations?user={{ $dosen->google_scholar }}"
                                        target="_blank">
                                        <img src="{{ asset('depan/img/google-scoler-logo.png') }}" height="20px;"
                                            alt="{{ $dosen->nama }}">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>ResearchGate</td>
                                <td>:</td>
                                <td>
                                    <a href="https://www.researchgate.net/profile/{{ $dosen->research_gate }}"
                                        target="_blank">
                                        <img src="{{ asset('depan/img/rg-logo.png') }}" height="30px;"
                                            alt="{{ $dosen->nama }}">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Orcid</td>
                                <td>:</td>
                                <td>
                                    <a href="https://orcid.org/{{ $dosen->link_orchid }}" target="_blank">
                                        <img src="{{ asset('depan/img/orcid_logo.png') }}" height="30px;"
                                            alt="{{ $dosen->nama }}">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>:</td>
                                <td>
                                    <a href="https://{{ $dosen->website }}" target="_blank">{{ $dosen->website }}</a>
                                </td>
                            </tr>
                        </table>

                        <br /> <br />
                        <h4 class="text-uppercase text-center">Pengajaran</h4>
                        <table class="table table-responsive bg-light" id="table-pengajaran">
                            <thead>
                                <tr>
                                    <td class="text-center">NO</td>
                                    <td>Mata Kuliah</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uniqueAjars as $pengajaran)
                                <tr>
                                    <td style="width: 10%;" class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $pengajaran }}</td>
                                </tr>
                                @endforeach
                                @if (count($uniqueAjars) == 0)
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <i>Tidak ada data</i>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <h4 class="text-uppercase text-center mt-2">Penelitian</h4>
                        <table class="table table-responsive bg-light" id="table-penelitian">
                            <thead>
                                <tr>
                                    <td class="text-center">NO</td>
                                    <td>Judul</td>
                                    <td>Author</td>
                                    <td>Venue</td>
                                    <td>Year</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schoolars as $penelitian)
                                <tr>
                                    <td style="width: 5%;" class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $penelitian['title'] }}</td>
                                    <td>{{ $penelitian['authors'] }}</td>
                                    <td>{{ $penelitian['venue'] }}</td>
                                    <td>{{ $penelitian['year'] }}</td>
                                </tr>
                                @endforeach
                                @if (count($schoolars) == 0)
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <i>Tidak ada data</i>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team End -->
    @push('js-tambahan')
    <!-- Datatables -->
    <script src="{{ asset('belakang/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
			// Add Row
			$('#table-pengajaran').DataTable({
				"pageLength": 10,
			});

            $('#table-penelitian').DataTable({
				"pageLength": 10,
			});

		});

    </script>
    @endpush
</x-templates.depan>