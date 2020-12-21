<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connection GOT database</title>
        <?php 
        $dbHost = "ID328468_150551.db.webhosting.be";
        $dbUsername = "ID328468_phpeditor";
        $dbPassword = "WebIsMyLife2020";
        $dbName = "ID328468_150551";
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        ?>

        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                width: 50%;
                padding: 5px;
            }
            th {
                text-align: left;
            }

        </style>
        
    </head>
    <body>
        <?php
        if ($conn == false){
            die("RIP CONNECTION");
        }
        // var_dump($conn);
        $sql = "SELECT * FROM characters";
        $result = mysqli_query($conn, $sql);
        $persons = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <h1>Table read from database</h1>
        <table>
                <tr>
                  <th><b>Name</b></th>
                  <th>Age</th>
                </tr>
                <?php 
                    foreach ($persons as $data){
                        echo "<tr>";
                        echo "<td>" . $data["name"] . "</td>";
                        echo "<td>" . $data["age"] . "</td>";
                        echo "</tr>";
                    }
                ?>

            </table>
        
        
    </body>
</html>