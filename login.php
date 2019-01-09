<?php
$username=$_POST['username'];
$password=$_POST['password'];

if ($username=='zulfano'&&$password=='jancok') {
  echo 'berhasil';
  // code...
}
else {

  header('location:formlogin.php');
}


 ?>
