<?php

$host = "localhost";
$username = "root";
$password = "Imah!302";
$db = "contact-app";

// Create connection
$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// $result = $conn->query("SELECT * FROM contact");
// // $row = mysqli_fetch_assoc($result);
// // var_dump($row);

// $arr = array();
// if ($result->num_rows > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         foreach ($row as $key => $value) {
//             $arr[$key][] = $value;
//         }
//     }
// };

// var_dump($arr);

?>