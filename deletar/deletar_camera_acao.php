<?php 
	
	require '../connect.php';	

	$id = $_POST['id'];
	
	$table1 = 'camera';
	

    $query = "DELETE FROM $table1 WHERE (cod_cam = $id)";

   
   	$result = mysqli_query($link, $query);

   	

   echo "<script>alert('Deletado com sucesso!');history.back();</script>";
   	

?>