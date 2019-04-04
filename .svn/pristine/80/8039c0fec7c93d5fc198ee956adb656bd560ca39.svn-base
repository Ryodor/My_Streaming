<?php
session_destroy();
session_unset();
session_start();
$nop = "Non connecté";
$_SESSION["Login"] = $nop;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/connect.css">
    <title>Fluxy</title>
</head>
  <body>
    <br/>
    <h1 id="titre">Fluxy</h1>

<!--Menu HTML-->
      <nav id="nav">
   <ul id="menu">
      <li><a href="home.php">ACCUEIL</a></li>
      <li><a href="#">CATEGORIES</a>
      <ul>
         <li id="sous_menu"><a href="justice_league.php">Action</a></li>
         <li><a href="avengers.php">Comédie</a></li>
         <li><a href="exclusive.php">Documentaire</a></li>
         <li><a href="guardians_of_the_galaxy.php">Fantastique</a></li>
         <li><a href="suicide_squad.php">Science Fiction</a></li>
      </ul>
      </li>
      <li><a href="#">VOTRE COMPTE</a>
        <ul>
         <li id="sous_menu"><a href="comment.php">Mes Commentaires</a></li>
         <li><a href="connect.php">Connexion</a></li>
         <li><a href="inscription.php">Inscription</a></li>
         </ul>
      </nav>
      <br/><br/>

  <h3 id="best_movie">Connecter vous ici</h3><br/>

<form method="post" action="../php/svr_con.php">
        <table id="tab_con" style="width:60%">
      <tr id="tr_con">
        <th><p>Login: <input type="text" name="pseudo" placeholder="Qui êtes vous?"/></p><br/></th>
        <th><p>Mot de Passe : <input type="text" name="mdp"  placeholder="Prouvez le!" /></p><br/></th>
      </tr>
</table>
<table id="tab_con" style="width:30%">
	<tr>
            <th><input type="submit" value="Connexion"></th>
	</tr>
</table>
      </form>
 <?php echo $_GET["var1"]; ?>
 
            <br/><br/>
<h4 id="copyright">Créé par SELATNI Ryad</h4>
  </body>
</html>