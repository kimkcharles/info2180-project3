<?php

session_start();


$host = getenv('IP'); // get the cloud9 host IP
$dbname = 'hireme';
$username = getenv("C9_USER"); // get cloud9 username to connect to database
$password = '';

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

$statement = $pdo->prepare("INSERT INTO users (firstname, lastname, password, telephone, email, date_joined)
VALUES (:fname, :lname, :password, :telephone, :email, :datej)");

$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'emailaddress', FILTER_SANITIZE_EMAIL);
$datej= date("Y-m-d H:i:s");

$statement->bindParam(':fname', $fname, PDO::PARAM_STR);
$statement->bindParam(':lname', $lname, PDO::PARAM_STR);
$statement->bindParam(':password', $password, PDO::PARAM_STR);
$statement->bindParam(':telephone', $telephone);
$statement->bindParam(':email', $email, PDO::PARAM_STR);
$statement->bindParam(':datej', $datej);

$statement->execute();


    
    echo "success";
    