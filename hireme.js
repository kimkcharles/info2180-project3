// JavaScript File
/*if($_SESSION['login'] = "false"){
    $("#test").load("login.php");
}else if($_SESSION['login'] = "true"){
    $("#test").load("dashboard.php");
*/    
$(document).ready(function(){
    if( $('#bc').is(':empty') ) {
    $("#bc").load("login.php");}
});

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
    });
});
    