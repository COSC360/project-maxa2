<?php
    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    $pass = "testpassword";

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT biggamer22 FROM username";
    $result = $pdo->query($sql);

    $idNo = 0;
    $username = $result->fetch();
    // while($row = $result->fetch()){
    //     $username = $row;
    //     $idNo++;
    // }

    $pdo = null;

    ?>