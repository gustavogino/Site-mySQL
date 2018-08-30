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
					<form action="cadastro_screen_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SCREEN</th>
							</tr>
							<tr>
								<td> Proteção: </td>
								<td><input type="text" name="protecao" placeholder="Gorilla Glass" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Tamanho: </td>
								<td><input type="number" step="0.1" name="tamanho" placeholder="5.5" onFocus='this.value=""' value="tamanho"></td> 
							</tr>
							<tr>
								<td> Resolução: </td>
								<td><input type="text" placeholder="1920x1080" name="resolucao"></td> 
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