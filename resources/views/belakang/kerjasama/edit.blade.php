<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Kerjasama</h4>
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
                        <a href="{{ route('kerjasama.index') }}">Daftar Kerjasama</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit Kerjasama {{ $data->nama }}
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Kerjasama {{ $data->nama }}</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kerjasama.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Universitas / Perusahaan / Komunitas" value="{{ old('nama') ?? $data->nama }}" required>
                            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" placeholder="Tahun Kerjasama" value="{{ old('tahun') ?? $data->tahun }}" required>
                            
                            @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="10" placeholder="Isi dengen Alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat') ?? $data->alamat }}</textarea>
                            
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" placeholder="kontak HP / Telp Yang bisa dihubungi" value="{{ old('kontak') ?? $data->kontak }}" required>
                            
                            @error('kontak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Yang bisa dihubungi" value="{{ old('email') ?? $data->email }}" required>
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" placeholder="Website Official" value="{{ old('website') ?? $data->website }}" required>
                            
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-file input-file-image">
                                <label>Logo Universitas</label>
                                <img class="img-upload-preview" width="150" src="{{ asset('storage/' . $data->logo) }}" alt="preview">
                                <input type="file" class="form-control form-control-file" id="uploadImg2" name="logo" accept="image/*">
                                <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                    <span class="btn-label">
                                        <i class="fa fa-file-image"></i>
                                    </span>
                                    Upload a Image
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mou">File PDF MOU</label>
                            <input type="file" class="form-control @error('mou') is-invalid @enderror" id="mou" name="mou" placeholder="MOU PDF RPS" accept="application/pdf" value="{{ old('mou') }}">
                            
                            @error('mou')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="moa">File PDF MOA</label>
                            <input type="file" class="form-control @error('moa') is-invalid @enderror" id="moa" name="moa" placeholder="MOA PDF RPS" accept="application/pdf" value="{{ old('moa') }}">
                            
                            @error('moa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="card-action text-center">
                            <button type="submit" class="btn btn-success" style="width: 30%;">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</x-templates.belakang>