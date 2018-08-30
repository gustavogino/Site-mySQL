<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$sensor = $_POST['sensor'];
	$abertura = $_POST['abertura'];
	$table = 'camera';
	

	if(empty($sensor) and empty($id) and empty($abertura))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_cam = '$id',  sensor = '$sensor',  aperture = '$abertura' WHERE cod_cam = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>