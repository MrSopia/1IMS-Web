<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connection GOT database</title>

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
        <h1>Table read from database</h1>
        <table>
                <tr>
                  <th><b>Name</b></th>
                  <th>Age</th>
                </tr>
                <?php 
                    include "./includes/db.php";
                    $query = "SELECT * FROM characters";
                    $persons = getQuery($query);

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