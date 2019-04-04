<?php

function        path_poster($title)
{
  $servername = "localhost";
  $username = "root";
  $password = "selatni";
  $dbname = "my_streming";

  try
    {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT Path_poster FROM Details_mov_ser WHERE Title='$title'";
      $res = $conn->query($sql);
      $line = $res->fetch();
      
      echo $line['Path_poster'];
    }
  catch(PDOException $e)
    {
      echo "ERREUR\n" . "<br>" . $e->getMessage();
    }
  $conn = null;
}

function        product_sale($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

  try
    {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT prix FROM Hero WHERE hero='$hero'";
      $res = $conn->query($sql);
      $line = $res->fetch();
      
      echo $line['prix'];
    }
  catch(PDOException $e)
    {
      echo "ERREUR\n" . "<br>" . $e->getMessage();
    }
  $conn = null;
}

function        product_description($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT description FROM Hero WHERE hero='$hero'";
	$res = $conn->query($sql);
	$line = $res->fetch();

	echo $line['description'];
      }
    catch(PDOException $e)
      {
	echo "ERREUR\n" . "<br>" . $e->getMessage();
      }
    $conn = null;
}

function        product_group($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

      try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT groupe FROM Hero WHERE hero='$hero'";
	  $res = $conn->query($sql);
	  $line = $res->fetch();

	  echo $line['groupe'];
	}
      catch(PDOException $e)
	{
	  echo "ERREUR\n" . "<br>" . $e->getMessage();
	}
      $conn = null;
}

function        product_name($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

      try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT hero_name FROM Hero WHERE hero='$hero'";
	  $res = $conn->query($sql);
	  $line = $res->fetch();

	  echo $line['hero_name'];
	}
      catch(PDOException $e)
	{
	  echo "ERREUR\n" . "<br>" . $e->getMessage();
	}
      $conn = null;
}