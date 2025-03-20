<?php
include ("dbconfig.php");
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];
$username = mysqli_real_escape_string($conn, $username);

$sql = "SELECT * FROM user_info WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($password==$row['password']){
        header('Location: home.html');
        exit();
    } else {
        echo "Incorrect password <a href='index.html'><br>Try again</a>";
    }
}
else{
    echo "User Not Found. <a href='index.html'> <br>Try again</a>";
    
}
$conn->close();
?>