@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $setting->web_name }}" />
<meta property="og:description" content="{{ $setting->web_description }}" />
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">

<meta name="og:keyword" content="{{ $setting->web_keyword }}">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{ $setting->web_description }}" />
<meta name="twitter:title" content="{{ $setting->web_name }}" />
<meta name="twitter:image" content="{{ asset('public/img/'.$setting->web_logo) }}" />
<link rel="canonical" href="{{ url('/') }}" />

@endsection('keyword')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/slide-2.png') }}" alt="" class="center-block"></a></div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="container home">
		<div class="search">
			
		</div>
	</main>
@endsection('content')