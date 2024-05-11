<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Capaian Pembelajaran</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ route('home') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <span>
                            Capaian Pembelajaran
                        </span>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <span class="active">
                            {{ $name }}
                        </span>
                    </li>
                </ul>
            </div>

            <x-partials.alert.alert />

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                {{-- <h4 class="card-title">Add Row</h4> --}}
                                <a href="{{ route('capaian-pembelajaran.create', $lastUrl) }}"
                                    class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Capain Pembelajaran {{ $name }}
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Capaian</th>
                                            <th>Tahun</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($capaianPembelajarans as $item)
                                        <tr>
                                            <td>{{ \Str::upper($item->kode_capaian) }}</td>
                                            <td>{{ $item->nama_capaian }}</td>
                                            <td>{{ $item->tahun_pembuatan }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('capaian-pembelajaran.edit', [$lastUrl, $item]) }}" data-toggle="tooltip"
                                                        title="" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Capaian Pembelajaran">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form action="{{ route('capaian-pembelajaran.delete', [$lastUrl, $item]) }}" method="POST"
                                                        class="d-inline"
                                                        onclick="return confirm('Are you sure you want to delete Berita {{ $item->judul }}?');">
                                                        @csrf

                                                        @method('delete')

                                                        <button type="submit" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger" data-original-title="Hapus">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('js-tambahan')
    <script src="{{ asset('belakang/assets/js/plugin/datatables/natural.js') }}"></script>
    <script>
        $(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 10,
                columnDefs: [
                    { type: 'natural', targets: 0 }
                    ],
                order: [[ 0, 'asc' ]]
			});

		});

    </script>
    @endpush

</x-templates.belakang>