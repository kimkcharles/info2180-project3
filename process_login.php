<?php

require 'connection.php';


session_start();


$_SESSION['email'] = '';
$_SESSION['username'] = '';
$_SESSION['loggin'] = false;

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //Sanitizationof user input
    $email  =  strip_tags($_POST["email"]);
    $email  =  stripslashes($email);
    $password  =  strip_tags($_POST["password"]);
    $password  =  stripslashes($password);
    
    //Validation of login data
    $Query     = "SELECT * FROM users WHERE email = '{$email}';";
    $statement = $db->prepare($Query);
    $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->execute();
    $email      = $statement->fetch(PDO::FETCH_ASSOC);
    
    //Processing Query Results
    if ($statement->rowCount()==1){
        if(password_verify($password,$user['password'])){
            $_SESSION["email"] = $email;
            $_SESSION["loggin"] = true;
            $_SESSION["username"] = $user['username'];
            
            echo ($_SESSION);
        }
    }
    else{
        echo ($_SESSION);
    }
}
    