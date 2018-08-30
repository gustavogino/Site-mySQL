<?php  
	 require 'connect.php';
	
	$name = $_POST['name'];
	$reputation =  $_POST['reputation'];
	

	if(empty($name) or empty($reputation))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO brand (name, reputation) 
		VALUES ('$name', '$reputation')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>