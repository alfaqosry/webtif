<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Kurikulum</h4>
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
                        <a href="{{ route('kurikulum.index') }}">Daftar Kurikulum</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Tambah Mata Kuliah
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Mata Kuliah</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kurikulum.update', $kurikulum) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="number" min="1" class="form-control @error('semester') is-invalid @enderror" id="semester" name="semester" placeholder="Semester" value="{{ old('semester') ?? $kurikulum->semester }}">
                            
                            @error('semester')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" placeholder="Kode" value="{{ old('kode') ?? $kurikulum->kode }}">
                            
                            @error('kode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mata_kuliah">Mata Kuliah</label>
                            <input type="text" class="form-control @error('mata_kuliah') is-invalid @enderror" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" value="{{ old('mata_kuliah') ?? $kurikulum->mata_kuliah }}">
                            
                            @error('mata_kuliah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sks_teori">SKS Teori</label>
                            <input type="number" min="0" class="form-control @error('sks_teori') is-invalid @enderror" id="sks_teori" name="sks_teori" placeholder="SKS Teori" value="{{ old('sks_teori') ?? $kurikulum->sks_teori }}">
                            
                            @error('sks_teori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sks_praktek">SKS Praktek</label>
                            <input type="number" min="0" class="form-control @error('sks_praktek') is-invalid @enderror" id="sks_praktek" name="sks_praktek" placeholder="SKS Praktek" value="{{ old('sks_praktek') ?? $kurikulum->sks_praktek }}">
                            
                            @error('sks_praktek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" cols="30" rows="3" placeholder="Keterangan">{{ old('keterangan') ?? $kurikulum->keterangan }}</textarea>
                            
                            @error('keterangan')
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