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
		<a href="../index.php"><img src="../img/alterar_button.png" height="60" width="270"></a>
		</body>
		<br>
			<table>
				<td>
					<form action="alterar_ram.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">MEMÓRIA RAM</th>
							</tr>
							<tr>
								<td> RAM: </td>
								<td>
										<select name ="id">
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
						</table>
						<br>
						<center>
						<input type="submit" value="Selecionar">
						</center>
					</form>
				</td>
			</table>

		</center>
	</body>
</html>