
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- FAVICON CODE -->
     <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png">
    <link rel="stylesheet" href="css/createnote.css">
    <title>Login</title>
</head>
<body>
<?php
include ("dbconfig.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user_info WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($password==$row['password']){
        header('Location: home.html');
        $_SESSION['username'] = $username;
        exit();
    } else {
        echo '<div class="message-container">
                <p>Incorrect password</p>
                <br>
                <a href="index.html"><button>Try again</button></a>
              </div>';
    }
} else {
    echo '<div class="message-container">
            <p>User Not Found.</p>
            <br>
            <a href="index.html"><button>Try again</button></a>
          </div>';
}
$conn->close();
?>
    
    
</body>
</html>