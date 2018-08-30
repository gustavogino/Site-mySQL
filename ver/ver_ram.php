<html>
<center><a href="../index.php"><img src="../img/logo.png" height="130" width="400"></a></h1>
<br>
<a href="../index.php"><img src="../img/relatorio.png" height="60" width="270"></a>
<br>
</html>
<?php  
	 require '../connect.php';	

	$tableUser = 'ram';

	
	$query = "SELECT *FROM $tableUser";
	

	$result = mysqli_query($link, $query);


	echo "	<html>
				<head><title>Memória RAM</title></head>
				
		 ";

	
	echo "<center><table style= 'background:#FFFFFF'; border = 4px>
					<center><tr>
						<td><b> Código </b></td>
						<td><b> Qtd. Memória </b></td>
						<td><b> Velocidade (Mhz)</b> </td>
					</tr>

		";

	while (list($cod_ram, $size, $speed) = mysqli_fetch_row($result))
	{	
		echo "
					<tr>
						<th></b>$cod_ram</b> </th>
						<td></b>$size</b> </td>
						<td>$speed</td>
					</tr></center>
			";
	}
	echo"	</table></center>
			</body>
			</html>
		";
?>
<html>
<body body background="../img/background.jpg" bgproperties="fixed">
</html>