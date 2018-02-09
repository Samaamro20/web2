<?php
	require 'MyDb.php';
	$db = new MyDb;

	$advice_id=$_POST['advice_id'];
	
	$result = $db->deleteadvice($advice_id);
		echo $result;
	
?>