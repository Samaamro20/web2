<?php
	require 'MyDb.php';
	$db = new MyDb;

	$id=$_POST['id'];
	$result = $db->deletesound($id);
		echo $result;
?>