<?php
session_start();

$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
      die("Connection failed");
}

if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $sql0 = "select * from register where username='$username'";
      $run = mysqli_query($conn, $sql0);
      $get_rows = mysqli_affected_rows($conn);
      if ($get_rows >= 1) {
            ?>
            <script>
                  alert("User Exist");
            </script>
            <a href="form.html"> change the username becsuse usser are already exixt</a>

            <?php
      } else {
            $sql = "insert into register(username,password)values('$username','$password')";
            if ($conn->query($sql) === TRUE) {
                  echo "success";
                  header('location:login.php');

            } else {
                  echo "<h1>please try agian</h1>";
            }
      }

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <div>
            <h1 align="center">Register Page</h1>
            <form action="register.php" method="post">
                  <table align="center" border="3 ">
                        <tr>
                              <td>Username</td>
                              <td><input type="text" name="username" required></td>
                        </tr>
                        <tr>
                              <td>Password</td>
                              <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                              <td align="center" colspan=2><input type="submit" name="submit" value="register"></td>

                        <tr>
                              <td align="center" colspan=2><a href='login.php'>Login</td>
                        </tr>
                  </table>
            </form>
      </div>
</body>

</html>
