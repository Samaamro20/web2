<?php
	require 'MyDb.php';
	$db = new MyDb;

	$id_sound=$_POST['$id_sound'];
	$result = $db->getexamquestions($id_sound);
	echo $result;
?>