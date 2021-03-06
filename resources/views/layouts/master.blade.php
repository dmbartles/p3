<!DOCTYPE html>
<html>

<head>
	<title>Ninja Password Generator</title>
  <meta charset='utf-8'>

  <!-- Styles -->
  <link href="/css/main.css" type='text/css' rel='stylesheet'>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Shojumaru&effect=shadow-multiple" rel="stylesheet">

	<link rel="icon" type="image/png" href="/img/favicon.png">

	@stack('head')

</head>

<body>

	<header>
    <div class="title font-effect-shadow-multiple">
        Ninja Password<br>
				Generator
    </div>
	</header>

	<section>
    @yield('content')
	</section>

	<footer>
    <div class="content footer">
		    Kodiak Jetpack&copy; {{ date('Y') }}
    </div>
	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  @stack('body')
</body>
</html>
