<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
    <title>{{env('APP_NAME')}}</title>
    <link rel="icon" href="{{asset(env('APP_LOGO'))}}">
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assetsFront/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assetsFront/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Ensiklopedia Gunung</h1>
						<p>Aplikasi Informasi Gunung Aktif yang Ada Diindonesia</p>
						<nav>
							<ul>
								<li><a href="{{url('apk/download')}}" class="icon fa-mobile-phone"><span class="label">Aplikasi Android</span></a></li>
								<li><a href="{{url('/admin')}}" class="icon fa-user"><span class="label">Admin</span></a></li>
								<li><a href="{{url('/pengunjung')}}" class="icon fa-user"><span class="label">Pengunjung</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						{{-- <span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</span> --}}
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>
