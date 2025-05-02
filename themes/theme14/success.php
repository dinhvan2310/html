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
<!DOCTYPE html>
<html lang="">
<base href="GiaoDien/theme16/">

<html lang="" style="font-size: 5.60626px;">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:title" content="GARENA FREE FIRE MEMBERSHIP">
    <meta property="og:description" content="Chương trình tri ân kèm những sự kiện đặc biệt dành cho người chơi Free Fire">
    <link rel="shortcut icon" href="https://cdn.vn.garenanow.com/web/ff/fav.jpg">
    <title>Garena Free Fire Membership</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./login.css">
    <link href="css/chunk-24e3cfec.b909ba0e.css" rel="prefetch">
    <link href="css/chunk-ebcca810.fc5c29f8.css" rel="prefetch">
    <link href="js/chunk-24e3cfec.0a8fe0f3.js" rel="prefetch">
    <link href="js/chunk-ebcca810.0be768b5.js" rel="prefetch">
    <link href="css/app.b1f17912.css" rel="preload" as="style">
    <link href="css/chunk-vendors.737c64e5.css" rel="preload" as="style">
    <link href="js/app.98b3f90d.js" rel="preload" as="script">
    <link href="js/chunk-vendors.af4be1be.js" rel="preload" as="script">
    <link href="css/chunk-vendors.737c64e5.css" rel="stylesheet">
    <link href="css/app.b1f17912.css" rel="stylesheet">
    <script bis_use="true" type="text/javascript" charset="utf-8" data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;]" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/../executers/vi-tr.js"></script>
    <link rel="stylesheet" type="text/css" href="css/chunk-24e3cfec.b909ba0e.css">
    <script charset="utf-8" src="js/chunk-24e3cfec.0a8fe0f3.js"></script>
    <style>
        @-webkit-keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
        
        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
        
        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }
        
        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }
        
        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }
            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }
            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }
            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }
            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }
        
        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }
            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }
            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }
            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }
            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }
        
        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }
            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }
            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }
            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }
        
        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }
            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }
            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }
            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }
        
        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }
        
        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }
        
        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }
            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }
            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }
        
        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }
            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }
            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }
        
        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }
        
        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }
        
        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }
        
        body.swal2-toast-shown .swal2-container.swal2-shown {
            background-color: transparent
        }
        
        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }
        
        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }
        
        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        
        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }
        
        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        
        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }
        
        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }
        
        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }
        
        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }
        
        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }
        
        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }
        
        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }
        
        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            box-shadow: 0 0 .625em #d9d9d9;
            overflow-y: hidden
        }
        
        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row
        }
        
        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }
        
        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }
        
        .swal2-popup.swal2-toast .swal2-close {
            position: initial;
            width: .8em;
            height: .8em;
            line-height: .8
        }
        
        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em
        }
        
        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }
        
        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: 700;
            line-height: 1em
        }
        
        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }
        
        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }
        
        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }
        
        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }
        
        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em
        }
        
        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }
        
        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
        }
        
        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }
        
        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }
        
        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }
        
        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0
        }
        
        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }
        
        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }
        
        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }
        
        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }
        
        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }
        
        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s
        }
        
        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards
        }
        
        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s
        }
        
        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s
        }
        
        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }
            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }
        
        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }
            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }
        
        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1
            }
            33% {
                opacity: .5
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }
        
        @keyframes hideSweetToast {
            0% {
                opacity: 1
            }
            33% {
                opacity: .5
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }
        
        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }
            54% {
                top: .125em;
                left: .125em;
                width: 0
            }
            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }
            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }
            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }
        
        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }
            54% {
                top: .125em;
                left: .125em;
                width: 0
            }
            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }
            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }
            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }
        
        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }
            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }
            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }
            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }
        
        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }
            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }
            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }
            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }
        
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }
        
        body.swal2-height-auto {
            height: auto!important
        }
        
        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent
        }
        
        body.swal2-no-backdrop .swal2-shown>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-top-left,
        body.swal2-no-backdrop .swal2-shown.swal2-top-start {
            top: 0;
            left: 0
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-top-end,
        body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-center-left,
        body.swal2-no-backdrop .swal2-shown.swal2-center-start {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-center-end,
        body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
            bottom: 0;
            left: 0
        }
        
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0
        }
        
        .swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch
        }
        
        .swal2-container.swal2-top {
            align-items: flex-start
        }
        
        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }
        
        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }
        
        .swal2-container.swal2-center {
            align-items: center
        }
        
        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }
        
        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }
        
        .swal2-container.swal2-bottom {
            align-items: flex-end
        }
        
        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }
        
        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }
        
        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex!important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }
        
        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex!important;
            flex: 1;
            align-content: center;
            justify-content: center
        }
        
        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }
        
        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }
        
        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }
        
        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }
        
        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex!important;
            flex: 1;
            align-content: center;
            justify-content: center
        }
        
        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }
        
        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .swal2-container .swal2-modal {
                margin: 0!important
            }
        }
        
        .swal2-container.swal2-fade {
            transition: background-color .1s
        }
        
        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }
        
        .swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box
        }
        
        .swal2-popup:focus {
            outline: 0
        }
        
        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }
        
        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center
        }
        
        .swal2-popup .swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }
        
        .swal2-popup .swal2-actions {
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0;
            z-index: 1
        }
        
        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }
        
        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }
        
        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }
        
        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent!important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }
        
        .swal2-popup .swal2-actions.swal2-loading:not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal
        }
        
        .swal2-popup .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none
        }
        
        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer
        }
        
        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }
        
        .swal2-popup .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }
        
        .swal2-popup .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
        }
        
        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0
        }
        
        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }
        
        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }
        
        .swal2-popup .swal2-close {
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            outline: initial;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden
        }
        
        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474
        }
        
        .swal2-popup>.swal2-checkbox,
        .swal2-popup>.swal2-file,
        .swal2-popup>.swal2-input,
        .swal2-popup>.swal2-radio,
        .swal2-popup>.swal2-select,
        .swal2-popup>.swal2-textarea {
            display: none
        }
        
        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            z-index: 1;
            word-wrap: break-word
        }
        
        .swal2-popup #swal2-content {
            text-align: center
        }
        
        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-textarea {
            margin: 1em auto
        }
        
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            box-sizing: border-box
        }
        
        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474!important;
            box-shadow: 0 0 2px #f27474!important
        }
        
        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }
        
        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #ccc
        }
        
        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }
        
        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }
        
        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #ccc
        }
        
        .swal2-popup .swal2-range input {
            width: 80%
        }
        
        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center
        }
        
        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }
        
        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }
        
        .swal2-popup .swal2-input[type=number] {
            max-width: 10em
        }
        
        .swal2-popup .swal2-file {
            font-size: 1.125em
        }
        
        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }
        
        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em
        }
        
        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-radio {
            align-items: center;
            justify-content: center
        }
        
        .swal2-popup .swal2-checkbox label,
        .swal2-popup .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }
        
        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-radio input {
            margin: 0 .4em
        }
        
        .swal2-popup .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden
        }
        
        .swal2-popup .swal2-validation-message::before {
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal
        }
        
        @supports (-ms-accelerator: true) {
            .swal2-range input {
                width: 100%!important
            }
            .swal2-range output {
                display: none
            }
        }
        
        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .swal2-range input {
                width: 100%!important
            }
            .swal2-range output {
                display: none
            }
        }
        
        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }
        
        .swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal
        }
        
        .swal2-icon-text {
            font-size: 3.75em
        }
        
        .swal2-icon.swal2-error {
            border-color: #f27474
        }
        
        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }
        
        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }
        
        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }
        
        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }
        
        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }
        
        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }
        
        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }
        
        .swal2-icon.swal2-success {
            border-color: #a5dc86
        }
        
        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }
        
        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }
        
        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }
        
        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box
        }
        
        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1
        }
        
        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2
        }
        
        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }
        
        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }
        
        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600
        }
        
        .swal2-progresssteps li {
            display: inline-block;
            position: relative
        }
        
        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20
        }
        
        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0
        }
        
        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0
        }
        
        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6
        }
        
        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
            background: #add8e6
        }
        
        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
            background: #add8e6
        }
        
        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10
        }
        
        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }
        
        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }
        
        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }
        
        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }
        
        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }
        
        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }
        
        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }
        
        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }
        
        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }
        
        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }
        
        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }
        
        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
        
        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
        
        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll!important
            }
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: initial!important
            }
        }
    </style>
