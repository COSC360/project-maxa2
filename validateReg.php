<?php

    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    $pass = "testpassword";

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;




    if($_SERVER['REQUEST METHOD'] == 'POST'){
        $email = $_POST['email'];
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "INSERT INTO `users`(`Username`, `Password`, `Email`) VALUES (".$username.",".$password.",".$email.")";
        $pdo->query($sql);




    }




    $pdo = null;

?>