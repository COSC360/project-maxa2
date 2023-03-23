<?php

    $connString = "mysql:host=localhost;dbname=mysql";
    $user = "root";
    

    $pdo = new PDO($connString, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;

    
    

    // if($_SERVER['REQUEST METHOD'] == 'POST'){

        $email = $_POST['email'];
        $username = $_POST['user'];
        $password = $_POST['pass'];


        $sql = "SELECT * FROM users WHERE Username = '$username' ;";
        //$result = $pdo->query($sql);
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        

            // while($row = $result->fetch()){
        

        // if(!in_array($_POST['email'], $result) && !in_array($_POST['user'], $result)){
            if($stmt->rowCount()>0){

                echo "Fail";
            
            }else{
                
    
                $sql = "INSERT INTO `users`(`Username`, `Password`, `Email`) VALUES (?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(1, $username, PDO::PARAM_STR);
                $stmt->bindParam(2, $password, PDO::PARAM_STR);
                $stmt->bindParam(3, $email, PDO::PARAM_STR);
    
    
                $stmt->execute();
                echo "Success";
            }
        //}



    // }

    $pdo = null;

?>