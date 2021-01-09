<?php
session_start();
$_SESSION['maxid'] += 1;
include "./includes/db.php";
addRelation($_SESSION['user'],$_SESSION['swipeduser'],1);

header("Location: swipe.php");
?>
