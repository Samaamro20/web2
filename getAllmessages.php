<?php
	require 'MyDb.php';
	$db = new MyDb;

	$user_id=$_POST['user_id'];
	$result = $db->getAllmessages($user_id);
	echo $result;
?>