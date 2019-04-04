#!/usr/bin/env php
   <?php
   // con.php for conn in /home/pruvos_j/web_commerce/etape3/pruvos_j/pruvost
   // 
   // Made by PRUVOST joffrey
   // Login   <pruvos_j@etna-alternance.net>
   // 
   // Started on  Mon Nov  7 13:43:05 2016 PRUVOST joffrey
// Last update Fri Nov 18 09:44:01 2016 PRUVOST joffrey
   //
session_destroy();
session_unset();
session_start();
$servername = "localhost";
$username = "root";
$password = "selatni";

$mail = $_POST["pseudo"];
$pass = $_POST["mdp"];

if ((!empty($mail)) && (!empty($pass)))
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
    echo "ici ?";
    $pass = MD5($pass);
    $query = "SELECT Email, Password, Role, Pseudo FROM Users WHERE Email='$mail' AND Password='$mdp'";
    $prep = $conn->prepare($query);
    $prep->execute();
    $arrAll = $prep->fetch();
    $log = $arrAll['Pseudo'];
    $_SESSION["Pseudo"] = $log;
    if (!empty($arrAll))
      {
	echo "Bonjour";
	if ($arrAll['Role'] == 2)
	  {
	    echo $arrAll['Email'];
	    echo $arrAll['Pass_word'];
	    header("Location: home.php");
	  }
	else
	  {
	    header("Location: home.php");
	  }
      }
    else
      {
	echo $arrAll['Email'];
	echo $arrAll['Password'];
	$message = "Email ou Mot de pase non valide";
	header("Location: connect.php?var1=$message");
      }
    $prep->closeCursor();
  }
else
  {
    $message = "Completer les champs s'il vous plait";
    header("Location: connect.php?var1=$message");
  }
?>