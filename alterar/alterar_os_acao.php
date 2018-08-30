<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$osname = $_POST['os'];
	$versao = $_POST['versao'];
	$table = 'os';
	

	if(empty($os) and empty($id) and empty($versao) )
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_os = '$id',  os_name = '$osname', version='$versao' WHERE cod_os = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>