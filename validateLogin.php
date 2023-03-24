<?php
    
    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;


    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT Username, Password FROM Users WHERE Username = '$username' AND Password = '$password'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();   

    if($stmt->rowCount()>0){
        $data = $username;
        $url = "homepage.php?data=" . urlencode($data);
        header("Location: " .$url);
        exit();

        
    }else{
        
        echo "Incorrect login details";

    }






?>