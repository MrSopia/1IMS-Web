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
                    You want to create an account or get swiping?
                </div>
                <div class="choosebut">
                    <a href="./create.php" class="choosebuttons">Create a profile</a>
                    <a href="./swipetemp.php" class="choosebuttons">Swipe swipe</a>
                </div>  
            </div>

            <?php 
            include "./includes/footer.php"
            ?>
            
        </div>
        <script src="index.js"></script>
    </body>
</html> 
