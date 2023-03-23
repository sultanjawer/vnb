<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>{{env('APP_NAME')}} | {{  ($page_title ?? '') }}</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
		<meta content="" name="description">
		<meta content="" name="author">

		<link rel="stylesheet" href="{{ asset('guess/css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('guess/css/app.min.css') }}">
		<link rel="stylesheet" href="{{ asset('guess/css/vendor.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

	</head>
	<body class="pace-done ">
		<div class="pace pace-inactive">
			<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
				<div class="pace-progress-inner"></div>
			</div>
			<div class="pace-activity"></div>
		</div>
		<div id="page-loader" class="fade show">
			<span class="spinner"></span>
		</div>

		<div id="page-container">
			<!-- header nav -->
			@include('partials.corporate.headernav')
			<!-- hero section-->
			<div class="section pt-4 pb-0">
				<div class="container">
					<div class="d-flex mb-5">
						<h4 class="mb-0">Our Company</h4>
					</div>
				</div>
			</div>
			<div class="section pt-0">
				<div class="container">
					<div class="row gx-0 align-items-center">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<img class="mw-100" src="{{ url('storage/img/images/bg-home.jpg')}}" alt="">
						</div>
						<div class="col-lg-6 px-lg-5">
							<div class="display-5 fw-bolder mb-2">Kami Ada Untuk Melayani Anda</div>
							<div class="fs-20px fw-bold text-gray-600 mb-3 mb-lg-5">
								PT. Viral Niaga Berjaya berdiri sejak tahun 2022,
								merupakan perusahaan importir dan distributor untuk
								peralatan pabrik kaca % aplikator kaca. kami juga menyediakan
								jasa trading. Jika Anda ingin mengetahui lebih lanjut
								tentang bagaimana PT. Viral Niaga Berjaya dapat melayani
								kebutuhan peralatan dan industri Anda, hubungi hari ini.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('partials.corporate.footer')
		<script src="{{ asset('js/app.min.js') }}"></script>
		<script src="{{ asset('js/vendor.min.js') }}"></script>
	<script defer="" src="{{ asset('js/vaafb692b2aea4879b33c060e79fe94621666317369993') }}" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;7ab22863df764983&quot;,&quot;version&quot;:&quot;2023.2.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;4db8c6ef997743fda032d4f73cfeff63&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

	</body>
</html>
