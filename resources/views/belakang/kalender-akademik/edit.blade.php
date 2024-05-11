<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Kalender Akademik</h4>
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
                        <a href="{{ route('kalender-akademik.index') }}">Daftar Kalender Akademik</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit Kalender Akademik
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Kalender Akademik</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kalender-akademik.update', $kalenderAkademik) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama File" value="{{ old('nama') ?? $kalenderAkademik->nama }}">
                            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" min="2021" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" placeholder="Tahun Kalender Akademik" value="{{ old('tahun') ?? $kalenderAkademik->tahun }}">
                            
                            @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file">File PDF Kalender Akademik</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" placeholder="File PDF Kalender Akademik" accept="application/pdf" value="{{ old('file') }}">
                            
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

</x-templates.belakang>