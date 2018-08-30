<?php 
	
	require '../connect.php';	

	$id = $_POST['id'];
	
	$table1 = 'ram';
	

    $query = "DELETE FROM $table1 WHERE (cod_ram = $id)";

   
   	$result = mysqli_query($link, $query);

   	

   echo "<script>alert('Deletado com sucesso!');history.back();</script>";
   	

?>