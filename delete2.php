<?php
$conn = new mysqli("localhost", "root", "", "user");

// Check connection
if ($conn->connect_error) {
      die("Connection failed");
}

$a = $_REQUEST['id'];

$sql = "delete from register where id=$a";

if ($conn->query($sql) === TRUE) {

      header("location:delete.php");
} else {
      echo "<h1>please try agian</h1>";
}
$conn->close();
?>
