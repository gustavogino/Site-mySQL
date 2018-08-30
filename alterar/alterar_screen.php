<?php
	require '../connect.php';

	$id = $_POST['id'];
		
	$table = 'screen';

	$sql = "SELECT * FROM $table WHERE cod_screen = $id";
                        
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
					<form action="alterar_screen_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">SCREEN</th>
							</tr>
							<tr>
								<td> Código: </td>
								<td><input type="number" readonly="true" value="<?php echo "$id";?>" name="id"></td> 
							</tr>

							<tr>
								<td> Proteção: </td>
								<td><input type="text" name="protecao" value="<?php echo "$dado[protection]";?>" onFocus='this.value=""'></td> 
							</tr>
							<tr>
								<td> Tamanho: </td>
								<td><input type="number" name="tamanho" value="<?php echo "$dado[screen_size]";?>" onFocus='this.value=""' value="tamanho"></td> 
							</tr>
							<tr>
								<td> Resolução: </td>
								<td><input type="text" value="<?php echo "$dado[resolution]";?>" name="resolucao"></td> 
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