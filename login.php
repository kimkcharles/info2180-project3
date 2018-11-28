<br><h2>Log In</h2><br>
    <form id="loginForm">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYX5DpMPK1n5dIoghDAsr_-C2g91cV-IKXgoOxt_ZM2sjUVKx8" alt="Avatar" class="avatar"><br><br>
        
        <label for="emailaddress">Email</label><br>
        <input type="text" class="input-field" id="emailaddress" placeholder="eg: maryjane@example.com" required patern="/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$"><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" class="input-field" id="password" required pattern="(\d)([a-zA-Z])([A-Z]).{8,}" title="Must contain atleast one number, one letter, one capital letter and is atleast 8 characters long"> <input type="checkbox" title="Show password" onclick="checkBox()"><br><br>

        <input type="submit" value="Log In">
    </form>