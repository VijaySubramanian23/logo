 <?php

  session_start();
 include "connect.php";
  $user_id=$_SESSION['user_id'];
  if(isset($_POST['register_submit']))
   {
          
//              echo $_SESSION['user_id'];
           $user_id=$_SESSION['user_id'];
           $q=mysqli_query($con,"update students set accomodation='yes' where user_id='$user_id' ") or die(mysqli_error($con));
   }
$_SESSION['flag']=0;    

$q1=mysqli_query($con,"select accomodation from students where user_id='$user_id'") or die(mysqli_error($con));
$flag;
        if($row=mysqli_fetch_assoc($q1))
        {
                $flag=$row['accomodation'];
               // echo $flag;
                                if($flag=='no')
                                {
                                        $_SESSION['flag']=1;
                                }
        else
        {
          $_SESSION['flag']=2;  
        }

          }



?>







<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#" >

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Civilisation'17 | CEG</title>


    <link href="assets/css/bootstrap/bootstrap.mine42d.css?version=1" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <link href="assets/css/plugins/hover/hover.min.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.carousel/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link id="changeable-colors" rel="stylesheet" href="assets/css/spectrum-orange.css">
    <link href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="city-events5012.css?version=14" />
<link href="style17dd.css?version=7" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">

<link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">

<style>



#mask {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #000;
  display: none;
}

#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 440px;
  height: 200px;
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}

#boxes #dialog {
  width: 750px;
  height: 300px;
  padding: 10px;
  background-color: #ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}

#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 0px;
  width: 250px;
  left: 250px;
}
.navbar-nav>li>a{
  font-family:roboto,sans-serif;
}


.social-mobile {
        position: fixed;
    bottom: 0px;
    width: 100%;
    margin: 0px;
    background-color: #272625;
    }
.social-mobile a {
        position: relative;
        float: right;
        height: 50px;
        line-height: 50px;
        width: 50px;
        color: rgb(255, 255, 255);
        background-color: rgb(196, 26, 30);
        font-size: 16px;
        text-align: center;
        border-radius: 50%;
        transition: all 300ms ease;
    }
.modal{
    max-height: 100%;

}
.error{
display:block;
margin-bottom:12px;
}

.tile-w {
    display: inline-block;
 margin-left:30%;
   
    max-width: 700px;

    text-align: left;
}
.exg li{

font-size:18px;
}
form {
    padding: 30px 50px;
    border: solid 1px rgb(216,216,216);
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    border-radius: 3px;
    margin: 0 10px 20px 10px;
    background: #fff;
}
/* The Close Button */
.close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.more-events {
      /*position: fixed;
    bottom: 0;
    text-align: center;
    color: white;*/
    position: fixed;
    top: 9vh;

    text-align: center;
    color: white;
}



.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

  *,*:after,*:before{
    box-sizing:border-box;
    /*font-family:roboto,sans-serif;*/
    /*color: #777;*/
  }
  
        .ambnav{
            color: rgb(101,101,101);font-size: 18px;padding: 10px;text-align:center
        }    
  form{
    padding: 30px 50px;
    border:solid 1px rgb(216,216,216);
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    border-radius: 3px;
    margin: 0 10px 20px 10px;
    background: #fff;
  }
  small{
    color: #777;
    font-size: 12px;
  }
.ambnav a{
    font-size: 2em;
    font-weight: bold;
    color: darkcyan;
        } 
.dropbtn {
  background: white;
    cursor: pointer;
    display: inline;
    /* border: solid 1px; */
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
}
.login{
  color:black;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
z-index:10000;
}
.modal{

z-index:999;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
   display: none;
    position: absolute;
    opacity: 1;

    background-color: #dddddd;
    min-width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

    left: 3%;
    top: 100%;
}


.dropdown-content a {
    color: black;
    padding: 6px 13px;

    display: block;
}


.dropdown-content a:hover {


opacity: 0.5;
}


.dropdown:hover .dropdown-content {
    display: inline;
}


.dropdown:hover .dropbtn {
    background: #4CAF50;
    color:white;
  
}   
  
  .tile-y{
    position: relative;
    text-align: center;
  }
  .tile-w{
    display: inline-block;
    max-width:700px;

    text-align: left;
  }
  label{
    display: block;
    margin-bottom: 10px;
    /*font-weight: bold;*/
    margin-top: 5px;
  }
  label.radio{
    color: #777;
    font-size: 14px;
  }
  label textarea{
    min-width: 80%;
    resize: vertical;
  }
    .control__indicator {
    position: absolute;
    top: -1px;
border-radius:13px;
    left: 0;
    height: 20px;
    width: 20px;
    background: #e6e6e6;
        }
    .control input:checked ~ .control__indicator {
    background: #2aa1c0;
}    
#register {
    background: rgb(75, 141, 249);
    color: #fff;
    width: 90px;
cursor: pointer;
    border: solid 1px;
    padding: 8px 15px;
    border-radius: 3px;
    font-weight: bold;
}
.heading{
    margin-left: 42%;
    font-size: 23px;
}
    .control{
    display: inherit;
    position: relative;
    padding-left: 30px;
    margin-bottom: 15px;
    cursor: pointer;
    font-size: 18px;
    }
        .control input{
    position: absolute;
    z-index: -1;
    opacity: 0;
        }
  
  textarea{
    min-height: 70px;
  }
  [type=submit]{
    background: rgb(75, 141, 249);
    color: #fff;
    border:solid 1px;
    padding: 8px 15px;
    border-radius: 3px;
    font-weight: bold;
  }
  [type=reset]{
    padding: 8px 15px;
    border:solid 1px #aaa;
    border-radius: 3px;
    font-weight: bold;
  }
  legend span{
    font-weight: normal;
    color: rgb(196,59,29);
  }


.req, textarea {
    width: 100%;!important
    border-radius: 4px;!important
    height: 40px;!important
    padding: 5px;!important
    border: solid 2px rgb(187, 187, 187);!important
}
.just_ad
{
display:none;;
}
#abcd
{
display:inline-flex;
padding-top: 6px;
}
#abcd1
{
display:inline;
}
.modal-content{

background-color:transparent;
}
        #cond{
            color:blue;
            cursor: pointer;
        }

        .modal-content p,h1{
            margin: 0px;
        }
.modal-header{

border-bottom:0px;
}
        .butts {
    background: rgb(75, 141, 249);
    color: #fff;

    cursor: pointer;
display:inline;

    padding: 8px 15px;
    border-radius: 2px;

}
h3 {
  margin-top: 0;
}

.badge {
  background-color: #777;
}

.tabs-left {
  margin-top: 3rem;
}





.tab-content .tab-pane {
  display: none;


      padding: 1.6rem;
  overflow-y: auto;
text-align:justify;
  font-size: 1.3em;
      font-family: roboto;

}
.tab-content .active {
  display: block;
}

.list-group {
  width: 100%;
}
.list-group .list-group-item {
  height: 50px;
}
.list-group .list-group-item h4, .list-group .list-group-item span {
  line-height: 11px;
}
#myModal {
    padding-top: 25vh;
}
#myModal1 {
    padding-top: 3vh;
}
#myModal2 {
    padding-top: 25vh;
}
#myModal3 {
    padding-top: 16vh;
}
#myModal4 {
    padding-top: 25vh;
}
#myModal5 {
    padding-top: 6vh;
}
#myModal6 {
    padding-top: 25vh;
}
#myModal7 {
    padding-top: 25vh;
}

.prizemoney._mobile
{

margin-left:16%;

}
.comp_name

{
display:inline-block;margin-left:31%;

}


.butts
{
margin-right:0%;display:inline;
}


@import url(http://fonts.googleapis.com/css?family=Roboto:300,400,500);



/* BOX LOGIN */
.box{
  position: relative;
  margin: auto;
  height: 410px;
  top: 40px;
  left: 0;
  z-index: 200;
  right: 0;
  width:400px;
  color:#666;
  border-radius: 3px;
  background: #FFF;
  margin-bottom: 100px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  overflow: hidden;
}

#header{
  background: #009688;
  position: relative;
  height: 100px;
  width: 100%;
  margin-bottom: 30px;
}

#cont-lock{
  width: 100%;
  height: 65px;
  position: relative;
}

.lock{
  text-align: center;
  color: white;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0;
  top: 0;
  bottom: 0;
  line-height: 65px;
  font-size: 28px;
}

#bottom-head{
  position: relative;
  background: #00796b;
  height: 35px;
}

#bottom-head::after{
  content: '';
  width: 0px;
  height: 0px;
  display: block;
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  bottom: 0;
  border-bottom: 7px solid white;
  border-right: 7px solid rgba(0,0,0,0);
  border-left: 7px solid rgba(0,0,0,0);
  border-top: 7px solid rgba(0,0,0,0);
}

.box h1{
  margin-left: 20px;
  margin-top: 0;
  font-size: 24px;
  font-weight: 300;
  color: #cfd8dc;
  line-height: 35px;
}

.box button{
  background: #cfd8dc;
  border:0;
  color: #009688;
  padding:10px;
  font-size: 16px;
  font-weight: 300;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
    -webkit-transition: all 0.4s;
  transition: all 0.4s;
  border-radius: 2px;
}

.box button:active{
  background: #009688;
  color: #263238;
}

.box button:hover{
    background: #009688;
  color: #FFF;
    -webkit-transition: all 0.4s;
  transition: all 0.4s;
}

.box p{
  font-size:14px;
  text-align:center;
}

.group        { 
  position:relative; 
  margin-bottom: 25px; 

}

.inputMaterial        {
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
color:black;
  border-bottom:1px solid #757575;
}

.inputMaterial:focus    { outline:none;}

/* LABEL ======================================= */

label          {
  color:#999; 
  font-size:14px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
.inputMaterial:focus ~ label, .inputMaterial:valid ~ label    {
  top:-20px;
  font-size:14px;
  color: #009688;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
border:none;
}
#bhubhaneshwar,#truvandrum,#pune,#agra,#banda,#mathura,#ahmedabad,#noida,#lucknow,#jaipur,#bhopal,#kolkata,#chennai,#lucknow,#gwalior,#vadodara,.iarc,.man,.soc,.sky,.flyingc,.androidc,.ethicalc,.iotc,.sixthc{

background-color:rgba(255,255,255,0.9);
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
/* BOTTOM BARS ================================= */
.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background: #009688; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
.inputMaterial:focus ~ .bar:before, .inputMaterial:focus ~ .bar:after {
  width:50%;
}


/* active state */
.inputMaterial:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}
h2{

font-size:30px;
}
/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}

#footer-box{
  width: 100%;
  height: 50px;
  background: #00695c;
  position: absolute;
  bottom: 0;
}

.footer-text{
  color: #cfd8dc;
  
}

.sign-up{
  color: white;
  cursor: pointer;
}

.sign-up:hover{
   color: #b2dfdb; 
}


$transition: all 0.3s;
$shadow-L1: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
$shadow-L2: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
$shadow-L3: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);


#container-a{
  border-radius: 50%;
  width: 60px;
  height: 60px;
  position: fixed;
  top: 20px;
  right: 20px;
  overflow: hidden;
  transition: $transition;
  box-shadow: $shadow-L3;
      
  /*&:hover{
    width: 150px;
    border-radius: 50px;
    transition: $transition;
  }*/
  
  #badge{
  width: 100%;
  height: 100%;
  background-image: url("https://lh3.googleusercontent.com/-X-aQXHatDQY/Uy86XLOyEdI/AAAAAAAAAF0/TBEZvkCnLVE/w140-h140-p/fb3a11ae-1fb4-4c31-b2b9-bf0cfa835c27"); 
  background-size: 100%;
  transition: $transition;
  position: absolute;
  
  
    &:hover .codepen{
     display: block;
    }
  }
  
  &:hover #letter{
      display: block;
  }
  
  &:hover #badge{
    width: 150px;
    height: 150px;
    transition: $transition;
    filter: blur(7px);
  } 
 
  #letter{
    display: none;
    z-index: 20;
    width: 100%;
    height: 100%;
    position: absolute;
    
    span{
      font-family: 'Roboto';
      font-size: 32px;
      color: white;
      text-align: center;
      line-height: 60px;
      margin: auto;
      left: 0;
      right: 0;
      position: absolute;
      cursor: pointer;
    }
  }
}


#container-floating{
  position: fixed;
  width: 60px;
  height: 60px;
  top: 20px;
  right: 20px;
  z-index: 50px;
  
  &:hover{
    height: 400px;
    width: 60px;
    top: 20px;
    right: 20px;
  }
  
  &:hover .nds{
    animation: bounce-nds 0.1s linear;
    animation-fill-mode:  forwards;
  }
  &:hover .nd3{
    animation-delay: 0.08s;
  }
  &:hover .nd4{
    animation-delay: 0.15s;
  }
  &:hover .nd5{
    animation-delay: 0.2s;
  }
  
  .nds{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    position: fixed;
    z-index: 300;
    transform:  scale(0);
    right: 33px;
    cursor: pointer;
    &:hover{
      box-shadow: $shadow-L3;
      transition: $transition;
      width: 50px;
      right: 25px;
      height: 50px;
    }
  }

  .nd1{
    background-image: url("../../blog.codepen.io/wp-content/uploads/2012/06/Button-Fill-Black-Large.png");
    background-size: 100%;
    top: 110px;
    animation-delay: 0.1s;
    animation: bounce-out-nds 0.3s linear;
    animation-fill-mode:  forwards;
    box-shadow: $shadow-L2;
    transition: $transition;
  }

  .nd3{
    background: url("../../cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-512.png");
    background-size: 100%;
    top: 165px;
    animation-delay: 0.15s;
    animation: bounce-out-nds 0.15s linear;
    animation-fill-mode:  forwards;
    box-shadow: $shadow-L2;
    transition: $transition;
  }

  .nd4{
    background: url("http://www.studiotomasi.org/images/gplusicon.svg");
    background-size: 100%;
    top: 225px;
    animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
    animation-fill-mode:  forwards;
    box-shadow: $shadow-L2;
    transition: $transition;
  }
  
}


@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}


.profile-name{
    line-height: 60px;
    left: -70px;
    position: absolute;
    font-family: 'Roboto';
    color: #455a64;
}

.profile-name:hover{
  text-decoration: underline;
}





#names::-webkit-input-placeholder {
  color: gray;
}
#names::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}
#names:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}
#names:-moz-placeholder { /* Firefox 18- */
  color: gray;
}

#username::-webkit-input-placeholder {
  color: gray;
}
#username::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}
#username:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}
#username:-moz-placeholder { /* Firefox 18- */
  color: gray;
}#contact::-webkit-input-placeholder {
  color: gray;
}
#contact::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}
#contact:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}
#contact:-moz-placeholder { /* Firefox 18- */
  color: gray;
}

#college::-webkit-input-placeholder {
  color: gray;
}
#college::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}
#college:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}
#college:-moz-placeholder { /* Firefox 18- */
  color: gray;
}
#facebook::-webkit-input-placeholder {
  color: gray;
}
#facebook::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}
#facebook:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}
#facebook:-moz-placeholder { /* Firefox 18- */
  color: gray;
}
#password::-webkit-input-placeholder {
  color: gray;
}
#password::-moz-placeholder { /* Firefox 19+ */
  color: gray;
}
#password:-ms-input-placeholder { /* IE 10+ */
  color: gray;
}
#password:-moz-placeholder { /* Firefox 18- */
  color: gray;
}


.highlight{

display:block;
}
::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

::-webkit-scrollbar
{
  width: 12px;
  background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #555;
}
</style>
    <script src="a127fb8.js?version=3"></script>
    <script src="random1a8e.js?version=11"></script>
<script type="text/javascript">

$(document).ready(function() {

$('a.soon').hover(function(){
  $(this).css('cursor','not-allowed');
});




});
    $(function(){
var $animation_elements = $('.portfolio-item');
var $animation_elements1 = $('.doc-item');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('slideInUp');
    } 
  });
}
function check_if_in_view1() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('slideInUp');
    } 
  });
}
$window.on('scroll resize', check_if_in_view1);
$window.trigger('scroll');
});

    </script>
 <style type="text/css">
.circle {
  border-radius: 10px;
}
.register{
  background-color: #3b5998;
  margin-top: 3px!important;
  border-radius: 3px;
}
.tab-content{

color:white;
font-family: verdana;
}
.panel
{
    margin-bottom: 9px;
}
.register a{
  padding: 3px !important;
  margin: 0px;
  color: white
}
.register i{
  background-color: #2d519d;
  padding: 9px;
}

.mob h3{
  font-size: 15px;
  margin: 0px;
  padding: 5px;
  text-align: center;
  color: white;
}
body{
font-family:'roboto';
}
#iarc,#man,#sky,#soc{

padding:2px;
}
.mob li{
  border-top: 1px solid white;
  margin-top: 5px;
  color: black;
  font-family: 'roboto';
  list-style: none;

  background-color: white;
  font-size: 18px;
}
li
{font-family:'roboto';
line-height:39px;}
h3
{
line-height:39px;
}
h4
{
font-family:'roboto';
line-height:39px;
text-align:left;
}
#myModal1,#myModal,#myModal2,#myModal3,#myModal4,#myModal5,#myModal6,#myModal7{
display: none;
    position: fixed;
    z-index: 1;
    left: 0;
overflow:auto;
overflow-y: scroll;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);

    max-height: 100%;


    display: none;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    -webkit-overflow-scrolling: touch;
    outline: 0;


}
.mob ul{
  font-size: 1em;
  text-align: center;
  position: absolute;
  left: 0px;
  width: 100%;
  padding-left: 0px;
}
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;

  padding: 0 !important;
  border-radius: 4px;
  height: 100%;
display: flex;
    flex-direction: row;
  margin-left: 50px;
  opacity: 0.97;
}
div.bhoechie-tab-menu{
  padding-right: 0;
display: flex;
    flex-direction: column;
    justify-content: center;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
margin-top: 8%;
display: flex;
    flex-direction: column;
    justify-content: center;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
font-size:20px;
}
.just_is
{
display:none;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}
#iarc, #man, #sky, #soc {
    box-shadow: 0px 0px 0px 0px;}
div.bhoechie-tab-content{

  padding-left: 20px;

}
.sigma{

margin-top:4%;
}
legend{

font-size:14px;
}
form,#myModal4,#myModal5{

    font-family: "Source Sans Pro",Calibri,Candara,Arial,sans-serif;
}
div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
.carousel-fade .carousel-inner .active{
  transition: 0.4s
}
.navbar-dark.top-nav-collapse .nav li.register a:after{
  background: transparent;
}
.navbar-dark .nav li a:after, .navbar-light .nav li.register a:after{
  background: transparent;
}
.modal-backdrop{
  z-index: 0;
}
.event-nav-content.active,.workshop-nav-content.active{
background-color: #ada4a4;;

}
.event-nav-content,.workshop-nav-content{
font-size:16px;

}
.list-group-item.active
{
 background-color: #c3bbbb;
    border-color: #c3bbbb;
}
.letsee{
    margin-top: 0vh;
    height: 80vh;
padding-left:5%;
background-color:rgba(255,255,255,0.9);
}
strong{
font-weight:300;
}
.tab-content{

margin-top:0vh;
}
.exg li{

font-size:18px;
}
.letsee1
{
top: 3vh;
    font-size: 24px;
background-color:rgba(255,255,255,0.9);
    height: 68vh;}
