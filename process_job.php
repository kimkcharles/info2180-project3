<?php
    session_start();

    $host = getenv('IP'); // get the cloud9 host IP
    $dbname = 'hireme';
    $username = getenv("C9_USER"); // get cloud9 username to connect to database
    $password = '';

    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

    $statement = $pdo->prepare("INSERT INTO jobs (job_title, job_description, category, company, location, date_posted)
VALUES (:jtitle, :jdesc, :category, :company, :location, :dateposted)");

    if (!isset($_POST['jobTitle'])) {
        echo 'Job Title field is empty<br/>';
    }

    if (empty($jobDescription)) {
        echo 'Job Description field is empty<br/>';
    }
  
    if (!isset($_POST['company'])) {
        echo 'Company field is empty<br/>';
    }
    
    if (empty($jobLocation)) {
        echo 'Job Location field is empty<br/>';
    }

    $jobTitle = filter_input(INPUT_POST, 'jobTitle', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $jobDescription = filter_input(INPUT_POST, 'jobDescription', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_NUMBER_INT);
    $company = filter_input(INPUT_POST, 'company', FILTER_VALIDATE_STRING);
    $jobLocation = filter_input(INPUT_POST, 'jobLocation', FILTER_VALIDATE_STRING);
    $date = date("Y/m/d");

    $statement->bindParam(':jtitle', $jobTitle, PDO::PARAM_STR);
    $statement->bindParam(':jdesc', $jobDecription, PDO::PARAM_STR);
    $statement->bindParam(':category', $category, PDO::PARAM_STR);
    $statement->bindParam(':company', $company);
    $statement->bindParam(':location', $jobLocation, PDO::PARAM_STR);
    $statement->bindParam(':dataposted', $datej);

    $statement->execute();
    
    echo "success";
    
?>