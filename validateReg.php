<?php

    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    $pass = "testpassword";

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;

    $sql = "SELECT * FROM `user`;";
    $result = $pdo->query($sql);

    $row = $result->fetch();
    


        if(!in_array($_POST['email'], $row) && !in_array($_POST['user']), $row){
            $email = $_POST['email'];
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $sql = "INSERT INTO `users`(`Username`, `Password`, `Email`) VALUES (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->bindParam(3, $email, PDO::PARAM_STR);


            $stmt->execute();
            alert("Successfully registered");
        }else{
            alert("Registration failed");
        }








    $pdo = null;

?>