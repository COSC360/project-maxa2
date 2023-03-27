<!DOCTYPE html>
<html class="center">
    <head lang="en">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "project-maxa2/CSS/reset.css">
    <link rel = "stylesheet" href="project-maxa2/CSS/homePageStyle.css">
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>

    <body>
        
        <div class="top">
            <h1>WELCOME TO CRUELTY SQUAD</h1> 
            <p><a href="project-maxa2/login.php" id="login">LOGIN</a> </p><br><br>

            <p><a href="project-maxa2/register.php" id="register">REGISTER</a></p>
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
            <img id="pfp" src="project-maxa2/images/676-6764065_default-profile-picture-transparent-hd-png-download.png">
            <p><a href="project-maxa2/profile.html">Profile</a></p><br>
            <p><a href="project-maxa2/makePost.html">Create Post</a></p><br>
            <p><a href="project-maxa2/inbox.html">Messages</a></p><br>
            <p><a href="logout.php">Log out</a></p>

    </article>

    <?php 

        $connString = "mysql:host=localhost;dbname=mysql";
        $user = "root";

        session_start();
        $username = $_SESSION['username'];

        $pdo = new PDO($connString, $user);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `Posts`;"
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    


         while($row = $result->fetch_assoc()) {
           echo "<p><a href='viewPost.html' class='post'>" $row['Title'] "</a></p>
            <p class='user'><a href='#'>'.$username. '</a></p>
            <p class='preview'>"$row['Body']"</p> <br><br><br>
            " if($row['Image']){
            "<figure>
               <img class='imgPrev' src="$row['Image']">
               <figcaption>SAMPLE IMAGE</figcaption>
           </figure>"
            }
           "</div>";
         }
     
    ?>
    <article class="entry">
        <div>
            
                

                <p><a href="viewPost.html" class="post">TEST BLOG POST</a>   </p>
                 <p class="user"><a href="#">'.$username. '</a></p>
                 <p class="preview">SAMPLE BLOG POST PREVIEW</p> <br><br><br>
                 <figure>
                    <img class="imgPrev" src="project-maxa2/images/20210305221416_1.jpg" alt="gameplay screenshot">
                    <figcaption>SAMPLE IMAGE</figcaption>
                </figure> 
                </div>
                

        
    </article>

    <article class="entry">
        <div>   
            <p><a href="#" class="post">TEST POST 2</a></p>
            <p class="user"><a href="#">coolgamer32</a><time datetime="2023-02-11 13:20"> on Feb 11 at 1:20 pm</time></p> 
            <p class="preview">ANOTHER SAMPLE POST PREVIEW</p>
        </div>
    </article>

    <article class="entry">
        <div>   
            <p><a href="#" class="post">TEST POST 3</a></p>
            <p class="user"><a href="#">awesomedude51</a><time datetime="2023-01-12 13:20"> on Jan 12 at 1:20 pm</time></p> 
            <p class="preview">ANOTHER SAMPLE POST PREVIEW</p>
        </div>
    </article>


        

    </body>

    <footer>
        <div><p>Support the devs! Buy the game! </p></div>
    </footer>










</html>