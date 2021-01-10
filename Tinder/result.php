<?php
session_start();
?>
<!-- Knock off Tinder by China Laurence-->
<!DOCTYPE html>
<html>
    <head>
        <title>NotTinder</title>
        <link rel="stylesheet" href="./style/style.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <?php 
            include "./includes/navbar.php"
            ?>
            
            <div class="content">
                <div id="sorp">
                    Your results!
                </div>
                <div class="results">
                    <div id="first">
                        <span class="bold">Liked</span>
                    </div>
                    <div id="second">
                    <span class="bold">Disliked</span>
                    </div>
                    <?php
                    include "./includes/db.php";
                    $conn = ConnectDB();
                    
                    $user = $_SESSION['user'];

                    $query = "SELECT MatchId FROM result WHERE RelationStatus = 1 AND UserId = '$user'";
                    $result = mysqli_query($conn, $query);
                    

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div id="first">';
                        foreach ($row as $field => $value) {
                            echo "$value";
                        }
                        echo "</div>";
                    }
                    $query = "SELECT MatchId FROM result WHERE RelationStatus = 0 AND UserId = '$user'";

                    $result = mysqli_query($conn, $query);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div id="second">';
                        foreach ($row as $field => $value) {
                            echo "$value"; 
                        }
                        echo "</div>";
                    }


                    ?>
                    
                    
                </div>
            </div>

            <?php 
            include "./includes/footer.php"
            ?>
            
        </div>
        <script src="index.js"></script>
    </body>
</html> 
