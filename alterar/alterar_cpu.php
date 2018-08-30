<?php
	require '../connect.php';

	$id = $_POST['id'];
		
	$table = 'cpu';

	$sql = "SELECT * FROM $table WHERE cod_cpu = $id";
                        
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
					<form action="alterar_cpu_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">CPU</th>
							</tr>
							<tr>
								<td> Código: </td>
								<td><input type="number" readonly="true" value="<?php echo "$id";?>" name="id"></td> 
							</tr>
							<tr>
								<td> Nome / Modelo: </td>
								<td><input type="text" value="<?php echo "$dado[cpu_model]";?>" name="nomecpu" ></td> 
							</tr>
							<tr>
								<td> Quant. Nucleos: </td>
								<td><input type="number" value="<?php echo "$dado[cores]";?>" name="nucleo" ></td> 
							</tr>
							<tr>
								<td> Clock: </td>
								<td><input type="number" step="0.1" value="<?php echo "$dado[clock]";?>" name="clock"></td> 
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