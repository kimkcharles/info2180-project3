<?php
session_start();
if($_SESSION["login"]=="true"){
    session_unset();
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <script src="hireme.js" type="text/javascript"></script>
    </head>
    
    <body>
        
        <br><h2>Log In</h2><br>
            <form id="loginForm" action ="process_login.php" method="post">
                <img class="avatar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYX5DpMPK1n5dIoghDAsr_-C2g91cV-IKXgoOxt_ZM2sjUVKx8" alt="Avatar"><br><br>
                
                <label for="emailaddress">Email</label><br>
                <input type="text" class="input-field" id="emailaddress" placeholder="eg: maryjane@example.com" required patern="/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$"><br><br>
                
                <label for="password">Password</label><br>
                <input type="password" class="input-field" id="password" required> <input type="checkbox" title="Show password" onclick="checkBox()"><br><br>
                <!--Hash password-->
                <? php $password = $_POST["password"];
                $salt = mt_rand();
                $password = md5($salt.$password); ?>
                <input type="submit" name="Log_in"  value="Log In">
            </form>
        
        
               
    </body>
</html>