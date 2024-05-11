<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Dosen</h4>
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
                        <a href="{{ route('dosen.index') }}">Daftar Dosen</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Tambah Dosen
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Dosen Baru</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nidn">NIDN</label>
                            <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" placeholder="NIDN" value="{{ old('nidn') }}">
                            
                            @error('nidn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Dosen" value="{{ old('email') }}">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="wa">No WA</label>
                            <input type="text" class="form-control @error('wa') is-invalid @enderror" id="wa" name="wa" placeholder="No WA Aktif" value="{{ old('wa') }}">
                            
                            @error('wa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jabatan_prodi">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan_prodi') is-invalid @enderror" id="jabatan_prodi" name="jabatan_prodi" placeholder="Jabatan di Prodi ex: Ketua Prodi" value="{{ old('jabatan_prodi') }}">
                            
                            @error('jabatan_prodi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="riwayat_jabatan">Riwayat Jabatan</label>
                            <textarea name="riwayat_jabatan" id="riwayat_jabatan" class="form-control @error('riwayat_jabatan') is-invalid @enderror"  placeholder="Riwayat Jabatan">{{ old('riwayat_jabatan') }}</textarea>
                            
                            @error('riwayat_jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pejabat_lain">Apakah Pejabat Lain</label>
                            <input type="text" class="form-control @error('pejabat_lain') is-invalid @enderror" id="pejabat_lain" name="pejabat_lain" placeholder="Pejabat Lain ex: Rektor, Dekan" value="{{ old('pejabat_lain') }}">
                            
                            @error('pejabat_lain')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pendidikan">Riwayat Pendidikan</label>
                            <textarea name="pendidikan" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror"  placeholder="Riwayat Jabatan">{{ old('pendidikan') }}</textarea>
                            
                            @error('pendidikan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="google_scholar">ID Google Scholar</label>
                            <input type="text" class="form-control @error('google_scholar') is-invalid @enderror" id="google_scholar" name="google_scholar" placeholder="ID Google Scholar Jika Ada" value="{{ old('google_scholar') }}">
                            
                            @error('google_scholar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sinta">Link Sinta</label>
                            <input type="text" class="form-control @error('sinta') is-invalid @enderror" id="sinta" name="sinta" placeholder="Link Sinta Jika Ada" value="{{ old('sinta') }}">
                            
                            @error('sinta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="scopus">Link Scopus</label>
                            <input type="text" class="form-control @error('scopus') is-invalid @enderror" id="scopus" name="scopus" placeholder="Link scopus Jika Ada" value="{{ old('scopus') }}">
                            
                            @error('scopus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="research_gate">Link ResearchGate</label>
                            <input type="text" class="form-control @error('research_gate') is-invalid @enderror" id="research_gate" name="research_gate" placeholder="ResearchGate Jika Ada" value="{{ old('research_gate') }}">
                            
                            @error('research_gate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="link_staff">Link Staff Site</label>
                            <input type="text" class="form-control @error('link_staff') is-invalid @enderror" id="link_staff" name="link_staff" placeholder="Staff Site Jika Ada" value="{{ old('link_staff') }}">
                            
                            @error('link_staff')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="link_orchid">Link Orchid</label>
                            <input type="text" class="form-control @error('link_orchid') is-invalid @enderror" id="link_orchid" name="link_orchid" placeholder="Orchid Jika Ada" value="{{ old('link_orchid') }}">
                            
                            @error('link_orchid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="instagram">Link Instagram</label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="Instagram Jika Ada" value="{{ old('instagram') }}">
                            
                            @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="linkdin">Link linkedin</label>
                            <input type="text" class="form-control @error('linkdin') is-invalid @enderror" id="linkdin" name="linkdin" placeholder="linkedin Jika Ada" value="{{ old('linkdin') }}">
                            
                            @error('linkdin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="website">Link Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" placeholder="Website Jika Ada" value="{{ old('website') }}">
                            
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-file input-file-image">
                                <label>Image Profil</label>
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
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    @push('js-tambahan')
    <script>
		$('#riwayat_jabatan').summernote({
			placeholder: 'Silahkan Isi Dengan Riwayat Jabatan yang dimiliki selain jabatan prodi saat ini ...',
			tabsize: 2,
			height: 200
		});

        $('#pendidikan').summernote({
			placeholder: 'Silahkan Isi Dengan Riwayat Pendidikan ...',
			tabsize: 2,
			height: 200
		});
	</script>
    @endpush

</x-templates.belakang>