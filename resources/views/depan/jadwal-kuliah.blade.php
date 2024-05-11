<x-templates.depan>
    <x-slot name="appname">Jadwal Kuliah Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">JADWAL KULIAH</x-slot>

    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp table-responsive" data-wow-delay="0.6s">

                    {{-- Jadwal Pelajaran Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama File</th>
                                <th style="width: 15%;">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td class="text-center">
                                    <a href="{{ route('jadwal-kuliah-detail', $item) }}" class="btn btn-success">Download</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Jadwal Pelajaran end --}}
                </div>
            </div>
        </div>
    </div>

</x-templates.depan>