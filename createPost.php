<?php

    $connString = "mysql:host=localhost;dbname=db_10504520";
    $user = "10504520";
    $password = "10504520";
    
    session_start();
    $username = $_SESSION['username'];

    $pdo = new PDO($connString, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $postName = $_POST['postName'];
    $postText = $_POST['postText'];
    $file = $_POST['fileName'];
    $sql = "SELECT * FROM `Posts`;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $id = $stmt->rowCount();
    
    $sql = "INSERT INTO `Posts`(`Title`, `Body`, `Image`, `Username`, `Id`, `ScoreA`, `ScoreB`) VALUES (?,?,?,?,?, 0, 0)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $postName, PDO::PARAM_STR);
    $stmt->bindParam(2, $postText, PDO::PARAM_STR);
    $stmt->bindParam(3, $file, PDO::PARAM_STR);
    $stmt->bindParam(4, $username, PDO::PARAM_STR);
    $stmt->bindParam(5, $id, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: homepage.php");
    exit();
    $pdo = null;

?>