<?php
	require 'MyDb.php';
	$db = new MyDb();

	// $email = $_COOKIE['email'];
 	// $id = $_COOKIE['id'];
  	$id = $_POST['id'];
	$sname = $_POST['soundname'];
	$status = 0;

	if (isset($_POST['typical'])) {
		$status = 1;
	}

	if ((isset($_POST['submit']) && $_POST['submit'] == "Submit")){
		$dir = "upload/";
		$audio_path = $dir . basename($_FILES['file']['name']);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $audio_path)) {
			$db->savesound($sname , $audio_path , 0 , $id , $status);
			echo "Upload Done.";
		}else{
			echo "Upload Falied.";
		}
	}else{
		echo "Submition Falied";
	}
?>