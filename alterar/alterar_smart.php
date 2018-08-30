<?php
	require '../connect.php';

	$id = $_POST['id'];
		
	$table = 'smart';

	$sql = "SELECT * FROM $table WHERE cod_smart = $id";
                        
    $con = $link->query($sql) or die ($link->error);	

    while($dado = $con->fetch_array())
	{
?>
<html>
		<head>
		</head>

		<body body background="../img/background.jpg" bgproperties="fixed">
		<center>
		<a href="../index.php"><img src="../img/logo.png" height="130" width="400"></a>
		<br><br>
		<a href="../index.php"><img src="../img/alterar_button.png" height="60" width="270"></a>
		</body>
		<br>
			<table>
				<td>
					<form action="alterar_smart_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SMARTPHONE</th>
							</tr>
							<tr>
								<td> Código: </td>
								<td><input type="number" readonly="true" value="<?php echo "$id";?>" name="id"></td> 
							</tr>
							<tr>
								<td> Modelo: </td>
								<td><input type="text" value="<?php echo "$dado[model]";?>" name="modelo" ></td> 
							</tr>
							<tr>
								<td> Preço: </td>
								<td><input type="number" value="<?php echo "$dado[price]";?>" name="preco"  value="preco"></td> 
							</tr>
							<tr>
								<td> Espessura: </td>
								<td><input type="number" value="<?php echo "$dado[espessura]";?>" name="espessura"></td> 
							</tr>
							<tr>
								<td> Cor: </td>
								<td><input type="text" name="cor" value="<?php echo "$dado[color]";?>"  ></td> 
							</tr>	
							<tr>	
								<td> Memória ROM: </td>
								<td>
										<select name ="rom">
											<?php 
												
												$sql = "SELECT * from storage";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_rom'];
										 				$sensor = $dados['rom_size'];
										 				
									
										 				echo"<option value= '$id'>$sensor Gb</option>";
										 			}
											?>
										</select>
								</td>
							</tr>	
							<tr>
								<td> OS: </td>
								<td>
										<select name ="os">
											<?php 
												
												$sql = "SELECT* from os";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_os'];
										 				$sensor = $dados['os_name'];
										 				$aperture = $dados['version'];
									
										 				echo"<option value= '$id'>OS: $sensor & Versão: $aperture</option>";
										 			}
											?>
										</select>
								</td> 
							</tr>
							<tr>
								<td> Marca  / Empresa: </td>
								<td>
										<select name ="marca">
											<?php 
												
												$sql = "SELECT* from brand";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_brand'];
										 				$sensor = $dados['name'];
										 				$aperture = $dados['reputation'];
									
										 				echo"<option value= '$id'>Nome: $sensor & Reputação: $aperture</option>";
										 			}
											?>
										</select>
								</td> 
							</tr>	
							<tr>
								<td> CPU: </td>
								<td>
										<select name ="cpu">
											<?php 
												
												$sql = "SELECT* from cpu";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_cpu'];
										 				$model_cpu = $dados['cpu_model'];
										 				$clock = $dados['clock'];
														$cores = $dados['cores'];
									
										 				echo"<option value= '$id'>Cpu: $model_cpu & Clock: $clock & Nucleo: $cores</option>";
										 			}
											?>
										</select>
								</td> 
							</tr>	
							<tr>
								<td> Tela: </td>
								<td>
										<select name ="tela">
											<?php 
												
												$sql = "SELECT* from screen";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_screen'];
										 				$sensor = $dados['protection'];
										 				$aperture = $dados['screen_size'];
														$res = $dados['resolution'];
									
										 				echo"<option value= '$id'>Tela: $sensor & Tam.: $aperture & Res.: $res</option>";
										 			}
											?>
										</select>
								</td>
							</tr>	
							<tr>
								<td> Memória RAM: </td>
								<td>
										<select name ="ram">
											<?php 
												
												$sql = "SELECT* from ram";
										 		$result = mysqli_query($link, $sql);
										 				
										 			while($dados = mysqli_fetch_array($result))
										 			{
										 				$id = $dados['cod_ram'];
										 				$sensor = $dados['ram_size'];
										 				$aperture = $dados['speed'];
									
										 				echo"<option value= '$id'> $sensor GB & $aperture Mhz</option>";
										 			}
											?>
										</select>
								</td> 
							</tr>
							<tr>
								<td> Câmera: </td>
								<td>
										<select name ="cam">
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
						</table>
						<br>
						<center><input type="reset" Value="Apagar">
				<input type="submit" value="Atualizar"></center>
					</form>
				</td>
			</table>

		</center>
	</body>
</html>
<?php
	}
?>