<?php  
	require 'connect.php';
?>	
	<html>
		<head>
		</head>

		<body body background="img/background.jpg" bgproperties="fixed">
		
		<center><a href="index.php"><img src="img/logo.png" height="130" width="400"></a></h1>
<br><br>
		<table style="height: 57px;" width="559">
			<tbody>
				<tr>
					<td><a href="smart_1.php"><img src="img/smart.png" width="160" height="65" /></a></td>
					<td><a href="screen_1.php"><img src="img/screen.png" width="160" height="65" /></a></td>
					<td><a href="storege_1.php"><img src="img/storege.png" width="160" height="65" /></a></td>
					<td><a href="ram_1.php"><img src="img/ram.png" width="160" height="65" /></a></td>
					<td><a href="camera_1.php"><img src="img/camera.png" width="160" height="65" /></a></td>
					<td><a href="cpu_1.php"><img src="img/cpu.png" width="160" height="65" /></a></td>
					<td><a href="marca_1.php"><img src="img/marca.png" width="160" height="65" /></a></td>
					<td><a href="os_1.php"><img src="img/os.png" width="160" height="65" /></a></td>
				</tr>
			</tbody>
		</table>
		</body>
		<br><br><br><br>
		<img src="img/busca.png" >
		<br><br>
		<!-- Formulário Pesquisa-->
		<form action="pesquisa.php" method="POST">
		<table>
			<tbody>
				<tr>
					<td><b>Smartphone:</b> </td>
					<td><input type="text" placeholder="Nome do Smartphone" name="smartphone" ></td>
				</tr>
				<tr>
					<td><b>Marca:</b> </td>
					<td><input type="text" placeholder="Marca do Dispositivo" name="marca" ></td>
				</tr>
				<tr>
					<td><b>C&acirc;mera:</b></td>
					<td><input type="number" placeholder="Min. Câmera em Mpx" name="camera" ></td>
				</tr>
				<tr>
					<td><b>Memória RAM:</b></td>
					<td><input type="number" placeholder="Min. Memória RAM " name="ram" ></td>
				</tr>
				<tr>
					<td><b>Memória interna:</b></td>
					<td><input type="number" placeholder="Min. Memoria interna (GB)" name="memoria" ></td>
				</tr>
				<tr>
					<td><b>Pre&ccedil;o:</b></td>
					<td><input type="number" placeholder="Preço minímo" name="precomin" ></td>
				</tr>
				<tr>
					<td> </td>
					<td><input type="number" placeholder="Preço máximo" name="precomax" ></td>
				</tr>
				<tr>
					<td><b>Ordenar por:</b><br>
						<select name="order">
						  <option value="smart.price">Preço</option>
						  <option value="ram.ram_size">Memória RAM</option>
						  <option value="storage.rom_size">Memória ROM</option>
						  <option value="screen.size">Tela</option>
						  <option value="camera.sensor">Câmera</option>
						</select>
					</td>
					<td><br>
						  <input type="radio" name="ordena" value="asc" checked > <b>Crescente</b>
						  <input type="radio" name="ordena" value="desc"> <b>Decrescente</b>
						
					</td>
				</tr>
				</tbody>
			</table>
			<br>
			
				<input type="reset" Value="Apagar">
				<input type="submit" value="Enviar">
				
		</form>	
		
		<p><img src="img/estatistica.png" ></p>
		
		
<?php
	echo "<center><table bgcolor='white' border = 4px>
				<tr>
					<td>";
						//Media preço
						$query = "select avg(smart.price) from smart ";
						$result = mysqli_query($link, $query);
						list($mediapreco) = mysqli_fetch_row($result);
						$mediapreco = number_format($mediapreco, 2, ',', '.');
						echo "<b> Media:</b> R$ $mediapreco";
				echo "</td><td>";	
				
						//Media RAM
						$query = "select avg(ram_size) from smart as s inner join ram as r on s.cod_ram=r.cod_ram";
						$result = mysqli_query($link, $query);
						list($mediaram) = mysqli_fetch_row($result);
						$mediaram = number_format($mediaram, 2, ',', '.');
						echo "<b> Media RAM:</b> $mediaram";
						
				
				echo "</td>";
	echo "</td></tr><tr><td>";	
	
						//Quantidade de Celulares cadastrados
						$query = "select count(smart.price) from smart";
						$result = mysqli_query($link, $query);
						list($quantcel) = mysqli_fetch_row($result);
						echo " <b>Qnt. Cel:</b> $quantcel";	
						
				echo "</td><td>";		
						
						//Media ROM
						$query = "select avg(rom_size) from smart as s inner join storage as r on s.cod_rom=r.cod_rom";
						$result = mysqli_query($link, $query);
						list($mediarom) = mysqli_fetch_row($result);
						$mediarom = number_format($mediarom, 2, ',', '.');
						echo "<b> Media ROM:</b> $mediarom";
						
				
				echo "</td>";
						
	echo "</td></tr><tr><td>";
	
						//Valor da loja
						$query = "select sum(smart.price) from smart";
						$result = mysqli_query($link, $query);
						list($valorloja) = mysqli_fetch_row($result);
						$valorloja = number_format($valorloja, 2, ',', '.');
						echo "<b> Valor total da loja:<br></b> R$ $valorloja";
						
				echo "</td><td>";

						//CPU nota média
						$query = "select avg(r.clock*r.cores)/max(r.clock*r.cores)*10 from smart as s inner join cpu as r on s.cod_cpu=r.cod_cpu";
						$result = mysqli_query($link, $query);
						list($mediacpu) = mysqli_fetch_row($result);
						$mediacpu = number_format($mediacpu, 2, ',', '.');
						echo "<b> Processamento médio <br> Nota (0~10):</b> $mediacpu";
					
					echo "</td>";
					
						
								
	echo "</td></tr></table>";
	
								
?>
	
		</center>		
	</body>
</html>


