<?php
session_start();

$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
      die("Connection failed");
}

if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $sql = "select * from register where Username='$username' and Password='$password'";

      //echo $sql;
      $result = mysqli_query($conn, $sql);
      $total = mysqli_num_rows($result);
      //echo $total;
      if ($total == 1) {
            $_SESSION['username'] = $username;
            header('location:main.php');
      } else {
            echo "Login Failed";
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
      <link rel="stylesheet" href="style.css">
</head>

<body>
      <div>

            <form action="" method="post">
                  <h1 align="center">Login Page</h1>
                  <table align="center" border="3 ">
                        <tr>
                              <td>Username</td>
                              <td><input type="text" name="username" placeholder="Enter Your Username" required></td>
                        </tr>
                        <tr>
                              <td>Password</td>
                              <td><input type="password" name="password" placeholder="Enter Your Password" required>
                              </td>
                        </tr>
                        <tr>
                              <td align="center" colspan=2><input type="submit" name="login" value="login"></td>

                        <tr>
                              <td align="center" colspan=2><a href='register.php'>register</td>
                        </tr>
                  </table>
            </form>
      </div>
</body>

</html>