#myModal11,#myModal22,#myModal33,#myModal44,#myModal55,#myModal66,#myModal77,#myModal88,#myModal99{
overflow-y:hidden;

}
.divider {
    text-align: center;
    overflow: hidden;
margin-bottom:3%;.white_bg 

   background-color: #ffffff;

}
.divider:before {
    margin-left: -100%;
    left: -1.25rem;
}
.divider:after, .divider:before {
    content: "";
    display: inline-block;
    vertical-align: middle;
    position: relative;
    width: 100%;
    border-top: 1.3px solid #221e1f;
}
.divider:after {
    margin-right: -100%;
    right: -1.25rem;
}
#leave{

margin-left:23%;
}
#leave1{

margin-left:22%;
}
.list-group-item {
    background-color: #c3bbbb;
    border-color: #c3bbbb;
}
a.list-group-item:hover
{
 background-color: #c3bbbb;
    border-color: #c3bbbb;
color:black;
}

.h2_talk{
margin-left:46%;
}
.glows{





}
html { 
  background: url(bg1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#features,#events,#contacty,#cities{

    background-color: rgba(255,255,255,0.4);
}
#talksy{
height:99%;
}

@media only screen and (max-width: 600px) {
.navbar-nav {
    float: none!important;
}
#talksy .modal-dialog{
  width: 100%!important
}
.navbar-header.page-scroll{
  width: 100% !important
}
.container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header{
  margin: auto;
  max-height: 100%;
}
.navbar-toggle{
  margin:auto;
}

    .tile-w {
        margin-left: 0;
        max-width: none;
        min-width: 0;
        width: 100%;
    }
.h2_talk{
margin-left:36%;
}
#leave{

margin-left:0px;
}
#talksy{
height:100%;
}
#leave1{

margin-left:0px;
}
.prizemoney._mobile
{

margin-left:22%;

}
.tab-content{
height:40vh;
}
div.bhoechie-tab-menu
{
width:25%;

}
div.bhoechie-tab
{
padding:0px;

}
div.bhoechie-tab-content {
    padding-left: 0px;
}
.letsee{
height:75vh;
width: 45vh;
}

.letsee1{
height:59vh;

}
.comp_name

{margin-left:19%;

}
#resend
{

display:inline-block;;
}
.just_ad
{
display:block;;
}
.letsee2{
height:47vh;

}
.butts

{display:inline;

}
#abcd,#logout2{

margin-left:43%;
}
   .dropdown-content{
top:30%;

}
    #myModal1 {
        padding-top: 15vh;
    }
#myModal11,#myModal22,#myModal33,#myModal44,#myModal55,#myModal66,#myModal77,#myModal88,#myModal99{
margin-top:12%;

}
.portfolio-modal .modal-content
{
margin-top:10%;
}
    #myModal3 {
        padding-top: 7vh;
    }

    form {
        padding: 30px 40px;
    }
    .butts {
        margin-top: 4%;
        font-size: 80%;
    }
    .tabs-left {
        margin-top: 1rem;
    }
}
.techno_talks{  
    width: 50%;
    padding-top: 6%;
    text-align: center;
    float: right;
    overflow: auto;

}

  .carousel-inner.onebyone-carosel { margin: auto; width: 90%; }
.onebyone-carosel .active.left { left: -33.33%; }
.onebyone-carosel .active.right { left: 33.33%; }
.onebyone-carosel .next { left: 33.33%; }
.onebyone-carosel .prev { left: -33.33%; }
#talksy .modal-dialog {
    width: 50% !important;
    margin: auto auto !important;
}
#talksy .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    margin-top: -72px !important;
    font-size: 90px !important;
}
#talksy .carousel-control{
  width: 6%!important
}
#talksy .carousel{
      height: 60vh;
    overflow: hidden;
}
#talksy .item .col-md-4{
  height: 60vh;
}
#talksy .tab-content {
    top: 8vh !important;
    height: 85vh !important;
    background-color: #3c763d !important;
}
#talksy .modal-header{
  padding: 0px;
}
#talksy .tab-content .tab-pane{
  text-align: center!important;
}
#talksy .well a img{
  width: 50%!important
}
#talksy .speaker{
  min-height: 60vh;
}
.letsee img{
  width: 50%!important
}
@media only screen and (max-width: 600px) {

#talksy .modal-dialog{
  width: 100%!important
}
}
@media only screen and (min-width: 769px) {

.navbar-dark.top-nav-collapse .nav li a{
  font-size: 0.8em!important
}
}
.navbar-nav {
    float: right ;
}

    .logo{
      display: flex!important;
      margin: auto;
    }
    .logo img{
        height: 100%;
        width:auto;
        margin: auto!important;
    }
    .logo a{
      margin: auto!important;
    }
    .tech_site{
      width: 60%!important;
    }


.work{
  left:0%;
}


.cont{
  border-right:2px solid green;
}
.contact-col{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding:30px 20px 30px 20px;
  background-color: #3e444d;
}
.contact-col-spo{
  background-color: white;
}
 .mob .work2{
  padding:20px 5px 6px 5px;
 }
 .logo-img{
  max-width: 50%;

 }
 .block-cont{
  padding-bottom: 30px;
 }

 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    border-radius: 10%;
    color: white;
    padding: 10px 25px 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-family: verdana;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
.home-cont{
  position:relative;
  top:25%;
  bottom:25%;
}

.bharathi{
  padding:40px 0 0 0;
}

.nav-btn{
  border:1px solid green;
  padding:7px 20px 7px 20px;
}

      #map {
        height: 500px;
        max-width: 70%;
        margin:auto;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      #acc-btn{
        background-color:white;
        color:#4CAF50;
          border:1px solid green;
      }
#acc-btns{
  width:30%;
  position: relative;
  bottom:0;
  right: 0;
}
#acc-btn:hover{
  background-color:#4CAF50;
  color:white;

}
@media screen and (max-width: 600px)
{

        #map {
        height: 300px;
        max-width: 90%;
      }
  .work{
    left:0;
  }

  .work-tit{
  
}
  .cont{
    border-right:none;
    border-bottom:2px solid green;
    padding:5px 0 20px 0;
  }
  .mob .work2{
    padding:40px 5px 20px 5px;
  }
  .logo-img{
    max-width: 75%;
  }
    #myModal1234{
    margin-top:12%;
  }
}



.title-spon img{
  width:100%;
  padding:20px;
}


