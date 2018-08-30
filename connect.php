<?php 

$servername = "localhost";
$username = "root";
$password = "";


	// Create connection
	$link = new mysqli($servername, $username, $password);

	if ($link->connect_error) 
	{
		die("Connection failed: " . $link->connect_error);
	}

	$dbname = 'trabalhofinal';

	$db = mysqli_select_db($link, $dbname);

	if (!$db)
	{	  
		die ('Database não selecionado : ' . mysql_error());  
	}

?>
