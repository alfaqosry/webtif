<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Capaian Pembelajaran</h4>
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
                        <a href="{{ route('capaian-pembelajaran.index', [$lastUrl])  }}">Capaian Pembelajaran</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        {{ $name }}
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Capaian Pembelajaran {{ $name }}</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('capaian-pembelajaran.update', [$lastUrl, $data->id]) }}" method="post">
                        @csrf

                        @method('PUT')

                        <div class="form-group">
                            <label for="kode_capaian">Kode Capaian Pembelajaran</label>
                            <input type="text" class="form-control @error('kode_capaian') is-invalid @enderror" id="kode_capaian" name="kode_capaian" placeholder="Kode Capaian Pembelajaran contoh: S1 atau P1" value="{{ old('kode_capaian') ?? \Str::upper($data->kode_capaian) }}">
                            
                            @error('kode_capaian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama_capaian">Capaian Pembelajaran</label>
                            <textarea name="nama_capaian"  class="form-control @error('nama_capaian') is-invalid @enderror" id="nama_capaian" name="nama_capaian"  placeholder="capaian Pembelajaran" rows="5">{{ old('nama_capaian') ?? $data->nama_capaian }}</textarea>
                            
                            @error('nama_capaian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tahun_pembuatan">Tahun</label>
                            <input type="number" min="2020" class="form-control @error('tahun_pembuatan') is-invalid @enderror" id="tahun_pembuatan" name="tahun_pembuatan" placeholder="Tahun" value="{{ old('tahun_pembuatan') ?? $data->tahun_pembuatan }}">
                            
                            @error('tahun_pembuatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="hidden" name="kategori" value="{{ $kategori }}">

                        <div class="card-action text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</x-templates.belakang>