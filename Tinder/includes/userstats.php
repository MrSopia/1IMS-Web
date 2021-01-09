<?php
session_start();
include "db.php";

$swipeid = 0;
$_SESSION['user'] = $_POST[nameswiper];
echo $_SESSION['user'];
$_SESSION['gender'] = $_POST[gender];
$_SESSION['prefgender'] = $_POST[preferredgender];
$_SESSION['swipeid'] = $swipeid;
$_SESSION['liked'] = array();
$_SESSION['reject'] = array();
$_SESSION['maxid'] = 1;

$gender = $_POST[gender];
$prefgender = $_POST[preferredgender];

$query = "SELECT COUNT(*) FROM test WHERE PrefGender = '$gender' AND userId > $swipeid AND Gender = '$prefgender'";

$data = getQuery($query);

foreach ($data as $maxmatch){
  $maxmatches = $maxmatch["COUNT(*)"];
}
$_SESSION['maxmatch'] = $maxmatches;



header("Location: ../swipe.php");

?>