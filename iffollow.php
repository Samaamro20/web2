<?php
	require 'MyDb.php';
	$db = new MyDb;

	$follower_id=$_POST['follower_id'];
	$following_id=$_POST['following_id'];

	$result = $db->iffollow($follower_id,$following_id);
		echo $result;
?>