<html>
<center><a href="../index.php"><img src="../img/logo.png" height="130" width="400"></a></h1>
<br>
<a href="../index.php"><img src="../img/relatorio.png" height="60" width="270"></a>
<br>
</html>
<?php  
	 require '../connect.php';	

	$tableUser = 'smart';

	
	$query = "select smart.cod_smart, model, smart.color, price, cpu.cpu_model, ram.ram_size, camera.sensor, os.os_name, storage.rom_size, screen.screen_size from smart,brand, cpu, ram, os , camera, storage, screen where brand.cod_brand=smart.cod_brand and camera.cod_cam=smart.cod_cam and cpu.cod_cpu=smart.cod_cpu and os.cod_os=smart.cod_os and ram.cod_ram=smart.cod_ram and smart.cod_screen=screen.cod_screen and smart.cod_rom=storage.cod_rom";
	

	$result = mysqli_query($link, $query);


	echo "	<html>
				<head><title>Smartphone</title></head>
				
		 ";

	
	echo "<center><table style= 'background:#FFFFFF'; border = 4px>
					<center><tr>
						<td><b> Código </b></td>
						<td><b> Nome </b></td>
						<td> <b> Cor </b></td>
						<td> <b>Preço (R$)</b></td>
						<td> <b>CPU</b> </td>
						<td> <b>RAM </b></td>
						<td> <b>Camera </b></td>
						<td> <b>Sistema</b></td>
						<td> <b>ROM </b></td>
						<td> <b>Tamanho de Tela </b></td>


						
					</tr>

		";
		

	while (list($cod_smart, $model, $price, $cor, $cpu, $ram, $camera, $sistema, $rom, $tam) = mysqli_fetch_row($result))
	{	
		echo "
					<tr>
						<th></b>$cod_smart</b> </th>
						<td></b>$model</b> </td>
						<td>$price</td>
						<td>$cor</td>
						<td>$cpu</td>
						<td>$ram</td>
						<td>$camera</td>
						<td>$sistema</td>
						<td>$rom</td>
						<td>$tam</td>

					</tr></center>
			";
	}
	echo"	</table></center>
			</body>
			</html>
		";
?>
<html>
<body body background="../img/background.jpg" bgproperties="fixed">
</html>