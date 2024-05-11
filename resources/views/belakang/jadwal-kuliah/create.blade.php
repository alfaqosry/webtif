<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Jadwal Kuliah</h4>
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
                        <a href="{{ route('jadwal-kuliah.index') }}">Daftar Jadwal Kuliah</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Tambah PDF Jadwal Kuliah
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah PDF Jadwal Kuliah</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('jadwal-kuliah.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama File</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}" placeholder="Nama File">
                            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input type="number" min="2020" class="form-control @error('tahun_ajaran') is-invalid @enderror" id="tahun_ajaran" name="tahun_ajaran" placeholder="Tahun Ajaran" value="{{ old('tahun_ajaran') }}">
                            
                            @error('tahun_ajaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file">File PDF Jadwal Kuliah</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" placeholder="File PDF Jadwal Kuliah" accept="application/pdf" value="{{ old('file') }}">
                            
                            @error('file')
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