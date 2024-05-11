<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar RPS</h4>
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
                        <a href="{{ route('rps.index') }}">Daftar RPS</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit PDF RPS
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit PDF RPS</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('rps.update', $rps) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kurikulum_id">Mata Kuliah</label>
                            <div id="select2-input">
                                <select name="kurikulum_id" id="kurikulum_id" class="form-control">
                                    <option value="">Pilih Mata Kuliah</option>
                                    @foreach ($kurikulums as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $rps->kurikulum_id ? 'selected' : '' }}>{{ $item->mata_kuliah }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            @error('kurikulum_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran</label>
                            <input type="number" min="2020" class="form-control @error('tahun_ajaran') is-invalid @enderror" id="tahun_ajaran" name="tahun_ajaran" placeholder="Tahun Ajaran" value="{{ old('tahun_ajaran') ?? $rps->tahun_ajaran }}">
                            
                            @error('tahun_ajaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file">File PDF RPS</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" placeholder="File PDF RPS" accept="application/pdf" value="{{ old('file') }}">
                            
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