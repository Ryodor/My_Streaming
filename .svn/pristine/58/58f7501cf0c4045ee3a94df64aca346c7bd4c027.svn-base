<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "selatni";

$email= $_POST["email"];
$pseudo= $_POST["pseudo"];
$mdp= $_POST["mdp"];
$mdpc= $_POST["mdpc"];

if ((!empty($email)) && (!empty($pseudo)) && (!empty($mdp))
    && (!empty($mdpc)))
  {
    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=my_streaming", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e)
      {
	echo "Connection failed: " . $e->getMessage() . "\n";
      }
    $query = "SELECT Email FROM Users WHERE Email='$email';";
    $prep = $conn->prepare($query);
    $prep->execute();
    $arrAll = $prep->fetch();
    $prep->closeCursor();
    $prep = NULL;
    if ($arrAll['Email'] == $email)
      {
	$message = "Le compte existe deja";
	header("Location: ../html_php/inscription.php?var2=$message");
      }
    else
      {
	if (strlen($pseudo) >= 3 && strlen($pseudo) <= 20 && preg_match("/^[a-zA-Z]+[-_ ]?[a-zA-Z]+[-_ ]?[a-zA-Z]+$/", $pseudo))
	  if (strlen($mdp) >= 8 && strlen($mdp) <= 16)
	    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($mail) <= 150)
			if ($mdp == $mdpc)
			    {
			      $query = "INSERT INTO Users (ID, Role, Pseudo, Email, Password, Date_registration, Date_last_co) VALUES ('', '1', '$pseudo', '$email', MD5('mdp'), 'NOW()', NOW())";
			      $prep = $conn->prepare($query);
			      $prep->execute();
			      $message = "Votre compte a bien été créé.";
			      header("Location: ../html_php/connect.php?var1=$message");
			     }
			  else
			    {
			      $message = "Le mot de passe est different du mot de passe confirmer";
			      header("Location: ../html_php/inscription.php?var2=$message");
			    }
	      else
	      {
		$message = "L'adresse mail doit etre conforme a la norme RFC";
		header("Location: ../html_php/inscription.php?var2=$message");
	      }
	  else
	    {
	      $message = "Le password doit avoir entre 8 et 16 caractere et doit etre alphanumerique";
	      header("Location: ../html_php/inscription.php?var2=$message");
	    }
	else
	  {
	    $message = "Le login doit contenir que des caractere alpha numerique et doit avoir moins de 8 caractere";
	    header("Location: ../html_php/inscription.php?var2=$message");
	  }
     }
    $prep->closeCursor();
    $prep = NULL;
  }
else
  {
    $message = "Veuillez remplir tout les champs";
    header("Location: ../html_php/inscription.php?var2=$message");
  }

?>