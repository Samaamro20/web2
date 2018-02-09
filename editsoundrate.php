<?php
	require 'MyDb.php';
	$db = new MyDb;

 	$id = $_POST['id'];
 	$rate=$_POST['rate'];
 	$publisher_id=$_POST['publisher_id'];
 	
	$result = $db->editsoundrate($id,$rate,$publisher_id);
		echo $result;
?>