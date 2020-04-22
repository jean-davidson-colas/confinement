
<?php
require 'class/bdd.php';
require 'class/user.php';



session_start();

if(!isset($_SESSION['bdd']))
{
    $_SESSION['bdd'] = new bdd();
}
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = new user();
}
if($_SESSION['id_droits'] != 1337 || $_SESSION['login'] != "admin"){
    header('Location:index.php');
}


?>
<html>

<head>
        <title>Administration-Okage</title>
        <link rel="stylesheet" href="css/style.css">
          <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
      
</head>

<body class ="admin">
<div class="banniere">
		<div class="logo">
			<img src="img/logo.png">
		</div>
	</div>

<?php require 'header.php'?>


<main>
<section>
    <h1> Espace Okage </h1>

</section>


<?php
$_SESSION['bdd']->connect();
$uti=$_SESSION['bdd']->execute("SELECT * FROM utilisateurs");
//var_dump($uti);
//$resa=$_SESSION['bdd']->execute("SELECT reservations.debut,reservations.fin,reservations.id,utilisateurs.login  FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id");

$_SESSION['bdd']->close();





?><h2>Gestion _Utilisateurs</h2>
<table>
<thead>
    <tr>
        <th>Rang</th>
        <th>Pseudo</th>
        <th>Email</th>
        <th>Grade</th>
        <th>Supprimer??</th>

    </tr>
</thead>
</table>
<?php


foreach($uti as $utili)
{

?>


<?php ?>
<table>
<tbody>
    <tr>
    <td><?php echo $utili[0] ; ?> </td>
    <td><?php echo $utili[1] ; ?> </td>
    <td><?php echo $utili[3] ; ?> </td>
    <td><?php echo $utili[4] ; ?> </td>
    <td>
    <form method="post" action="admin.php" id="suppression">
    <button type="submit" id="submit" name="resat" value ="<?php echo $utili[0];?>">Supprimer</button></form>
    </td>
    </tr>
</tbody>
</table> </br>
<?php


//*suppression de l'utilisateurs(commentaires et article)
if(isset($_POST['resat']))
{
    $_SESSION['bdd']->delete();
    header('Location:admin.php');

}

}

$_SESSION['bdd']->connect();
$art=$_SESSION['bdd']->execute("SELECT * FROM articles");

$_SESSION['bdd']->close();

?></br></br>
<h2>Gestion _Articles</h2>
<table class= "ad">
<thead>
    <tr>
        <th>Id.Rapport</th>
        <th>Rang_utilisateur</th>
        <th>Village</th>
        <th>Rapports</th>
        <th>Date</th>
        <th>Supprimer??</th>

    </tr>
</thead>

</table>
<?php
foreach($art as $art3)
{

?>
<table class= "adb">
<tbody >
    <tr>
    <td><?php echo $art3[0] ; ?> </td>
    <td><?php echo $art3[2] ; ?> </td>
    <td><?php echo $art3[3] ; ?> </td>
    <td><?php echo $art3[1] ; ?> </td>
    <td><?php echo $art3[4] ; ?> </td>

    <td>
    <form method="post" action="admin.php" id="suppr">
    <button type="submit" id="submit" name="art" value ="<?php echo $art3[2];?>">Supprimer</button>
    </form>
    </td>
    </tr>
</tbodY>
  </table></br></br>
  <?php

//*suppression des articles
if(isset($_POST['art']))
 {
    $_SESSION['bdd']->SupprArticle();
    header('Location:admin.php');

 }
}
$_SESSION['bdd']->connect();
$com=$_SESSION['bdd']->execute("SELECT * FROM commentaires");
$_SESSION['bdd']->close();

?></br></br></br>
<h2>Gestion _Commentaires</h2>
<table>
<thead>
    <tr>

        <th>Id</th>
        <th>Id_Rapport</th>
        <th>Rang_utilisateur</th>
        <th>Missive</th>
        <th>Date</th>
        <th>Supprimer??</th>

    </tr>
</thead>

</table>
<?php
foreach($com as $com3)
{

?>
<table>
<tbody>
    <tr>
    <td><?php echo $com3[0] ; ?> </td>
    <td><?php echo $com3[2] ; ?> </td>
    <td><?php echo $com3[3] ; ?> </td>
    <td><?php echo $com3[1] ; ?> </td>
    <td><?php echo $com3[4] ; ?> </td>

    <td>
    <form method="post" action="admin.php" id="supprC">
    <button type="submit" id="submit" name="com" value ="<?php echo $com3[3];?>">Supprimer</button>
    </form>
    </td>
    </tr>
</tbody>
  </table>
  <?php
//*suppression des commentaires(thnks marceau)
if(isset($_POST['com']))
 {
    $_SESSION['bdd']->SupprCom();
    header('Location:admin.php');

 }
}

?>

</main>

<?php require 'footer.php'?>


</body>

</html>
