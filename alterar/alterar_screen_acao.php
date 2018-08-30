<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$prot = $_POST['protecao'];
	$tam = $_POST['tamanho'];
	$res = $_POST['resolucao'];
	$table = 'screen';
	

	if(empty($prot) and empty($id) and empty($tam) and empty($res))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_screen = '$id',  protection = '$prot',  screen_size = '$tam',  resolution = '$res' WHERE cod_screen = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>