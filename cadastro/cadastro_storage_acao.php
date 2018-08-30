<?php  
	 require '../connect.php';
	
	$size = $_POST['storage'];
	

	if(empty($size))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO storage (rom_size) 
		VALUES ('$size')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>