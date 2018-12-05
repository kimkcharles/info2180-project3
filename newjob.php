<!DOCTYPE html>
<html>
    <meta charset="utf-8">
         <link href="hireme.css" type="text/css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
         <script src="hireme.js" type="text/javascript"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
         <title>Hire Me</title>
    <body>
    <br><h2>New Job</h2><br>
    
   <form id="newForm">
     
        <label for="jobTitle">Job Title</label><br>
        <input type ="text" class= "input-field" id="jobTitle" placeholder ="e.g Senior Designer or Product Manager"><br><br>
        <label for="jobDescription">Job Description</label><br>
        <input type ="text" class= "input-field" id= "jobDes" placeholder = " "><br><br>
        <!-- Display select one drop down menu -->
        <label for="category">Category:</label><br>
        <Select Category ="category" id ="catName">
            <option name= "selectone"  value="0">Select one</option>
            <option name= "design"  value="1">Design</option>
            <option name= "program"  value="2">Programming</option>
            <option name= "devOps"  value="3">DevOps & System Admin</option>
            <option name= "comsup"  value="4">Customer Support</option>
            <option name= "sales"  value="5">Sales & Marketing</option>
        </Select><br><br>
        <label for="company">Company</label><br>
        <input type ="text" class= "input-field" id= "jobComp" placeholder = "Company name"><br><br>
        <label for="jobLocation">Job Location</label><br>
        <input type ="text" class= "input-field" id= "JobLoc" placeholder = "e.g: Kingston, Jamaica"><br><br>
                        
        <input type="submit" value="Submit">
    </form>


</body>
</html>

<?php
    
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $website = filter_input(INPUT_POST, 'website', FILTER_VALIDATE_URL);


?>