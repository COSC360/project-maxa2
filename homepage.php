<!DOCTYPE html>
<html class="center">
    <head lang="en"> 
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/homePageStyle.css">
    <script> function noLog(){alert('No user detected, log in please');}</script>
    <script> function loggedIn(){alert('Already logged in, please log out.');}</script>
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>

    <body>
        
        <div class="top">
            <h1>WELCOME TO CRUELTY SQUAD</h1> 
            <?php 
                session_start();

                if(empty($_SESSION["username"])){
                    session_destroy();
                }

                if(session_status()==1){
                    echo "<p><a href = 'login.php' id='login'>LOGIN</a></p><br><br>";
                }else if(session_status() == 2){
                    echo "<p><a href = '#' onclick='loggedIn()' id='login'>LOGIN</a></p><br><br>";
                }
                ?>

            <p><a href="register.php" id="register">REGISTER</a></p>
        </div>

    <article id="sidebar">
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
            <img id="pfp" src="images/676-6764065_default-profile-picture-transparent-hd-png-download.png">
            <?php
                session_start();
                if(empty($_SESSION["username"])){
                    session_destroy();
                }

                if(session_status() == 1){
                    echo "<p><a href='#' onclick='noLog();'> Profile</a></p><br>";

                }else if (session_status()==2){
                   echo "<p><a href='profile.php'>Profile</a></p><br>";
                }
                ?>
            
            <?php
                session_start();
                if(empty($_SESSION["username"])){
                    session_destroy();
                }

                if(session_status() == 1){
                    echo "<p><a href='#' onclick='noLog();'> Create Post</a></p><br>";

                }else if (session_status()==2){
                   echo "<p><a href='makePost.html'>Create Post</a></p><br>";
                }
            ?>
            <p><a href="inbox.html">Messages</a></p><br>
            <p><a href="logout.php">Log out</a></p><br>
            <?php
                session_start();
                $admin = $_SESSION["admin"];

                if($admin == 1){
                    echo "<p><a href ='admin.php'>Admin tools</a></p>";
                }
            ?> 

    </article>

    
    <?php 

        $connString = "mysql:host=localhost;dbname=db_10504520";
        $user = "10504520";
        $pass="10504520";

        session_start();
        $username = $_SESSION['username'];

        $pdo = new PDO($connString, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `Posts`;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $count = 0;
        $array = array();
        $array = $row['id'];
        
                
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            echo "<article class='entry'>
            <p><a href='viewPost.php?id=".$count."' class='post'>" .$row['Title']. "</a></p>
            <p class='user'><a href='#'>".$row['Username']. "</a></p>
             <p class='preview'>".$row['Body']. "</p> <br><br><br>" ;
             
             echo "<p></p>";

           echo "</div> </article>";
           $count +=1 ;
         }
     
    ?>
                


        

    </body>

    <footer>
        <div><p>Support the devs! Buy the game! </p></div>
    </footer>










</html>