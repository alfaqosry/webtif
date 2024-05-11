<x-templates.depan>
    <x-slot name="appname">Kurikulum Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">KURIKULUM</x-slot>

    <!-- Kurikulum Start -->
     <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-0">
            <div class="row g-5">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semua Mata Kuliah</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mata Kuliah Umum</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Mata Kuliah Universitas</a>
                      <a class="nav-item nav-link" id="nav-prodi-tab" data-toggle="tab" href="#nav-prodi" role="tab" aria-controls="nav-contact" aria-selected="false">Mata Kuliah Inti Prodi</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active table-responsive" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table table-striped table-responsive">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">Semester</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col" class="text-center">SKS Teori</th>
                                <th scope="col" class="text-center">SKS Praktek</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $semester = 0;
                                @endphp
                                @foreach ($alls as $item)
                                    <tr>
                                        <td class="text-center">
                                            {{ $semester != $item->semester ? $item->semester : '' }}

                                            @php
                                            $semester = $item->semester;
                                            @endphp
                                        </td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->mata_kuliah }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td class="text-center">{{ $item->sks_teori }}</td>
                                        <td class="text-center">{{ $item->sks_praktek }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade table-responsive" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="table table-striped table-responsive">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">Semester</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col" class="text-center">SKS Teori</th>
                                <th scope="col" class="text-center">SKS Praktek</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $semester = 0;
                                @endphp
                                @foreach ($mkus as $item)
                                    <tr>
                                        <td class="text-center">
                                            {{ $semester != $item->semester ? $item->semester : '' }}

                                            @php
                                            $semester = $item->semester;
                                            @endphp
                                        </td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->mata_kuliah }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td class="text-center">{{ $item->sks_teori }}</td>
                                        <td class="text-center">{{ $item->sks_praktek }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade table-responsive" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table class="table table-striped table-responsive">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">Semester</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col" class="text-center">SKS Teori</th>
                                <th scope="col" class="text-center">SKS Praktek</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $semester = 0;
                                @endphp
                                @foreach ($mkfs as $item)
                                    <tr>
                                        <td class="text-center">
                                            {{ $semester != $item->semester ? $item->semester : '' }}

                                            @php
                                            $semester = $item->semester;
                                            @endphp
                                        </td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->mata_kuliah }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td class="text-center">{{ $item->sks_teori }}</td>
                                        <td class="text-center">{{ $item->sks_praktek }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade table-responsive" id="nav-prodi" role="tabpanel" aria-labelledby="nav-prodi-tab">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">Semester</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col" class="text-center">SKS Teori</th>
                                <th scope="col" class="text-center">SKS Praktek</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $semester = 0;
                                @endphp
                                @foreach ($mkps as $item)
                                    <tr>
                                        <td class="text-center">
                                            {{ $semester != $item->semester ? $item->semester : '' }}

                                            @php
                                            $semester = $item->semester;
                                            @endphp
                                        </td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->mata_kuliah }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td class="text-center">{{ $item->sks_teori }}</td>
                                        <td class="text-center">{{ $item->sks_praktek }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Kurikulum End -->

    @push('js-tambahan')
        <script>
            $('#nav-tab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
        </script>
    @endpush
</x-templates.depan>