<?php
    


    $connString = "mysql:host=localhost;dbname=db_10504520";
    $user = "10504520";
    $pass="10504520";
    

    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;       

    $username = $_POST['user'];
    

    $sql = "DELETE FROM `Users` WHERE `Username` = '$username'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $sql = "DELETE FROM `Posts` WHERE `Username` = '$username'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    header("Location: admin.php");
    exit();




?>