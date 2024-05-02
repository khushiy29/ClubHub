<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query('use finalproject');

$func = $_POST['func'];

if ($func == 'getlist') {
    $q = "SELECT * FROM `clubdesc` WHERE `club_id` < 15"; // Adjust the range as needed
    $res = $conn->query($q);

    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

    echo json_encode($data);
}
if ($func == 'getlist1') {
    $q = "SELECT * FROM `clubdesc` WHERE `club_id` >= 15"; // Adjust the range as needed
    $res = $conn->query($q);

    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }

    echo json_encode($data);
}


?>
