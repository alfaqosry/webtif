<x-templates.depan>
    <x-slot name="appname">Dokumen RPS Mata Kuliah Program Studi Bisnis Digital Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">DOKUMEN RPS MATAKULIAH</x-slot>

    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp table-responsive" data-wow-delay="0.6s">

                    {{-- Dokumen RPS Start --}}
                    <table class="table table-responsive" id="rpsdatatable">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>Tahun Ajaran</th>
                                <th style="width: 15%;">Link RPS</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($rps as $key => $item)
                            <tr class="text-center">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->kurikulum->mata_kuliah }}</td>
                                <td>{{ $item->tahun_ajaran }}</td>
                                <td class="text-center">
                                    <a href="{{ route('dokumen-rps-detail', $item) }}" class="btn btn-success">Download</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{-- Dokumen RPS end --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->

    @push('js-tambahan')
    <!-- Datatables -->
    <script src="{{ asset('belakang/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
			// Add Row
			$('#rpsdatatable').DataTable({
				"pageLength": 10,
			});

		});

    </script>
    @endpush

</x-templates.depan>