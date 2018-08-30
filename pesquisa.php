<html>
<body body background="img/background.jpg" bgproperties="fixed">
<center><a href="index.php"><img src="img/logo.png" height="130" width="400"></a></h1>
<br>
<a href="index.php"><img src="img/relatorio.png" height="60" width="270"></a>
<br>
</html>
<?php  
	
	require 'connect.php';		
	
	$smartphone = $_POST['smartphone'];
	$marca= $_POST['marca'];
	$memoria= $_POST['memoria'];
	$ram= $_POST['ram'];
	$cam= $_POST['camera'];
	$precomin = $_POST['precomin'];
	$precomax = $_POST['precomax'];
	$order = $_POST['order'];
	$ord = $_POST['ordena'];
	


	if (empty($smartphone) and empty($marca) and empty($memoria) and empty($cam) and empty($ram) and empty($precomin) and empty($precomax))
	{
		echo "<script>alert('Defina alguma busca!'); history.back();</script>";
	}
	else
	{
	if (empty($precomin)){
		$precomin=0;
	};	
	if (empty($precomax)){
		$precomax=999999;
	};	
	if (empty($cam)){
		$cam=0;
	};
	if (empty($memoria)){
		$memoria=0;
	};
	if (empty($ram)){
		$ram=0;
	};
	
		$query = "select smart.cod_smart, smart.model, brand.name , smart.color, price,
					cpu.cpu_model, ram.ram_size, camera.sensor, os.os_name, storage.rom_size, screen.screen_size
					from smart,brand, cpu, ram, os , camera, storage, screen
					where brand.cod_brand=smart.cod_brand and 
					camera.cod_cam=smart.cod_cam and
					cpu.cod_cpu=smart.cod_cpu and os.cod_os=smart.cod_os and ram.cod_ram=smart.cod_ram and 
					smart.cod_screen=screen.cod_screen 
					and smart.cod_rom=storage.cod_rom and					
					smart.model like '%$smartphone%' and brand.name like '%$marca%' and camera.sensor>='$cam' and 
					ram.ram_size>='$ram' and storage.rom_size>='$memoria' and smart.price>='$precomin' and 
					smart.price<='$precomax' order by $order $ord";
		$result = mysqli_query($link, $query);

		echo "	<html>
					<head><title>Pesquisa</title></head>
					
			 ";

		echo "<center><table style= 'background:#FFFFFF'; border = 4px>
						<center><tr>
							<td><b> Código </b></td>
							<td><b> Smartphone </b></td>
							<td><b> Marca </b></td>
							<td><b> Cor </b></td>
							<td><b> Preço </b></td>
							<td><b> CPU </b></td>
							<td><b> Memória RAM </b></td>
							<td><b> Câmera </b></td>
							<td><b> Sistema Operacional </b></td>
							<td><b> Memória ROM </b></td>
							<td><b> Tam. de Tela </b></td>
						</tr>

			";

		while (list($codigo1, $smart1, $modelo1, $cor1, $preco1, $cpu1, $ram1, $camera1, $os1, $rom1, $tela1) = mysqli_fetch_row($result))
		{	
			echo "
						<tr>
							<td></b>$codigo1</td>
							<td></b>$smart1</td>
							<td></b>$modelo1</td>
							<td></b>$cor1</td>
							<td></b>R$ $preco1</td>
							<td></b>$cpu1</td>
							<td></b>$ram1 GB</td>
							<td></b>$camera1 Mp</td>
							<td></b>$os1</td>
							<td></b>$rom1 GB</td>
							<td></b>$tela1 Pol.</td>
						</tr></center>
				";
		}
		echo"	</table></center>
				</body>
				</html>
			";
		}
?>