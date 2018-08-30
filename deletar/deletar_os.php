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
		<a href="../index.php"><img src="../img/deletar_2.png" height="60" width="270"></a>
		<br>
		</body>
		<br>
			<table>
				<td>
					<form action="deletar_os_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SISTEMA OPERACIONAL</th>
							</tr>
							<tr>
								<td> OS: </td>
								<td>
										<select name ="id">
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
	
						</table>
						<br>
						<center><input type="submit" value="Deletar"></center>
					</form>
				</td>
			</table>

		</center>
	</body>
</html>