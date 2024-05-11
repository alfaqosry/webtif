<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{ $appname ?? config('app.name') }}
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $keywords ?? "Bisnis Digital Universitas Pahlawan Tuanku Tambusai" }}" name="keywords">
    <meta content="{{ $description ?? "Bisnis Digital Universitas Pahlawan Tuanku Tambusai" }}" name="description">

    <!-- Favicon -->
    <link href="{{ asset('depan/img/logo-up.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    @include('components.partials.css')
    @stack('css-tambahan')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('components.partials.top-header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        @include('components.partials.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ $title ?? 'Title Page' }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    {{ $slot }}


    <!-- Footer Start -->
    @include('components.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('components.partials.javascript')
    @stack('js-tambahan')
</body>

</html>