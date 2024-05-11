<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Berita</h4>
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
                        <a href="{{ route('berita.index') }}">Berita</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit Berita
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <div class="card-body">
                    <form action="{{ route('berita.update', $berita) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita" value="{{ old('judul') ?? $berita->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori[]" multiple>
                                @foreach ($categories as $item)
                                    @if (in_array($item->id, $berita->kategoris->pluck('id')->toArray()))
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keywords</label>
                            <input type="text" class="form-control" id="keywords" name="keyword" value="{{ old('keyword') ?? $berita->keywords }}" placeholder="isi minimal 3 Keyword yang mewakili Berita/Informasi dan Pisahkan dengan koma (,)">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="isi dengan Rangkuman yang Mendeskripsikan Berita/Informasi">{{ old('description') ?? $berita->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-file input-file-image">
                                <label>Gambar</label>
                                <img class="img-upload-preview" width="150" src="{{ asset($berita->cover) }}" alt="preview">
                                <input type="file" class="form-control form-control-file" id="uploadImg2" name="gambar" accept="image/*">
                                <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                    <span class="btn-label">
                                        <i class="fa fa-file-image"></i>
                                    </span>
                                    Upload a Gambar
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea class="form-control" id="summernote" name="isi">{{ $berita->isi }}</textarea>
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
		$('#summernote').summernote({
			placeholder: 'Silahkan Isi Dengan Berita Atau Blog yang akan di tulis ...',
			tabsize: 2,
			height: 400
		});

        $('#kategori').select2({
			theme: "bootstrap"
		});
	</script>
    @endpush
</x-templates.belakang>