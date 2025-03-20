<?php
include ("dbconfig.php");
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];
$username = mysqli_real_escape_string($conn, $username);

$sql = "INSERT INTO user_info(username,password,email) VALUES ('$username','$password','$email')";
if ($conn->query($sql) === TRUE) {
    echo "Registration Success<a href='index.html'><br>Login NOW</a>";
} else {
    echo "Registration Unsuccessful <a href=register.html'><br>Try again</a>";
}

$conn->close();
?>

