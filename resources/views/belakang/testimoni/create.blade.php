<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Testimoni</h4>
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
                        <a href="{{ route('testimoni.index') }}">Daftar Testimoni</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Tambah Testimoni
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Testimoni</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pemberi Testimoni" value="{{ old('nama') }}">
                            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan Pemberi Testimoni" value="{{ old('pekerjaan') }}">
                            
                            @error('pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="testimoni">Testimoni</label>
                            <textarea name="testimoni" id="testimoni" rows="10" placeholder="Isi dengen Testimoni yang diberikan ..." class="form-control @error('testimoni') is-invalid @enderror">{{ old('testimoni') }}</textarea>
                            
                            @error('testimoni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-file input-file-image">
                                <label>Image</label>
                                <img class="img-upload-preview" width="150" src="https://via.placeholder.com/150x150" alt="preview">
                                <input type="file" class="form-control form-control-file" id="uploadImg2" name="image" accept="image/*" required>
                                <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                    <span class="btn-label">
                                        <i class="fa fa-file-image"></i>
                                    </span>
                                    Upload a Image
                                </label>
                            </div>
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