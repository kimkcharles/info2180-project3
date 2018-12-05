$(document).ready(function(){
$("#loginForm").on('submit', function(e){
   console.log($("#emailaddress"));     
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
          
           if(response==="true"){
            //   window.location.assign('hireme.html');
                $("#ca").css("visibility", "visible");
                $("#test").load("dashboard.php");
           }
           else{
             alert("Wrong Details enteredoo");
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