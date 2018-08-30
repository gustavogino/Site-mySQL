<?php  
	 require '../connect.php';
	
	$size = $_POST['quantidade'];
	$speed =  $_POST['velocidade'];
	

	if(empty($size) or empty($speed))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO ram (ram_size, speed) 
		VALUES ('$size', '$speed')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>