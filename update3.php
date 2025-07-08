<?php

$conn = new mysqli("localhost", "root", "", "user");


if ($conn->connect_error) {
      die("Connection failed");
}

$a = $_POST['id'];
$b = $_POST['username'];
//$c=$_POST['password'];
$c = md5($_POST['password']);

$sql = "update register set Username='$b',Password='$c' where id=$a";
//$conn->query($sql);
if ($conn->query($sql) == TRUE) {
      //echo"success";
      header("location:update.php");
} else {
      echo "<h1>please try agian</h1>";
}
$conn->close();
?>