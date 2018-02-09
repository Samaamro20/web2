<?php
	$email = $_COOKIE['email'];
	$id = $_COOKIE['xid'];
	$file=$_POST['file'];
	$name=$_POST['name'];
//$_FILES["file"]["error"] > 0
	if (isset($_POST['file']))
	{
		if (($_FILES["file"]["type"] == "audio/mpeg")||($_FILES["file"]["type"] == "audio/mp3")|| ($_FILES["file"]["type"] == "audio/mp4")|| ($_FILES["file"]["type"] == "audio/wav") && ($_FILES["file"]["size"] < 2000000))
		{
		
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			echo "Type: " . $_FILES["file"]["type"] . "<br />";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
			}else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"upload/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
				header("location:index.php");
			}
		}		
	}
	else
	{
		echo "Invalid file";
	}
?>