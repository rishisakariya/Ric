<?php

$conn = new mysqli("localhost", "root", "", "user");


if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "select * from register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border=3 align='center'>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "<th>Update</th>";
    echo "</tr>";
    // fetch associative array
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        //echo "<td><a href='update2.php ? id=$row['id']>Upadte</a></td>";\
        echo "<td><a href='update2.php?id=" . $row['id'] . "'>Update</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No user found.";
}
$conn->close();
?>