<?php
include("dbconfig.php");

$sql = "SELECT * FROM note_info ORDER BY note_id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Notes</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Optional: Add styling -->
</head>
<body>
    <h1>All Notes</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['note_text']) . "</li>";
            }
        } else {
            echo "<p>No notes found.</p>";
        }
        ?>
    </ul>
    <a href="createnote.html">Create New Note</a>
</body>
</html>

<?php
$conn->close();
?>