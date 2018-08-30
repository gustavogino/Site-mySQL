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
					<form action="cadastro_brand_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">MARCA</th>
							</tr>
							<tr>
								<td> Empresa: </td>
								<td><input type="text" placeholder="Samsung" name="marca" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Reputação: </td>
								<td><input type="number" placeholder="4 (1~5)" name="reputacao" onFocus='this.value=""' ></td> 
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