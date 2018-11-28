loginForm.on('submit', function(e){
        
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
           if(response.loggin===true){
             $("#test").load("dashboard.php");
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
}