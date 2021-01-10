<?php
session_start();
$_SESSION['maxid'] += 1;
include "./includes/db.php";
$user = $_SESSION['user'];
$swipeduser = $_SESSION['swipeduser'];

addRelation($_SESSION['user'],$_SESSION['swipeduser'],1);

if($_SESSION['maxmatch'] == $_SESSION['maxid']){
    header("Location: result.php");
}else{
    header("Location: swipe.php");
}




?>
