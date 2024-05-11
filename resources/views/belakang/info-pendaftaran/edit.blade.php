<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Informasi Pendaftaran</h4>
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
                        <a href="{{ route('informasi-pendaftaran.index') }}">Daftar Informasi Pendaftaran</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit Informasi Pendaftaran
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Informasi Pendaftaran</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('informasi-pendaftaran.update', $imageBiaya) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') ?? $imageBiaya->nama }}" placeholder="Nama File">
                            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image Informasi Pendaftaran</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Image Fasilitas" accept="image/*" value="{{ old('image') }}">
                            
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="card-action text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    @push('js-tambahan')
        <script>
            $('#kurikulum_id').select2({
			    theme: "bootstrap"
		    });
        </script>
    @endpush
</x-templates.belakang>