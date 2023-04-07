<?php



    
    $connString = "mysql:host=localhost;dbname=db_10504520";
    $user = "10504520";
    $pass="10504520";


    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
    
        
        


    $email = $_POST['email'];
    $username = $_POST['user'];
    $password = $_POST['pass'];


    $sql = "SELECT Username FROM Users WHERE Username = '$username'";

        
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

        if($stmt->rowCount()>0){

            echo "Fail";
            
        }else{
                

            $sql = "INSERT INTO `Users`(`Username`, `Password`, `Email`) VALUES (?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $username, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->bindParam(3, $email, PDO::PARAM_STR);


            $stmt->execute();
            header("Location: homepage.php");
            
        }


    $pdo = null;

?>