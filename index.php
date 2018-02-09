<?php 
  $email = $_COOKIE['email'];
  $id = $_COOKIE['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  </head>
  <body>
   <!--  <audio controls>
    <source src="horse.ogg" type="audio/ogg">
    <source src="horse.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
    </audio> -->


    <form method="post" action="uploadsound.php" enctype="multipart/form-data">
      <label> Add sound </label>
      <input type="number" name="id" value="<?php echo $id; ?>" disable>
      <input type="text" name="sname" placeholder="Sound Name">
      <input type="file" name="file">
      <br>
      <input type="checkbox" name="typical" value="1"> Typical <br>
      <input type="submit" value="Submit" name="submit">
    </form>

    <!-- <a href="addadvice.php?id=". <?php $id ?> > <button> Advice </button> </a>  -->
    <!-- <a href="addclass.php"> <button> Class </button> </a>  -->
    <!-- <a href="showadvice.php"> <button> Class </button> </a>  -->


  </body>
</html>