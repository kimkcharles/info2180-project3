<br><h2>New User</h2><br>
    <form id="signup">
        <label for="fname">First Name</label><br>
        <input type="text" class="input-field" id="fname" required><br><br>
        
        <label for="lname">Last Name</label><br>
        <input type="text" class="input-field" id="lname" required><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" class="input-field" id="password" required pattern="(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number, one letter, one capital letter and is atleast 8 characters long"> <input type="checkbox" title="Show password" onclick="checkBox()"><br><br>

        <label for="emailaddress">Email</label><br>
        <input type="text" class="input-field" id="emailaddress" placeholder="eg: maryjane@example.com" required patern="/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$"><br><br>
            
        <label for="telephone">Telephone</label><br>
        <input type="tel" class="input-field" id="tel" placeholder="eg: 876-999-8989" required pattern="^\d{3}-\d{3}-\d{4}$"><br><br><br>

        <input type="submit" value="Submit">
    </form>