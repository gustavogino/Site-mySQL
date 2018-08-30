<?php  
	 require '../connect.php';
	
	$cpu_model = $_POST['nomecpu'];
	$clock =  $_POST['clock'];
	$cores = $_POST['nucleo'];
	

	if(empty($cpu_model) or empty($clock) or empty($cores))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO cpu (cpu_model, clock, cores) 
		VALUES ('$cpu_model', '$clock','$cores')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>