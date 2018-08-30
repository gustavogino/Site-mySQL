<?php  
	 require '../connect.php';
	
	$protection = $_POST['protecao'];
	$size =  $_POST['tamanho'];
	$resolution = $_POST['resolucao'];
	

	if(empty($protection) or empty($size) or empty($resolution))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO screen (protection, screen_size, resolution) 
		VALUES ('$protection', '$size','$resolution')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>