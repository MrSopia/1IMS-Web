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
                    Create an account
                </div>

                <div class="swipe-frame">
                    <!--Stuff-->
                    <div class="photo-frame">
                        <form action="insert.php" method="POST">
                        <table class="createacctbl">
                           <tr>
                               <td><input type="text" name="fname" placeholder="Firstname" required></td>
                           </tr>
                           <tr>
                               <td><input type="text" name="lname" placeholder="Lastname" required></td>
                           </tr>
                           <tr>
                               <td><input type="text" name="city" placeholder="City" required></td>
                           </tr>
                           <tr>
                               <td>Date of birth</td>
                           </tr>
                           <tr>
                               <td><input type="date" name="BoD" placeholder="Birth of date" required></td>
                           </tr>
                           <tr>
                               <td>Gender</td>
                           </tr>
                           <tr>
                               <td>
                                   <select type="text" name="gender" required>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                    </select>
                                </td>
                           </tr>
                           <tr>
                               <td>Preferred gender</td>
                           </tr>
                           <tr>
                               <td>
                                   <select type="text" name="preferredgender" required>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                    </select>
                                </td>
                            </tr>

                        </table>
                        
                    </div>
                    <div class="buttons">
                        <input class="create_button" type="submit" value="Create an account">
                    </div>
                    </form>
                        

                    </div>
                </div>
            </div>


            <?php 
            include "./includes/footer.php"
            ?>
            
        </div>
        <script src="index.js"></script>
    </body>
</html> 
