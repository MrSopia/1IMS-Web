<?php 
    function ConnectDB(){
        $dbHost = "localhost";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbName = "realtinder";
        $port = 8889;
        $conn = mysqli_connect("$dbHost:$port", $dbUsername, $dbPassword, $dbName);

        if ($conn == false){
            die("RIP CONNECTION");
        }
        return $conn;
    }

    function sendQuery($var1,$var2,$var3,$var4,$var5,$var6){
        $conn = ConnectDB();
        $sql = "INSERT INTO test (Firstname, Lastname, City, DoB, Gender, PrefGender) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    function addRelation($var1,$var2,$var3){
        $conn = ConnectDB();
        $sql = "INSERT INTO result (UserId, MatchId, RelationStatus) VALUES ('$var1','$var2',$var3)";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    function getQuery($sql){
        //Make db connection
        $conn = ConnectDB();

        // fetch results
        $result = mysqli_query($conn, $sql);

        //return results in associated array
        return $result->fetch_all(MYSQLI_ASSOC);
    }

?>