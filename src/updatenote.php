<?php
include ("dbconfig.php");
if (isset($_GET['id'])) {
    $note_id = $_GET['id'];
}
$sql = "SELECT * FROM note_info WHERE note_id='$note_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$note_text = $row['note_text'];
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
     <link rel="stylesheet" href="css/createnote.css">
    <title>Update</title>
</head>
<body>
    <div class="box">
        <h1>Update Note</h1>
        <h2><?php echo $note_text; ?></h2>
        <br>
    <form method="post" action="update.php">
        <input type="hidden" name="note_id" value="<?php echo $note_id; ?>">
        <input type="text" class="input-box" name="note_text" placeholder="Update the Selected Note" required>
        <br>
        <br>
        <input type="submit" class="btnn" value="Update">
    </form> 
    </div>
</body>
</html>