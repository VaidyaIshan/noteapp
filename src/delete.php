<?php
include("dbconfig.php");

if (isset($_GET['id'])) {
    $note_id = $_GET['id'];
    $sql = "DELETE FROM note_info WHERE note_id = $note_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: displaynote.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>