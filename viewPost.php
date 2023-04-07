<!DOCTYPE html>
<html class="center">
    <head lang="en">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/viewPost.css">
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>

    <body>
        
        <div class="top">
            <h1>ERADICATE HOPE</h1>
        </div>
        

        <?php

            $connString = "mysql:host=localhost;dbname=db_10504520";
            $user = "10504520";
            $pass="10504520";
                
            session_start();
            $username = $_SESSION['username'];
            $id = $_REQUEST['id'];


            $pdo = new PDO($connString, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM Posts WHERE id ='$id'";
            
                
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $postData = $stmt->fetch();



            echo "<article class='entry'>
                    <div>
                        <p class='post'>".$postData['Title']."</p>
                        <p class = 'user'>".$postData['Username']."</p>
                        <p class='postText'>".$postData['Body']."</p>
                        <figure>
                    <img src='data:image/jpg; base64, ".base64_encode($postData['Image'])."' class='image' alt=''>
                    <figcaption></figcaption>
                    </figure>  
                            <div class = 'ratings'>
                                <img class='life' src='images/Life.png' alt='Life'>
                                <img class='good' src='images/React0.png' alt='Joy'>
                                <img class='death' src='images/Death.png' alt='Death'>
                                <img class='bad' src='images/React1.png' alt='Pain'>
                            </div>
                        </div>
                    </article>";




            ?>
    </body>
    <footer>
        <div><p>Support the devs! Buy the game! </p></div>
    </footer>










</html>