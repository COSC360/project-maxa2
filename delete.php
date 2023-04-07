<?php
    


    $connString = "mysql:host=localhost;dbname=db_10504520";
    $user = "10504520";
    $pass="10504520";
    

    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;       

    $id = $_POST['id'];
    

    $sql = "DELETE FROM `Posts` WHERE `Id` = '$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $sql = "UPDATE `Posts` SET Id = Id - 1 WHERE Id > '$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    header("Location: admin.php");
    exit();




?>