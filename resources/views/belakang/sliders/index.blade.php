<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Sliders</h4>
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
                            Daftar Sliders
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
                                <a href="{{ route('slider.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Slider
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>image</th>
                                            <th>Status</th>
                                            <th style="width: 20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>

                                            <td>
                                                <img src="{{ asset('storage/'.$item->path) }}" alt="{{ $item->title }}"
                                                    height="100px">
                                            </td>

                                            <td>
                                                @if ($item->aktif == 1)
                                                <form action="{{ route('slider.update', [$item]) }}" method="POST"
                                                    class="d-inline"
                                                    onclick="return confirm('Are you sure you want to Edit Status {{ $item->title }}?');">
                                                    @csrf

                                                    @method('PUT')
                                                    <input type="hidden" name="aktif" value="0">

                                                    <button type="submit" data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-danger"
                                                        data-original-title="Update Slider">
                                                        <span class="badge badge-success">Aktif</span>
                                                    </button>
                                                </form>

                                                @else

                                                <form action="{{ route('slider.update', [$item]) }}" method="POST"
                                                    class="d-inline"
                                                    onclick="return confirm('Are you sure you want to Edit Status {{ $item->title }}?');">
                                                    @csrf

                                                    @method('PUT')
                                                    <input type="hidden" name="aktif" value="1">

                                                    <button type="submit" data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-danger"
                                                        data-original-title="Update Slider">
                                                        <span class="badge badge-danger">Tidak Aktif</span>
                                                    </button>
                                                </form>
                                                
                                                @endif
                                            </td>

                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('slider.edit', [$item]) }}" data-toggle="tooltip"
                                                        title="" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Slider">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form action="{{ route('slider.delete', [$item]) }}" method="POST"
                                                        class="d-inline"
                                                        onclick="return confirm('Are you sure you want to delete {{ $item->nama }}?');">
                                                        @csrf

                                                        @method('delete')

                                                        <button type="submit" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger"
                                                            data-original-title="Hapus Slider">
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