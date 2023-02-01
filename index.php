<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body>

	<h1>Exercice Cinema </h1>
	<p>

	</p>
	<h2>Résultat </h2>



	<?php
	//importer tous les classes 


	spl_autoload_register(function ($class_name) {
		require_once $class_name . '.php';
	});


	$rea1 = new Realisateur("kayal", "georges", "Homme", "01-01-1900");
	$f1 = new Film("f1", "01-01-2023", 60, "resume du film", "Action", $rea1);
	$a1 = new Acteur("Killmer", "Val", "Homme", "01-01-1900");

	$r1 = new Role("Batman");
	$c1 = new Cast($r1, $a1, $f1);

	$rea2 = new Realisateur("kayal", "georges", "Homme", "01-01-1900");
	$f2 = new Film("f2", "01-01-2023", 60, "resume du film", "Action", $rea1);
	$a2 = new Acteur("Keaton", "Michael", "Homme", "01-01-1900");
	$c2 = new Cast($r1, $a2, $f2);

	$rea3 = new Realisateur("kayal", "georges", "Homme", "01-01-1900");
	$f2 = new Film("f3", "01-01-2023", 60, "resume du film", "Action", $rea1);
	$a2 = new Acteur("Clooney", "Georges", "Homme", "01-01-1900");
	$c2 = new Cast($r1, $a2, $f2);



	//echo les acteur qui one le role r1
	$r1->getListActeurParRole($r1);

	//$f1 = new Film("Star  Wars  Episode  IV", "01-01-2023", 60, "resume du film", "Action", $rea1);

	$f1->getListCastingParFilm($f1);


	?>
</body>

</html>