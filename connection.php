<?php
$host = getenv('IP'); // get the cloud9 host IP
$dbname = 'schema';
$username = getenv("C9_USER"); // get cloud9 username to connect to database
$password = '';

//echo $host . ' ' . $username;

try {
    $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);
} catch(Exception $e) {
    die($e->getMessages());
}