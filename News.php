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
	<h1 id="r-h1-index">Bienvenue sur les News de Co-vivre</h1>

	<div id="full1">
	
		<section class="acc1">
		<iframe width=100% height="700" src="https://www.youtube.com/embed/Wj5-vyOtnNc"
			 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
		</section>
		</br></br></br>
		<section class="acc1">

		<iframe width=100% height="700" src="https://www.youtube.com/embed/qq1nzCYl788" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		</br></br></br>
		<section class="acc1">

		<iframe width=100% height="700" src="https://www.youtube.com/embed/o_-dpvkOKL4"
			 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		</br></br></br>
		<section class="acc1">

		<iframe width=100% height="700" src="https://www.youtube.com/embed/EMAyb2E6gNw"
			 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		</br></br></br>
		<section class="acc1">

		<iframe width=100% height="700" src="https://www.youtube.com/embed/ALbKo6pnWmk" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
	</div>

	<hr id="r-hr-index">

	<div id="r-middle-txt-index">
		<h2 id="r-h2-index">Envie de prendre part a l'actualité???</h2>
		<p id="r-p-index">Avec les News de Co-vivre retrouvez chaque jour les points de situations du directeur de la santé 
			ainsi que les info de TvLiberté ou encore des cours de zumba des concerts...
		</p>
	</div>
</main>


<?php include 'footer.php'?>
</body>
</html>