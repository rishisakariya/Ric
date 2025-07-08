<?php

$conn = new mysqli("localhost", "root", "", "user");


if ($conn->connect_error) {
      die("Connection failed");
}

$sql = "select * from register";
$result = $conn->query($sql);
$data = $result->fetch_array();
$conn->close();
?>
<html>

<body>
      <form method="post" action="update3.php">
            Username<input type="text" name="username" value="<?php echo $data[1]; ?>"><br>
            password<input type="text" name="password" value="<?php echo $data[2]; ?>"><br>
            <input type="hidden" name="id" value="<?php echo $data[0]; ?>"><br>
            <input type="submit" name="submit" value="Update">
</body>

</html>