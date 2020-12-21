<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Higher lower game!</title>
        <style>
            table{
                padding: 10px;
                border-collapse: collapse;
            }
            th, td {
                padding: 7px;
            }
        </style>
    </head>
    <body>
    <center>  
        <h1>Higher lower!</h1>
        <form action="insert.php" method="POST">
         <table>
            <tr>
                <td>Number (0-13 like cards) :</td>
                <td><input type="number" name="number" min=0 max=13 required></td>
                <td rowspan=1><input type="submit" value="Submit"></td>
            </tr>
         </table>
        </form>
        <?php 
            include "./includes/db.php";

            
            $query = "SELECT * FROM higherlower";
            $numbers = getQuery($query);

            $conn = ConnectDB();
            $query = "SELECT StoredNumbers 
            FROM higherlower
            WHERE idNumber = (SELECT MAX(idNumber) FROM higherlower)";
            $result = getQuery($query);

            foreach ($result as $number){
                $lastnumber = $number["StoredNumbers"];
            }

            $query = "SELECT StoredNumbers 
            FROM higherlower
            WHERE idNumber = (SELECT MAX(idNumber)-1 FROM higherlower)";
            $result = getQuery($query);

            foreach ($result as $number){
                $secondlastnum = $number["StoredNumbers"];
            }

        ?>

        <table border = 1px; width = 50%;>
            <tr>
                <th>Your number</th>
                <th>Previous number</th>
            </tr>
            <tr>
                <th>
                    <?php
                    echo $lastnumber;
                    ?>
                </th>
                <th>
                <?php
                    echo $secondlastnum;
                ?>
                </th>
            </tr>
            <tr rowspan=2>
                <th colspan=2>
                    <?php
                        if ($lastnumber === $secondlastnum) 
                        {
                            echo "Same number!";
                        }
                        elseif ($lastnumber < $secondlastnum) 
                        {
                            echo "Lower!";
                        } 
                        else 
                        {
                            echo "Higher!";
                        }
                    ?>
                </th>
            </tr>

        </table>


    </center>
    </body>
</html>