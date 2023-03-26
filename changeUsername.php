<?php


    session_start();

    $connString = "mysql:host=localhost;dbname=db_10504520";
    $user = "10504520";
    $pass="10504520";
    

    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;    

    $sessionUser = $_SESSION['username'];
    $username = $_POST['newUser'];    

    $sql = "SELECT * FROM Users WHERE Username = '$username';";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>0){
        echo "<script>alert('Username is taken')</script>";
    }else{
        $sql = "UPDATE Users SET Username = '$username' WHERE Username = '$sessionUser';";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $_SESSION['username'] = $username;
        
        header("Location: profile.php");
        exit();
    }

    $pdo = null;



    


?>