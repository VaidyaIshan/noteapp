<?php
include ("dbconfig.php");
$text = $_POST['text'];

$sql = "INSERT INTO note_info(note_text) VALUES ('$text')";
if ($conn->query($sql) === TRUE) {
    echo "Note Created<a href='displaynote.html'><br>View Created Notes</a>   <a href='createnote.html'><br>Return To Create Notes Page</a>";
} else {
    echo "Note Creation Unsuccessful <a href=createnote.html'><br>Try again</a>";
}

$conn->close();
?>
