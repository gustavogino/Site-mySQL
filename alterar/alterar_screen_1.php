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
					<form action="alterar_screen.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SCREEN</th>
							</tr>
							<tr>
								<td> Tela: </td>
								<td>
										<select name ="id">
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