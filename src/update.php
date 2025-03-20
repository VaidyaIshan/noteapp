
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
    <?php
    include("dbconfig.php");
   
    $note_id=$_POST['note_id'];
        $note_text=$_POST['note_text'];
        $sql="UPDATE note_info SET note_text='$note_text' WHERE note_id='$note_id'";
        if($conn->query($sql)==TRUE){
            echo '<div class="message-container">
                <p>Note Updated !</p>
                <br>
                <a href="displaynote.php"><button>Go To View Notes</button></a>
              </div>';
        }
        else{
            echo '<div class="message-container">
            <p>Note Not Updated!/p>
            <br>
            <a href="displaynote.php"><button>Try again</button></a>
          </div>';
        }
    ?>
        
    </body>
    </html>