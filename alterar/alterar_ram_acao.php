<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$ram = $_POST['quant'];
	$vel = $_POST['vel'];
	$table = 'ram';
	

	if(empty($ram) and empty($id) and empty($vel))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_ram = '$id',  ram_size = '$ram', speed = '$vel' WHERE cod_ram = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>