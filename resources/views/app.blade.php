<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('head_title', getcong('site_name'))</title>
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('head_description', getcong('site_description'))" />

<meta property="og:type" content="article" />
<meta property="og:title" content="@yield('head_title',  getcong('site_name'))" />
<meta property="og:description" content="@yield('head_description', getcong('site_description'))" />
<meta property="og:image" content="@yield('head_image', url('/upload/logo.png'))" />
<meta property="og:url" content="@yield('head_url', url('/'))" />
<!-- Favicons-->
	<link rel="shortcut icon" href="{{ URL::asset('upload/'.getcong('site_favicon')) }}" type="image/x-icon">
<!--MAIN STYLE-->

<link href="{{ URL::asset('site_assets/css/fonts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('site_assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('site_assets/css/style.css') }}" rel="stylesheet" type="text/css">

<script src="{{ URL::asset('https://code.jquery.com/jquery.min.js') }}"></script>
<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>





{!!getcong('site_header_code')!!}

</head>
<body>

@include("_particles.header")

@yield("content")

@include("_particles.footer")

@include("_particles.autorisation")


<script src="{{ URL::asset('site_assets/js/jquery.bxslider.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/selectbox.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/scripts.js') }}"></script>






</body>
</html>