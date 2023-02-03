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
	$g1 =new Genre("Action"); 
	$g2 =new Genre("Science Fiction"); 
	$f1 = new Film("Batman", "01-01-2023", 60, "resume du film", $g1, $rea1);
	$a1 = new Acteur("Killmer", "Val", "Homme", "01-01-1900");

	$r1 = new Role("Batman");
	$c1 = new Cast($r1, $a1, $f1);
	

	$rea2 = new Realisateur("kayal", "georges", "Homme", "01-01-1900");
	$f2 = new Film("f2", "01-01-2023", 60, "resume du film", $g2, $rea1);
	$a2 = new Acteur("Keaton", "Michael", "Homme", "01-01-1900");
	$c2 = new Cast($r1, $a2, $f2);

	$r2 = new Role("OldMan");
	$rea3 = new Realisateur("kayal", "georges", "Homme", "01-01-1900");
	$f3 = new Film("f3 le film ", "01-01-2023", 60, "resume du film", $g1, $rea1);
	$a3 = new Acteur("Clooney", "Georges", "Homme", "01-01-1900");
	$c2 = new Cast($r2, $a3, $f3);
//deux casting pour le meme acteur
	$c3 = new Cast($r1, $a3, $f3);



	//echo les acteur qui one le role r1
	//echo "<div class='flex-container-row'>";
	//Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de 
	
	echo "<div class='container-flex-row'>";
	$r1->getListActeurParRole();
	

	//Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par 
	
	$f1->getListCastingParFilm();
	

	//Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade 
	
	$g1->getListFilmParGenre();
	
	//list des films par genre	
	$g2->getListFilmParGenre();



	//Lister la filmographie d'un acteur (dans quels films a-t-il joué ?
	///$a1->getListFilmParActeur();

	//$a2->getListFilmParActeur();

	
	$a3->getListFilmParActeur();

	echo "</div>";
	


	?>
</body>

</html>