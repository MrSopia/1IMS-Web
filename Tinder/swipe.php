<?php
session_start();
?>
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
                    Swipeeeeeeeee
                </div>
                    <div class="swipe-frame">
                    <!--Stuff-->
                    <div class="photo-frame">
                        <div class="information">
                            <!-- TEXT VOOR DATABASE SWIPE USER 
                            <span>18, Geel</span><br>
                            <span>Laurence Leysen</span>-->
                            <?php
                                include "./includes/db.php";

                                $swipeid = $_SESSION['swipeid'];
                                $maxid = $_SESSION['maxid'];
                                $user = $_SESSION['user'];
                                $gender = $_SESSION['gender'];
                                $prefgender = $_SESSION['prefgender'];

                                $query = "SELECT Firstname FROM test WHERE PrefGender = '$gender' AND userId > $swipeid AND Gender = '$prefgender' LIMIT 1";

                                $data = getQuery($query);
                                
                                foreach ($data as $name){
                                  $fn = $name["Firstname"];
                                }

                                echo "$fn";
                                $_SESSION['swipeduser'] = $fn;
                                
                                $testy1 = $_SESSION['maxmatch'];
                                $testy2 = $_SESSION['maxid'];

                                $query = "SELECT userId FROM test WHERE Firstname = '$fn'";
                                $data = getQuery($query);

                                foreach ($data as $id){
                                  $newid = $id["userId"];
                                }
                                $_SESSION['swipeid'] = $newid;
                                
                            ?>

                        

                        </div>  
                    </div>
                    <div class="buttons">
                        <a href="./reject.php" class="buttonreject"></a>
                        <a href="./like.php" class="buttonlike"></a>
                    </div>

                </div>
                </div>
            </div>


            <?php include "./includes/footer.php" ?>
        </div>


        <script src="index.js"></script>
    </body>
</html> 
