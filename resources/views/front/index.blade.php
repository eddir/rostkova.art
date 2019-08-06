<!DOCTYPE html>

<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
<head>

	<!--- basic page needs
	================================================== -->
	<meta charset="utf-8">
	<title>Росткова Наталья</title>
	<meta name="description" content="Сайт художника - Ростковой Натальи Станиславовной.">
	<meta name="author" content="@lang(lcfirst ('Author'))">
	@if(isset($post) && $post->meta_keywords)
		<meta name="keywords" content="{{ $post->meta_keywords }}">
	@endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
	<link rel="stylesheet" href="css/app.css">
	<!-- script
	================================================== -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">
	<div id="background-carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				@foreach ($Paintings as $paint)
					<div class="item 
					@if($loop->first) 
						active
					@endif" style="background-image:url({{ $paint->image }})"></div>
				@endforeach
			</div>
		</div>
	</div>

	<div id="background-transparent"></div>
	
	
	<div id="content-wrapper">
		<!-- PAGE CONTENT -->
		<div class="container">
			<div class="page-header">
				<h3>Наталья Росткова</h3>
				<a class="btn btn-success float-right" href="{{ route('gallery') }}">Галерея</a>
			</div>
			<hr align="center" class="bg-white"/>
			<div class="text-about">
				Личный сайт художника - Ростковой Натальи<br>Связь: mail@rostkova.art
			</div>
		</div><!-- End Container -->
		<!-- PAGE CONTENT -->
	</div>

	<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="js/app.js" charset="utf-8"></script>
	<script>
		$('#myCarousel').carousel({
			pause: 'none'
		})
	</script>
</body>
</html>
