<?php
	require 'MyDb.php';
	$db = new MyDb;

	$id=$_POST['$id'];
	$student_id=$_POST['$student_id'];
	$result = $db->getexamsolutions($id,$student_id);
	echo $result;
?>