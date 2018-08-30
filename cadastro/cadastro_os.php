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
					<form action="cadastro_os_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SISTEMA OPERACIONAL</th>
							</tr>
							<tr>
								<td> OS: </td>
								<td><input type="text" placeholder="Android" name="os" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Versão: </td>
								<td><input type="number" step="0.1" placeholder="7.0" name="versao" onFocus='this.value=""' ></td> 
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