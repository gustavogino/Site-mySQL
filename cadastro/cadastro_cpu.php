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
					<form action="cadastro_cpu_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">CPU</th>
							</tr>
							<tr>
								<td> Nome / Modelo: </td>
								<td><input type="text" placeholder="Snapdragon 835" name="nomecpu" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Quant. Nucleos: </td>
								<td><input type="number" placeholder="8" name="nucleo" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Clock: </td>
								<td><input type="number" step="0.1" placeholder="2.2 (em Ghz)" name="clock"></td> 
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