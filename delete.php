<?php

    $name = $_POST['name'];

    include_once 'db.php';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("connection failed : " . mysqli_connect_error());
			}
				$sql = "DELETE FROM `notes` WHERE title='$name'";	
			    $result = mysqli_query($conn, $sql);
                echo json_encode("successfully deleted the data");
			mysqli_close($conn);


?>