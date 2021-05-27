<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Let's Chat </title>
    <link rel="stylesheet" href="ChattingWebApp.css">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="j(48).png">
    <script src="main.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="ChattingWebApp.js"></script>
</head>
<body>

<script>

$(document).ready(function(){
    $('.Profile').hide();
    $('.Starred_message').hide();
    $('.Whatsapp_web').hide();
    $('.Log_out').hide();
    $('.About_us').hide();
    $('.mainWhatsapp').hide();


setTimeout(() => {
    $('.LoadingMain').hide();    
}, 1000);


setTimeout(() => {    
$('.mainWhatsapp').show();
}, 1000);
















$('.whatsapp_weB').click(function(){
    $('.messagePlate').hide();
    $('.Whatsapp_web').show();
    $('.optRight').hide();


      $('.Profile').hide();
    $('.Starred_message').hide();
    $('.Log_out').hide();
    $('.About_us').hide();
});

$('.profilE').click(function(){
    $('.messagePlate').hide();
    $('.Profile').show();
    $('.optRight').hide();

    $('.Starred_message').hide();
    $('.Whatsapp_web').hide();
    $('.Log_out').hide();
    $('.About_us').hide();
});





});


</script>


<div class="mainWhatsapp"> <!-- mainWhatsapp --><!-- mainWhatsapp --><!-- mainWhatsapp -->

<center>

<div class="mainHead">
    <div class="chats"> <div class="headText"> CHATS </div> </div>
    <div class="status"> <div class="headText"> STATUS </div> </div>
    <div class="calls"> <div class="headText"> CALLS </div> </div>
    <div class="other" onClick="option()"> <div class="headOpt"> ... </div> </div>
    <div class="other1" onClick="option2()"> <div class="headOpt1"> ... </div> </div>
</div>
</center>

<div class="optRight">
<div class="optList">
<div class="lists  profilE"> Profile </div>
<div class="lists  starred_messagE" id="drk" onclick="dark()" > Dark Mode </div>
<div class="lists  starred_messagE" style="display:none;" id="lght" onclick="light()" > Light Mode </div>
<div class="lists  whatsapp_weB"> Whatsapp Web </div>
<div class="lists  log_ouT"> Log out </div>
<div class="lists  about_uS"> About us</div>
</div>
</div>











<!-- /* chatpart */ -->




<div class="messagePlate">


<div class="chat-part">

</div>


<div class="chat-opt">
<div class="chat-opt-inn1">
    <input type="text" placeholder=" &nbsp; Type a message" class="chat-bar">
    <button class="chat-btn" onclick="passchat()"  name="chatbtn"> Send </button>
</div>
</div>



</div>


<!-- chatpart -->


</div> <!-- mainWhatsapp --><!-- mainWhatsapp --><!-- mainWhatsapp --> 



<!-- settings -->














<div class="Whatsapp_web">

<div class="head-setting">

Whatsapp Web

</div>

<img src="qr.png" class="qrimg">

</div>



<div class="Profile">

<img src="avatar.png" name="profileimg" id="profileimg" class="p-img">
<input type="text" placeholder="Enter your username here" name="profilenm" disabled id="profilenm" class="p-name">

<script>
document.querySelector('#profilenm').value = aname;
</script>

<!-- <p name="profilenm" id="profilenm" class="p-name">  </p> -->


<div class="pbtn-line0">
    <a href="login.php"> <button class="prfbtn"> LOG IN </button> </a>
    <a href="signup.php"> <button class="prfbtn"> SIGN UP </button> </a>    
</div>


</div>


<!-- setting -->















<!-- loading -->
<div class="LoadingMain">
    <img src="j(480).png" class="LoadingImg">
    <div class="TextMain"> Let's Talk </div>
</div>
<!-- loading -->


















</body>
</html>