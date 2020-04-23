<header>
    <?php
date_default_timezone_set('UTC');


if (isset($_SESSION['login']))
 {
    $login = $_SESSION['login'];
    $today = date("d.m.y")
?>

<nav role="navigation">
<div id="menu2">
<input type="checkbox" />
   
   <span></span>
   <span></span>
   <span></span>
    <ul id="menu">
        <?php 
        if($_SESSION['id_droits'] == 1337)
        {
        ?>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="News.php"> News</a></li>
            <li><a href="admin.php">Admin</a>
            <li><a href="profil.php">profil</a>
            <li><a href="allArticle.php">Article</a>
            <li><a href="creer-article.php">Add Art.</a></li>
            <li><a href="creer-categories.php">Add Cat.</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        <?php
        }
        if ($_SESSION['id_droits'] == 42) 
        {?>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="News.php"> News</a></li>
            <li><a href="modo.php">modérateur</a>
            <li><a href="profil.php">profil</a>
            <li><a href="allArticle.php">Article</a>
            <li><a href="creer-article.php">Add Art.</a></li>
            <li><a href="creer-categories.php">Add Cat.</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        <?php
        }
        if ($_SESSION['id_droits'] == 1) 
        {?>
           <li><a href="index.php">Accueil</a></li>
           <li><a href="News.php"> News</a></li>
           <li><a href="allArticle.php">Article</a>
            <li><a href="profil.php">Mon compte</a></li>
            <li><a href="creer-article.php">Add Art.</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        <?php
        }
        ?>
        
        

    </ul>
    </div>
 </nav>
<?php 
}
else
 {
?>
<nav role="navigation">
<div id="menu2">
<input type="checkbox" />
<span></span>
   <span></span>
   <span></span>
    <ul id="menu">
            <li><a href="index.php"> Accueil</a></li>
            <li><a href="news.php"> News</a></li>
            <li><a href="inscription.php"> Inscription</a></li>
            <li><a href="connexion.php"> Connexion</a></li> 
            
            
             
     </ul>
</nav>

<?php
 }
?>

</header>