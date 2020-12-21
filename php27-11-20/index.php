<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- With escaping -->
        <?php
            $name = "collin";

            // Check if name is collin
            /*
                Multi
                Line
                Comments
            */
            if ($name == "collin") {
        ?>
            <!-- True statements -->
            <h1>
                Hallo
                <?php
                    echo $name;
                ?>
            </h1>
        <?php
            }
        ?>

        <!-- Without escaping -->
        <?php
            $name2 = "collin";

            if ($name2 == "collin") {
                // True statement
                echo "<h1>Hallo Collin</h1>";
            }
        ?>
    </body>
</html>