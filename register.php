<?php
session_start();

$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
      die("Connection failed");
}

if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $password = md5($_POST['password']);

      $sql0 = "select * from register where username='$username'";
      $run = mysqli_query($conn, $sql0);
      $get_rows = mysqli_affected_rows($conn);
      if ($get_rows >= 1) {
            ?>
            <script>
                  alert("User Already Exist Please Change Your Username");

            </script>


            <?php
      } else {
            $sql = "insert into register(username,fname,lname,email,gender,password)values('$username','$fname','$lname','$$email','$gender','$password')";
            if ($conn->query($sql) === TRUE) {
                  echo "success";
                  header('location:login.php');

            } else {
                  echo "<h1>please try again</h1>";
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
      <link rel="stylesheet" href="style.css">
</head>

<body>
      <div>
            <form action="register.php" method="post">
                  <table align="center" border="3 ">
                        <h1 align="center">Register Page</h1>
                        <tr>
                              <td>Username</td>
                              <td><input type="text" name="username" placeholder="Enter Username" required></td>
                        </tr>

                        <td>
                              First and last name
                        </td>
                        <td colspan="2">
                              <input type="text" name="fname" aria-label="First name" class="form-control"
                                    placeholder="Enter Your First Name" required>
                              <input type="text" name="lname" aria-label="Last name" class="form-control"
                                    placeholder="Enter Your Last Name" required>
                        </td>

                        </tr>
                        <tr>
                              <td>Email</td>
                              <td><input type="email" name="email" placeholder="Enter Your Email" required></td>
                        </tr>
                        <tr>
                              <form action="submit.php" method="POST">
                                    <td>Gender</td>
                                    <td align="center">
                                          <input class="form-check-input" type="radio" name="gender" id="radioDefault1"
                                                value="Male" checked>
                                          <label class="form-check-label" for="radioDefault1">Male</label>

                                          <input class="form-check-input" type="radio" name="gender" id="radioDefault2"
                                                value="Female">
                                          <label class="form-check-label" for="radioDefault2">Female</label>
                                    </td>
                        </tr>

                        <tr>
                              <td>Password</td>
                              <td><input type="password" name="password" placeholder="Enter Password" required></td>
                        </tr>
                        <tr>
                              <td align="center" colspan=2><input type="submit" name="submit" value="register">
                              </td>

                        <tr>
                              <td align="center" colspan=2><a href='login.php'>Login</td>
                        </tr>
                  </table>
            </form>
      </div>
</body>

</html>
