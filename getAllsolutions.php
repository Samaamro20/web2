<?php
	require 'MyDb.php';
	$db = new MyDb;

	$student_id=$_POST['student_id'];
	$result = $db->getAllsolutions($student_id);
	echo $result;
?>