</head>

<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4xNSIsInNjb3JlIjoyMDAxNX1d">
    <noscript>
        <strong>We're sorry but website doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="root" bis_skin_checked="1">
        <div style="height: 100%;" bis_skin_checked="1">
            <header>
                <div class="content-ff" bis_skin_checked="1">
                    <div class="logout-btn" bis_skin_checked="1"><a href="javascript:void(0)" title="Thể lệ" class="red-btn act-btn">Thể lệ</a>
                        <a title="Đăng xuất" href="#" class="act-btn logg-out"><img src="img/logout.29f7cada.png" alt="">
                        </a>
                    </div>
                </div>
            </header>
            <main>
                <section class="banner animate__fadeInRight animate__animated animate__slow">
                    <div id="ffCarousel" data-ride="carousel" class="carousel slide" bis_skin_checked="1">
                        <ul class="carousel-indicators">
                            <li data-target="#ffCarousel" data-slide-to="0" class="active"></li>
                        </ul>
                        <div class="carousel-inner" bis_skin_checked="1">
                            <div class="carousel-item active" bis_skin_checked="1"><img src="https://cdn.vn.garenanow.com/web/ff/ff_membership/item/Vip-Membership.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-acount">
                    <div class="account" bis_skin_checked="1">
                        <div class="row-tbl" bis_skin_checked="1">
                            <div class="t-avatar" bis_skin_checked="1"><span class="avt"><img src="img/avatar.cfbf6d20.png" alt=""></span>
                            </div>
                            <div class="t-update-info" bis_skin_checked="1"><a href="javascript:void(0)" class="red-btn act-btn">cập nhật thông tin</a>
                            </div>
                            <div class="t-status" bis_skin_checked="1"><span class="status-txt"><i><img src="images/ico-star.png" alt=""></i><span>Bạch Kim 2</span></span>
                            </div>
                        </div>
                        <div class="row-tbl" bis_skin_checked="1">
                            <div class="t-action" bis_skin_checked="1">
                                <p class="display-name"><span class="name"></span>
                                </p><span><img src="img/btn_up_rank.ab7b3d9a.png" alt=""></span>
                            </div>
                            <div class="t-progress" bis_skin_checked="1">
                                <div class="show-progress" bis_skin_checked="1"><span>26116</span> / <span>50000</span>
                                </div>
                                <div class="progressbar-container" bis_skin_checked="1">
                                    <div class="progressbar-progress" bis_skin_checked="1" style="background-color: rgb(11, 211, 24); width: 100%; transition: width 200ms ease 0s; height: 10px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="spin aos-init aos-animate">
                    <div class="content-ff" bis_skin_checked="1">
                        <h3 class="spin-title"><img src="img/spin-title.8c9c3879.png" alt=""></h3>
                        <p class="descreption"> Nạp tích luỹ 800 Kim Cương trong Free Fire nhận 1 lượt quay </p>
                        <div class="spin-count" bis_skin_checked="1"><span class="red-brick-btn">đã tích lũy : 26116</span><span class="red-brick-btn">số lượt quay : 1 lần</span>
                        </div>

