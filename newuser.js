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
         url:'process_newt.1.php',
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