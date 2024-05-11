<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Users</h4>
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
                        <a href="{{ route('user.index') }}">Users</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit User
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit User</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Nama User" value="{{ old('name') ?? $user->name }}">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Tambah E-mail" value="{{ old('email') ?? $user->email }}">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="*************" value="{{ old('password') }}">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-file input-file-image">
                                <label>Image Profil</label>
                                
                                @if ($user->image)
                                <img src="{{ asset('storage/' . $user->image) }}" width="150" class="img-upload-preview"
                                    alt="{{ $user->name }}">
                                @else
                                <img class="img-upload-preview" width="150" src="https://via.placeholder.com/150x150"
                                    alt="preview">
                                @endif

                                <input type="file" class="form-control form-control-file" id="uploadImg2" name="image"
                                    accept="image/*">
                                <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                    <span class="btn-label">
                                        <i class="fa fa-file-image"></i>
                                    </span>
                                    Upload a Image
                                </label>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Hak Akses</label>
                            <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                <option value="">Pilih Hak Akses</option>
                                @foreach ($roles as $role)
                                @if ($role->id == old('role') || $role->id == $user->roles[0]->id)
                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                @else
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endif
                                @endforeach
                            </select>

                            @error('role')
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