<div class="wheel" bis_skin_checked="1">
    <svg viewBox="-305 -305 610 610" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="whel-body" style="transform: rotate(0deg);">
        <g transform="rotate(0)" data-tip="<?php echo isset($gift1Name) ? $gift1Name : ''; ?>" data-img="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(45)" data-tip="<?php echo isset($gift2Name) ? $gift2Name : ''; ?>" data-img="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(90)" data-tip="<?php echo isset($gift3Name) ? $gift3Name : ''; ?>" data-img="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(135)" data-tip="<?php echo isset($gift4Name) ? $gift4Name : ''; ?>" data-img="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(180)" data-tip="<?php echo isset($gift5Name) ? $gift5Name : ''; ?>" data-img="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(225)" data-tip="<?php echo isset($gift6Name) ? $gift6Name : ''; ?>" data-img="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(270)" data-tip="<?php echo isset($gift7Name) ? $gift7Name : ''; ?>" data-img="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
        <g transform="rotate(315)" data-tip="<?php echo isset($gift8Name) ? $gift8Name : ''; ?>" data-img="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>" currentItem="false">
            <path d="M0,0 L-114.80502970952693,-277.163859753386 A300 300 0 0 1 114.80502970952693,-277.163859753386 Z"></path>
            <image xlink:href="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>" x="-45.922011883810775" y="-249.44747377804742" height="86.1037722821452" width="86.1037722821452"></image>
            <text x="-14.924653862238502" y="-138.581929876693"> x1 </text>
        </g>
    </svg>
    <img src="img/spin-arrow.fa684f1d.png" title="quay" class="mock act-btn" onclick="spinWheel()">
    <style>
