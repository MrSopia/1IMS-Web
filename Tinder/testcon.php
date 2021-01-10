<?php

include "./includes/db.php";

session_start();
$conn = ConnectDB();

$query = "SELECT Firstname FROM test WHERE PrefGender = 'M' AND userId > 0 AND Gender = 'F' LIMIT 1";

if ($result = mysqli_query($conn, $query)) {
    echo "Read succesfull successfully";
    $result = $result->fetch_all(MYSQLI_ASSOC);
    var_dump($result);
    foreach ($result as $name){
        $fn = $name["Firstname"];
      }
      echo "$fn";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

$user = $_SESSION['user'];
$gender = $_SESSION['gender'];
$prefgender = $_SESSION['prefgender'];
echo "$user";
echo "$gender";
echo "$prefgender";


?>