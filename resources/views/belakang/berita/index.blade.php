<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Berita & Blog</h4>
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
                        <a href="{{ route('berita.index') }}">Berita & Blog</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Daftar Berita
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
                                <a href="{{ route('berita.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Berita Baru
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Cover</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($beritas as $item)
                                        <tr>
                                            <td>{{ $item->judul }}</td>
                                            <td>
                                                @foreach ($item->kategoris as $kategori)
                                                {{ $kategori->name }}
                                                @endforeach
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/'.$item->cover) }}" alt="{{ $item->judul }}"
                                                    width="100">
                                            </td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('berita-detail', $item->slug) }}"
                                                        class="btn btn-link btn-primary btn-lg" data-toggle="tooltip"
                                                        data-placement="top" title="Lihat Berita">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('berita.edit', $item) }}" data-toggle="tooltip"
                                                        title="" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Berita">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('berita.delete', $item) }}" method="POST"
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
    <script>
        $(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 10,
			});
		});
    </script>
    @endpush

</x-templates.belakang>