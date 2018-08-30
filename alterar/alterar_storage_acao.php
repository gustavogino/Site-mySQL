<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$rom = $_POST['rom'];
	$table = 'storage';
	

	if(empty($rom) or empty($id))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_rom = '$id',  rom_size = '$rom' WHERE cod_rom = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>