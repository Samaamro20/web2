<?php
 class MyDb{
 	private static $connection;
 	public function connect(){

 		if(!isset(self::$connection)){
 			$config = parse_ini_file('config.ini');
 			self::$connection = new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);
 		}
 		if(self::$connection == false){
 			echo "No connection" . self::$connection->connect_error;
 			return false;
 		}
 		return self::$connection;
 	}
///////////////////////////////////register
 	 	public function adduser($name,$password,$info,$email,$type,$level){
 		$sql = "insert into users (name,password,info,email,type,level)
 		values ('$name', '$password','$info','$email','$type','$level')";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
//////////////////////////////////////login
 	public function login($email,$password){ 
 		$conn = $this->connect();
 		$safeemail = $conn->real_escape_string($email);
 		$safepassword = $conn->real_escape_string($password);
 		$sql = "select * from users where email='$email' and password='$password'";
 		$result	 =$conn->query($sql);
 		$num = $result->num_rows;
 		if($num>=1)
 			return true;
 		else
 			return false;
 	}
///////////////////////////////////users
 	public function getUser($email , $password){
 		$conn = $this->connect();
 		$sql = "select id from users where email = '$email' and password = '$password'";
		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return $rows;
 		//return json_encode($rows);
 	}

 	public function getAllUsers(){
 		$sql = "SELECT * FROM `users`";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}

 	public function deleteuser($id){
 		$sql = "delete from users where id=$id";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function edituserinfo($id,$info){
 		$sql = "UPDATE users
				SET  info = '$info'	
				WHERE id=$id";
		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;

 	}
///////////////////////////////////////////////advice
 	public function addadvice($text,$id){
 		$sql = "insert into advices (adviceText,teacher_id)
 		values ('$text', '$id')";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	public function deleteadvice($advice_id,$id){
 		$sql = "delete from advices where id=$advice_id and teacher_id = '$id'";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	public function showadvice($id){
 		$sql = "select * from advices where teacher_id = '$id'";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		//return $result;
 		return json_encode($rows);
 		}

 	public function editadvice($id,$text,$teacher_id){
 		$sql = "UPDATE `advices` 
 				SET adviceText=$text 
 				WHERE teacher_id=$id and id=$id"
		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	/////////////////////////////////////////////class
 	public function addclass($name,$key,$id){
 		//$sql = "insert into classes (name,key,teacher_id)
 		//values ('$name','$key','$id')";
 		 $sql="INSERT INTO `classes`(`name`, `key`,`teacher_id`) VALUES ('$name','$key','$id')";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	public function getclass($id){
 		$sql = "SELECT * FROM `classes` WHERE $user_id=$id";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}
 	public function deleteclass($id){
 		$sql= "DELETE FROM classes WHERE (id=$id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	///////////////////////////////////////// sound
 	public function savesound($name , $audio_path , $rate , $id , $status){
 		 $sql="INSERT INTO `soundrecords`(	name , sound_location , rate , publisher_id , isTypical) VALUES ('$name' , '$audio_path' , null , '$id' , '$status')";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	public function getAllSounds(){
 		$sql = "SELECT * FROM `soundrecords`";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}
 	public function deletesound($record_id,$id){
 		$sql= "DELETE FROM soundrecords WHERE ($record_id=$record_id and $user_id=$id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}	

 	public function editsoundname($id,$name,$publisher_id){
 		$sql = "UPDATE `soundrecords` 
 				SET name =$name 
 				WHERE $publisher_id=$publisher_id and id=$id"
		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

 	public function editsoundrate($id,$rate,$publisher_id){
 		$sql = "UPDATE `soundrecords` 
 				SET rate =$rate 
 				WHERE $publisher_id=$publisher_id and id=$id"
		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}

//////////////////////////////////////////// fav
 	public function addfav($record_id,$id){
 		$sql= "INSERT INTO favourites($record_id,$user_id) 
 		        VALUES ($record_id,$id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function deletefav($record_id,$id){
 		$sql= "DELETE FROM favourites WHERE ($record_id=$record_id and $user_id=$id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function getAllfav($user_id){
 		$sql = "SELECT * FROM `favourites` WHERE ($user_id=$id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}

 	//////////////////////exams
 	public function addexams($questions,$answers,$teacher_id){
 		$sql= "INSERT INTO exams(`questions`, `answers`, `teacher_id`) 
 			   VALUES ($questions,$answers,$teacher_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function deleteexam($id,$teacher_id){
 		$sql= "DELETE FROM exams WHERE ($teacher_id=$teacher_id and $id=$id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function getAllexams($teacher_id){
 		$sql = "SELECT * FROM `exams` WHERE ($teacher_id=$teacher_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}
 	public function getexamquestions($id ,$teacher_id){
 		$conn = $this->connect();
 		$sql = "SELECT questions from exams WHERE ($teacher_id=$teacher_id and $id=$id)";
		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 		//return $rows;
 	}
 	public function getexamanswers($id ,$teacher_id){
 		$conn = $this->connect();
 		$sql = "SELECT questions from exams WHERE ($teacher_id=$teacher_id and $id=$id)";
		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 		//return $rows;
 	}
 	//////////////////////////////messages

 	public function addmessage($text,$DOM,$sender_id,$reciver_id){
 		$sql= "INSERT INTO `massages`(`text`, `DOM`, `sender_id`, `reciver_id`) 
 		       VALUES ($text,$DOM,$sender_id,$reciver_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function getAllmessages($user_id){
 		$sql = "SELECT * FROM `massages` WHERE ($user_id=$user_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}
///////////////////////////////////student solutions
 		public function addstudentsolution($answers,$exam_id,$student_id){
 		$sql= "INSERT INTO `studentsolutions`(`answers`, `exam_id`, `student_id`) 
 			   VALUES ($answers,$exam_id,$student_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function getAllsolutions($student_id){
 		$sql = "SELECT * FROM `studentsolutions` WHERE ($student_id=$student_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 	}
 	public function getexamsolutions($id,$student_id){
 		$conn = $this->connect();
 		$sql = "SELECT answers,exam_id from studentsolutions WHERE ($student_id=$student_id and $id=$id)";
		$result = $conn->query($sql);
 		$rows = array();
 		while($row = $result-> fetch_assoc()){
 			$rows[] = $row;
 		}
 		return json_encode($rows);
 		//return $rows;
 	}
 	///////////////////////////follows
 	public function addfolows($follower_id,$following_id){
 		$sql= "INSERT INTO `follows`(`follower_id`, `following_id`) 
 			   VALUES ($follower_id,$following_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function unfollow($follower_id,$following_id){
 		$sql= "DELETE FROM follows WHERE ($follower_id=$follower_id and $following_id=$following_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		echo $conn->error;
 		return $result;
 	}
 	public function iffollow($follower_id,$following_id){
 		$sql = "SELECT * FROM `follows` WHERE ($follower_id=$follower_id and $following_id=$following_id)";
 		$conn = $this->connect();
 		$result = $conn->query($sql);
 		if ($result != null) 
 			return "yes";
 		else
 			return "false";		
 	}

 // public function edituser($id,$username,$idnumber,$phonenumber,$password,$trainingtype){

 // 		$sql = " UPDATE register SET username='$username',idnumber='$idnumber',phonenumber='$phonenumber',password='$password' ,trainingtype='$trainingtype', type='user'
 // 		 where id='$id' ";

 // 		$conn = $this->connect();
 // 		$result = $conn->query($sql);
 // 		return $result;
 // 	}

 
 // 	public function getuserprofile($id){

 // 		$sql = "select * from register where id=$id";

 // 		$conn = $this->connect();

 // 		$result = $conn->query($sql);

 // 		$rows = array();
 // 		while($row = $result-> fetch_assoc()){

 // 			$rows[] = $row;

 // 		}

 // 		return $rows;
 // 	}

 // 	public function getComments(){

 // 		$conn = $this->connect();

 // 		$sql = "select * from comments";

	// 	$result = $conn->query($sql);

 // 		$rows = array();

 // 		while($row = $result-> fetch_assoc()){

 // 			$rows[] = $row;

 // 		}

 // 		return $rows;

 // 	}

 
 // 	public function addComment($comment){

 // 		$safecomment = htmlspecialchars($comment);


 // 		$sql = "insert into comments (comment) values ('$safecomment')";

 // 		$conn = $this->connect();
 // 		$result = $conn->query($sql);
 // 		echo $conn->error;
 		
 // 		return $result;

 // 	}

 // 	public function countusers(){

 // 		$sql="SELECT count(*) 
 // 			FROM register
	// 		-- WHERE table_name = '<table_name>'";
	// 	$conn = $this->connect();
 // 		$result = $conn->query($sql);
 // 		return $result;	
	// 		// SELECT count(*) 
	// 		// FROM information_schema.columns 
	// 		// WHERE table_name = '<table_name>'
 // 	}

  }
?>