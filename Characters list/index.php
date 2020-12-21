<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Characters list</title>

        <style>
            table, th, td {
              border: 1px solid black;
              border-collapse: collapse;
              width: 400px;
            }
            th, td {
              padding: 5px;
            }
            th {
              text-align: left;
            }

        </style>
    </head>
    <body>
        <?php
            $Person = ["Jon Snow"=>"33", "Theon Greyjoy"=>"30", "Arya Stark"=>"27"];
        ?>
        <p>
            <table>
                <tr>
                  <th><b>Name</b></th>
                  <th>Age</th>
                </tr>
                <?php 
                    foreach($Person as $x => $x_age) {
                        echo "<tr>";
                        echo "<td>" . $x . "</td>";
                        echo "<td>" . $x_age . "</td>";
                        echo "</tr>";
                    }
                ?>

            </table>
        </p>
    </body>
</html>