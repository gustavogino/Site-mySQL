<?php
	require '../connect.php';
?>
<html>
		<head>
		</head>

		<body body background="../img/background.jpg" bgproperties="fixed">
		<center>
		<a href="../index.php"><img src="../img/logo.png" height="130" width="400"></a>
		<br><br>
		<a href="../index.php"><img src="../img/cadastro.png" height="65" width="200"></a>
		</body>
		
			<table>
				<td>
					<form action="cadastro_celular_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SMARTPHONE</th>
							</tr>
							<tr>
								<td> Modelo: </td>
								<td><input type="text" placeholder="Galaxy S8" name="modelo" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Preço: </td>
								<td><input type="number" step="0.01" placeholder="2999.00" name="preco" onFocus='this.value=""' value="preco"></td> 
							</tr>
							<tr>
								<td> Espessura: </td>
								<td><input type="number" step="0.1" placeholder="8.8 (em mm)" name="espessura"></td> 
							</tr>
								<tr>
								<td> Cor: </td>
								<td><input type="text" name="cor" placeholder="Preto" onFocus='this.value=""' ></td> 
							</tr>
							</tr>
							<tr>
								<td> Câmera: </td>
								<td>
										<select name ="camera">
											<?php 
												
												$sql = "SELECT* from camera";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_cam'];
										 				$sensor = $dados['sensor'];
										 				$aperture = $dados['aperture'];
									
										 				echo"<option value= '$id'>Megapixel: $sensor & Abertura: $aperture</option>";
										 			}
											?>
										</select>
								</td>
							</tr>	
							<tr>
								<td>CPU: </td>
								<td>
										<select name= 'cpu' width="200">
											<?php 
												
												$sql = "SELECT* from cpu";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id1 = $dados['cod_cpu'];
										 				$cpu_model = $dados['cpu_model'];
										 				$clock = $dados['clock'];
										 				$cores = $dados['cores'];
									
										 				echo"<option value= '$id1'> CPU: $cpu_model & Clock: $clock & Cores: $cores</option>";
										 			}
											?>
										</select>
								</td>
							</tr>
							<tr>
								<td>Sistema Operacional: </td>
								<td>
										<select name= 'so' width="200">
											<?php 
												
												$sql = "SELECT* from os";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id2 = $dados['cod_os'];
										 				$os_name = $dados['os_name'];
										 				$version = $dados['version'];
									
										 				echo"<option value= '$id2'>SO:$os_name & Versão: $version</option>";
										 			}
											?>
										</select>
								</td>
							</tr>
							<tr>
								<td>Marca: </td>
								<td>
										<select name= 'marca' width="200">
											<?php 
												
												$sql = "SELECT* from brand";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id3 = $dados['cod_brand'];
										 				$brand_name = $dados['name'];
										 				$reputation = $dados['reputation'];
									
										 				echo"<option value= '$id3'>Marca: $brand_name & Reputação: $reputation</option>";
										 			}
											?>
										</select>
								</td>
							</tr>
							<tr>
								<td>Memória RAM: </td>
								<td>
										<select name= 'ram' width="200">
											<?php 
												
												$sql = "SELECT* from ram";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id4 = $dados['cod_ram'];
										 				$ram_size = $dados['ram_size'];
										 				$speed = $dados['speed'];
									
										 				echo"<option value= '$id4'>Gb:$ram_size Speed: $speed</option>";
										 			}
											?>
										</select>
								</td>
							</tr>
							<tr>
								<td>Memória ROM: </td>
								<td>
										<select name= 'rom' width="200">
											<?php 
												
												$sql = "SELECT* from storage";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id5 = $dados['cod_rom'];
										 				$rom_size = $dados['rom_size'];
									
										 				echo"<option value= '$id5'>Tamanho: $rom_size</option>";
										 			}
											?>
										</select>
								</td>
							</tr>
							<tr>
								<td>Tipo de Tela: </td>
								<td>
										<select name= 'tela' width="200">
											<?php 
												
												$sql = "SELECT* from screen";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id6 = $dados['cod_screen'];
										 				$protection = $dados['protection'];
										 				$screen_size= $dados['screen_size'];
										 				$resolution= $dados['resolution'];
									
										 				echo"<option value= '$id6'>Prot: $protection & Tamanho:$screen_size & Resolução: $resolution</option>";
										 			}
											?>
										</select>
								</td>
							</tr>
						</table>
						<br>
						<center><input type="reset" Value="Apagar">
						<input type="submit" value="Enviar"></center>
					</form>
				</td>
			</table>

		</center>
	</body>
</html>