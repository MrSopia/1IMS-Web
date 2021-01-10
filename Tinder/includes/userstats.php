<?php

include "db.php";
session_start();

$swipeid = 0;
$_SESSION['user'] = $_POST[nameswiper];
$_SESSION['gender'] = $_POST[gender];
$_SESSION['prefgender'] = $_POST[preferredgender];
$_SESSION['swipeid'] = $swipeid;
$_SESSION['maxid'] = 0;

$user = $_SESSION['user'];
$gender = $_SESSION['gender'];
$prefgender = $_SESSION['prefgender'];

$query = "SELECT COUNT(*) FROM test WHERE PrefGender = '$gender' AND userId > $swipeid AND Gender = '$prefgender'";

$data = getQuery($query);

foreach ($data as $maxmatch){
  $maxmatches = $maxmatch["COUNT(*)"];
}


$_SESSION['maxmatch'] = $maxmatches;




header("Location: ../swipe.php");

?>