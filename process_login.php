<?php

session_start();


$host = getenv('IP'); // get the cloud9 host IP
$dbname = 'hireme';
$username = getenv("C9_USER"); // get cloud9 username to connect to database
$password = '';
//echo $host . ' ' . $username;

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

 //$pdo = new PDO('mysql:host= getenv("IP");dbname=hireme', getenv("C9_USER"), '');

$_SESSION['email'] = '';
$_SESSION['username'] = '';
$_SESSION['login'] = "false";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
   
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    
    
    //Sanitization of user input
    $email  =  strip_tags($_POST["email"]);
    $email  =  stripslashes($email);
    $password  =  strip_tags($_POST["password"]);
    $password  =  stripslashes($password);
    //Validation of login data
    
    //$Query     = "SELECT * FROM users WHERE email = '{$email}';";
    //$statement = $db->prepare($Query);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
    //Processing Query Results
    //if ($statement->rowCount()==1){
        // if(password_verify($password,$user['password'])){
        if($password==$user['password']){
            $_SESSION["email"] = $email;
            $_SESSION["login"] = "true";
            $_SESSION["username"] = $user['username'];
            $_SESSION["id"] = $user['id'];
            
            
            
            echo $_SESSION["login"].$_SESSION["username"];
            //header("refresh:1; url= hireme.html");
            
        }
    /*}
    else{
        $_SESSION["login"] = "false";
        // echo $_SESSION["login"];
        echo "wrong";
    }*/
}
    