<?php

$conn = new mysqli("localhost", "root", "", "user");


if ($conn->connect_error) {
      die("Connection failed");
}
$a = $_REQUEST['id'];

$sql = "select * from register where id=$a";
$result = $conn->query($sql);
$data = $result->fetch_array();
//print_r($data);
?>
<html>

<head>
      <link rel="stylesheet" href="style.css">
      </link>
</head>

<body>
      <!--<form method="post" action="update3.php">

            Username<input type="text" name="username" value="<?php echo $data[1]; ?>"><br>
            Firstname<input type="text" name="fname" value="<?php echo $data[2]; ?>"><br>
            Lastname<input type="text" name="lname" value="<?php echo $data[3]; ?>"><br>

            password<input type="password" name="password" value="<?php echo $data[6]; ?>"><br>

            <input type="hidden" name="id" value="<?php echo $data[0]; ?>"><br>
            <input type="submit" name="submit" value="Update">
      </form>-->
      <div>
            <form method="post" action="update3.php">
                  <table align="center" border="3 " style="color:white;">
                        <h1 align="center">UPDATE Page</h1>
                        <tr>
                              <td>Username</td>
                              <td><input type="text" name="username" placeholder="Enter Username"
                                          value="<?php echo $data[1]; ?>" required></td>
                        </tr>

                        <td>
                              First and last name
                        </td>
                        <td colspan="2">
                              <input type="text" name="fname" aria-label="First name" class="form-control"
                                    placeholder="Enter Your First Name" value="<?php echo $data[2]; ?>" required>
                              <input type="text" name="lname" aria-label="Last name" class="form-control"
                                    placeholder="Enter Your Last Name" value="<?php echo $data[3]; ?>" required>
                        </td>

                        </tr>
                        <tr>
                              <td>Email</td>
                              <td><input type="email" name="email" placeholder="Enter Your Email"
                                          value="<?php echo $data[4]; ?>" required></td>
                        </tr>
                        <tr>
                              <form action="submit.php" method="POST">
                                    <td>Gender</td>
                                    <td align="center">
                                          <input class="form-check-input" type="radio" name="gender" id="radioDefault1"
                                                value="Male" value="<?php echo $data[5]; ?>" checked>
                                          <label class="form-check-label" for="radioDefault1">Male</label>

                                          <input class="form-check-input" type="radio" name="gender" id="radioDefault2"
                                                value="Female" value="<?php echo $data[5]; ?>">
                                          <label class="form-check-label" for="radioDefault2">Female</label>
                                    </td>
                        </tr>

                        <tr>
                              <td>Password</td>
                              <td><input type="password" name="password" placeholder="Enter Password"
                                          value="<?php echo $data[6]; ?>" required></td>
                        </tr>
                        <tr>
                              <td colspan="2"><input type="hidden" name="id" value="<?php echo $data[0]; ?>"><br>
                                    <input type="submit" name="submit" value="Update">
                              </td>


                  </table>
            </form>
      </div>
</body>

</html>
