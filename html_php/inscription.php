<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/inscription.css">
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

<!--Les films les mieux noté!-->

   <h3 id="best_movie">Inscrivez-vous ici</h3><br/>

<!-- tableau d'inscription-->

  <form method="post" action="../php/add_user.php">
        <table id="tab_ins" style="width:30%">
      <tr>
        <th><p>E-mail </th>
        <th><input type="text" name="email" placeholder="Entrer votre mail"/></p><br/></th>
      </tr>
      <tr>
        <th><p>Login </th>
        <th><input type="text" name="pseudo" placeholder="Ainsi qu'un pseudo"/></p><br/></th>
      </tr>  
      <tr>
        <th><p>Mot de passe </th>
        <th><input type="text" name="mdp" placeholder="Et un mot de passe"/></p><br/></th>
      </tr> 
       <tr>
        <th><p>Retaper votre mot de passe </th>
        <th><input type="text" name="mdpc" placeholder="Encore une fois"/></p><br/></th>
      </tr>
      </table>
      <table id="tab_sub" style="width:30%">
      <tr>
        <th><input type="submit" value="Inscription"></th>
      </tr>
    </table>
  </form>
  <?php echo $_GET["var2"] ?>

    <br/><br/>
<h4 id="copyright">Créé par SELATNI Ryad</h4>
	</body>
</html>