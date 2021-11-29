<?php

if ($_POST['title'] && $_POST['description'] && $_POST['otherinfo']){


    $title = $_POST['title'];
    $description = $_POST['description'];
    $otherinfo = $_POST['otherinfo'];

    include_once 'db.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO notes (title,description_data, other_info) VALUES ('$title','$description','$otherinfo')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "<script>alert('successfully saved!'); window.location.href='index.html';</script>";
}
else{
    echo"no here!";
}

?>