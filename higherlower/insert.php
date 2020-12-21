<?php

include "./includes/db.php";

$conn = ConnectDB();
sendQuery($_POST[number]);
$conn->close();
header("Location:http://localhost:8888/index.php");
?>