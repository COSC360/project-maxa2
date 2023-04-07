<!DOCTYPE html>
<html class="center">
    <head lang="en">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/profileStyle.css">
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>

    <body>
        <?php
            session_start();

            if(empty($_SESSION["username"])){
                session_destroy();
            }
                       

            if(session_status() == 1){
                echo "<p>No user</p>";
            }else if (session_status()==2){
               echo "<p>" . $_SESSION["username"]. "</p>";
            }
        ?>
        <figure>
            <img id="pfp" src="images\676-6764065_default-profile-picture-transparent-hd-png-download.png">
        </figure>
        <div>
            <p>Upload new profile picture: </p>
            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" display="#pfp">
        <form id="mainForm" method="post" action="changeUsername.php">
            <p>Change username: <input type="text" name ="newUser" placeholder="New username" required> 
            <button type="submit">Save</button> </p> 
        </form>
            
            <p>Type your bio:</p> 
           <p><textarea name="bio" rows="5" col="30"></textarea><button type="submit">Save </button></p>

           <p><a href="homepage.php">Go home</a></p>

        </div>





    </body>




</html>