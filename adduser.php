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
    
    <body>

    <br>
    <h2>New User</h2>
    <h3 id="new"></h3>
    <br>
    <form id="signup" action ="process_new.php" method="post">
        <label for="fname">First Name</label><br>
        <input type="text" class="input-field" id="fname" name="fname" required><br><br>
        
        <label for="lname">Last Name</label><br>
        <input type="text" class="input-field" id="lname" name="lname" required><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" class="input-field" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number, one letter, one capital letter and is atleast 8 characters long"> <input type="checkbox" title="Show password" onclick="checkBox()"><br><br>
        
        <!--Hash password-->
        <? php $password = $_POST["password"];
        $salt = mt_rand();
        $password = md5($salt.$password); ?>
        
        <label for="emailaddress">Email</label><br>
        <input type="text" class="input-field" id="emailaddress" name="emailaddress" placeholder="eg: maryjane@example.com" required patern="/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$"><br><br>
            
        <label for="telephone">Telephone</label><br>
        <input type="tel" class="input-field" id="telephone" name="telephone" placeholder="eg: 876-999-8989" required pattern="^\d{3}-\d{3}-\d{4}$"><br><br><br>

        <input type="submit" value="Submit">
    </form>
    
    
    </body>
</html>



