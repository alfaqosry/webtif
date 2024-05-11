<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if (Auth::user()->image == null)
                    <img src="{{ asset('belakang/assets/img/profile.jpg') }}" alt="Profile" class="avatar-img rounded-circle">
                    @else
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    {{-- <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @if (request()->routeIs('home')) active @endif">
                    <a href="{{ route('home') }}" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Admin Menu</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}">
                        <i class="fas fa-user-friends"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}">
                        <i class="fas fa-boxes"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('berita.index') }}">
                        <i class="fas fa-book-open"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slider.index') }}">
                        <i class="fas fa-sliders-h"></i>
                        <p>Sliders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Capaian Pembelajaran</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('capaian-pembelajaran.index', ['sikap']) }}">
                                    <span class="sub-item">Sikap</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('capaian-pembelajaran.index', ['pengetahuan']) }}">
                                    <span class="sub-item">Pengetahuan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('capaian-pembelajaran.index', ['ketum']) }}">
                                    <span class="sub-item">Keterampilan Umum</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('capaian-pembelajaran.index', ['ketkhus']) }}">
                                    <span class="sub-item">Keterampilan Khusus</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dosen.index') }}">
                        <i class="fas fa-user-friends"></i>
                        <p>Daftar Dosen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kurikulum.index') }}">
                        <i class="fas fa-book-reader"></i>
                        <p>Kurikulums</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rps.index') }}">
                        <i class="fas fa-box-open"></i>
                        <p>RPS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kalender-akademik.index') }}">
                        <i class="fas fa-calendar-times"></i>
                        <p>Kalender Akademik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jadwal-kuliah.index') }}">
                        <i class="fas fa-tablet-alt"></i>
                        <p>Jadwal Kuliah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('fasilitas.index') }}">
                        <i class="fas fa-chalkboard"></i>
                        <p>Fasilitas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('informasi-pendaftaran.index') }}">
                        <i class="fas fa-bullhorn"></i>
                        <p>Informasi Pendaftaran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('testimoni.index') }}">
                        <i class="fas fa-award"></i>
                        <p>Testimoni</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kerjasama.index') }}">
                        <i class="fas fa-clone"></i>
                        <p>Kerjasama</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->