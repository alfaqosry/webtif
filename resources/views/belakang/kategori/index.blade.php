<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Kategori</h4>
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
                        <span class="active">
                            Katgeori
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
                                <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Kategori Baru
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Code</th>
                                            <th>Slug</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('kategori.show', $item) }}" target="_blank" data-toggle="tooltip"
                                                        title="" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Lihat Kategori">
                                                        <i class="fa fa-eye"></i>
                                                    </a>

                                                    <a href="{{ route('kategori.edit', $item) }}" data-toggle="tooltip"
                                                        title="" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Kategori">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a href="#" id="delete" data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                        data-toggle="tooltip" title="" class="btn btn-link btn-danger"
                                                        data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                aria-labelledby="deleteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">Hapus Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah kamu yakin menghapus Kategori "<p class="d-inline" id="name-delete"></p> " ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn me-auto"
                                            data-dismiss="modal">Batalkan</button>
                                            <button type="button" class="btn btn-danger"
                                                id="confirmDelete">Hapus</button>
                                        </div>
                                    </div>
                                </div>
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

        $('#add-row').on('click', 'a#delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id')
            var name = $(this).data('name')

            $('#confirmDelete').attr('data-id', id)
            $('#name-delete').append(name)
            $('#deleteModal').modal('show')
        })

        $('#confirmDelete').click(function (e){
            e.preventDefault()
            var id = $(this).data('id')
            console.log(id);
            $.ajax({
                type: "DELETE",
                url: "kategori/delete/" + id,
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success: function (response) {
                    if (response.success) {
                        window.location.href = ''
                    }
                },
            });
        })
    </script>
    @endpush

</x-templates.belakang>