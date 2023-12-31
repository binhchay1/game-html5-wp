<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>Không tìm thấy</title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/error.css' ?>">
</head>

<body class="bg-purple">
	<div class="stars">
		<div class="central-body">
			<h1 class="code-error">404</h1>
			<h1>URL-ul dvs. nu există sau nu a fost găsit. Vă rugăm să faceți clic pe butonul de mai jos pentru a reveni la pagina principală</h1>
			<a href="{{ route('home') }}" class="btn-go-home">Pe pagina de start</a>
		</div>
		<div class="objects">
			<img class="object_rocket" src="<?php echo get_template_directory_uri() . '/svg/rocket.svg' ?>" width="40px">
			<div class="earth-moon">
				<img class="object_earth" src="<?php echo get_template_directory_uri() . '/svg/earth.svg' ?>" width="100px">
				<img class="object_moon" src="<?php echo get_template_directory_uri() . '/svg/moon.svg' ?>" width="80px">
			</div>
			<div class="box_astronaut">
				<img class="object_astronaut" src="<?php echo get_template_directory_uri() . '/svg/astronaut.svg' ?>" width="140px">
			</div>
		</div>
		<div class="glowing_stars">
			<div class="star"></div>
			<div class="star"></div>
			<div class="star"></div>
			<div class="star"></div>
			<div class="star"></div>
		</div>
	</div>
</body>

</html>