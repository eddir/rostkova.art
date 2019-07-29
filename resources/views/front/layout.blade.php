<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
<head>

	<!--- basic page needs
	================================================== -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@yield('css')

	<!-- script
	================================================== -->

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<div id="app">

		<header>
			<div class="collapse bg-dark" id="navbarHeader">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-7 py-4">
							<h4 class="text-white">About</h4>
							<p class="text-muted">Add some information about the album below, the author, or any other
								background context. Make it a few sentences long so folks can pick up some informative tidbits.
								Then, link them off to some social networking sites or contact information.</p>
						</div>
						<div class="col-sm-4 offset-md-1 py-4">
							<h4 class="text-white">Contact</h4>
							<ul class="list-unstyled">
								<li><a href="#" class="text-white">Follow on Twitter</a></li>
								<li><a href="#" class="text-white">Like on Facebook</a></li>
								<li><a href="#" class="text-white">Email me</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar navbar-dark bg-dark shadow-sm">
				<div class="container d-flex justify-content-between">
					<a href="#" class="navbar-brand d-flex align-items-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
							stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
							viewBox="0 0 24 24" focusable="false">
							<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
							<circle cx="12" cy="13" r="4"></circle>
						</svg>
						<strong>@yield('title')</strong>
					</a>
				</div>
			</div>
		</header>

		<main riole="main">
			@yield('main')
		</main>

		<footer class="text-muted bg-dark">
			<div class="container">
				<p class="float-right">
					<a href="#">Наверх</a>
				</p>
			</div>
		</footer>

	</div>

   <!-- Java Script
   ================================================== -->
   <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>

   @yield('scripts')

</body>

</html>
