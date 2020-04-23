<html>

<?php
require 'class/bdd.php';
require 'class/user.php';

session_start();


?>

<head>
        <title>Accueil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Montserrat&display=swap" rel="stylesheet">

        
</head>



<body>
	
<div class="banniere">
		<div class="logo">
			<img src="img/logo.png">
		</div>
	</div>

	<?php require 'header.php';?>

<main>
	<h1 id="r-h1-index">Bienvenue sur Cov-vivre</h1>

	<div id="full">
	
		<section class="acc">
		<iframe width=90% height="500" src="https://www.youtube.com/embed/KZER634wMGI"
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
		</section>

		<section class="acc">

		<iframe width=90% height="500" src="https://www.youtube.com/embed/8W9Z-YofzsY"
		frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
	</div>

	<hr id="r-hr-index">

	<div id="r-middle-txt-index">
		<h2 id="r-h2-index">Pourquoi Cov-vivre ?</h2>
		<p id="r-p-index">Nous avons crée ce site éphémère avec le but de vous aider/occuper pendant cette période 
		difficile. En effet, nous nous sommes aperçus que ce n'était pas forcément évident 
		pour tout le monde de rester enfermer que ce soit seul, ou bien accompagnés.<br><br>
		Ici vous trouverez des conseils, des infos pratiques, des news ou encore des vidéos de télé-divertissement par différents artistes.</p>
	</div>
</main>


<?php include 'footer.php'?>
</body>
</html>