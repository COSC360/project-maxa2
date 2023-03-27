<?php

    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    $username = $_POST['user'];
    $password = $_POST['pass'];


    $sql = "SELECT * FROM users WHERE Username = '$username' ;";

        
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

        if($stmt->rowCount()>0){

            echo "Fail";
            
        }else{
                
    
            $sql = "INSERT INTO `users`(`Username`, `Password`, `Email`) VALUES (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->bindParam(3, $email, PDO::PARAM_STR);
    
    
            $stmt->execute();
            header("Location: homepage.php");
            exit();
        }


    $pdo = null;

?>