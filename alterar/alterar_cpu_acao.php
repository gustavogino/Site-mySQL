<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$prot = $_POST['nomecpu'];
	$tam = $_POST['clock'];
	$nucleo = $_POST['nucleo'];

	$table = 'cpu';
	

	if(empty($prot) and empty($id) and empty($tam) and empty($nucleo))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_cpu = '$id',  cpu_model = '$prot',  clock = '$tam', cores='$nucleo' WHERE cod_cpu = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>