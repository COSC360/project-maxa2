<?php
    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    $pass = "testpassword";

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM `username` WHERE 1;";
    $result = $pdo->query($sql);

    $idNo = 0;
    $row = $result->fetch();
    $username = $row[0];
    // while($row = $result->fetch()){
    //     $username = $row;
    //     $idNo++;
    // }

    $pdo = null;

    ?>