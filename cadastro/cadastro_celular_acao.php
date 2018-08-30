<?php  
	 require '../connect.php';
	
	$model = $_POST['modelo'];
	$price =  $_POST['preco'];
	$esp = $_POST['espessura'];
	$cor = $_POST['cor'];
	$camera = $_POST['camera'];
	$cpu = $_POST['cpu'];
	$so = $_POST['so'];
	$marca = $_POST['marca'];
	$ram = $_POST['ram'];
	$rom = $_POST['rom'];
	$tela = $_POST['tela'];

	if(empty($model) or empty($price) or empty($esp) or empty($cor) or empty($camera) or empty($cpu) or empty($so) or empty($marca) or empty($ram) or empty($rom) or empty($tela))
	{
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}
	else
	{
		$query = "INSERT INTO smart (model, price, espessura, color, cod_rom, cod_os, cod_brand, cod_cpu, cod_screen, cod_ram, cod_cam) 
		VALUES ('$model', '$price','$esp', '$cor', '$rom', '$so', '$marca', '$cpu', '$tela', '$ram' , '$camera')";


		$result = mysqli_query($link, $query);
	
	echo "<script>alert('Casdatro efetuado com sucesso!');history.back(); </script>";
	}

?>