<?php
include("dbconfig.php");
$sql="SELECT * from note_info";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON CODE -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png">
    <link rel="stylesheet" href="css/display.css">
    <title>Display Notes</title>
</head>
<body>
    <div class="box">
        <h1 class="main-title">All Notes</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Text</th>
                <th>Action</th>
            </tr>
            <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['note_id'] . "</td>
                        <td>" . ($row['note_text']) . "</td>
                        <td class='btn' >
                        <a href='delete.php?id=" . $row['note_id'] . "'>
                        Delete
                    </a>
                </td>
                      </tr>";
            }
        } else {
            echo "<tr><td>No notes found.</td></tr>";
        }
        ?>
        </table>
    </div>
    
</body>
</html>