@media screen and (min-width:600px){
  footer{
  margin-top: 250px;
}
.title-spon img{
  max-width:50%;
  padding:25px;
}
}


    </style>
    <script type="text/javascript">
  $(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">





<!--div id="boxes">

  <div id="dialog" class="window">
  <h1>Notification</h1><br \>
  <br \>
    <h3>Workshop login open now</h3>

    <div id="popupfoot"> <a href="#" class="close agree">OK</a> </div>

  </div>

  <div id="mask"></div>

</div-->

<!-- The Modal -->

<div id="myModal" style='overflow-y:scroll;' class="modal">

  <!-- Modal content -->


<form class="tile-w">
<div style='display:flex;justify-content:center;'>



    <span id='close0' class="close" style="margin-left:auto;">x</span>

</div>

       <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="user">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Username/Email<span>*</span></label>
</div>
 <div class="group">      

     
        <input  class="inputMaterial" required type="password" name="name" id="pwd">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Password<span>*</span></label>
</div>
<span class='error' id='error'></span>
<div class='butts' id='submit'>Submit</div>
<div class='butts' id='signup_login'>signup</div>
<div class='butts'  id='forgot_login'>Forgot Password</div>
<div class='butts'  id='resend'>Resend Email</div>

</form>


</div>
<div style='max-height:100%;overflow-y:scroll' id="myModal1"  class="modal">

  <!-- Modal content -->

<form id='form-for-signup' class="tile-w">


<div style='display:flex;justify-content:center;'>



    <span id='close1' class="close" style="margin-left:auto;">x</span>

</div>


      <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="names">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Name<span>*</span></label>
</div>

 <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="username">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Username<span>*</span></label>
<span id='error11'></span>
</div>

      


 <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="email">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Email<span>*</span></label>
</div>
 <div style='margin-bottom:35px;' class="group">      
<label style='pointer-events:visible;display:inline' class=" control radio">Male<input type="radio" name="gender" id="gender1" value="Male">
                <div class="control__indicator"></div></label>
        <label style='pointer-events:visible;display:inline' class=" control radio">Female<input type="radio"  name="gender" id="gender2"  value="Female">
                <div class="control__indicator"></div></label>
               
      </label>

</div>
 <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="contact">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Phone No.<span>*</span></label>
</div>


 <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="college">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>College Name<span>*</span></label>
</div>

       <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="facebook">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Facebook Profile link<span>*</span></label>
</div>


 <div class="group">      

     
        <input  class="inputMaterial" required type="password" name="name" id="password">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Password<span>*</span></label>
</div>

<span class='error' id='error1'></span>
<div class='butts' id='signup'>Submit</div>
<div class='butts' id='signup_login_button'>Login</div>

</form>


</div>

<div id="myModal2" style='overflow-y:scroll;' class="modal">

  <!-- Modal content -->


<form class="tile-w">
<span class='heading'>RECOVER</span>
<div style='display:flex;justify-content:center;'>



    <span id='close2' class="close" style="margin-left:auto;">x</span>

</div>
       <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="forgot_email">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Email<span>*</span></label>
</div>

         <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="forgot_username">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Username<span>*</span></label>
</div>
<span class='error' id='error2'></span>
<div class='butts' id='forgot'>Submit</div>
</form>
  </div>

</div>


<div id="myModal3" style='overflow-y:scroll;'  class="modal">

  <!-- Modal content -->



<form id='compie1' class="tile-w">

<div style='display:flex;justify-content:center;'>



    <span id='close3' class="close" style="margin-left:auto;">x</span>

</div>
<div class='group' style="margin-top:10%;">
    <legend style='margin-bottom:2px;border-bottom:0;'>Select a centre</legend><select style='display:block;' id="centre" name="city">
                                                      <option  value="BANDA">BANDA</option>
                                                      <option  value="MATHURA">MATHURA</option>
                                                      <option  value="JAIPUR">JAIPUR</option>
                                                      <option  value="BHUVANESHVAR">BHUBHANESWAR</option>
                                                      <option selected value="KOLKATA">KOLKATA</option>
                                                      <option  value="CHENNAI">CHENNAI</option>
                                                      <option  value="LUCKNOW">LUCKNOW</option>
                                                      <option  value="NOIDA">NOIDA</option>

                                                      <option  value="VADODARA">VADODARA</option>
                                                      <option  value="GWALIOR">GWALIOR</option>

                                                      <option  value="AGRA">AGRA</option>
                                                      <option  value="TRIVANDRUM">TRIVANDRUM</option>
                                                      <option  value="PUNE">GWALIOR</option>
          </select>


</div>
<div class='group'>
<label id='fuck_all' style='pointer-events:visible;display:inline' class=" control radio">Events<input type="radio"  name="types" id="types1" value="event">
                <div class="control__indicator"></div></label>
        <label style='pointer-events:visible;display:inline' class=" control radio">Workshops<input type="radio" name="types" id="types2" checked='checked' value="workshop">
                <div class="control__indicator"></div></label>
               
      </label>
</div>
<div  class='group'>
<legend style='margin-bottom:2px;border-bottom:0;'>Select a Workshop/Event</legend>
    <select style='display:block;' id="event" name="citiesfl">
                            <option selected value="iot">iot</option>

                            <option  value="android">android</option>
                            <option  value="sixth_sense">sixth sense</option>
                            <option  value="flying_wing">flying wing</option>
                                                       <option  value="ethical">ethical</option>


          </select>

</div>


<div id='compie' style='display:none;'>
 <div class="group" id='team1'>      

     
        <input  class="inputMaterial" required type="text" name="name" id="team">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Team Name<span>*</span></label>
</div>
 <div class="group" id='per1' >      

     
        <input  class="inputMaterial fixed_comp" required type="text" name="name" id="person1" readonly>
 <span class="highlight"></span>
      <span class="bar"></span>


</div>
<div id='person_toadd'>
<div class='group'><input  class="inputMaterial fixed_comp" required type='text' data='2.html' name='name' id='person2'><span class='highlight'></span><span class='bar'></span><label>Person2<span>*</span></label><span class='error' id='error32'></span></div>
<div class='group'><input  class="inputMaterial fixed_comp" required type='text' data='3.html' name='name' id='person3'><span class='highlight'></span><span class='bar'></span><label>Person3<span>*</span></label><span class='error' id='error33'></span></div>
<div class='group'><input  class="inputMaterial fixed_comp" required type='text' data='4.html' name='name' id='person4'><span class='highlight'></span><span class='bar'></span><label>Person4<span>*</span></label><span class='error' id='error34'></span></div>
<div class='group'><input  class="inputMaterial fixed_comp" required type='text' data='5.html' name='name' id='person5'><span class='highlight'></span><span class='bar'></span><label>Person5<span>*</span></label><span class='error' id='error35'></span></div>
</div>
<span class='error' id='error03'></span>
<div class='butts' id='event_register'>Submit</div>
</div>

<div id='workie'>
<span class='error' id='error3'></span>
<div class='butts' id='work_reg'>Submit</div> 
</div>
</form>
  </div>

</div>

<div id="myModal4" style='overflow-y:scroll;' class="modal">

  <!-- Modal content -->
<form  class="tile-w">
<div style='display:flex;justify-content:center;'>



    <span id='close4' class="close" style="margin-left:auto;">x</span>

</div>

      
<p id='what_info'>Check the inbox or spam folder of your  mailid </p>

</form>
</div>





<div id="myModal5" style='overflow-y:scroll;' class="modal"><!--Profile-->

  <!-- Modal content -->
<form  class="tile-w">
<div style='display:flex;justify-content:center;'>



    <span id='close5' class="close" style="margin-left:auto;">x</span>

</div>



<div id='list_comp' style="margin-bottom: 5%;">
<span style='display: block;font-weight:bold;'>MEMBER DETAILS</span><br>
<table border='3' id='mytable'>
<tbody style="
    
" id="tbody0">
</tbody>
</table>
</div>
<div style='margin-bottom:6%;' id='list_comp1'>
<span style='display: block;font-weight:bold;'>COMPETITION DETAILS</span><br>
<table border='3' id='mytable'>
<tbody style="
    
" id="tbody">
</tbody>
</table>

</div>

<div style='margin-bottom:6%;' id='list_comp3'>
<span style='display: block;font-weight:bold;'>TECHNOCRUISE EVENT DETAILS</span><br>
<table border='3' id='mytable'>
<tbody style="
    
" id="tbody2">
</tbody>
</table>
</div>
<div style='margin-bottom:6%;' id='list_comp2'>
<span style='display: block;font-weight:bold;'>TECHNOCRUISE WORKSHOP DETAILS</span><br>
<table border='3' id='mytable'>
<tbody style=""
    id="tbody1">
</tbody>
</table>

</div>




<div id='change_pass' class='butts'>Change Password</div>

</form>

</div>
<div id="myModal6" style='overflow-y:scroll;' class="modal">

  <!-- Modal content -->


<form class="tile-w">

<div style='display:flex;justify-content:center;'>



    <span id='close6' class="close" style="margin-left:auto;">x</span>

</div>
       <div class="group">      

     
        <input  class="inputMaterial" required type="password" name="name" id="old_pass">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Old Password<span>*</span></label>
</div>
       <div class="group">      

     
        <input  class="inputMaterial" required type="password" name="name" id="new_pass">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>New Password<span>*</span></label>
</div>
<span class='error' id='error6'></span>
<div class='butts' id='changes'>Change</div>
</form>


</div>

<div id="myModal7" style='overflow-y:scroll;' class="modal">

  <!-- Modal content -->


<form class="tile-w">

<div style='display:flex;justify-content:center;'>



    <span id='close7' class="close" style="margin-left:auto;">x</span>

</div>
       <div class="group">      

     
        <input  class="inputMaterial" required type="text" name="name" id="resend_email">
 <span class="highlight"></span>
      <span class="bar"></span>

      <label>Email<span>*</span></label>
</div>
    
<span class='error' id='error7'></span>
<div class='butts' id='resend_submit'>Submit</div>
</form>
  </div>

</div>

    <div id="wrapper">

        <nav class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container" style="    width: 95%;padding-left:0;padding-right:0;">
                <div class="navbar-header page-scroll" style="width: 20%">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars" style="font-size:xx-large;"></i>
                    </button>
                    <div class="navbar-brand" >
                        <span class="logo">
                             <a href="#page-top"><img src="img/nav-logo.png"/></a>
                        </span>
                    </div>
                </div>

                
                    
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="width: 75%">
                
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">ABOUT</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#workshop">WORKSHOP</a>
                        </li>

                        </li>
                        <li class="page-scroll">
                            <a href="event2.html">EVENTS</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#talksy">GUEST LECTURERS</a>
                        


                        <li>
                          <a target="_blank" href="#" class=""  data-toggle="modal" data-target="#myModal1234">Accommodation</a>
                          </li>
 

                        <li class="page-scroll">
                            <a href="#contacty">CONTACT</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#sponsor">SPONSORS</a>
                        </li>   

  <li id='myBtn' style='cursor:pointer;'><a href="logout.php">Logout</a></li>                                 
 <div id='abcd' data='0.html' class="dropdown">
    <a class="dropbtn" id='just_check' href=""  style="color:black">

<?php
          if(isset($_SESSION['user_id']))
      {echo $_SESSION['user_id'];
      }
      ?>


</a>



    <div class="">
      <a style='color:black' id="just_profile"></a>
      <a style='color:black' id='logout' ></a>
    </div>
  </div> 
                                                         

                    </ul>
                </div>
            </div>
        </nav>

        <header id="myCarousel" class="carousel slide carousel-fade intro-slider">
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('bgimg1.jpg');">
                    <div class="home-cont">
                      <img src="logo.png" class="logo-img"><br \><br \>
                      <!--button class="button button1" onclick="location.href='register/loginform.php'">Register Now</button-->
                      </div>
                    </div>
                </div>

            </div>
        </header>



        <section id='about' style="background: url(aboutWeb.jpg);background-repeat: no-repeat;background-size: cover;" id="about" class="about-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-6 text-center" data-scrollreveal="move 0">
                        <h2 style="color: white;">ABOUT</h2>
                        <hr class="primary">
                    </div>
                </div>
                <div class="row" data-scrollreveal="enter left">
                    <div class="col-lg-6 col-lg-offset-6 text-center about-techno" data-scrollreveal="enter right">
                        <p>The Society of Civil Engineers proudly presents the 34th edition of Civilisation with the tagline "Towards Sustainability". This national level technical symposium provides a platform for innovation and gives life to imagination. It serves as a competing arena for brains from all over the country to design their vision and forge a brighter future. It builds monuments of creativity, cemented by technical knowledge and plastered by innovation. Civilisation caters to the varied needs and strengths of the participants, due to which it has been a grand success all these years.</p>
                    </div>
                </div>
            </div>
        </section>







        <section id="workshop" style="" class="">

          <div class="container" style="width: 90%;">
            <div class="row">
              <div class="col-lg-12 text-center" data-scrollreveal="move 0">
                        <h2 class='glows' style="color:white;">WORKSHOP</h2>
                        <hr class="primary">
                    </div>
                </div>
                <div class="row" data-scrollreveal="enter bottom">
                  <div class="isotope">
                        <div id="iarc" class="bounce animated col-md-offset-2 col-sm-6 col-md-4 portfolio-item graphic work" style=" box-shadow: 0px 7px 34px 6px;border-radius:10px;">
                            <a target="_blank" href="#" class=""  data-toggle="modal" data-target="#myModal11">
                                <img src="img/work2.jpg" class="img-centered" alt="" style="border-radius:10px 10px 0 0;">
                                                                <div class="mob caption">



                                    <h3 style="color:black;border-radius:10px;border-radius:0 0 10px 10px;background-color:#fff;display: flex; flex-direction: column;justify-content: center;  font-family: verdana; max-width: 100%"><span>SUPPORT SYSTEM ON DEEP EXCAVATION AND UNDERGROUND STRUCTURES</span><div><button class="btn btn-info" style="width:30%;margin:auto;" id="acc-btn" onclick="window.open('https://www.thecollegefever.com/events/civilisation-17')">Pay Now</button><button class="btn btn-info" style="width:30%;margin:auto;margin-left:5px;" id="acc-btn">Click here</button></div></h3>

                                </div>
                            </a>
                        </div>
                        <div id="man" class="bounce animated col-sm-6 col-md-4 portfolio-item graphic work" style="    box-shadow: 0px 7px 34px 6px;border-radius:10px;">
                            <a target="_blank" href="#" class=""  data-toggle="modal" data-target="#myModal22">
                                <img src="img/work1.jpg" class="img-centered" alt="" style="width:100%;border-radius:10px 10px 0 0;">
                                                                <div class="mob caption" style="width:100%;">
                                   <h3 style="color:black;border-radius:10px;border-radius:0 0 10px 10px;background-color:#fff;display: flex; flex-direction: column;justify-content: center;  font-family: verdana; max-width: 100%"><span>PRECAST TECHNOLOGY AND MODERN CONSTRUCTION</span><div><button class="btn btn-info" style="width:30%;margin:auto;" id="acc-btn" onclick="window.open('https://www.thecollegefever.com/events/civilisation-17')">Pay Now</button><button class="btn btn-info" style="width:30%;margin:auto;margin-left:5px;" id="acc-btn">Click here</button></div></h3>

                                   
                                </div>
                            </a>
                        </div>
             <!--           <div id="sky" class="bounce animated col-sm-6 col-xs-6 col-md-2 portfolio-item graphic" style="    box-shadow: 0px 7px 34px 6px;">
                            <a target="_blank" href="#" class=""  data-toggle="modal" data-target="#myModal33">
                                <img src="assets/img/events/icon/Rule_the_Sky.jpg" class="img-centered" alt="" style="">
                                                                <div class="mob caption">
                                    <h3 style="color:black;background-color:grey;display: flex; flex-direction: column;justify-content: center;"><span>Rule The Sky </span></h3>                                    
                                </div>
                            </a>
                        </div>
                        <div id="soc" class="bounce animated col-sm-6 col-xs-6 col-md-2 portfolio-item graphic" style="    box-shadow: 0px 7px 34px 6px;">
                            <a target="_blank" href="#" class=""  data-toggle="modal" data-target="#myModal44">
                                <img src="assets/img/events/icon/soccon.jpg" class="img-centered" alt="" style="width:100%;">
                                                                <div class="mob caption " style="width:100%;">
                                    <h3 style="color:black;background-color:#337ab7;display: flex; flex-direction: column;justify-content: center;"><span>SocCon</span> </h3>                                    
                                </div>
                            </a>
                        </div>    -->                                            
                    </div>
                </div>
          </div>

        </section>  





        <div class="modal event-modal" id="myModal11" style="background-image: url(bgimg12.jpg); background-size: cover;border-radius: 10px;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">


                <button type="button" style="color: white;opacity: 1;" class="close" data-dismiss="modal" style="font-size: 200%;">&times;</button>
                <h4 class="modal-title"><span class="work-tit" style="  font-family: verdana;font-size:25px;">SUPPORT SYSTEM ON DEEP EXCAVATION AND UNDERGROUND STRUCTURES </span></h4>
              </div>
              <div>
  
  <center><div id="event-" class="row">
      <button class="btn nav-btn" href="#tab61" data-toggle="tab" >Home</button>
      <button class="btn nav-btn" href="#tab62" data-toggle="tab">Course Highlight</button>
      <button class="btn nav-btn" href="#tab66" data-toggle="tab">Course Structure</button>
      <button class="btn nav-btn" href="#tab63" data-toggle="tab">Information</button>
      <button class="btn nav-btn" href="#tab64" data-toggle="tab">Contact</button>
      <button class="btn nav-btn" href="#tab65" data-toggle="tab">Register</button>

    <!--a href="#tab61" data-toggle="tab"><div class="col-md-2 event-nav-content iarc-event active">HOME</div></a>
    <a href="#tab62" data-toggle="tab"><div class="col-md-2 event-nav-content iarc-event">COURSE HIGHLIGHT</div></a>
    <a href="#tab66" data-toggle="tab"><div class="col-md-2 event-nav-content iarc-event">COURSE STRUCTURE</div></a>
    <a href="#tab63" data-toggle="tab"><div class="col-md-2 event-nav-content iarc-event">ELIGIBILITY</div></a>
    <a href="#tab64" data-toggle="tab"><div class="col-md-2 event-nav-content iarc-event">CONTACTS</div></a>
    <!--a href="#tab65" data-toggle="tab"><div class="col-md-1 event-nav-content iarc-event">CONTACTS</div></a-->
    <!--a class='common_reg' href="register/loginform.php"><div class="col-md-2 event-nav-content iarc-event">REGISTER</div></a-->
  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab61">
          <ul>
          <li><b>“At times , a building will burrow into the ground like a rabbit and at other times it soars like a bird”</b>
              <b>“Underground! A more gentle way to built”</b>
</li>
        <li>Ever wondered what is happening beneath us?? Ever wondered of dwelling with ground as the roof?? From residential extensions to public transport to Bank vaults,there is a lot going on under our cities.With surface being cramped ,there is nowhere to go ,but down.It is up to us,civil engineers, to“dig deep”for alternative solutions, exploring underground-The spectacle of invisible.</li>
        <li><b>CIVILISATION 17</b> is delighted to give you the best opportunity to explore procurement , design and delivery of underground structures under the topic <b>“SUPPORT SYSTEM ON DEEP EXCAVATION AND UNDERGROUND STRUCTURES”.</b></li>

        </div>
        <div class="tab-pane fade" id="tab62">
          <ul>
            <li>Discussing the challenges faced in underground metro constructions.</li>

            <li>Gaining knowledge about the effect of subsurface geology and numerical analysis to check deformation.</li>
            <li>Design approach and investigations held in existing excavation methods used in  engineering constructions.</li>
            <li>Interpreting the effects on neighboring structures during deep excavations. </li>
          </ul>
 
        </div> 
        <div class="tab-pane fade" id="tab63">
                <ul>
                  <li>Both U.G and P.G students with a valid ID card of their respective educational institutions are eligible </li>
                  <li>Students willing to pursue their career in Civil engineering are eligible.</li>

                </ul>
                <h4><u>DETAILS:</u></h4>
                <ul>
                    <li>DATE : 16TH March,2017</li>
                    <li>  TIME: 10:30 am to 2:30 pm</li>
                    <li>VENUE:Anna University, Chennai-25</li>
                    <li>  REGISTRATION FEE: INR 600</li>
                </ul>



</ul>
        </div>
        <div class="tab-pane fade" id="tab66">
          
            <h4>Lecture session 1</h4>
            <ul>

            <li>Time-10:30am to 12:00pm</li>
            </ul>
            
           
            <h4>Expert</h4>
             <ul>

              <li> Dr N Kumar Pitchumani,CEng,MICE,</li>
               <li> Technical Director- Geotechnical,AECOM.</li>
            </ul>

<h4><u>Topics covered :</u></h4>
<ul>
            <li>Challenges in underground metro construction.</li>
            <li>The design and construction aspects of the underground structures.</li>
            <li>The effect of neighboring structures and the effect of subsurface geology and numerical analyses to check deformations.</li>
            <li>Some examples from a metro construction project.</li>
          </ul>
          <hr \>
          <h4>Lecture session 2</h4>
            <ul>

            <li>Time-1:00pm to 2:30pm</li>
            </ul>
            <h4>Expert</h4>
          <ul>
    <li> Dr Venkata Prasad Chintaluri, Managing Director,</li>
    <li>M/s Geo Marine Consultant (P) Ltd.,</li>
    </ul>
<h4><u>Topics covered:</u></h4>
<ul>
  <li>The detailed study and encounter of deep excavation.</li>
  <li>Types and methods involved in deep excavation.</li>
  <li>Impact of failure of excavation in neighboring buildings.</li>
  <li>Design approach of shoring system.</li>
        </div>
      <div class="tab-pane fade" id="tab64">
      
        <h4>For further queries, please contact:</h4>
        <ul>
        <li>Vinitha - 8754094512</li>
        <li>Yogeswaran - 9790191669</li>
        <li>Email at <b><u>workshops@civilisation.org.in</u></b>
      </li>
      </ul>

      </div>
    <div class="tab-pane fade" id="tab65">
<div class="text-center">
    <h3 class="text-center" style="color:green;font-family:verdana;display:block;" id="hide-text"></h3>
    <h3 style="font-size: 20px;">You will be redirected to <b>thecollegefever.com</b>, where the online payment will be processed</h3>
  <button class="btn" id="acc-btn" onclick="window.open('https://www.thecollegefever.com/events/civilisation-17')">Pay Now</button>
  </div>

</div>
  </div>

</div>
            </div>      
        </div>
      </div>








<section id='talksy' style="background:url('gl.jpg') no-repeat center" >
      <div class="container" >
            <div class="row">
              <div class="col-lg-12 text-center" data-scrollreveal="move 0">
                        <h2 class='glows' style="color:white">GUEST LECTURERS</h2>
                        <hr class="primary">
                    </div>
                </div>
       <div class="row">
           <div class="span12">
                <div class="well">
                    <div id="myCarousel" class="carousel fdi-Carousel slide">
                     <!-- Carousel items -->
                       <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                            <div class="carousel-inner onebyone-carosel">
                                <div class="item active">
                                    <div class="col-md-4">
                                        <div style="background-color: white;padding: 10px;border-radius: 5px;" data-toggle="modal" data-target="#ahemdabad_speaker" class="text-center speaker">
                                              <a href="#aboutModal" data-toggle="modal"><img src="talks/gl1a.jpg" width="100%"></a>
                                              <h5 style="color:green;">WASTEWATER TREATMENT: AN OVERVIEW FROM INDIAN PERSPECTIVE</h5><hr>
                                               <h4 class="text-center">Mr. P. Ganesh Kumar</h4>
                                               <em>Senior Engineering Manager</em>
                                               <em>EDRC Wastewater Business Unit,</em>
                                               <em>L&T Construction</em><br>
                                               <button class="btn" style="color:white;background-color: green;" onclick="window.open('https://www.thecollegefever.com/events/civilisation-17')">Pay</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <div style="background-color: white;padding: 10px;border-radius: 5px;" data-toggle="modal" data-target="#jaipur_speaker" class="text-center speaker">
                                              <a href="#aboutModal" data-toggle="modal"><img src="talks/face.png" width="100%"></a>
                                              <h5 style="color:green;">SMART CITIES</h5><hr>
                                               <h4 class="text-center">Mr. R. Murugan</h4>
                                               <em>DGM, Programme Management Unit</em><br>
                                               <em>Smart City Mission,</em><br>
                                               <em> TUFIDCO</em><br>
                                               <button class="btn" style="color:white;background-color: green;margin-top:15px;" onclick="window.open('https://www.thecollegefever.com/events/civilisation-17')">Pay</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <div style="background-color: white;padding: 10px;border-radius: 5px;" data-toggle="modal" data-target="#" class="text-center speaker">
                                              <a href="#aboutModal" data-toggle="modal"><img src="talks/face.png" width="100%"></a>
                                              <br>
                                               <h4 class="text-center" style="color:green;">COMING SOON</h4><br><br><br>
                                               <em></em><hr>
                                               <button class="btn" style="color:white;background-color: green;margin-top:30px;" >Free</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#eventCarousel" data-slide="prev">  <span class='glyphicon glyphicon-menu-left icon-prev'></span></a>
                            <a class="right carousel-control" href="#eventCarousel" data-slide="next">  <span class='glyphicon glyphicon-menu-right icon-next'></span></a>
                        </div>
                       <!--Ahemdabad talk speaker-->                        
                        <div class="modal fade" id="ahemdabad_speaker" role="dialog">
                            <div class="modal-dialog">
                             <div class="modal-content">

                                <div class="modal-body" style="text-align:center;">

                                    <div class="row-fluid">
                                        <div class="span10 offset1">
                                            <div id="modalTab">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="about_1">
                                                        <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">✕</button>
                              </div>
                                                             <img src="talks/gl1.jpg" width="100%">
                                                             <div style="font-size:17px;">
                                                              <h4 class="text-left" style="color:yellow">Expert</h4>
                                                             <em>Mr. P. Ganesh Kumar  </em><br>
                                                                <em>Senior Engineering Manager,</em><br>
                                                              <em>  EDRC Wastewater Business Unit,</em><br>
                                                              <em>  L&T Construction
                                                                </em>
                                                                <hr>
                                                             <h4 class="text-left" style="color:yellow">Details</h4>
                                                             <div class="text-left">
                                                             <em>Date        : March 18th, 2017</em><br>
                                                                <em>  Time      : 01:30 PM - 03:00 PM</em><br>
                                                                <em>  Venue   : Anna University, Chennai-25</em><br>
                                                               <em>   Registration fee  : INR 200 (limited seats)</em><br>
                                                                <em>  Both U.G and P.G students with a valid ID card of their respective educational institutions are eligible</em>
                                                                </div>
                                                                <p>  Certificates will be issued</p>
                                                                                                                               
                                                             <div>
                                                               <h4 style="color:yellow">Contact</h4>
                                                               <em>Bharathi S.  :  7200708762</em><br>
                                                                <em>Masha A.  :  9578635240</em>
                                                             </div>
                                                             <h4 style="font-size:20px;">Mail queries to<u> guestlectures@civilisation.org.in</u></h4>
                                                             </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                    </div> 
                               
                              </div>
                            </div>
                          </div>
                        <!--Jaipur talk speaker-->                        
                        <div class="modal fade" id="jaipur_speaker" role="dialog">
                            <div class="modal-dialog">
                             <div class="modal-content">
                                <div class="modal-body" style="text-align:center;">
                                    <div class="row-fluid">
                                        <div class="span10 offset1">
                                            <div id="modalTab">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="about_1">
                                                         <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">✕</button>
                              </div>
                                                             <!--img src="" width="100%"-->
                                                             <div style="font-size:17px;">
                                                              <h4 class="text-left" style="color:yellow;">Expert</h4>
                                                             <em>Mr. R. Murugan </em><br>
                                                                <em>DGM, Programme Management Unit</em><br>
                                                              <em> Smart City Mission, TUFIDCO</em><br>
                                                                <hr>
                                                             <h4 class="text-left" style="color:yellow">Details</h4>
                                                             <div class="text-left">
                                                             <em>Date        : March 18th, 2017</em><br>
                                                                <em>  Time      : 10:30 AM - 12:00 PM</em><br>
                                                                <em> Venue    : Anna University, Chennai-25</em><br>
                                                               <em>   Registration fee  : INR 200 (limited seats)</em><br>
                                                                <em>  Both U.G and P.G students with a valid ID card of their respective educational institutions are eligible</em>
                                                                </div>
                                                                <p>  Certificates will be issued</p>
                                                                                                                               
                                                             <div>
                                                               <h4 style="color:yellow">Contact</h4>
                                                               <em>Bharathi S.  :  7200708762</em><br>
                                                                <em>Masha A.  :  9578635240</em>
                                                             </div>
                                                             <h4 style="font-size:20px;">Mail queries to<u> guestlectures@civilisation.org.in</u></h4>
                                                             </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                    </div> 
                               
                              </div>
                            </div>
                          </div>
                        <!--Bhopal talk speaker-->                        
                       <div class="modal fade" id="bhopal_speaker" role="dialog">
                            <div class="modal-dialog">
                             <div class="modal-content">
                                <div class="modal-body" style="text-align:center;">
                                    <div class="row-fluid">
                                        <div class="span10 offset1">
                                            <div id="modalTab">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="about_1">
                                                        <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">✕</button>
                              </div>
                                                             <img src="talks/deepak.jpg" width="100%">
                                                              <h3>Dr. Deepak Motwani</h3>
                                                             <em>Founder @ I.T. Fusion and Vishleshan Educational and Social Welfare Society - VESWS</em>
                                                             <p>Socialpreneur at Vishleshan Educational & Social Welfare Society<br></p>
                                                             <hr>
                                                             <div>
                                                               <h2>About Speaker</h2>
                                                               <p>Mr. Deepak Motwani is a result oriented Entrepreneur, Professional, Administrator, Writer and Researcher. He founded I.T. Fusion in 2011 and Vishleshan Educational & Social Welfare Society in 2016. He is an IIM Indore’s alumni and pursuing Ph.D. in Management, completed Post Graduation in Management and Bachelor of Engineering in Information Technology. He is proficient in formulating innovative marketing strategies. He has provided his services in the field of IT Consulting, Marketing, HR, CSR, Corporate Communication and Public Relations (PR). He ventured with many renowned corporate houses and institutions to provide various services for the benefits of the stakeholders of the association.</p>
                                                             </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                    </div> 
                               
                              </div>
                            </div>
                          </div>
                    </div><!--/myCarousel-->
                </div><!--/well-->
            </div-->

         <!--h2 class="text-center" style="color:white">Will be updated soon...</h2-->
        </div>
   </div>

</section>




    <div class="modal event-modal" id="myModal1234" style="background-image: url(bgimg12.jpg); background-size: cover;overflow-y: none;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" style="color: white;opacity: 1;" data-dismiss="modal" style="font-size: 200%;">&times;</button>
                <h4 class="modal-title"><span style="font-family: verdana;">ACCOMMODATION</span></h4>
              </div>
              <div>
  
 <center><div id="event-" class="row">
      <button class="btn nav-btn" href="#tab71" data-toggle="tab">Home</button>
      <button class="btn nav-btn" href="#tab75" data-toggle="tab">Contact</button>
      <button class="btn nav-btn" href="#tab99" data-toggle="tab">Register</button>
   <!-- <a href="#tab71" data-toggle="tab"><div class="col-md-2 event-nav-content man-event active">HOME</div></a>
    <a href="#tab75" data-toggle="tab"><div class="col-md-1 event-nav-content man-event">CONTACTS</div></a-->
  </div></center>
  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab71">
          <ul>
                <li>Accommodation will begin from the night of 15th March to 18th March.</li>
                <li>Accommodation will be provided for both boys and girls.</li>
                <li>Rs.200 per day will be collected as an accommodation fee<b> + </b>Rs.100 as an advance.</li>
                <li>Rs.500 will be collected for those who stay all 3 days<b> + </b>Rs.100 as an advance.</li>
                <li>Advance will be refunded at the time of leaving</li>
                <li>Since accommodation is provided at college hostel, students should obey the rules and regulation during the stay.</li>
                <li>Door locks will not be provided for rooms.</li>
                <li>Food will not be provided, canteen and restaurants inside the campus will be available.</li>
                <li>The students should be present inside the hostel before   9:30 pm for boys - 8:30 for girls, attendance will be taken during night stay in hostel.</li>
                <li>Every student will be provided with bed, bed sheets and pillow.</li>
                <li>We are not responsible for any of your properties.</li>
                <li>Consumption of alcohol and smoking will not be entertained inside the campus, if any found will be under severe action.</li>
                <li>Due to water scarcity in Chennai students are requested not to waste water unnecessarily.</li>
                <li>Any issue during the stay should be brought to our knowledge immediately.</li>
                <li>The registered name should match with the name on the college id.</li>
                <li>The last date for registration is 12-3-2017.</li>
                <li>Priority will be given for online registration.</li>

          </ul>
          <!-- <marquee scrollamout='5'><h2 class="awesome">Some Text Some Text Some Text</h2></marquee>-->
        </div>

      <div class="tab-pane fade" id="tab75">Contact Details
<ul><li>9943911352 (KARTHIKEYAN.S)</li>
            <li> 8190958812 (BALARAM.D)</li>
            <li>7502269423 (BAVANI.K) </li>
</ul>

</div>

<div class="tab-pane fade" id="tab99">
<div id="div1" class="text-center">
  <h3 class="text-center" style="color:green;font-family:verdana;display:none;" id="hide-text"></h3>
  <div style="color:green;">
  <h4 style="font-size:20px;" class="text-center">Online registration is mandatory. Payment will be collected on the day of accomodation.</h4>
  </div>
  <!--button class="btn" id="acc-btn">Register</button-->


<?php

  if(isset($_SESSION['flag']))  
        {  //echo "dass..";
    if($_SESSION['flag']==1)
    { 
      echo "<form action='index2.php' method='POST'>
          <input  type='submit' name='register_submit' class='btn' id='acc-btn' value='Register'>
          </form>";
    }
          else
          {
                  echo "Successfully Registered for accomodation";
          }
  }
  else
  {
    echo "..";
  }
?>


</div>
</div>



  </div>

</div>
            </div>      
        </div>
      </div>



      <div class="modal event-modal" id="myModal22" style="background-image: url(bgimg12.jpg); background-size: cover;border-radius: 10px;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" style="color: white;opacity: 1;" data-dismiss="modal" style="font-size: 200%;">&times;</button>
                <h4 class="modal-title"><span style="  font-family: verdana;">PRECAST TECHNOLOGY AND MODERN CONSTRUCTION</span></h4>
              </div>
              <div>
  
 <center><div id="event-" class="row">
      <button class="btn nav-btn" href="#tab91" data-toggle="tab" >Home</button>
      <button class="btn nav-btn" href="#tab92" data-toggle="tab">Course Highlight</button>
      <button class="btn nav-btn" href="#tab93" data-toggle="tab">Course Structure</button>
      <button class="btn nav-btn" href="#tab73" data-toggle="tab">Information</button>
      <button class="btn nav-btn" href="#tab74" data-toggle="tab">Contact</button>
      <button class="btn nav-btn" href="#tab98" data-toggle="tab">Register</button>

    <!--a href="#tab71" data-toggle="tab"><div class="col-md-2 event-nav-content man-event active">HOME</div></a>
    <a href="#tab72" data-toggle="tab"><div class="col-md-2 event-nav-content man-event">PROBLEM STATEMENT</div></a>
    <a href="#tab76" data-toggle="tab"><div class="col-md-1 event-nav-content man-event">ARENA</div></a>
    <a href="#tab73" data-toggle="tab"><div class="col-md-2 event-nav-content man-event">JUDGING CRITERIA</div></a>
    <a href="#tab74" data-toggle="tab"><div class="col-md-2 event-nav-content man-event">INCENTIVES</div></a>
    <a href="#tab75" data-toggle="tab"><div class="col-md-1 event-nav-content man-event">CONTACTS</div></a>
    <a class='common_reg'><div class="col-md-2 event-nav-content man-event">REGISTER</div></a-->
  </div></center>
  <div class="tab-content">

<div class="tab-pane fade in active" id="tab91">
          <ul>
          <li><b>“What's nice about concrete is, it looks unfinished”</b>
          </li>
        <li>Ever imagined of constructing a tall building or complex within a week or month??
Precast Technology is emerging technology in India and is getting popular among the younger generation as the construction method is modern, more mechanized, target oriented and quality oriented. It is also gradually being adopted by a lot of developers, builders and contractors in India because of advantage in terms of speed, quality and cost of construction.</li>
        <li><b>CIVILISATION 17</b> is proud to give you an excellent opportunity to widen your technical knowledge in modern construction methods with the fabrication of precast structures.</li>

        </div>
        <div class="tab-pane fade" id="tab92">
          <ul>
            <li>Gaining wide knowledge about the modern precast technology.</li>

            <li>Expert guidance which helps you exchange views and experiences.</li>
            <li>Visualization of techniques in the connections made in precast structures through live demonstration.</li>
          </ul>
 
        </div> 
        <div class="tab-pane fade" id="tab93">
                <h4>Lecture session 1</h4>
            <ul>

            <li>Time-10:30 am to 12:30 pm</li>
            </ul>
            
           
            <h4>Expert</h4>
             <ul>

              <li> Mr. K. Mohan Kumar,</li>
               <li> Managing Director,</li>
               <li>Ra-Ni Precast Consulting Services (P) Ltd.</li>
            </ul>

<h4><u>Practical session (live demonstration)</u></h4>
<ul>
            <li>Time -1:30 pm to 4:30 pm.</li>
            </ul>
            
        </div>

<div class="tab-pane fade in active" id="tab73">
                <ul>
                  <li>Both U.G and P.G students with a valid ID card of their respective educational institutions are eligible </li>
                  <li>Students willing to pursue their career in Civil engineering are eligible.</li>

                </ul>
                <h4><u>DETAILS:</u></h4>
                <ul>
                    <li>DATE : 17TH March,2017</li>
                    <li>  TIME: 10:30 am to 4:30 pm</li>
                    <li>VENUE:Anna University, Chennai-25</li>
                    <li>  REGISTRATION FEE: INR 850</li>
                </ul>



</div>


      <div class="tab-pane fade" id="tab74">
      
        <h4>For further queries, please contact:</h4>
        <ul>
        <li>Vinitha - 8754094512</li>
        <li>Yogeswaran - 9790191669</li>
        <li>Email at <b><u>workshops@civilisation.org.in</u></b>
      </li>
      </ul>

      </div>
    <div class="tab-pane fade" id="tab98">
        <div class="text-center">
            <h3 class="text-center" style="color:green;font-family:verdana;display:block;" id="hide-text"></h3>
            <h3 style="font-size: 20px;">You will be redirected to <b>thecollegefever.com</b>, where the online payment will be processed</h3>
          <button class="btn" id="acc-btn" onclick="window.open('https://www.thecollegefever.com/events/civilisation-17')">Pay Now</button>
        </div>

</div>


        <div class="tab-pane fade" id="tab72">
          <h3>Bot Specifications</h3>
          <ul>
            <li>The bot should not be beyond 35cm*35cm*35cm during the entire gameplay.</li>
            <li>There should not be a potential difference of more than 24V between any two points.</li>
            <li>The wires should remain slag at all times during the gameplay.</li>
            <li>Teams will have to bring their own power supply source for their bot.</li>
          </ul>
          <h3>Game Play</h3>
          <ul>
            <li>Gameplay will be a total of 4 minutes.</li>
            <li>The bot has to start from the initial starting point, pick up blocks and stack them. Multiple blocks can be carried only in the gripper not anywhere else.</li>
            <li>Block size will be 7 cm * 7 cm * 7 cm.</li>
            <li>The block is wooden and weighs around 200gms.</li>
          </ul>
<h3><b> Changes will be highlighted on the website and will also be mailed to all the registered participants. However, you are suggested to keep checking the website regularly. 
</b>
</h3>
        </div> 
        <div class="tab-pane fade" id="tab73">
          <h3>Points System</h3>
          <ul>
            <li>Two tower stacking - 10 points</li>
            <li>Three tower stacking - 30 points</li>
            <li>Four tower stacking - 50 points</li>
          </ul>
          <h3>A team can do any number of stacks .</h3>
          <h3>There will be a total of 12 red blocks .</h3>
          <h3>If  a team completes the task before 4 minutes then their time taken will be noted .</h3>
          <h3>Tie Breakers</h3>
          <h3>Time taken for first stacking shall be noted and would be considered to resolve any tie - breakers .</h3>
<h3>Arena to be updated soon.
In case of any disputes, the decision of the coordinators would be final and binding to all. 
</h3>
        </div>
        <div class="tab-pane fade" id="tab76">

           <img src="assets/img/events/manoeuvre_arena.jpg" width="100%">
        </div>
      <div class="tab-pane fade" id="tab74">
        <h3>Top three teams will get Certificates of Merit and Momentos. The winning team will get the direct entry in the final round of Manoeuvre at Techkriti, IIT Kanpur.</h3>
      </div>
     
  </div>

</div>
            </div>      
        </div>
      </div>
      <div class="modal event-modal" id="myModal33" style="background-image: url(assets/img/events/Rule_the_Sky.jpg); background-size: cover;">
        <div class="modal-dialog" > 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4 class="modal-title"><span>RULE THE SKY</span></h4>
              </div>
              <div>
  
  <center><div id="event-" class="row">
    <a href="#tab81" data-toggle="tab"><div class="col-md-2 event-nav-content rule-event active">HOME</div></a>
    <a href="#tab82" data-toggle="tab"><div class="col-md-3 event-nav-content rule-event">PROBLEM STATEMENT</div></a>
    <a href="#tab83" data-toggle="tab"><div class="col-md-2 event-nav-content rule-event">JUDGING CRITERIA</div></a>
    <a href="#tab84" data-toggle="tab"><div class="col-md-2 event-nav-content rule-event">INCENTIVES</div></a>
    <a href="#tab85" data-toggle="tab"><div class="col-md-1 event-nav-content rule-event">CONTACTS</div></a>
    <a class='common_reg'><div class="col-md-2 event-nav-content rule-event">REGISTER</div></a>
  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab81">
          <h3>This competition provides a platform to compete with different flyers using your electric planes through a series of rounds doing different manoeuvers like Hammerhead,Inverted loop,Humpty-Bump etc. and showing their talent in flying. </h3>
           <marquee scrollamout='5'><h2 class="awesome">A certificate of participation will be given to all who participate in Events</h2></marquee>
        </div>
        <div class="tab-pane fade" id="tab82">
          <h3>Event Structure :-</h3>
          <ul>
            <li>The event will be conducted in many maneuvers. </li>
            <li>In the end, the team having the highest total points will be the winner.</li>
            <li> In this round the participants will have to perform the maneuvers that are listed below and the number of points awarded against the total will be based on the smoothness and accuracy of the maneuvers. </li>
            <li>Partial points can be awarded. No discussion will be entertained on the points given. </li>
            <li>The Maximum time given to each participant is 4 minutes. </li>
            <li>Points will be deducted for crossing this limit and manoeuvers performed after 4 minutes will not be judged. </li>
            <li>Maximum team strength is restricted to 5 members .</li>
            <li>Maneuvers can be repeated to improve your score in that particular maneuver.</li>
          </ul>
          <h3>Manoeuvre :-</h3>
          <ul>
            <li>You have to call the maneuver name before performing it. </li>
            <li>Maneuvers can be performed in any sequence. </li>
            <li>The manoeuvers need to be performed are as following: </li>
          </ul>
          <h3>Model Specifications :</h3>
          <ul>
            <li>Teams are allowed to use electric components only since this is strictly  an electric plane competition. </li>
            <li> IC engines are strictly prohibited.</li>
            <li> Metal propellers are strictly not allowed.</li>
            <li> Use of gyros is prohibited.</li>
          <li> Each team has to bring its own model. Exchange of models between  teams is not allowed.</li>
            <li> Handmade models ,Ready-to-fly models or planes assembled from kits are allowed.</li>
            <li> We suggest you to build a 3D aircraft for aerobatics. It will be helpful for you.</li>
          </ul>
          <h3>Eligibility :</h3>
          <h3>Any student of any academic institution is eligible to participate.</h3>
        </div> 
        <div class="tab-pane fade" id="tab83">
          <center><table style="width: 90%; margin-left: 10%; font-size: 100%;">
            <tbody>
              <tr>
                <th>S.No.</th>
                <th>Manoeuvre</th>
                <th>Max. Points</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Roll</td>
                <td>10</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Inside Loop</td>
                <td>10</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Inverted Loop</td>
                <td>15</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Split S</td>
                <td>20</td>
              </tr>
              <tr>
                <td>5</td>
                <td>4 Point Roll</td>
                <td>25</td>
              </tr>
            </tbody>
          </table></center>
        </div>
      <div class="tab-pane fade" id="tab84">
        <h3>Top three teams will get Certificates of Merit and winners will be felicitated with mementos. The winning team will get the direct entry in the final round of Rule the sky  at Techkriti, IIT Kanpur.</h3>
      </div>
      <div class="tab-pane fade" id="tab85">Contact Details
<ul>
<li>Amresh Kushwaha : 8874607525
</li>
<li>Anirban Manna: 7275797315</li>
</ul>
</div>
  </div>

</div>
            </div>      
        </div>
      </div>
      <div class="modal event-modal" id="myModal44" style="background-image: url(assets/img/events/Soccon.jpg); background-size: cover;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4  class="modal-title"><span>SOCCON</span></h4>
              </div>
              <div>
  
  <center><div id="event-" class="row">
    <a href="#tab91" data-toggle="tab"><div class="col-md-2 event-nav-content soc-event active">HOME</div></a>
    <a href="#tab92" data-toggle="tab"><div class="col-md-3 event-nav-content soc-event">PROBLEM STATEMENT</div></a>
    <a href="#tab93" data-toggle="tab"><div class="col-md-2 event-nav-content soc-event">JUDGING CRITERIA</div></a>
    <a href="#tab94" data-toggle="tab"><div class="col-md-2 event-nav-content soc-event">INCENTIVES</div></a>
    <a href="#tab95" data-toggle="tab"><div class="col-md-1 event-nav-content soc-event">CONTACTS</div></a>
    <a class="common_reg"><div class="col-md-2 event-nav-content soc-event">REGISTER</div></a>
  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab91">
          <h3>Soccon is the stage of innovation for an ultimate battle for the throne of creativity.Present your ideas and knock others' socks off with your creativity. 
Soccon or Social Conquest is concerned with the contemporary reformative ideas primarily predicated over, which are sought in the minds of our nation's young intellects. </h3>
 <marquee scrollamout='5'><h2 class="awesome">A certificate of participation will be given to all who participate in Events</h2></marquee>
        </div>
        <div class="tab-pane fade" id="tab92">
          <h3>Event Structure :-</h3>
          <h3>All the participating team should bring a powerpoint presentation of not more 10 mins on any of the following topics:</h3>
          <ul>
            <li>Demonetization and its effect</li>
            <li>Juvenile crimes </li>
            <li>Climate Change</li>
            <li>Any other topic of your choice</li>
          </ul>
          <h4>This will be followed by a quick round of discussion, mostly Q&A, with Judging Panel for 5 mins.</h4>
          <h3>Rules :</h3>
          <ul>
            <li>Students and professionals from all over the world.</li>
            <li>Teams with at most 5 members and atleast 2 members can enter the competition. </li>
            <li>Any number of teams from a college can participate in the competition. </li>
            <li>Your submission to the SocCon must be your own, and must not make unauthorized use of any intellectual property that is protected by trademark, copyright or other intellectual property laws from any source. Any such entry would be disqualified. </li>
          </ul>
<h3> Changes will be highlighted on the website and will also be mailed to all the registered participants. However, you are suggested to keep checking the website regularly. 

</h3>
        </div> 
        <div class="tab-pane fade" id="tab93">
          <h3>All interpretations of these rules and decisions of the Coordinators and Judges in all matters related to the SocCon are final. The Coordinators and judges reserve the right, in their sole discretion, to disqualify any individual they find or believe to be violating the rules.</h3>
<h3>

In case of any disputes, the decision of the coordinators would be final and binding to all. </h3>
        </div>
      <div class="tab-pane fade" id="tab94">
        <h3>Top three teams will get Certificates of Merit and winners will be felicitated with mementos. The winning team will get the direct entry in the final round of SocCon at Techkriti, IIT Kanpur. Runner-ups may get direct entry to Round 1 of the event.</h3>
      </div>
      <div class="tab-pane fade" id="tab95">Contact Details
<ul>
<li>Mayank Verma:  9458709497
</li>
<li>Akshat Srivastava: 9769387997
</li>
</ul>
</div>
  </div>

</div>
            </div>      
        </div>
      </div>      
      <div class="modal event-modal" id="myModal55" style="background-image: url(workshop/ethical.jpg); background-size: cover;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4 class="modal-title"><span>ETHICAL HACKING</span></h4>
              </div>
              <div>
  
  <center><div id="workshop-" class="row">
    <a href="#tab21" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content ethical-event active">HOME</div></a>
    <a href="#tab22" data-toggle="tab"><div class="col-md-2 workshop-nav-content ethical-event">CONTENT</div></a>
    <a href="#tab23" data-toggle="tab"><div class="col-md-2 workshop-nav-content ethical-event">BENEFITS</div></a>

    <a href="#tab24" data-toggle="tab"><div class="col-md-2 workshop-nav-content ethical-event">CITIES</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content ethical-event">REGISTER</div></a>
  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab21">
          <p><h4>Ethical hacking is an important tool in many national security agencies and evencompanies. This workshop is specifically designed to provide the right knowledge to the aspiring Cyber Forensics & Ethical Hacking enthusiasts. This workshop will explore the various means that an intruder has available to gain access to computer resources. It will investigate weaknesses by discussing the theoretical background behind, and whenever possible, actually performing the attacks.</h4></p> <marquee scrollamout='5'><h4 class='awesome'>Please bring your laptops for  the workshop</h4></marquee>
<!--                     <b>Registration fee :</b> <strong>&#8377 300</strong>
 -->
        </div>
        <div class="tab-pane fade" id="tab22">
          <h3>Content for Ethical Hacking</h3>
                 <h4>Computer Security - Basics</h4>
                  <ul>
                    <li>Introduction</li>
                    <li>Hacker & Cracker</li>
                    <li>Attacker & Victims</li>
                    <li>ASCII Code - making a folder invisible</li>
                  </ul>

                  <h4>Network Security</h4>
                  <ul>
                    <li>IP Address – Basic, Detecting</li>
                    <li>Ping & Ping Sweep</li>
                    <li>Tracing Target Location</li>
                    <li>Detecting Victim's OS</li>
                    <li>Detecting Firewall</li>
                    <li>Countermeasures</li>
                  </ul>

                  <h4>Domain name and DNS</h4>
                  <ul>
                    <li>ICANN</li>
                    <li>Registrar, Registry, Registrant</li>
                    <li>Top Level Domains</li>
                    <li>Lifecycle of gTLD</li>
                    <li>DNS Delegation</li>
                   </ul>

                  <h4>Email Security</h4>
                  <ul>
                    <li>Email Threats</li>
                    <li>Email Forging</li>
                    <li>Spamming</li>
                    <li>Email Headers</li>
                    <li>Countermeasures</li>
                   </ul>

                   <h4>Port Scanning</h4>
                   <ul>
                    <li>Type of Ports</li>
                    <li>Virtual Port numbers</li>
                    <li>Detecting Open Ports</li>
                    <li>Tools to carry out Port Scanning</li>
                    <li>Countermeasures</li>
                   </ul>


                   <h4>Intellectual Property Theft</h4>
                   <ul>
                    <li>Trojan working & countermeasure</li>
                    <li>Keylogger working & countermeasure</li>
                    <li>Steganography</li>
                   </ul>

                   <h4>Password Cracking & Prevention</h4>
                   <ul>
                    <li>Password Cracking Techniques</li>
                    <li>Brute force Attack</li>
                    <li>Countermeasures</li>
                   </ul>

                   <h4>Social Networking & Mobile Apps Hacking</h4>
                   <ul>
                      <li>Whatsapp & WeChat hacking</li>
                      <li>Facebook Hacking</li>
                      <li>WiFi Hacking</li>
                   </ul>

                   <h4>Identity Attacks Security</h4>
                   <ul>
                      <li>Proxy Servers</li>
                      <li>Proxy Bouncing</li>
                   </ul>

                   <h4>Other Hacking</h4>
                   <ul>
                      <li>Hacking Control panel of Websites</li>
                      <li>Making own Virus</li>
                      <li>SQL Injection Attack</li>
                      <li>Social Engineering Attacks</li>
                      <li>Hacking through Google</li>
                   </ul>

                   <h4>Cyber Law and Consulting</h4>
                   <ul>
                      <li>What is Cyber Law</li>
                      <li>Types of Crimes</li>
                      <li>Blogs & Blogger's rights & limitation</li>
                      <li>Central Acts & State Acts</li>
                      <li>CERT-IND & AO (State level)</li>
                   </ul>
        </div> 
        <div class="tab-pane fade" id="tab23">
          <h3>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h3> <h3> Superior learning experience from the experts to enhance the practical skills </h3>                                          
        </div>
    <div class="tab-pane fade" id="tab24">
     <ul>
                                    <li>Vdodara</li>
<li>Gwalior</li>
                 <li>Agra</li>
<li>Pune</li>
<li>Trivandrum</li>  
<li>Mathura</li>  
<li>All Prelims City</li>   
                   </ul>
    </div>
  </div>

</div>
            </div>      
        </div>
      </div>
      <div class="modal event-modal" id="myModal66" style="background-image: url(workshop/android.jpg); background-size: cover;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4  class="modal-title"><span>ANDROID DEVELOPMENT</span></h4>
              </div>
              <div>
  
  <center><div id="workshop-" class="row">
    <a href="#tab31" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content android-event active">HOME</div></a>
    <a href="#tab32" data-toggle="tab"><div class="col-md-2 workshop-nav-content android-event">CONTENT</div></a>
    <a href="#tab33" data-toggle="tab"><div class="col-md-2 workshop-nav-content android-event">BENEFITS</div></a>
    <a href="#tab34" data-toggle="tab"><div class="col-md-2 workshop-nav-content android-event">CITIES</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content android-event">REGISTER</div></a>
  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab31">
          <h4>Android is an open-source software stack for mobile devices that includes an operating system, middleware and key applications. Android's mobile operating system is based upon a modified version of the Linux kernel. The Android Open Source Project (AOSP) is tasked with the maintenance and further development of Android. It's open-source software stack consists of Java applications running on a Java-based, object-oriented application framework on top of Java core libraries running on a Dalvik virtual machine featuring JIT compilation </h4><marquee scrollamout='5'><h4 class='awesome'>Please bring your laptops for  the workshop</h4></marquee>
<!--           <b>Registration fee :</b> <strong>&#8377 300</strong>
 -->        </div>
        <div class="tab-pane fade" id="tab32">
          <h3>Content for Android App Developement</h3>
          <h4>Introduction to Android </h4>
          <ul>
            <li>Overview of Android - An Open Platform for Mobile development</li>
            <li>Open Handset Alliance - Overview</li>
            <li>What does Android run On – Android Internals?</li>
            <li>Why to use Android for mobile development?</li>                   
          </ul>

          <h4>Developing for Android: My First Android Application </h4>
          <ul>
            <li>How to setup Android Development Environment.</li>
            <li>Android development Framework - Android-SDK, Eclipse</li>
            <li>Emulators – What is an Emulator / Android AVD ?</li>
            <li>Creating & setting up custom Android emulator</li>
            <li>Android Project Framework</li>
            <li>My First Android Application</li>
          </ul>


          <h4>Electronics Session</h4>
          <ul>
            <li>Understanding Intent, Activity, Activity Lifecycle and Manifest</li>
            <li>Creating Application and new Activities</li>
            <li>Expressions and Flow control, Android Manifest</li>
            <li>Simple UI -Layouts and Layout properties 
              <ol style="list-style-type:square">
                <li>Fundamental Android UI Design</li>
                <li>Introducing Layouts</li>
                <li>Creating new Layouts</li>
                <li>Drawable Resources</li>
                <li>Resolution and density independence (px,dip,dp,sip,sp)</li>     
              </ol>
            </li> 
            <li>XML Introduction to GUI objects viz.
              <ol style="list-style-type:square">
                <li>Push Button</li>
                <li>Text / Labels</li>
                <li>EditText</li>
                <li>ToggleButton</li>
                <li>WeightSum</li>
                <li>Padding</li>
                <li>Layout Weight</li>        
              </ol>
            </li> 
            <br />
          </ul>
          
          <h4>Advanced UI Programming </h4>
          <ul>
            <li>Event driven Programming in Android (Text Edit, Button clicked etc.)</li>
            <li>Event driven Programming in Android</li>
            <li>Android Activity Lifecycle</li>             
          </ul>

          <h4>Intents in Android</h4>
          <ul>
            <li>Roles of Intent</li>
            <li>Intent matching Rules</li>
            <li>Filters in your Manifest</li>   
          </ul>

          <h4>Android Animations </h4>
          <ul>
            <li>Animating android views</li>
            <li>Transition with activity</li>
            <li>Custom animation using XML</li> 
          </ul>

          <h4>Android Core Customizations </h4>
          <ul>
            <li>Design custom button</li>
            <li>Custom events on button</li>   
          </ul>
          <h4>Android text to speech App</h4>
        </div> 
        <div class="tab-pane fade" id="tab33">
            <h3>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h3>
            <h3>Superior learning experience from the experts to enhance the practical skills. </h3>
        </div>
        <div class="tab-pane fade" id="tab34">
          <ul>
                      <li>Bhubhaneshwar</li>
                      <li>Vadodara</li>
                      <li>All Prelims City</li>
                   </ul>
        </div>
  </div>

</div>
            </div>      
        </div>
      </div>
      <div class="modal event-modal" id="myModal77" style="background-image: url(workshop/sixthsense.jpg); background-size: cover;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4 class="modal-title"><span>SIXTH SENSE ROBOTICS</span></h4>
              </div>
              <div>
  
  <center><div id="workshop-" class="row">
    <a href="#tab41" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content sixth-event active">HOME</div></a>
    <a href="#tab42" data-toggle="tab"><div class="col-md-2 workshop-nav-content sixth-event">CONTENT</div></a>
    <a href="#tab43" data-toggle="tab"><div class="col-md-2 workshop-nav-content sixth-event">BENEFITS</div></a>
    <a href="#tab44" data-toggle="tab"><div class="col-md-2 workshop-nav-content sixth-event">CITIES</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content sixth-event">REGISTER</div></a>
  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab41">
          <p><h4>The workshop provides college students a base to Machine vision which covers all the basics of MATLAB and image processing with hands on demonstrations of latest six sense techniques and tools, Live Demos, Interactive Question and Answer sessions, etc. The benefits of workshops are that students receive unparalleled education on the art of Technology with personal one on one attention; they can learn and interact with renowned industry experts. </h4></p>
<marquee scrollamout='5'><h4 class='awesome'>Please bring your laptops for  the workshop</h4></marquee>
<!--                     <b>Registration fee :</b> <strong>&#8377 300</strong>
 -->        </div>
        <div class="tab-pane fade" id="tab42">
          <h3>Getting started with Sixth Sense Robotics </h3>
                  <h4>Season 1</h4>            
                  <ul>
                      <li>Introduction to Sixth Sense Technology </li>
                      <li>Advancements in Robotics & Sixth Sense Technology</li>
                      <li>Introduction to Computer vision</li>
                      <li>Need of computer vision in industries </li>
                      <li>Getting started with computer Vision</li>
                      <li>Introduction to MATLAB</li>
                      <li>Introduction to Digital Image Processing</li>
                      <li>Introduction to Image Processing Tool box</li>
                  </ul>
                  <h4>Season 2</h4>            
                  <ul>
                      <li>Image acquisition in MATLAB </li>
                      <li>Image manipulation MATLAB</li>
                      <li>Concepts like Luminance, Hue, and Intensity</li>
                  </ul>
                  <h4>Season 3</h4>            
                  <ul>
                      <li>Video acquisition</li>
                      <li>Mouse Pointer Control using Sixth Sense Technology</li>
                  </ul>
                  <h4>Season 4</h4>            
                  <ul>
                      <li>Parallel Port programming & machine control</li>
                      <li>Sending serial and parallel data using MATLAB</li>
                      <li>Implementing Image Processing on the kit and systems</li>
                      <li>Development of a line follower robot using concepts of color based image processing (Concept)</li>
                  </ul>
        </div> 
        <div class="tab-pane fade" id="tab43">
        <h3>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h3> <h3>Superior learning experience from the experts to enhance the practical skills.</h3>                                          
        </div>
    <div class="tab-pane fade" id="tab44">
       <ul>
                      <li>Banda</li>
<li>Gwalior</li>
<li>Mathura</li>
<li>All Prelims City</li>
                      
                   </ul>
    </div>
  </div>

</div>
            </div>      
        </div>
      </div>
      <div class="modal event-modal" id="myModal88" style="background-image: url(workshop/iot.jpg); background-size: cover;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4  class="modal-title"><span>INTERNET OF THINGS</span></h4>
              </div>
              <div>
  
  <center><div id="workshop-" class="row">
    <a href="#tab51" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content iot-event active">HOME</div></a>
    <a href="#tab52" data-toggle="tab"><div class="col-md-2 workshop-nav-content iot-event">CONTENT</div></a>
    <a href="#tab53" data-toggle="tab"><div class="col-md-2 workshop-nav-content iot-event">BENEFITS</div></a>
    <a href="#tab54" data-toggle="tab"><div class="col-md-2 workshop-nav-content iot-event">CITIES</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content iot-event">REGISTER</div></a>

  </div></center>

  <div class="tab-content">
        <div class="tab-pane fade in active" id="tab51" style="padding: 0.8rem;">
           <h4>How beautiful it is when your door can update its Facebook Status every time someone opens it. A song starts playing when you tweet about it. A fire sensor automatically sends an E-Mail to the fire department. Keeping all the awesomeness in mind we have introduced the Internet of things workshop to get you ready for the future. <strong>Internet of Things</strong> will drive new consumer and business behavior that will demand increasingly intelligent industry solutions, which, in turn, will drive trillions of dollars in opportunity for IT industry and even more for the companies that take advantage of the IOT. </h4><marquee scrollamout='5'><h4 class='awesome' style='line-height:2px;'>Please bring your laptops for  the workshop</h4></marquee>
<!--                     <b>Registration fee :</b> <strong>&#8377 300</strong>
 -->
        </div>
        <div class="tab-pane fade" id="tab52">
          <h3>Getting started with Iot </h3>
                  <h4>Season 1</h4>            
                  <ul>
                      <li>Introduction to Internet of Things (IoT)</li>
                      <li>Why IoT? How IoT is changing the world Session 2 </li>
                      <li>Introduction to ESP8266 How ESP8266 useful in IoT  </li>
                      <li>AT commands usage in ESP8266 NodeMcu Firmware Installation ESPlorer Installation in NodeMCU </li>
                  </ul>
                  <h4>Season 2</h4>            
                  <ul>
                      <li>Lua Programming </li>
                      <li>Introduction to the language </li>
                      <li>Brief Introduction on Bootstrap </li>
                      <li>Control GPIOs with Lua</li>
                      <li>Connecting to Internet Session 4</li>
                      <li>Making Simple Web Server</li>
                      <li>Controlling GPIOs via Internet </li>
                      <li>Connecting ESP8266 via cloud </li>
                      <li> Controllling GPIOs via Cloud</li>
                  </ul>
                  <h4>Season 3</h4>            
                  <ul>
                      <li>Further Applications of ESP8266</li>
                  </ul>
                  <h4>ADVANCED TOPICS</h4>            
                  <ul>
                      <li>Email Notification with ESP8266 AND PIR motion sensor Connecting ESP8266 WITH AVR </li>
                      <li>Home automation using ESP8266</li>
                  </ul>
        </div> 
        <div class="tab-pane fade" id="tab53">
          <h3>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h3> <h3>Superior learning experience from the experts to enhance the practical skills.</h3>                                          
        </div>
    <div class="tab-pane fade" id="tab54">
   <ul>

                      <li>Bhubhaneshwar</li>
                      <li>Vadodara</li>
                      <li>Agra</li>
<li>Pune</li>
<li>Trivandrum</li>
<li>All Prelims City</li>

                      
                   </ul>
    </div>
  </div>

</div>
            </div>      
        </div>
      </div>
      <div class="modal event-modal" id="myModal99" style="background-image: url(workshop/flyingwing.jpg); background-size: cover;">
        <div class="modal-dialog"> 
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" id='sp_close' class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                <h4  class="modal-title"><span>FLYING WING</span></h4>
              </div>
              <div>
  
  <center><div id="workshop-" class="row">
    <a href="#tab11" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content flying-event active">HOME</div></a>
    <a href="#tab12" data-toggle="tab"><div class="col-md-2 workshop-nav-content flying-event">CONTENT</div></a>
    <a href="#tab13" data-toggle="tab"><div class="col-md-2 workshop-nav-content flying-event">BENEFITS</div></a>
    <a href="#tab14" data-toggle="tab"><div class="col-md-2 workshop-nav-content flying-event">CITIES</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content flying-event">REGISTER</div></a>

  </div></center>

  <div class="tab-content">
    <div class="tab-pane fade in active" style="padding: 0.6rem;" id="tab11">
     <h4>Flying Wing is the future of aviation. There is only one flying wing based aircraft in commercial existence (B2 Spirit). This Tailless aircraft boasts of much lesser empty weight and much lesser drag.The problem of power is going to become critical with time, so scientists around the world are trying to achieve what seemed impossible till now. We are glad to provide you this opportunity of mastering the skill of developing a flying wing. Be a part of this workshop to stay ahead of other who might try to capture the technology market of India. You will be learning how to design, build and fly the flying wing. </h4><marquee scrollamout='5'><h4 class='awesome' style='line-height:2px;'>Please bring your laptops for  the workshop</h4></marquee>
<!--                 <b>Registration fee :</b> <strong>&#8377 1500</strong>
 -->
    </div>
    <div class="tab-pane fade" id="tab12">
      <h3>Content for Flying Wing</h3>
                 <h4>Design Session </h4>
                  <ul>
                    <li>Fundamentals of Aerodynamics.</li>
                    <li>Various components of Airplane.</li>
                    <li>Stability and Control of Airplane </li>
                    <li>Introduction to RC Aircraft Design </li>
                    <li>Advantages and Disadvantages associated with Flying Wing </li>
                    <li>Commercial Constraints associated with Flying Wing</li>
                    <li></li>
                  </ul>

                  <h4>Software Session</h4>
                  <ul>
                    <li>Selection of Airfoils based on Design requirement </li>
                    <li>Special considerations for flying wing airfoils</li>
                    <li>Stability analysis of RC Airplane Design</li>
                    <li>Explore the iterative Techniques of creating an Excellent Design </li>
                    <li>Visualize the 3D model of RC Aircraft before you start making</li>
                  </ul>

                  <h4>Electronics Session</h4>
                  <ul>
                    <li>Brushed & Brushless Motors </li>
                    <li>ESC & BEC </li>
                    <li>Servo Motors and Drives </li>
                    <li>Fundamentals of Battery </li>
                    <li>Functionalities of Transmitter & Receiver</li>
                    <li>Type of Aircraft Propellers </li>
                   </ul>

                   <h4>Virtual Flight Training </h4>
                   <ul>
                    <li>Professional Flight lessons from Pilots </li>
                    <li>Experience the thrill of flying an RC Aircraft in a Flight Simulator </li>
                    <li>Hands on Experience during the workshop </li>
                    <li>Get Flight tips from licensed pilots</li>
                   </ul>


                   <h4>Fabrication Session </h4>
                   <ul>
                    <li>Learn best manufacturing techniques from experienced Mentors </li>
                    <li>Hands-on experience with various Aircraft building materials</li>
                    <li>Electronics Integration </li>
                    <li>Make your Flying Wing ready to fly </li>
                   </ul>

                   <h4>Flying Session </h4>
                   <ul>
                    <li>Experience the fun of a Flying Wing </li>
                    <li>Safety Precaution while conducting Flying Session </li>
                    <li>Pre-flight Checks and In-flight tips from the Licensed Pilots</li>
                   </ul>
    </div> 
    <div class="tab-pane fade" id="tab13">
        <h3>Flying Wing Toolkit Contents: </h3>
        <ul>
        <strong><li>Fabrication Materials</li>
        <li>Horn</li>
        <li>Clevis</li>
        <li>Spar</li>
        <li>Push Rods</li>
        <li>Tapes</li>
        <li>Epoxy glues</li>
        </strong>                              
        </ul>
        <center>
        <h3>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h3>
        <h3> Superior learning experience from the experts to enhance the practical skills.</h3>
    </div>
    <div class="tab-pane fade" id="tab14">
     <ul>
                      <li>All  Prelims Cities</li>
                      <li>Chennai</li>
                      <li>Mathura</li>
                      
                   </ul>
    </div>
  </div>

</div>
            </div>      
        </div>
      </div>



      















        <section id="contacty" class="about-3  text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-6">
                        <h2 class='glows' style="color:white">CONTACT US</h2>
                        <hr class="primary">
                    <!--    <div id="about-3-carousel" class="row text-center" >
  
                            <div class="col-xs-6 col-sm-4 col-md-4 item about-img-5" id="aks">
                                <div class="info">
                                    <img class="img-responsive img-circle visible-xs" src="assets/img/contact/Akshat.jpg" alt="">
                                    <h3>Prof. Dr. Kurian Joseph</h3>
                                    <p>CES,Anna University.President</p>
                                    <p>Society of Civil Engineers.</p>

                                    <!--<ul class="list-inline">
                                        <li><a class="light-text" id = "circle" target="_blank" href="https://www.facebook.com/akshat.srivastava7?fref=ts"><i class="fa fa-facebook fa-fw"></i></a>
                                        </li>
                                    </ul>-->
                    <!--            </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4 item about-img-6" id="may">
                                <div class="info">
                                    <img class="img-responsive img-circle visible-xs" src="assets/img/contact/Mayank.jpg" alt="">
                                    <h3>Dr. G. Dhinagaran Asst.Prof</h3>
                                    <p>CES,Anna university,Treasurer</p>
                                    <p>Society of Civil Engineers.</p>
                                    <!--<ul class="list-inline">
                                        <li><a class="light-text" id ="circle" target="_blank" href="https://www.facebook.com/anirban.manna.902?fref=tshttps://www.facebook.com/mayank.agrawal.52459?fref=ts"><i class="fa fa-facebook fa-fw"></i></a>
                                        </li>
                                    </ul>-->
                   <!--             </div>
                            </div>
                           <div class="col-sm-4 col-md-4 item about-img-7" id="manna">
                                <div class="info">
                                    <img style='margin-left:21%;' class="img-responsive img-circle visible-xs" src="assets/img/contact/Anirban.jpg" alt="">
                                    <h3>Mr. S. Bharathi</h3>
                                    <p>Joint Secretary</p>
                                    <p>Society of Civil Engineers.</p>
                                    
                                    <!--<ul class="list-inline">
                                        <li><a class="light-text" id ="circle" target="_blank" href="https://www.facebook.com/anirban.manna.902?fref=ts"><i class="fa fa-facebook fa-fw"></i></a>
                                        </li>
                                    </ul>-->
                         <!--       </div>
                            </div>

                        </div>-->




<div class="container-fluid">
  <div class="row contact-col">

        <div class="col-sm-3 col-md-4 block-cont">
                                        <h3 style="color:yellow">Prof. Dr. Kurian Joseph</h3>
                                        <p>CES,Anna University</p>
                                        <p>President</p>
                                        <p>Society of Civil Engineers.</p>
        </div>
        <div class="col-sm-9 col-md-4 block-cont cont">
                                        <h3 style="color:yellow">Dr. G. Dhinagaran Asst.Prof</h3>
                                        <p>CES,Anna University</p>
                                        <p>Treasurer</p>
                                        <p>Society of Civil Engineers.</p>
        </div>
        <div class="col-sm-9 col-md-4 block-cont">
                                        <h3 style="color:yellow">Mr. S. Bharathi</h3>
                                        <p>Joint Secretary</p>
                                        <p>Society of Civil Engineers.</p>
                                        <p>Phone : +91 7200708762</p>
        </div>



  </div>
</div>





                    </div>
                </div>
            </div><br \>
            <div>
              <p style="font-size: 30px;">For further details Mail us at: <strong>info@civilisation.org.in</strong></p>
              
            </div>
<br \><br \>
<div id="map"></div>






        </section>














    <section style="height: 100vh" id="sponsor" class="text-center">
            <div class="container">
               <div class="row">
                   <div class="col-lg-12 col-md-6">
                        <h2 class='glows' style="color:white;">SPONSORS</h2>
                        <hr class="primary">

                        <h3 class='glows' style="color:white;">TITLE SPONSOR</h3>




<div class="title-spon" style="background-color:rgba(233, 30, 99, 0.44);"><a href="http://terzaghiinstitute.com/" target="_blank"> <img src="sponsor/title_spon.png"> </a></div>


<br><br>
<h3 class='glows' style="color:white;">OTHER SPONSORS</h3>

<div class="container-fluid">
  <div class="row contact-col contact-col-spo">

          <div class="col-sm-3 cont">
               <img src="sponsor/a3.jpg" width="70%">
          </div>

          <div class="col-sm-3 cont">
               <img src="sponsor/t10.png" width="70%">
          </div>



              <div class="col-sm-3  cont">
                   <img src="sponsor/a4.jpg" width="70%">
              </div>

              <div class="col-sm-3 ">
                   <img src="sponsor/a7.jpg" width="70%">
              </div>

  </div>
</div>



















<br \><br \>
                    <div class="row">
                          <div class="col-lg-3 col-sm-6">
                            <!--img src="sponsor/a1.jpg" width="50%"-->
                          </div>
                          <div class="col-lg-3 col-sm-6">
                            <img src="sponsor/a2.jpg" width="50%">
                          </div>
                          <div class="col-lg-3 col-sm-6">
                          <!--img src="sponsor/a6.jpg" width="50%"-->
                          </div>
                        <!--  <div class="col-lg-3 col-sm-6">
                            <img src="assets/img/sponsor/ohcampus.png" width="50%">
                          </div>
                        </div>
                       <div class="row">
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="http://www.pristineinfo.com/" ><img src="assets/img/sponsor/pristine.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="http://dalvikapps.com/"><img src="assets/img/sponsor/dalvik.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="http://bytecode.in/"><img src="assets/img/sponsor/byte.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="http://autronicals.com/"><img src="assets/img/sponsor/autronicals.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="http://robotechlabs.com/"><img src="assets/img/sponsor/robot.png"></a>
                          </div>                          
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="#"><img src="assets/img/sponsor/techie.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="#"><img src="assets/img/sponsor/aptron.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="#"><img src="assets/img/sponsor/skyfi.jpg"></a>
                          </div>                          
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="#"><img src="assets/img/sponsor/top.png"></a>
                          </div>
                          <div class="col-lg-2 col-sm-4">
                            <a target="_blank" href="#"><img src="assets/img/sponsor/blue.png"></a>
                          </div>
                        </div-->
                    </div>
                </div>
            </div>
        </section>
            


        <footer class="footer-2 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center" style="margin-top: 19px;">
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Civilisation.AU" target="_blank"  class="btn btn-social-light btn-facebook"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                         <!--   <li>
                                <a href="" target="_blank"  class="btn btn-social-light btn-twitter"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="" target="_blank"  class="btn btn-social-light btn-dribbble"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="" target="_blank"  class="btn btn-social-light btn-google-plus"><i class="fa fa-fw fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="" target="_blank"  class="btn btn-social-light btn-instagram"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>-->
                        </ul>
                        <div>
                        <p>Privacy Policy</p>
                        <p>Copyright © Civilisation 2017.</p>
                        <p>All rights reserved.</p><br \><br \>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
      
    <div id="portfolio-modal-3" class="portfolio-modal modal " style='margin-top:4%;' tabindex="-1" role="dialog" aria-hidden="true">

<div style='background-image:url(ahmedabad.jpg);' class="modal-content">
      






    
<button type="button" style="color: white;opacity: 1;position:fixed;float:right;margin-left:97%;margin-top:1%;" class="close" data-dismiss="modal">&times;</button>



      
        <div class="container" style="margin-left: 0px;margin-right: 0px;">

          <div class="row" id="side-bar">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                <div class="list-group">
                  
      <!--<ul id="slide-out" class="side-nav" >
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="list-group-item text-center">Workshops</a>
            <div class="collapsible-body">
              <ul>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Workshop1</a>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Workshop2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Workshop3</a>
                      </li>
                    </ul>
                  </li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="list-group-item text-center">Events</a>
            <div class="collapsible-body">
              <ul>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Event1</a>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Event2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Event3</a>
                      </li>
                    </ul>
                  </li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="list-group-item text-center">Talks</a>
            <div class="collapsible-body">
              <ul>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Talk1</a>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Talk2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="list-group-item text-center">Talk3</a>
                      </li>
                    </ul>
                  </li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>-->
    


<div class="panel-group" id="accordion">
    <div class="panel w panel-default">
      <a id="dehradun" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="raipur" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="bangalore" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="allahabad" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="hyderabad" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="indore" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="jabalpur" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="bhubhaneshwar" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
   <a id="pune" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
   <a id="agra" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
   <a id="trivandrum" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
 <a id="banda" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
 <a id="mathura" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="ahmedabad" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="pune" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
 <a id="vadodara" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="gwalior" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="bhopal" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="kolkata" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
      <a id="chennai" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
<a id="lucknow" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a><a id="noida" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>

      <a id="jaipur" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">HOME</h4>
        </div>
      </a>
    </div>

    <div class="panel x panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class='collapsed'>
        <div class="panel-heading" >
          <h4 class="panel-title text-center">WORKSHOPS</h4>
        </div>
      </a>
      <div id="collapse1" class="panel-collapse collapse">
        <a href="#" class="flyingC list-group-item text-center " id='flyingC'>FLYING WING</a>
        <a href="#" class="ethicalC list-group-item text-center " id="ethicalC">ETHICAL HACKING</a>
        <a href="#" class="androidC list-group-item text-center " id="androidC">ANDROID DEVLOPMENT</a>
        <a href="#" class="sixthC list-group-item text-center " id="sixthC">SIXTH SENSE-ROBOTICS</a>
        <a href="#" class="iotC list-group-item text-center " id="iotC">IOT</a>
      </div>
    </div>
    <div class="panel y panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class='collapsed'>
        <div class="panel-heading" >
          <h4 class="panel-title text-center">EVENTS</h4>
        </div>
      </a>
      <div id="collapse2" class="panel-collapse collapse">
        <a href="#" class="iarc list-group-item text-center " id="iarc">IARC</a>
        <a href="#" class="man list-group-item text-center " id="man">MANOEUVRE</a>
        <a href="#" class="sky list-group-item text-center " id="sky">RULE THE SKY</a>
        <a href="#" class="soc list-group-item text-center " id="soc">SOCCON</a>
      </div>
    </div>
    <div class="panel z panel-default">
       <a id="ahmedabad_talks" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">TALKS</h4>
        </div>
      </a>

<a id="bhopal_talks" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">TALKS</h4>
        </div>
      </a>
<a id="jaipur_talks" href="#">
        <div class="panel-heading">
          <h4 class="panel-title text-center">TALKS</h4>
        </div>
      </a>
    </div>
<div class="panel v panel-default common_reg">
<a>
        <div class="panel-heading">
          <h4 class="panel-title text-center">REGISTER</h4>
        </div>
      </a>
</div>
  </div>

</div>












<!--
                  <a href="#" class="flyingC list-group-item text-center ">
                    <h4 class="glyphicon "></h4><br/>FLYING WING
                  </a>
                  <a href="#" class="ethicalC list-group-item text-center ">
                    <h4 class="glyphicon glyphicon-"></h4><br/>ETHICAL HACKING
                  </a>
                  <a href="#" class="androidC list-group-item text-center ">
                    <h4 class="glyphicon glyphicon-"></h4><br/>ANDROID DEVLOPMENT
                  </a>
                  <a href="#" class="sixthC list-group-item text-center ">
                    <h4 class="glyphicon glyphicon-"></h4><br/>SIXTH SENSE-ROBOTICS
                  </a>
                  <a href="#" class="iotC list-group-item text-center ">
                    <h4 class="glyphicon glyphicon-"></h4><br/>IOT
                  </a>-->
                  <!--  <a href="#" class="detailsC list-group-item text-center active">
                    <h4 class="glyphicon glyphicon-"></h4><br/>Details
                    </a> -->
                </div>

              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                


                <div class="bhoechie-tab-content dehradun1">
                  <div class="tab-content">
                    Descripton of home of city
                  </div>                  
                </div>
                <div class="bhoechie-tab-content raipur1">
                  <div class="tab-content">
                    Descripton of home of city
                  </div>                  
                </div>
                <div class="bhoechie-tab-content bangalore1">
                  <div class="tab-content">
                    Descripton of home of city
                  </div>                  
                </div>
                <div class="bhoechie-tab-content allahabad1">
                  <div class="tab-content">
                    Descripton of home of city
                  </div>                  
                </div>
                <div class="bhoechie-tab-content hyderabad1">
                  <div class="tab-content">
                    Description of home of city
                  </div> 
                </div>
                <div class="bhoechie-tab-content indore1">
                  <div class="tab-content">
                    Descripton of home of city
                  </div>                  
                </div>
                <div class="bhoechie-tab-content jabalpur1">
                  <div class="tab-content">
                    Descripton of home of city
                  </div>                  
                </div>
                <div class="bhoechie-tab-content bhubhaneshwar1">
                  <div class="tab-content letsee">
<h2>BHUBANESHWAR</h2>
            <h3>Date: Shifted to later dates<br>
            Venue: ITER</h3><br>


            <h3>Day 1:<br> 

            Workshop: Android Devlopment<br>
            </h3><br>


            <h3>Day 2:<br>

            Workshop: Internet of things(iot)<br>
          </h3>

                  </div>                  
                </div>


<div class="bhoechie-tab-content banda1">
                  <div class="tab-content letsee">
<h2>BANDA</h2>
            <h3>Date: 4-5th Feb<br>
            Venue: REC</h3><br>


            <h3>Day 1:<br> 

            Workshop: Sixth Sense Robotics<br>
            </h3><br>


            <h3>Day 2:<br>

            Workshop: Internet of things(iot)<br>
          </h3>

                  </div>                  
                </div>
<div class="bhoechie-tab-content mathura1">
                  <div class="tab-content letsee">
<h2>MATHURA</h2>
            <h3>Date: Shifted to later dates<br>
            Venue: GLA matura</h3><br>


            <h3>Day 1:<br> 

            Workshop: Ethical Hacking<br>

            </h3><br>


            <h3>Day 2:<br>

            Workshop: Sixth Sense Robotics<br>
            Event: Soccon<br>
          </h3>

                  </div>                  
                </div>
<div class="bhoechie-tab-content pune1">
                  <div class="tab-content letsee">
<h2>PUNE</h2>
            <h3>Date: To be announced<br>
            Venue: To be announced</h3><br>

            <h3>Day 1:<br> 

            Workshop: Ethical Hacking<br>
            </h3><br>


            <h3>Day 2:<br>

            Workshop: Internet of things(iot)<br>
          </h3>

                  </div>                  
                </div>

<div class="bhoechie-tab-content agra1">
                  <div class="tab-content letsee">
<h2>AGRA</h2>
            <h3>Date: To be announced<br>
            Venue: To be announced</h3><br>


            <h3>Day 1:<br> 

            Workshop: Ethical Hacking<br>
            </h3><br>


            <h3>Day 2:<br>

            Workshop: Internet of things(iot)<br>
          </h3>

                  </div>                  
                </div>
<div class="bhoechie-tab-content trivandrum1">
                  <div class="tab-content letsee">
<h2>PUNE</h2>
            <h3>Date: To be announced<br>
            Venue: To be announced</h3><br>


            <h3>Day 1:<br> 

            Workshop: Ethical Hacking<br>
            </h3><br>


            <h3>Day 2:<br>

            Workshop: Internet of things(iot)<br>
          </h3>

                  </div>                  
                </div>

                <div class="bhoechie-tab-content ahmedabad1">
                  <div class="tab-content letsee">
                    <h2>AHMEDABAD</h2>
            <h3>Date: 21-22nd Jan<br>
            Venue: School of Engineering And Applied Science(SEAS),Ahmedabad University</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot Flying Wing (9am-5pm)<br>
            Talk: 6-7 pm</h3>
                  </div>                  
                </div>
               
                <div class="bhoechie-tab-content gwalior1">
                  <div class="tab-content letsee">
<h2>GWALIOR</h2>
            <h3>Date: 29th Jan<br>
            Venue: MITS</h3><br>


            <h3>Day 1:<br> 

            Workshop: Ethical Hacking<br>
            </h3><br>


            <h3>

            Workshop: Sixth Sense Robotics<br>
          </h3>

                  </div>                  
                </div>

 <div class="bhoechie-tab-content vadodara1">
                  <div class="tab-content letsee">
<h2>VADODARA</h2>
            <h3 style="margin-bottom: 0px">Date: 4-5th Feb<br>
            Venue: ITM VOCATIONAL UNIVERSITY</h3>
                   <h4 style="margin-top: 0px;padding-left: 70px;">Plot 6512,Ajwa Nimeta Road,Ravaal,Taluka Waghodia,Vadodara</h4><br>

            <h3>Day 1:<br> 

            Workshop: Internet of things(iot)<br>
            </h3><br>


            <h3>Day 2:<br>

            Workshop: Android Devlopment<br>
            Workshop: Ethical Hacking<br>

          </h3>

                  </div>                  
                </div>









                <div class="bhoechie-tab-content bhopal1">

<div class="tab-content letsee">
                    <h2>BHOPAL</h2>
            <h3>Date: 21-22nd Jan<br>
            Venue: MANIT</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot Flying Wing (9am-5pm)<br>
            Talk: 6-7 pm</h3>

                  </div>                  
                </div>
                <div class="bhoechie-tab-content kolkata1">

<div class="tab-content letsee">
                    <h2>KOLKATA</h2>
            <h3>Date: 18th-19th Feb<br>
            Venue: UEM</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
                                                Talk: 6-7 pm
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot Flying Wing (9am-5pm)<br>
            </h3>
                                                <h3>Please bring your laptops</h3>

                  </div>                  
                </div>
                <div class="bhoechie-tab-content chennai1">

<div class="tab-content letsee">
                    <h2>CHENNAI</h2>
            <h3>Date: To be announced<br>
            Venue:Sathyabama University</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot Flying Wing (9am-5pm)<br>
            Talk: 6-7 pm</h3>

                  </div>                  
                </div>
 <div class="bhoechie-tab-content lucknow1">

<div class="tab-content letsee">
                    <h2>LUCKNOW</h2>
            <h3>Date: 11-12th Feb<br>
            Venue: BBD</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot, Flying Wing (9am-5pm)<br>
            Talk: 6-7 pm</h3>

                  </div>                  
                </div> <div class="bhoechie-tab-content noida1">

<div class="tab-content letsee">
                    <h2>NOIDA</h2>
            <h3>Date: 4th-5th Feb<br>
            Venue: IEC Noida</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot Flying Wing (9am-5pm)<br>
            Talk: 6-7 pm</h3>

                  </div>                  
                </div>
                <div class="bhoechie-tab-content jaipur1">

<div class="tab-content letsee">
                    <h2>JAIPUR</h2>
            <h3>Date: To be announced<br>
            Venue: To be announced</h3><br>


            <h3>Day 1:<br> 
            Events: Rule the sky, IARC ( 10am-5pm)<br> 
            Workshop: ethical, robotics, Flying wing (9am-5pm)<br>
            </h3><br>


            <h3>Day 2:<br>
            Events: Manoeuvre, SocCon ( 10am-5pm)<br>
            Workshop: android, Iot Flying Wing (9am-5pm)<br>
            Talk: 6-7 pm</h3>

                  </div>                  
                </div>


                <div  class="bhoechie-tab-content flyingC1" >
                  <div class="container">
  
  <center><div id="workshop-" class="row sigma" style='margin-top:3%'>
    <a href="#taba11" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content">HOME</div></a>
    <a href="#taba12" data-toggle="tab"><div class="col-md-2 workshop-nav-content">CONTENT</div></a>
    <a href="#taba13" data-toggle="tab"><div class="col-md-2 workshop-nav-content">BENEFITS</div></a>

  </div></center>

  <div class="tab-content letsee1">
    <div class="tab-pane fade in active" id="taba11">
      <p><h4>Flying Wing is the future of aviation. There is only one flying wing based aircraft in commercial existence (B2 Spirit). This Tailless aircraft boasts of much lesser empty weight and much lesser drag. But a flying wing is plagued with problems of stability and propulsion. The problem of power is going to become critical with time, so scientists around the world are trying to achieve what seemed impossible till now. We are glad to provide you this opportunity of mastering the skill of developing a flying wing. Be a part of this workshop to stay ahead of other who might try to capture the technology market of India. You will be learning how to design, build and fly the flying wing. </h4></p>
       <b>Registration fee :</b> <strong>&#8377 1500</strong>

    </div>
    <div class="tab-pane fade" id="taba12">
      <h3>Content for Flying Wing</h3>
                 <h4>Design Session </h4>
                  <ul class='exg'>
                    <li>Fundamentals of Aerodynamics.</li>
                    <li>Various components of Airplane.</li>
                    <li>Stability and Control of Airplane </li>
                    <li>Introduction to RC Aircraft Design </li>
                    <li>Advantages and Disadvantages associated with Flying Wing </li>
                    <li>Commercial Constraints associated with Flying Wing</li>

                  </ul>

                  <h4>Software Session</h4>
                  <ul class='exg'>
                    <li>Selection of Airfoils based on Design requirement </li>
                    <li>Special considerations for flying wing airfoils</li>
                    <li>Stability analysis of RC Airplane Design</li>
                    <li>Explore the iterative Techniques of creating an Excellent Design </li>
                    <li>Visualize the 3D model of RC Aircraft before you start making</li>
                  </ul>

                  <h4>Electronics Session</h4>
                  <ul>
                    <li>Brushed & Brushless Motors </li>
                    <li>ESC & BEC </li>
                    <li>Servo Motors and Drives </li>
                    <li>Fundamentals of Battery </li>
                    <li>Functionalities of Transmitter & Receiver</li>
                    <li>Type of Aircraft Propellers </li>
                   </ul>

                   <h4>Virtual Flight Training </h4>
                   <ul class='exg'>
                    <li>Professional Flight lessons from Pilots </li>
                    <li>Experience the thrill of flying an RC Aircraft in a Flight Simulator </li>
                    <li>Hands on Experience during the workshop </li>
                    <li>Get Flight tips from licensed pilots</li>
                   </ul>


                   <h4>Fabrication Session </h4>
                   <ul class='exg'>
                    <li>Learn best manufacturing techniques from experienced Mentors </li>
                    <li>Hands-on experience with various Aircraft building materials</li>
                    <li>Electronics Integration </li>
                    <li>Make your Flying Wing ready to fly </li>
                   </ul>

                   <h4>Flying Session </h4>
                   <ul>
                    <li>Experience the fun of a Flying Wing </li>
                    <li>Safety Precaution while conducting Flying Session </li>
                    <li>Pre-flight Checks and In-flight tips from the Licensed Pilots</li>
                   </ul>
    </div> 
    <div class="tab-pane fade" id="taba13">
        <h4> <strong>Flying Wing Toolkit Contents: </strong></h4>
        <ul class='exg'>
        <li>Fabrication Materials</li>
        <li>Horn</li>
        <li>Clevis</li>
        <li>Spar</li>
        <li>Push Rods</li>
        <li>Tapes</li>
        <li>Epoxy glues</li>

        </ul>
        <center>
        <h4>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h4>
        <h4> Superior learning experience from the experts to enhance the practical skills.</h4>
        </center>
    </div>
    <div class="tab-pane fade" id="taba14">
   
    </div>
  </div>

</div>

                </div>
                <div  class="bhoechie-tab-content ethicalC1 ">
                  <div class="container">
  
  <center><div id="workshop-" class="row sigma" style='margin-top:3%'>
    <a href="#taba21" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content">HOME</div></a>
    <a href="#taba22" data-toggle="tab"><div class="col-md-2 workshop-nav-content">CONTENT</div></a>
    <a href="#taba23" data-toggle="tab"><div class="col-md-2 workshop-nav-content">BENEFITS</div></a>
    <a href="#taba24" data-toggle="tab"><div class="col-md-2 workshop-nav-content">CITIES</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>

  </div></center>

  <div class="tab-content letsee1">
        <div class="tab-pane fade in active" id="taba21">
          <p><h4>Ethical hacking is an important tool in many national security agencies and evencompanies. This workshop is specifically designed to provide the right knowledge to the aspiring Cyber Forensics & Ethical Hacking enthusiasts. This workshop will explore the various means that an intruder has available to gain access to computer resources. It will investigate weaknesses by discussing the theoretical background behind, and whenever possible, actually performing the attacks.</h4></p>
                    <b>Registration fee :</b> <strong>&#8377 300</strong>
<h3 class="extra_charge"></h3>

        </div>
        <div class="tab-pane fade" id="taba22">
          <h3>Content for Ethical Hacking</h3>
                 <h4>Computer Security - Basics</h4>
                  <ul class='exg'>
                    <li>Introduction</li>
                    <li>Hacker & Cracker</li>
                    <li>Attacker & Victims</li>
                    <li>ASCII Code - making a folder invisible</li>
                  </ul>

                  <h4>Network Security</h4>
                  <ul class='exg'>
                    <li>IP Address – Basic, Detecting</li>
                    <li>Ping & Ping Sweep</li>
                    <li>Tracing Target Location</li>
                    <li>Detecting Victim's OS</li>
                    <li>Detecting Firewall</li>
                    <li>Countermeasures</li>
                  </ul>

                  <h4>Domain name and DNS</h4>
                  <ul class='exg'>
                    <li>ICANN</li>
                    <li>Registrar, Registry, Registrant</li>
                    <li>Top Level Domains</li>
                    <li>Lifecycle of gTLD</li>
                    <li>DNS Delegation</li>
                   </ul>

                  <h4>Email Security</h4>
                  <ul class='exg'>
                    <li>Email Threats</li>
                    <li>Email Forging</li>
                    <li>Spamming</li>
                    <li>Email Headers</li>
                    <li>Countermeasures</li>
                   </ul>

                   <h4>Port Scanning</h4>
                   <ul class='exg'>
                    <li>Type of Ports</li>
                    <li>Virtual Port numbers</li>
                    <li>Detecting Open Ports</li>
                    <li>Tools to carry out Port Scanning</li>
                    <li>Countermeasures</li>
                   </ul>


                   <h4>Intellectual Property Theft</h4>
                   <ul class='exg'>
                    <li>Trojan working & countermeasure</li>
                    <li>Keylogger working & countermeasure</li>
                    <li>Steganography</li>
                   </ul>

                   <h4>Password Cracking & Prevention</h4>
                   <ul class='exg'>
                    <li>Password Cracking Techniques</li>
                    <li>Brute force Attack</li>
                    <li>Countermeasures</li>
                   </ul>

                   <h4>Social Networking & Mobile Apps Hacking</h4>
                   <ul class='exg'>
                      <li>Whatsapp & WeChat hacking</li>
                      <li>Facebook Hacking</li>
                      <li>WiFi Hacking</li>
                   </ul>

                   <h4>Identity Attacks Security</h4>
                   <ul class='exg'>
                      <li>Proxy Servers</li>
                      <li>Proxy Bouncing</li>
                   </ul>

                   <h4>Other Hacking</h4>
                   <ul class='exg'>
                      <li>Hacking Control panel of Websites</li>
                      <li>Making own Virus</li>
                      <li>SQL Injection Attack</li>
                      <li>Social Engineering Attacks</li>
                      <li>Hacking through Google</li>
                   </ul>

                   <h4>Cyber Law and Consulting</h4>
                   <ul class='exg'>
                      <li>What is Cyber Law</li>
                      <li>Types of Crimes</li>
                      <li>Blogs & Blogger's rights & limitation</li>
                      <li>Central Acts & State Acts</li>
                      <li>CERT-IND & AO (State level)</li>
                   </ul>
        </div> 
        <div class="tab-pane fade" id="taba23">
          <center><h4><strong>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h4> <h4> Superior learning experience from the experts to enhance the practical skills </h4>                                          
          </center>
        </div>
    <div class="tab-pane fade" id="taba24">
      <h4><center>
            <a target="_blank" id="login_in" href="https://www.facebook.com/v2.7/dialog/oauth?client_id=288372228215772&amp;state=1d7bbd6bf32087f36cfd8f249b99ea95&amp;response_type=code&amp;sdk=php-sdk-5.0.0&amp;redirect_uri=https%3A%2F%2Fwww.techkriti.org%2Fregister1%2Flogin-callback1.php&amp;scope=email" style="padding: 1%; color: white; background-color: #2d519d;"><i class=" fa fa-facebook"></i>&nbsp;Register</a>
          </center></h4>
    </div>
  </div>

</div>
                </div>
                <div  class="bhoechie-tab-content androidC1" >
                  <div class="container">
  
  <center><div id="workshop-" class="row sigma" style='margin-top:3%'>
    <a href="#taba31" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content">HOME</div></a>
    <a href="#taba32" data-toggle="tab"><div class="col-md-2 workshop-nav-content">CONTENT</div></a>
    <a href="#taba33" data-toggle="tab"><div class="col-md-2 workshop-nav-content">BENEFITS</div></a>
    <a><div class="col-md-2 workshop-nav-content">REGISTER</div></a>
  </div></center>

  <div class="tab-content letsee1">
        <div class="tab-pane fade in active" id="taba31">
          <p><h4>Android is an open-source software stack for mobile devices that includes an operating system, middleware and key applications. Android's mobile operating system is based upon a modified version of the Linux kernel. The Android Open Source Project (AOSP) is tasked with the maintenance and further development of Android. It's open-source software stack consists of Java applications running on a Java-based, object-oriented application framework on top of Java core libraries running on a Dalvik virtual machine featuring JIT compilation </h4></p>
                    <b>Registration fee :</b> <strong>&#8377 300</strong>
<h3 class="extra_charge"></h3>

        </div>
        <div class="tab-pane fade" id="taba32">
          <h3>Content for Android App Developement</h3>
          <h4>Introduction to Android </h4>
          <ul class='exg'>
            <li>Overview of Android - An Open Platform for Mobile development</li>
            <li>Open Handset Alliance - Overview</li>
            <li>What does Android run On – Android Internals?</li>
            <li>Why to use Android for mobile development?</li>                   
          </ul>

          <h4>Developing for Android: My First Android Application </h4>
          <ul class='exg'>
            <li>How to setup Android Development Environment.</li>
            <li>Android development Framework - Android-SDK, Eclipse</li>
            <li>Emulators – What is an Emulator / Android AVD ?</li>
            <li>Creating & setting up custom Android emulator</li>
            <li>Android Project Framework</li>
            <li>My First Android Application</li>
          </ul>


          <h4>Electronics Session</h4>
          <ul class='exg'>
            <li>Understanding Intent, Activity, Activity Lifecycle and Manifest</li>
            <li>Creating Application and new Activities</li>
            <li>Expressions and Flow control, Android Manifest</li>
            <li>Simple UI -Layouts and Layout properties 
              <ul class='exg' style="list-style-type:square">
                <li>Fundamental Android UI Design</li>
                <li>Introducing Layouts</li>
                <li>Creating new Layouts</li>
                <li>Drawable Resources</li>
                <li>Resolution and density independence (px,dip,dp,sip,sp)</li>     
              </ul>
            </li> 
            <li>XML Introduction to GUI objects viz.
              <ul class='exg' style="list-style-type:square">
                <li>Push Button</li>
                <li>Text / Labels</li>
                <li>EditText</li>
                <li>ToggleButton</li>
                <li>WeightSum</li>
                <li>Padding</li>
                <li>Layout Weight</li>        
              </ul>
            </li> 
            <br />
          </ul>
          
          <h4>Advanced UI Programming </h4>
          <ul class='exg'>
            <li>Event driven Programming in Android (Text Edit, Button clicked etc.)</li>
            <li>Event driven Programming in Android</li>
            <li>Android Activity Lifecycle</li>             
          </ul>

          <h4>Intents in Android</h4>
          <ul class='exg'>
            <li>Roles of Intent</li>
            <li>Intent matching Rules</li>
            <li>Filters in your Manifest</li>   
          </ul>

          <h4>Android Animations </h4>
          <ul class='exg'>
            <li>Animating android views</li>
            <li>Transition with activity</li>
            <li>Custom animation using XML</li> 
          </ul>

          <h4>Android Core Customizations </h4>
          <ul class='exg'>
            <li>Design custom button</li>
            <li>Custom events on button</li>   
          </ul>
          <h4>Android text to speech App</h4>
        </div> 
        <div class="tab-pane fade" id="taba33">
          <center>
            <h4>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h4>
            <h4>Superior learning experience from the experts to enhance the practical skills. </h4>
          </center>
        </div>
        <div class="tab-pane fade" id="taba34">
          <h4><center>
            <a target="_blank" id="login_in" href="https://www.facebook.com/v2.7/dialog/oauth?client_id=288372228215772&amp;state=12b3e3d4ec07df87ba2c4176f554e0ce&amp;response_type=code&amp;sdk=php-sdk-5.0.0&amp;redirect_uri=https%3A%2F%2Fwww.techkriti.org%2Fregister1%2Flogin-callback1.php&amp;scope=email" style="padding: 1%; color: white; background-color: #2d519d;"><i class=" fa fa-facebook"></i>&nbsp;Register</a>
          </center></h4>
        </div>
  </div>

</div>
                </div>

                <div  class="bhoechie-tab-content sixthC1">
                    <div class="container">
  
  <center><div id="workshop-" class="row sigma" style='margin-top:3%'>
    <a href="#taba41" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content">HOME</div></a>
    <a href="#taba42" data-toggle="tab"><div class="col-md-2 workshop-nav-content">CONTENT</div></a>
    <a href="#taba43" data-toggle="tab"><div class="col-md-2 workshop-nav-content">BENEFITS</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>

  </div></center>

  <div class="tab-content letsee1">
        <div class="tab-pane fade in active" id="taba41">
          <p><h4>The workshop provides college students a base to Machine vision which covers all the basics of MATLAB and image processing with hands on demonstrations of latest six sense techniques and tools, Live Demos, Interactive Question and Answer sessions, etc. The benefits of workshops are that students receive unparalleled education on the art of Technology with personal one on one attention; they can learn and interact with renowned industry experts. </h4></p>
                    <b>Registration fee :</b> <strong>&#8377 300</strong>

        </div>
        <div class="tab-pane fade" id="taba42">
          <h3>Getting started with Sixth Sense Robotics </h3>
                  <h4>Season 1</h4>            
                  <ul>
                      <li>Introduction to Sixth Sense Technology </li>
                      <li>Advancements in Robotics & Sixth Sense Technology</li>
                      <li>Introduction to Computer vision</li>
                      <li>Need of computer vision in industries </li>
                      <li>Getting started with computer Vision</li>
                      <li>Introduction to MATLAB</li>
                      <li>Introduction to Digital Image Processing</li>
                      <li>Introduction to Image Processing Tool box</li>
                  </ul>
                  <h4>Season 2</h4>            
                  <ul>
                      <li>Image acquisition in MATLAB </li>
                      <li>Image manipulation MATLAB</li>
                      <li>Concepts like Luminance, Hue, and Intensity</li>
                  </ul>
                  <h4>Season 3</h4>            
                  <ul>
                      <li>Video acquisition</li>
                      <li>Mouse Pointer Control using Sixth Sense Technology</li>
                  </ul>
                  <h4>Season 4</h4>            
                  <ul>
                      <li>Parallel Port programming & machine control</li>
                      <li>Sending serial and parallel data using MATLAB</li>
                      <li>Implementing Image Processing on the kit and systems</li>
                      <li>Development of a line follower robot using concepts of color based image processing (Concept)</li>
                  </ul>
        </div> 
        <div class="tab-pane fade" id="taba43">
          <center><h4>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h4> <h4>Superior learning experience from the experts to enhance the practical skills.</h4>                                          
          </center>
        </div>
    <div class="tab-pane fade" id="taba44">
      <h4><center>
            <a target="_blank" id="login_in" href="https://www.facebook.com/v2.7/dialog/oauth?client_id=288372228215772&amp;state=1f63704bb914f128c5c79d7aaf0a9f15&amp;response_type=code&amp;sdk=php-sdk-5.0.0&amp;redirect_uri=https%3A%2F%2Fwww.techkriti.org%2Fregister1%2Flogin-callback1.php&amp;scope=email" style="padding: 1%; color: white; background-color: #2d519d;"><i class=" fa fa-facebook"></i>&nbsp;Register</a>
          </center></h4>
    </div>
  </div>

</div>
                </div>
                <div  class="bhoechie-tab-content iotC1">
                  <div class="container">
  
  <center><div id="workshop-" class="row sigma" style='margin-top:3%'>
    <a href="#taba51" data-toggle="tab"><div class="col-md-offset-1 col-md-2 workshop-nav-content">HOME</div></a>
    <a href="#taba52" data-toggle="tab"><div class="col-md-2 workshop-nav-content">CONTENT</div></a>
    <a href="#taba53" data-toggle="tab"><div class="col-md-2 workshop-nav-content">BENEFITS</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>

  </div></center>

  <div class="tab-content letsee1">
        <div class="tab-pane fade in active" id="taba51">
          <p> <h4>How beautiful it is when your door can update its Facebook Status every time someone opens it. A song starts playing when you tweet about it. A fire sensor automatically sends an E-Mail to the fire department. Keeping all the awesomeness in mind we have introduced the Internet of things workshop to get you ready for the future. <b>Internet of Things</b> will drive new consumer and business behavior that will demand increasingly intelligent industry solutions, which, in turn, will drive trillions of dollars in opportunity for IT industry and even more for the companies that take advantage of the IOT. </h4></p>
                    <b>Registration fee :</b> <strong>&#8377 300</strong>
<h3 class="extra_charge"></h3>
        </div>
        <div class="tab-pane fade" id="taba52">
          <h4>Getting started with Iot </h4>
                  <h4>Season 1</h4>            
                  <ul class='exg'>
                      <li>Introduction to Internet of Things (IoT)</li>
                      <li>Why IoT? How IoT is changing the world Session 2 </li>
                      <li>Introduction to ESP8266 How ESP8266 useful in IoT  </li>
                      <li>AT commands usage in ESP8266 NodeMcu Firmware Installation ESPlorer Installation in NodeMCU </li>
                  </ul>
                  <h4>Season 2</h4>            
                  <ul class='exg'>
                      <li>Lua Programming </li>
                      <li>Introduction to the language </li>
                      <li>Brief Introduction on Bootstrap </li>
                      <li>Control GPIOs with Lua</li>
                      <li>Connecting to Internet Session 4</li>
                      <li>Making Simple Web Server</li>
                      <li>Controlling GPIOs via Internet </li>
                      <li>Connecting ESP8266 via cloud </li>
                      <li> Controllling GPIOs via Cloud</li>
                  </ul>
                  <h4>Season 3</h4>            
                  <ul class='exg'>
                      <li>Further Applications of ESP8266</li>
                  </ul>
                  <h4>ADVANCED TOPICS</h4>            
                  <ul class='exg'>
                      <li>Email Notification with ESP8266 AND PIR motion sensor Connecting ESP8266 WITH AVR </li>
                      <li>Home automation using ESP8266</li>
                  </ul>
        </div> 
        <div class="tab-pane fade" id="taba53">
          <center><h4>Certificate of Participation from Techkriti, IIT Kanpur to each participant.</h4> <h4>Superior learning experience from the experts to enhance the practical skills.</h4>                                          
          </center>
        </div>
    <div class="tab-pane fade" id="taba54">
      <h4><center>
            <a target="_blank" id="login_in" href="https://www.facebook.com/v2.7/dialog/oauth?client_id=288372228215772&amp;state=fb61526e66480f330c9379e12148e468&amp;response_type=code&amp;sdk=php-sdk-5.0.0&amp;redirect_uri=https%3A%2F%2Fwww.techkriti.org%2Fregister1%2Flogin-callback1.php&amp;scope=email" style="padding: 1%; color: white; background-color: #2d519d;"><i class=" fa fa-facebook"></i>&nbsp;Register</a>
          </center></h4>
    </div>
  </div>

</div>

                </div>
                <div class="bhoechie-tab-content iarc1">
                  <div class="container">
  
  <center><div id="event-" class="row sigma" style='margin-top:3%'>
    <a href="#taba61" data-toggle="tab"><div class="col-md-2 event-nav-content">HOME</div></a>
    <a href="#taba62" data-toggle="tab"><div class="col-md-3 event-nav-content">PROBLEM STATEMENT</div></a>
    <a href="#taba63" data-toggle="tab"><div class="col-md-3 event-nav-content">JUDGING CRITERIA</div></a>
    <a href="#taba64" data-toggle="tab"><div class="col-md-2 event-nav-content">INCENTIVES</div></a>
    <a href="#taba65" data-toggle="tab"><div class="col-md-2 event-nav-content">CONTACTS</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>
  </div></center>

  <div class="tab-content letsee1 letsee2">
        <div class="tab-pane fade in active" id="taba61">
          <h4>To design an autonomous vehicle which traverses the given track in shortest time duration.</h4>
        </div>
        <div class="tab-pane fade" id="taba62">
          <h4>Bot Specifications</h4>
          <ul class='exg'>
            <li >Dimension should not be more than 25cm*25cm*25cm at any instant during the gameplay</li>

            <li>Teams will have to bring their own power supply</li>
          </ul>
          <h4>Game Play</h4>
          <ul class='exg'>
            <li>Initially, the vehicle has to be at shown starting position </li>
            <li>On starting the bot, it has to follow the black line to complete one lap of the track in shortest time duration</li>
            <li>After completing, the bot will have to blink red LED for a minimum of 3 seconds</li>
          </ul>

<h4>Arena to be updated soon.<br>
 Changes will be highlighted on the website and will also be mailed to all the registered participants. However, you are suggested to keep checking the website regularly. 

</h4>

        </div> 
        <div class="tab-pane fade" id="taba63">
<h4>Points System -:</h4>
          <ul class='exg'>
            <li>Time taken to complete the line following shall be considered in deciding the winners .</li>
            <li>Human interventions shall be penalized</li>
            <li> Extra points  for glowing the led at the end.</li>
            <li>Maximum of two human intervention are allowed in the gameplay</li>
            <li>In case of any human intervention the bot will have to restart from the starting point and previous progress will not be considered.</li>
          </ul>
<h4>In case of any disputes, the decision of the coordinators would be final and binding to all. 
</h4>
        </div>
      <div class="tab-pane fade" id="taba64">
        <h4>Top three teams will get Certificates of Merit and winners will be felicitated with mementos. The winning team will get the direct entry in the final round of IARC at Techkriti, IIT Kanpur.</h4>
      </div>
      <div class="tab-pane fade" id="taba65"><h4>Contact Details</h4>
<ul class='exg'><li>Pawan - 9453994806</li>
<li>Anirban- 7275797315</li>
</ul>
</div>
  </div>

</div>
                </div>
                <div class="bhoechie-tab-content man1">
                  <div class="container">
  
  <center><div id="event-" class="row sigma" style='margin-top:3%'>
    <a href="#taba71" data-toggle="tab"><div class="col-md-2 event-nav-content">HOME</div></a>
    <a href="#taba72" data-toggle="tab"><div class="col-md-3 event-nav-content">PROBLEM STATEMENT</div></a>
    <a href="#taba73" data-toggle="tab"><div class="col-md-3 event-nav-content">JUDGING CRITERIA</div></a>
    <a href="#taba74" data-toggle="tab"><div class="col-md-2 event-nav-content">INCENTIVES</div></a>
    <a href="#taba75" data-toggle="tab"><div class="col-md-2 event-nav-content">CONTACTS</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>
  </div></center>

  <div class="tab-content letsee1  letsee2">
        <div class="tab-pane fade in active" id="taba71">
          <h4>This event requires that participants construct a 4 wheeled gripper robot with constrained dimensions  which could move over various terrains and performs simple tasks such as grabbing and shifting .</h4>
        </div>
        <div class="tab-pane fade" id="taba72">
          <h4>Bot Specifications</h3>
          <ul class='exg'>
            <li>The bot should not be beyond 35cm*35cm*35cm during the entire gameplay.</li>
            <li>There should not be a potential difference of more than 24V between any two points.</li>
            <li>The wires should remain slag at all times during the gameplay.</li>
            <li>Teams will have to bring their own power supply source for their bot.</li>
          </ul>
          <h4>Game Play</h4>
          <ul class='exg'>
            <li>Gameplay will be a total of 4 minutes.</li>
            <li>The bot has to start from the initial starting point, pick up blocks and stack them. Multiple blocks can be carried only in the gripper not anywhere else.</li>
            <li>Block size will be 7 cm * 7 cm * 7 cm.</li>
          </ul>
<h4>

 Changes will be highlighted on the website and will also be mailed to all the registered participants. However, you are suggested to keep checking the website regularly. 

</h4>

        </div> 
        <div class="tab-pane fade" id="taba73">
          <h3>Points System</h3>
          <ul class='exg'>
            <li>Two tower stacking - 10 points</li>
            <li>Three tower stacking - 30 points</li>
            <li>Four tower stacking - 50 points</li>
          </ul>
          <h4>A team can do any number of stacks .</h4>
          <h4>There will be a total of 12 red blocks .</h4>
          <h4>If  a team completes the task before 4 minutes then their time taken will be noted .</h4>
          <h4>Tie Breakers</h4>
          <h4>Time taken for first stacking shall be noted and would be considered to resolve any tie - breakers .</h4>
<h4>


Arena to be updated soon.
In case of any disputes, the decision of the coordinators would be final and binding to all. 
</h4>
        </div>
      <div class="tab-pane fade" id="taba74">
        <h4>Top three teams will get Certificates of Merit and Momentos. The winning team will get the direct entry in the final round of Manoeuvre at Techkriti, IIT Kanpur.</h4>
      </div>
      <div class="tab-pane fade" id="taba75"><h4>Contact Details</h4>
<ul class='exg'><li>Pawan - 9453994806</li>
<li>Anirban- 7275797315</li>
</ul>
</div>
  </div>

</div>
                </div>
                <div class="bhoechie-tab-content sky1">
                  <div class="container">
  
  <center><div id="event-" class="row sigma" style="margin-top:3%">
    <a href="#taba81" data-toggle="tab"><div class="col-md-2 event-nav-content">HOME</div></a>
    <a href="#taba82" data-toggle="tab"><div class="col-md-3 event-nav-content">PROBLEM STATEMENT</div></a>
    <a href="#taba83" data-toggle="tab"><div class="col-md-3 event-nav-content">JUDGING CRITERIA</div></a>
    <a href="#taba84" data-toggle="tab"><div class="col-md-2 event-nav-content">INCENTIVES</div></a>
    <a href="#taba85" data-toggle="tab"><div class="col-md-2 event-nav-content">CONTACTS</div></a>'
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>
  </div></center>

  <div class="tab-content letsee1 letsee2">
        <div class="tab-pane fade in active" id="taba81">
          <h4>This competition provides a platform to compete with different flyers using your electric planes through a series of rounds doing different manoeuvers like Hammerhead,Inverted loop,Humpty-Bump etc. and showing their talent in flying. </h4>
        </div>
        <div class="tab-pane fade" id="taba82">
          <h4>Event Structure :-</h4>
          <ul class='exg'>
            <li>The event will be conducted in many maneuvers. </li>
            <li>In the end, the team having the highest total points will be the winner.</li>
            <li> In this round the participants will have to perform the maneuvers that are listed below and the number of points awarded against the total will be based on the smoothness and accuracy of the maneuvers. </li>
            <li>Partial points can be awarded. No discussion will be entertained on the points given. </li>
            <li>The Maximum time given to each participant is 4 minutes. </li>
            <li>Points will be deducted for crossing this limit and manoeuvers performed after 4 minutes will not be judged. </li>
            <li>Maximum team strength is restricted to 5 members .</li>
            <li>Maneuvers can be repeated to improve your score in that particular maneuver.</li>
          </ul>
          <h4>Manoeuvre :-</h4>
          <ul class='exg'>
            <li>You have to call the maneuver name before performing it. </li>
            <li>Maneuvers can be performed in any sequence. </li>
            <li>The manoeuvers need to be performed are as following: </li>
          </ul>
          <h4>Model Specifications :</h4>
          <ul class='exg'>
            <li>Teams are allowed to use electric components only since this is strictly  an electric plane competition. </li>
            <li> IC engines are strictly prohibited.</li>
            <li> Metal propellers are strictly not allowed.</li>
            <li> Use of gyros is prohibited.</li>
          <li> Each team has to bring its own model. Exchange of models between  teams is not allowed.</li>
            <li> Handmade models ,Ready-to-fly models or planes assembled from kits are allowed.</li>
            <li> We suggest you to build a 3D aircraft for aerobatics. It will be helpful for you.</li>
          </ul>
          <h4>Eligibility :</h4>
          <h4>Any student of any academic institution is eligible to participate.</h4>
<h4>Changes will be highlighted on the website and will also be mailed to all the registered participants. However, you are suggested to keep checking the website regularly. 
</h4>
        </div> 
        <div class="tab-pane fade" id="taba83">
          <center><table style="width: 90%; margin-left: 10%; font-size: 75%;">
            <tbody>
              <tr>
                <th>S.No.</th>
                <th>Manoeuvre</th>
                <th>Max. Points</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Roll</td>
                <td>10</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Inside Loop</td>
                <td>10</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Inverted Loop</td>
                <td>15</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Split S</td>
                <td>20</td>
              </tr>
              <tr>
                <td>5</td>
                <td>4 Point Roll</td>
                <td>25</td>
              </tr>
            </tbody>
          </table></center>
<h3>In case of any disputes, the decision of the coordinators would be final and binding to all. </h3>

        </div>
      <div class="tab-pane fade" id="taba84">
        <h4>Top three teams will get Certificates of Merit and winners will be felicitated with mementos. The winning team will get the direct entry in the final round of Rule the sky  at Techkriti, IIT Kanpur.</h4>
      </div>
      <div class="tab-pane fade" id="taba85"><h4>Contact Details</h4>
<ul class='exg'><li>Amresh Kushwaha : 8874607525</li>
<li>Anirban Manna- 7275797315</li>
</ul>
</div>
  </div>

</div>
                </div>
                <div class="bhoechie-tab-content soc1">
                  <div class="container">
  
  <center><div id="event-" class="row" style="margin-top:3%">
    <a href="#taba91" data-toggle="tab"><div class="col-md-2 event-nav-content">HOME</div></a>
    <a href="#taba92" data-toggle="tab"><div class="col-md-3 event-nav-content">PROBLEM STATEMENT</div></a>
    <a href="#taba93" data-toggle="tab"><div class="col-md-3 event-nav-content">JUDGING CRITERIA</div></a>
    <a href="#taba94" data-toggle="tab"><div class="col-md-2 event-nav-content">INCENTIVES</div></a>
    <a href="#taba95" data-toggle="tab"><div class="col-md-2 event-nav-content">CONTACTS</div></a>
    <a class='common_reg'><div class="col-md-2 workshop-nav-content">REGISTER</div></a>
  </div></center>

  <div class="tab-content letsee1 letsee2">
        <div class="tab-pane fade in active" id="taba91">
          <h4>SocCon is the stage of innovation for an ultimate battle for the throne of creativity. Present your ideas and knock others' socks off with your creativity. 
SocCon or Social Conquest is concerned with the contemporary reformative ideas primarily predicated over, which are sought in the minds of our nation's young intellects. </h4>
        </div>
        <div class="tab-pane fade" id="taba92">
          <h4>Event Structure :-</h4>
          <h4>All the participating team should bring a powerpoint presentation of not more 10 mins on any of the following topics:</h4>
          <ul class='exg'>
            <li>Demonetization and its effect</li>
            <li>Juvenile crimes </li>
            <li>Climate Change</li>
            <li>Any other topic of your choice</li>
          </ul>
          <h4>This will be followed by a quick round of discussion, mostly Q&A, with Judging Panel for 5 mins.</h4>
          <h4>Rules :</h4>
          <ul class='exg'>
            <li>Students and professionals from all over the world.</li>
            <li>Teams with at most 5 members and atleast 2 members can enter the competition. </li>
            <li>Any number of teams from a college can participate in the competition. </li>
            <li>Your submission to the SocCon must be your own, and must not make unauthorized use of any intellectual property that is protected by trademark, copyright or other intellectual property laws from any source. Any such entry would be disqualified. </li>
          </ul>
<h4>
</h4>
        </div> 
        <div class="tab-pane fade" id="taba93">
          <h4>All interpretations of these rules and decisions of the Coordinators and Judges in all matters related to the SocCon are final. The Coordinators and judges reserve the right, in their sole discretion, to disqualify any individual they find or believe to be violating the rules.</h4>
          <h4>

In case of any disputes, the decision of the coordinators would be final and binding to all. 
</h4>
        </div>
      <div class="tab-pane fade" id="taba94">
        <h4>Top three teams will get Certificates of Merit and winners will be felicitated with mementos. The winning team will get the direct entry in the final round of SocCon at Techkriti, IIT Kanpur. Runner-ups may get direct entry to Round 1 of the event.</h4>
      </div>
      <div class="tab-pane fade" id="taba95"><h4>Contact Details</h4>
<ul class='exg'><li>Mayank Verma:  9458709497
</li>
<li>Akshat Srivastava: 9769387997
</li>
</ul>
</div>
  </div>

</div>
                </div>



                <div class="bhoechie-tab-content ahmedabad_talks">
                  <div class="tab-content letsee" style='padding-right:1%;'>
                    <img style="padding: 2%;" src="talks/yash.jpg" width="50%">
                    <div class="techno_talks">
                        <h2><strong>Yash Shah</strong></h2><hr style="border: 1px solid #e4e2dc;margin-bottom: 2px;">
                        <h3>Chief Executive<br> @Gridle - Productivity Platform for Work</h3>
                    </div>
                    <div><p><h3>About the Speaker</h3>Yash did his Mechanical Engineering from NIT-S where he also became a Kairos fellow and an MITx Bootcamper. He later worked as an investment banker with a nationalized bank and founded Gridle, a productivity suite for enterprises where he today serves as its chief executive officer. He currently sits on mentor board of NIT-Surat, VGEC and Silver Oak College of Engineering and Technology. He blogs at yashshah.in and is a guest author at Yourstory & The Tech Panda.</p></div>
                  </div>                  
                </div>

   <div class="bhoechie-tab-content bhopal_talks">
                  <div class="tab-content letsee" style='padding-right:1%;'>
                    <img style="padding: 2%;" src="talks/deepak.jpg" width="40%">
                    <div class="techno_talks">
                        <h2><strong>Dr. Deepak Motwani</strong></h2><hr style="border: 1px solid #e4e2dc;margin-bottom: 2px;">
                        <h3>Founder<br>I.T. Fusion and Vishleshan Educational & Social Welfare Society - VESWS</h3>
                    </div>
                    <div><p><h3>About the Speaker</h3>The Topic of the talk: Entrepreneurship is a Passion, not a Fashion!
Vishleshan Educational & Social Welfare Society” is a nonprofit organization which has been established with aim of development of society in the field of education and research. VESWS basically work in education field to provide platform to promote research scholars and academicians to showcase their skills and to contribute in the society with their research. In addition, VESWS also work for the betterment of the society by organizing awareness camp, blood donation camp, plantation and many other activities.</p></div>
                  </div>                  
                </div>
   <div class="bhoechie-tab-content jaipur_talks">
                  <div class="tab-content letsee"  style='padding-right:1%;'>
                    <img style="padding: 2%;" src="talks/anand.jpg" width="40%">
                    <div class="techno_talks">
                        <h2><strong>Anand Singh Shekhawat</strong></h2><hr style="border: 1px solid #e4e2dc;margin-bottom: 2px;">
                        <h3>Founder<br> Tourepedia</h3>
                    </div>
                    <div><p><h3>About the Speaker</h3>Tourepedia, A travel organisation offers wide range of tours and activities to impart ultimate travel experience to families, couples, friends group, corporate and schools/colleges students. 
Tourepedia aims to create a platform for travel enthusiasts to explore the world from which they can learn new things, meet new peoples, find new experience, increase harmony with loved ones. 
Tourepedia organises wide range of trips like family trips,honeymoon trips, educational trips, corporate trips, group trips etc. and activities such as trekking, national park safaris, biking, scuba diving, rafting, camping etc to cater the needs of adventure and experience lovers, in incredible India.</p></div>
                  </div>                  
                </div>









<!-- <div  class="bhoechie-tab-content iotC2" >
                  <center>
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <center>
                          <h4>
                            Internet of Things - How beautiful it is when your door can update its Facebook Status every time someone opens it. A song starts playing when you tweet about it. A fire sensor automatically sends an E-Mail to the fire department. Keeping all the awesomeness in mind we have introduced ..............<a target="_blank" href="workshop/iot.html">Read More</a>
                          </h4>
                        </center>
                      </div>
                    </div>                                        
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <center>
                          <h3 style="margin-top: 0;color:#55518a">GENERAL DETAILS:-</h3>
                          <h4>Any Individual can register for this workshop</h4>
                          <h4>Duration- 1 day, 8 hours workshop </h4>
                          <h4>Benefits - <strong>Certificate of Participation</strong> from Techkriti'17</h4>
                          <h4>Superior learning experience from the experts to enhance the practical skills</h4>
                          <h4>Centre-University of Petroleum and Energy Studies(UPES)</h4>
                          <h4 class="idate"></h4>
                          <h4 class="itime"></h4>
                          <h3>COST: INR 300/- per participant</h3>
                        </center>
                      </div>
                    </div>                             
                  </center>
                </div> -->
                <!-- <div class="bhoechie-tab-content active detailsC">
                  <center>

                  </center>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--     <script src="assets/js/jquery-1.10.2.js"></script>
 -->    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!--     <script src="assets/js/modernizr.custom.js"></script>
 -->
    <script src="assets/js/plugins/jquery.easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
<!--     <script src="assets/js/plugins/owl.carousel/owl.carousel.min.js"></script>
 -->    <script src="assets/js/plugins/scrollReveal/scrollReveal.js"></script>
    <script src="assets/js/plugins/stellar/stellar.js"></script>
    <script src="assets/js/plugins/SmoothScroll/SmoothScroll.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js"></script>

    <script src="assets/js/spectrum.nav.js"></script>
    <script src="assets/js/spectrum.js"></script>
    <script type="text/javascript">
      $(function(){
      $('a.live').on('click',function(){
           if($(this).attr('data-city') == 'VADODARA'){
          console.log('vadodara');
          $('.ethicalC1 .tab-content .tab-pane strong,.iotC1 .tab-content .tab-pane strong,.androidC1 .tab-content .tab-pane strong').text("₹ 400");
$('.extra_charge').text('(The extra 100 ₹ will be accounted for transportation to and fro.)');


         }
       else{
             $('.ethicalC1 .tab-content .tab-pane strong,.iotC1 .tab-content .tab-pane strong,.androidC1 .tab-content .tab-pane strong').text("₹ 300");
$('.extra_charge').text('');
         }
         });

      });
    </script>

    <script>
      var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 13.012147, lng: 80.238523},
          zoom: 14
        });

        var marker = new google.maps.Marker({
          position: {lat: 13.012147, lng: 80.238523},
          map: map,
          title: 'Hello World!'
        });

      }
    </script>
    <script type="text/javascript">
      $(document).ready(function() {  

var id = '#dialog';
  
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
  
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500); 
$('#mask').fadeTo("slow",0.9);  
  
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
  
//transition effect
$(id).fadeIn(2000);   
  
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
  
});
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGxvj2suL1_aWK-muZaC0HtCOrp864tIk&callback=initMap"
    async defer></script>

  </body>


</html>

<?php
//echo "sakthi";

$user_id=$_SESSION['user_id'];
$q1=mysqli_query($con,"select accomodation from students where user_id='$user_id'") or die(mysqli_error($con));
$flag;
        if($row=mysqli_fetch_assoc($q1))
        {
                $flag=$row['accomodation'];
    echo $flag;
        if($flag=='no')
        { 
          $_SESSION['flag']=1;  
        }

    }


?>