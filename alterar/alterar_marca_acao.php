<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$prot = $_POST['marca'];
	$tam = $_POST['reputacao'];

	$table = 'brand';
	

	if(empty($prot) and empty($id) and empty($tam))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_brand = '$id',  name = '$prot',  reputation = '$tam' WHERE cod_brand = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>