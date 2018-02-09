<?php
	require 'MyDb.php';
	$db = new MyDb;

	$teacher_id=$_POST['$teacher_id'];
	$result = $db->getAllexams($teacher_id);
	echo $result;
?>