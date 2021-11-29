<?php  

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
include_once 'db.php';
$response = array();

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM notes";
$result = mysqli_query($conn, $sql);
if($result){
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
        $response[$i]['notes_id'] = $row['notes_id'];
        $response[$i]['title'] = $row['title'];
        $response[$i]['description_data'] = $row['description_data'];
        $response[$i]['other_info'] = $row['other_info'];
        $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
}
mysqli_close($conn);    
?>