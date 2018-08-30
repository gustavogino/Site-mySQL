<?php  
	 require '../connect.php';
	
	$sensor = $_POST['sensor'];
	$aperture =  $_POST['abertura'];
	

	if(empty($sensor) or empty($aperture))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO camera (sensor, aperture) 
		VALUES ('$sensor', '$aperture')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>