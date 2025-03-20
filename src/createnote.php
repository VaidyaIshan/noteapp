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
    <title>Document</title>
</head>
<body>
<?php
include ("dbconfig.php");

$text = $_POST['text'];

$sql = "INSERT INTO note_info(note_text) VALUES ('$text')";
if ($conn->query($sql) === TRUE) {
    echo '<div class="message-container">
    <p>Note Created !</p>
    <br>
    <a href="displaynote.php"><button>Go To View Notes</button></a>
    <br>
     <a href="createnote.html"><button>Go Back</button></a>
  </div>';
} else {
    echo '<div class="message-container">
                <p>Note Creation Unsuccessful !</p>
                <br>
                <a href="createnote.html"><button>Try Again</button></a>
              </div>';
}

$conn->close();
?>
</body>
</html>

