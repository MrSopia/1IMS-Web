<?php

$var1 = $_POST[fname];
$var2 = $_POST[lname];
$var3 = $_POST[city];
$var4 = $_POST[BoD];
$var5 = $_POST[gender];
$var6 = $_POST[preferredgender];


include "./includes/db.php";

$conn = ConnectDB();

sendQuery($_POST[fname],$_POST[lname],$_POST[city],$_POST[BoD],$_POST[gender],$_POST[preferredgender]);
$conn->close();


header("Location: index.php");
?>