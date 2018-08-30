<?php 

	require '../connect.php';
	
	$id = $_POST['id'];
	$modelo = $_POST['modelo'];
	$preco = $_POST['preco'];
	$esp = $_POST['espessura'];
	$cor = $_POST['cor'];
	$rom = $_POST['rom'];
	$os = $_POST['os'];
	$marca= $_POST['marca'];
	$cpu= $_POST['cpu'];
	$screen= $_POST['tela'];
	$ram= $_POST['ram'];
	$cam= $_POST['cam'];
	
	
	
	$table = 'smart';
	

	if(empty($modelo) and empty($id) and empty($preco) and empty($esp) and empty($cor))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "UPDATE $table SET cod_smart = '$id',  model = '$modelo',  price = '$preco',  espessura = '$esp',  color = '$cor' , cod_rom = '$rom', cod_os  = '$os' , cod_brand = '$marca' , cod_cpu = '$cpu' , cod_screen = '$screen' ,  cod_ram = '$ram' , cod_cam = '$cam' WHERE cod_smart = '$id'";

		$result = mysqli_query($link, $query);

		echo "<script>alert('Atualizado com sucesso!'); history.back();</script>";
	} 

?>