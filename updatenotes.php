<?php

    $notesid = $_POST['notesid'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $otherinfo = $_POST['otherinfo'];
	
    include_once 'db.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }	
    $sql = "UPDATE notes SET title='$title', description_data='$description', other_info='$otherinfo' WHERE notes_id='$notesid'";

    
    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
        echo ("<script>location.href='http://localhost/mynotes/index.html'</script>");
    } else {
        mysqli_close($conn);
        echo "Error updating record: " . $conn->error;
    }

?>