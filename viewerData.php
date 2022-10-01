<?php
  $connect=mysqli_connect('localhost','root');
  mysqli_select_db($connect,'test');
  $name=$_POST['nm'];
  $email=$_POST['em'];
  $age=$_POST['age'];
  $comment=$_POST['ct'];
  $query="INSERT INTO `contactinfo`(`name`,`age`,`email`,`comment`) VALUES ('$name','$age','$email','$comment')";
  mysqli_query($connect,$query);
  echo "Data has been sent";
?>