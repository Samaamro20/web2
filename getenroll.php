<?php
	require 'MyDb.php';
	$db = new MyDb;

	$id=$_POST['id'];
	$result = $db->getenroll($id);
	echo $result;
?>