.custom-modal {
    position: fixed;
    top: 30%;
    left: 15%;
    transform: translate(-50%, -50%);
    z-index: 1000; /* Đảm bảo popup hiển thị trên các phần tử khác */
    background-color: white; /* Màu nền của popup */
    border-radius: 10px; /* Đường viền cong của popup */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Đổ bóng cho popup */
    padding: 20px; /* Khoảng cách nội dung với viền popup */
    max-width: 80%; /* Chiều rộng tối đa của popup */
    max-height: 80%; /* Chiều cao tối đa của popup */
    overflow-y: auto; /* Hiển thị thanh cuộn nếu nội dung dài hơn popup */
}

    </style>
    <script>
    function spinWheel() {
        const wheel = document.querySelector('.whel-body');
        const segments = document.querySelectorAll('.whel-body g');
        const degrees = Math.floor(Math.random() * 3600) + 360; 
        const rotateDeg = `rotate(${degrees}deg)`;
        wheel.style.transition = 'transform 5s ease-out';
        wheel.style.transform = rotateDeg;
        const button = document.querySelector('.mock.act-btn');
        button.style.pointerEvents = 'none';
        const segmentAngle = 360 / segments.length;
        const winningSegmentIndex = Math.floor((360 - (degrees % 360)) / segmentAngle);
        const winningSegment = segments[winningSegmentIndex];
        const prize = winningSegment.getAttribute('data-tip');
        const quatrungthuong = winningSegment.getAttribute('data-img');
        setTimeout(() => {
            button.style.pointerEvents = 'auto';
            if (prize) {
                const popupHTML = `
<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal animated fadeInDown custom-modal swal2-noanimation" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" bis_skin_checked="1" style="display: flex;">
    <div class="swal2-header" bis_skin_checked="1">
        <ul class="swal2-progresssteps" style="display: none;"></ul>
        <div class="swal2-icon swal2-error" bis_skin_checked="1" style="display: none;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>
        </div>
        <div class="swal2-icon swal2-question" bis_skin_checked="1" style="display: none;"><span class="swal2-icon-text">?</span>
        </div>
        <div class="swal2-icon swal2-warning" bis_skin_checked="1" style="display: none;"><span class="swal2-icon-text">!</span>
        </div>
        <div class="swal2-icon swal2-info" bis_skin_checked="1" style="display: none;"><span class="swal2-icon-text">i</span>
        </div>
        <div class="swal2-icon swal2-success" bis_skin_checked="1" style="display: none;">
            <div class="swal2-success-circular-line-left" bis_skin_checked="1" style="background-color: rgb(255, 255, 255);"></div><span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
            <div class="swal2-success-ring" bis_skin_checked="1"></div>
            <div class="swal2-success-fix" bis_skin_checked="1" style="background-color: rgb(255, 255, 255);"></div>
            <div class="swal2-success-circular-line-right" bis_skin_checked="1" style="background-color: rgb(255, 255, 255);"></div>
        </div><img class="swal2-image" style="display: none;">
        <h2 class="swal2-title" id="swal2-title" style="display: flex;">Thông báo</h2>
        <button type="button" class="swal2-close" style="display: none;">×</button>
    </div>
    <div class="swal2-content" bis_skin_checked="1">
        <div id="swal2-content" bis_skin_checked="1" style="display: block;">
            <div class="spin-result" bis_skin_checked="1">
                <div class="item-img" bis_skin_checked="1"><img src="${quatrungthuong}" alt="">
                </div>
                <p class="txt-img">Chúc mừng bạn đã quay được  ${prize} phần quà sẽ gửi vào hòm thư trong vòng 24-48h!</p>
            </div>
        </div>
        <input class="swal2-input" style="display: none;">
        <input type="file" class="swal2-file" style="display: none;">
        <div class="swal2-range" bis_skin_checked="1" style="display: none;">
            <input type="range">
            <output></output>
        </div>
        <select class="swal2-select" style="display: none;"></select>
        <div class="swal2-radio" bis_skin_checked="1" style="display: none;"></div>
        <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;">
            <input type="checkbox"><span class="swal2-label"></span>
        </label>
        <textarea class="swal2-textarea" style="display: none;"></textarea>
        <div class="swal2-validation-message" id="swal2-validation-message" bis_skin_checked="1" style="display: none;"></div>
    </div>
    <div class="swal2-actions" style="display: flex;" bis_skin_checked="1">
        <button type="button" class="swal2-confirm swal2-styled" aria-label="" style="border-left-color: rgba(0, 0, 0, 0); border-right-color: rgba(0, 0, 0, 0);">Đóng</button>
        <button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>
    </div>
    <div class="swal2-footer" style="display: none;" bis_skin_checked="1"></div>
</div>                `;
                document.body.insertAdjacentHTML('beforeend', popupHTML);
            }
        }, 5000); // 5 seconds same as transition time
    }

    function closePopup() {
        const popupOverlay = document.querySelector('.popup-overlay');
        if (popupOverlay) {
            popupOverlay.remove();
        }
    }
