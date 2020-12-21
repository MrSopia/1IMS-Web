<?php 
    function ConnectDB(){
        $dbHost = "localhost";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbName = "hlgame";
        $port = 8889;

        $conn = mysqli_connect("$dbHost:$port", $dbUsername, $dbPassword, $dbName);

        if ($conn == false){
            die("RIP CONNECTION");
        }

        return $conn;
    }

    function getQuery($sql){
        //Make db connection
        $conn = ConnectDB();

        // fetch results
        $result = mysqli_query($conn, $sql);

        //return results in associated array
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function sendQuery($ChosenNumber){
        $conn = ConnectDB();
        $sql = "INSERT INTO higherlower (StoredNumbers) VALUES ($ChosenNumber)";

        if ($conn->query($sql) === TRUE) {
        	echo "Successfully added!";
        } else {
        	echo "Oops, something went wrong!";
        }
    }

?>