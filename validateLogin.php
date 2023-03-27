<?php
    
    session_start();

    $connString = "mysql:host=localhost;dbname=db_10504520";
    $user = "10504520";
    $pass="10504520";
    

    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;



    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT Username, Password FROM Users WHERE Username = '$username' AND Password = '$password'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();




    if($stmt->rowCount()>0){
        
        $_SESSION["username"] = $username;

        $sql = "SELECT `Admin` FROM `Users` WHERE`Username`= 'Max2'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $admin = $data['Admin'];
        $_SESSION["admin"] = $admin;

        header("Location: homepage.php");
        exit();

        
    }else{
        
        echo "Incorrect login details";

    }






?>