<?php
	require '../connect.php';

	$id = $_POST['id'];
		
	$table = 'camera';

	$sql = "SELECT * FROM $table WHERE cod_cam = $id";
                        
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
					<form action="alterar_camera_acao.php" method="POST">
						<table style="background:#FFFFFF; font-family: COURIER"; border = "4px" >
							<tr>
								<th colspan="4">CAMERA</th>
							</tr>
							<tr>
								<td> Código: </td>
								<td><input type="number" readonly="true" value="<?php echo "$id";?>" name="id"></td> 
							</tr>
							<tr>
								<td> Sensor: </td>
								<td><input type="number" value="<?php echo "$dado[sensor]";?>" name="sensor" ></td> 
							</tr>
							<tr>
								<td> Abertura: </td>
								<td><input type="number" step="0.1" value="<?php echo "$dado[aperture]";?>" name="abertura"  ></td> 
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