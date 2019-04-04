  <?php
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
    
    //$pass = MD5($pass);
    $query = "SELECT Email, Password, Role, Pseudo FROM Users WHERE Pseudo='$mail' AND Password='$pass'";
    $prep = $conn->prepare($query);
    $prep->execute();
    $arrAll = $prep->fetch();
    $log = $arrAll['Pseudo'];
    $_SESSION["Login"] = $log;

    if (!empty($arrAll))
      {
	if ($arrAll['Role'] == 2)
	  {
	    header("Location: ../html_php/admin_comment.php");
	  }
	else
	  {
	    header("Location: ../html_php/home.php");
	  }
      }
    else
      {
	$message = "E-mail ou Mot de passe Faux";
	header("Location: ../html_php/connect.php?var1=$message");
      }
    $prep->closeCursor();
  }
else
  {
    $message = "Completer les champs svp";
    header("Location: ../html_php/connect.php?var1=$message");
  }
?>