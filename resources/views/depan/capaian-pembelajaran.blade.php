<x-templates.depan>
    <x-slot name="appname">Capaian Pembelajaran Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">CAPAIAN PEMBELAJARAN</x-slot>

    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp table-responsive" data-wow-delay="0.6s">
                    {{-- Sikap Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">SIKAP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sikaps as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Sikap end --}}

                    {{-- Pengetahuan Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">PENGETAHUAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengetahuans as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Pengetahuan end --}}

                    {{-- Keterampilan Umum Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">KETERAMPILAN UMUM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ketums as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Keterampilan Umum end --}}

                    {{-- Keterampilan KHUSUS Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">KETERAMPILAN KHUSUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ketkhus as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Keterampilan KHUSUS end --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->

</x-templates.depan>