// JavaScript File
/*if($_SESSION['login'] = "false"){
    $("#test").load("login.php");
}else if($_SESSION['login'] = "true"){
    $("#test").load("dashboard.php");
*/    


  //Ensures the user clicks on the submit button
//     $(document).ready(function(){
//   if(isset($_POST["Log_In"])){ 
//       <script>
//         document.getElementById("appear").style.visibility = "hidden";
//       </script>
//   }});
    // $(document).ready(function(){
    //     $(".row").style.visibility = "hidden";
    //     $("#ca").style.visibility = "hidden";
    // });
    
    $(document).ready(function(){
        $(".btn1").click(function(){
            $("#test").load("dashboard.php");
        });
    });
    
    $(document).ready(function(){
        $(".btn2").click(function(){
            $("#test").load("adduser.php");
        });
    });
    
    $(document).ready(function(){
        $(".btn3").click(function(){
            $("#test").load("newjob.php");
        });
    });
    
    $(document).ready(function(){
        $(".btn4").click(function(){
            $("#test").load("login.php");
            $("#ca").css("visibility", "hidden");
        });
    });
  
  
// For logging in
$(document).ready(function(){
$("#loginForm").on('submit', function(e){
   e.preventDefault();
   var email=$("#emailaddress").val().trim();
   var pswd=$("#password").val();
   if(email!="" && pswd!=""){
       $.ajax({
         type:'POST',
         url:'process_login.php',
         data:{
           email:email,
           password:pswd
         },
         success:function(response) {
          
           if(response==="trueadmin"){
            //   window.location.assign('hireme.html');
                $("#test").load("dashboard.php");
                $("#ca").css("visibility", "visible");
           }else if(response==="truemember"){
                $("#test").load("dashboard.php");
               $("#ca").css("visibility", "visible");
               $("p .btn2").css("visibility", "hidden");
               
           }
           else{
             alert("Wrong Details entered");
           }
         }
       });
   }
  
   else
   {
    alert("Please Fill All The Details");
   }
  
   return false;
})
})

// For signing up
$(document).ready(function(){
$("#signup").on('submit', function(e){
        
   e.preventDefault();
   var fname=$("#fname").val().trim();
   var lname=$("#lname").val().trim();
   var pswd=$("#password").val();
   var email=$("#emailaddress").val().trim();
   var telephone=$("#telephone").val().trim();
   if(fname!="" && lname!="" && telephone!="" && email!="" && pswd!=""){
       $.ajax({
         type:'POST',
         url:'process_new.php',
         data:{
                fname:fname,
                lname:lname,
                password:pswd,
                email:email,
                telephone:telephone
         },
         success:function(response) {
          
           if(response==="success"){
            //   window.location.assign('hireme.html');
                $("#test").load("adduser.php");
                $("#fname").val('');
                $("#lname").val('');
                $("#password").val('');
                $("#emailaddress").val('');
                $("#telephone").val('');
                $( "#new" ).html( "USER SUCCESSFULLY CREATED!" );
           }
           else{
             alert("Wrong Details");
           }
         }
       });
   }
  
   else
   {
    alert("Please Fill All The Details");
   }
  
   return false;
})
})

$(document).ready(function(){
    
    $(".dash_link").on('submit', function(e){
        
        e.preventDefault()
        $("#test").load("job_dets.php");
    })
    
    
})