</script>



                        </div>
                        <p class="another">Chọn hạng khác để tham khảo quà tặng:</p>
                        <select>
                            <option value="" disabled="disabled">Chọn hạng</option>
                            <option value="normal">Thân thiết</option>
                            <option value="silver">Bạc</option>
                            <option value="gold">Vàng</option>
                            <option value="platinum">Bạch Kim</option>
                            <option value="diamond_1">Kim Cương 1</option>
                            <option value="diamond_2">Kim Cương 2</option>
                            <option value="diamond_3" selected="selected">Bạch Kim 3</option>
                        </select>
                        <div class="text-center history" bis_skin_checked="1">
                            <a href="javascript:void(0)" title="lịch sử vòng quay" class="act-btn"><img src="img/btn_history.c6c98836.png" alt="">
                            </a>
                        </div>
                    </div>
                </section>
                <section class="dob animate__zoomIn animate__animated animate__slow">
                    <h3 class="title"><img src="img/dob-title.b8c16371.png" alt=""></h3>
                    <div class="dob-ava" bis_skin_checked="1"><span></span>
                    </div>
                    <p class="descreption"> Đăng kí thông tin của bạn để nhận quà sinh nhật từ Free Fire </p>
                    <div class="content-ff" bis_skin_checked="1">
                        <div class="form-info" bis_skin_checked="1">
                            <div class="input-group" bis_skin_checked="1"><span>họ tên</span><span><p>Chưa cập nhật</p></span>
                            </div>
                            <div class="input-group" bis_skin_checked="1"><span>ngày sinh</span><span><p>Chưa cập nhật</p></span>
                            </div>
                            <div class="input-group" bis_skin_checked="1"><span>địa chỉ</span><span><p>Chưa cập nhật</p></span>
                            </div>
                            <div class="text-center submit-btn" bis_skin_checked="1">
                                <a class="dsb-btn"><img src="img/btn-bod-deactive.5810d0f4.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <div id="modal-vip" class="modal" bis_skin_checked="1">
                    <div class="modal-dialog animate__fadeInUp animate__animated" bis_skin_checked="1">
                        <div class="modal-content" bis_skin_checked="1">
                            <div class="modal-header-hd" bis_skin_checked="1">
                                <button title="Tắt" type="button" aria-label="Close" class="close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body" bis_skin_checked="1">
                                <div class="rank-section claim-section rule-ss" bis_skin_checked="1">
                                    <h3>Thể lệ Chương Trình</h3>
                                    <div class="cl-content" bis_skin_checked="1">
                                        <p><b>THỂ LỆ CHƯƠNG TRÌNH</b>
                                        </p>
                                        <ul>
                                            <li> Người chơi lần đầu tiên đăng nhập cần phải cập nhật đầy đủ thông tin cá nhân. </li>
                                            <li> Họ Tên và Ngày Sinh của tài khoản sau khi đăng ký sẽ không thể thay đổi. </li>
                                        </ul>
                                        <p><b>Vòng Quay Siêu Cấp</b>
                                        </p>
                                        <ul>
                                            <li> Với 800 Kim Cương nạp tích lũy. Người chơi sẽ nhận được 1 lượt quay ở Vòng Quay Siêu Cấp tương ứng với Bậc thành viên hiện tại. </li>
                                            <li>Lượt quay sẽ được cộng dồn.</li>
                                            <li> Phần thưởng vòng quay được sẽ gửi trong vòng 5 phút sau khi quay. </li>
                                        </ul>
                                        <p><b>Quà Tặng Sinh Nhật</b>
                                        </p>
                                        <ul>
                                            <li> Với mỗi Bậc thành viên, người chơi sẽ nhận được các phần quà Sinh Nhật khác nhau </li>
                                            <li>Áp dụng cho từ Bậc Bạc trở lên.</li>
                                            <li> Vui lòng truy cập vào mục Quà Tặng Sinh Nhật khi đến tháng Sinh Nhật của mình và làm theo hướng dẫn để được nhận quà. </li>
                                            <li>Mỗi Tài khoản chỉ được nhận 1 lần duy nhất mỗi năm.</li>
                                            <li> Khách hàng phải tự nhận quà sinh nhật của riêng mình khi đến tháng Sinh nhật, hệ thống sẽ không tự động gửi </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-backdrop animated fade show" bis_skin_checked="1"></div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/chunk-vendors.af4be1be.js"></script>


</body>

</html>