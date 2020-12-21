<?php
    function ConnectDB(){
        $dbHost = "ID328468_150551.db.webhosting.be";
        $dbUsername = "ID328468_phpeditor";
        $dbPassword = "WebIsMyLife2020";
        $dbName = "ID328468_150551";
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        if ($conn == false){
            die("RIP CONNECTION");
        }

        return $conn;
    }

    function getQuery(){
        //Make db connection
        $conn = ConnectDB();

        //SQL statement
        $sql = "SELECT * FROM characters";

        // fetch results
        $result = mysqli_query($conn, $sql);

        //return results in associated array
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    $persons = getQuery();
?>