<?php
include "./includes/db.php";
$conn = ConnectDB();

$sql = "DROP TABLE result;";
  
mysqli_query($conn, $sql);

$sql = "CREATE TABLE `result` ( 
    `relationId` int(11) NOT NULL,
    `UserId` text NOT NULL,
    `MatchId` text NOT NULL,
    `RelationStatus` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
  
mysqli_query($conn, $sql);

$sql = "ALTER TABLE `result` ADD PRIMARY KEY (`relationId`); ";
mysqli_query($conn, $sql);

$sql = "ALTER TABLE `result` MODIFY `relationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;";
mysqli_query($conn, $sql);

$sql = "COMMIT;";
mysqli_query($conn, $sql);

header("Location: index.php");