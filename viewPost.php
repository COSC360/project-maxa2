<!DOCTYPE html>
<html class="center">
    <head lang="en">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/viewPost.css">
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>
<?php

$connString = "mysql:host=localhost;dbname=mysql";
$user = "root";
    
session_start();
$username = $_SESSION['username'];


$pdo = new PDO($connString, $user);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM posts WHERE id = '$id';";

    
$stmt = $pdo->prepare($sql);
$stmt->execute();
$postData = $stmt->fetch();
?>
    <body>
        
        <div class="top">
            <h1>ERADICATE HOPE</h1>
        </div>

    <article id="sidebar">
            <p><?php $username?></p><br>
            <img id="pfp" src="images/676-6764065_default-profile-picture-transparent-hd-png-download.png">
            <p><a href="profile.html">Profile</a></p><br>
            <p><a href="#">Create Post</a></p><br>
            <p><a href="#">Messages</a></p><br>
            <p><a href="#">Log out</a></p>
    </article>

    <article class="entry">
        <div>
                <p><a href="#" class="post">TEST BLOG POST</a>   </p>
                <p class="user"><a href="#"><?php $postData['Username']?></a> <time datetime="2023-02-20 9:26"> on Feb 20 at 9:26 am</time></p>
                <?php
                if($postData['Image']){
                echo
                "<figure>
                    <img class='image' src="$postData['Image']">
                </figure> "
                }
                if($postData['Body']){
                echo<p class="postText">$postData['Body']"</p> <br><br><br>"
                }
                ?>
                <div class = "ratings">
                    <img class="life" src="images/Life.png" alt="Life">
                    <img class="good" src="images/React0.png" alt="Joy">
                    <p class="score"><?php $postData['ScoreA']?>"+"<?php $postData['ScoreB']?>"i"</p>
                    <img class="death" src="images/Death.png" alt="Death">
                    <img class="bad" src="images/React1.png" alt="Pain">
                </div>
        </div>
    </article>
    </body>
    <footer>
        <div><p>Support the devs! Buy the game! </p></div>
    </footer>










</html>