<?php
session_start();

$host = getenv('IP'); // get the cloud9 host IP
$dbname = 'hireme';
$username = getenv("C9_USER"); // get cloud9 username to connect to database
$password = '';

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

$statement = $pdo->query("SELECT * FROM jobs ORDER BY date_posted ASC  LIMIT 5");
$avjobs = $statement->fetchAll(PDO::FETCH_ASSOC);
if($statement->rowCount()==0){
    $ava=false;
}else{
    $ava=true;
}
// something wrong
$usern = $_SESSION['id'];
$statement = $pdo->query("SELECT j.company_name, j.job_title, j.category, a.date_applied FROM jobs j JOIN jobs_applied_for a ON j.id=a.job_id WHERE a.user_id={$usern}");
$apjobs = $statement->fetchAll(PDO::FETCH_ASSOC);
if($statement->rowCount()==0){
    $apa=false;
}else{
    $apa=true;
}
?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <link href="hireme.css" type="text/css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
         <script src="hireme.js" type="text/javascript"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
    </head>
    
    <body >
        <div id="das">
        <div id="dashtop">
            <h2>Dashboard</h2>
            <button>Post a Job</button>
        </div>
        <br>
        <?php
        if($ava){
        ?>            
        <table>
            <caption>Available Jobs</caption>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Job Title</th>
                    <th>Category</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avjobs as $avjob): ?>
                <tr>
                    <td><?= $avjob['company_name']; ?></td>
                    <td><a href="none" class="dash_link"><?= $avjob['job_title']; ?></a></td>
                    <td><?= $avjob['category']; ?></td>
                    <td><?= substr($avjob['date_applied'],0,10); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        }else{
            echo "<p>NO JOBS TO DISPLAY</P>";
        }
        ?>
        
        
        
        <?php
        if($apa){
        ?>
        <table>
            <caption>Jobs Applied For</caption>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Job Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($apjobs as $apjob): ?>
                <tr>
                    <td><?= $apjob['company_name']; ?></td>
                    <td><a href="none" class="dash_link"><?= $apjob['job_title']; ?></a></td>
                    <td><?= $apjob['category']; ?></td>
                    <td><?= substr($apjob['date_applied'],0,10); ?></td>
                    <td><?php include 'new_yn.php';?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        
        </table>
        <?php
        }else{
            echo "<p>NO JOBS TO DISPLAY</P>";
        }
        ?>
        
        
        
      </div>
    </body>
</html>