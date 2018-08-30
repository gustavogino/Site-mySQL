<?php  
	 require 'connect.php';
	
	$os_nome = $_POST['os_nome'];
	$version =  $_POST['version'];
	

	if(empty($os_nome) or empty($version))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO os (os_nome, version) 
		VALUES ('$os_nome', '$version')";

		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>