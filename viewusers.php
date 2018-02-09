<?php
	require 'MyDb.php';
	$db = new MyDb;

	$Users = $db->getAllUsers();
	echo $Users;
?>
