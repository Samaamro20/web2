<?php
	require 'MyDb.php';
	$db = new MyDb;

	$sounds = $db->getAllSounds();

	echo $sounds;
?>
