<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{ $appname ?? config('app.name') }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('depan/img/logo-up.png') }}" type="image/x-icon" />

	@include('components.partials.belakang.css')
    @stack('css-tambahan')
</head>
<body>
	<div class="wrapper">

		@include('components.partials.belakang.main-header')

		@include('components.partials.belakang.sidebar')

		<div class="main-panel">
			{{ $slot }}
			@include('components.partials.belakang.footer')
		</div>
		
	</div>
	@include('components.partials.belakang.js')
	@stack('js-tambahan')
</body>
</html>