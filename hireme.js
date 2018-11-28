// JavaScript File
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