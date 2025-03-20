
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <!-- FAVICON CODE -->
     <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png">
    <link rel="stylesheet" href="css/createnote.css">
</head>
<body>
<?php
include ("dbconfig.php");
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];
$sql = "INSERT INTO user_info(username,password,email) VALUES ('$username','$password','$email')";
if ($conn->query($sql) === TRUE) {
    echo '<div class="message-container">
    <p>Registration Successful</p>
    <br>
    <a href="index.html"><button>Go To Login Page</button></a>
  </div>';
} else {
    echo '<div class="message-container">
    <p>Registration Unsuccessful</p>
    <br>
    <a href="register.html"><button>Try again</button></a>
  </div>';
}

$conn->close();
?>
    
</body>
</html>
