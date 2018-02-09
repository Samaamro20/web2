<?php
	require 'MyDb.php';
	$db = new MyDb;

 	//$id = $_COOKIE['id'];
 	$id = $_POST['id'];
 	$info=$_POST['info'];

	$result = $db->edituserinfo($id,$info);
		echo $result;
?>