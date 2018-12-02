<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <link href="hireme.css" type="text/css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
         <script src="hireme.js" type="text/javascript"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
         <script src="login.js" type="text/javascript"></script>
         <title>Hire Me</title>
    </head>
    
    <body>
<br><h2>Log In</h2><br>
    <form id="loginForm">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYX5DpMPK1n5dIoghDAsr_-C2g91cV-IKXgoOxt_ZM2sjUVKx8" alt="Avatar" class="avatar"><br><br>
        
        <label for="emailaddress">Email</label><br>
        <input type="text" class="input-field" id="emailaddress" placeholder="eg: maryjane@example.com" required patern="/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$"><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" class="input-field" id="password" required> <input type="checkbox" title="Show password" onclick="checkBox()"><br><br>
        
        <input type="submit" value="Log In">
    </form>