<?php
	require 'MyDb.php';
	$db = new MyDb;

 	$id = $_POST['id'];
 	$name=$_POST['name'];
 	$publisher_id=$_POST['publisher_id'];
 	
	$result = $db->editsoundname($id,$name,$publisher_id);
		echo $result;
?>
