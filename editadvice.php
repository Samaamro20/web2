<?php
	require 'MyDb.php';
	$db = new MyDb;

 	$id = $_POST['id'];
 	$text=$_POST['text'];

	$result = $db->editadvice($id,$text);
		echo $result;

?>
