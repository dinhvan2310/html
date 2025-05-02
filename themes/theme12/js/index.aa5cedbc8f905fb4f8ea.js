'use strict';
(self.webpackChunk = self.webpackChunk || []).push([
    [826],
    {
        3990: (e, t, n) => {
            n.r(t), n.d(t, { default: () => b });
            var r = n(3059),
                a = n(1561),
                o = n(3617),
                c = n(7128),
                i = n(1478);
            function s() {
                var e = (function (e, t) {
                    t || (t = e.slice(0));
                    return Object.freeze(Object.defineProperties(e, { raw: { value: Object.freeze(t) } }));
                })(['\n extend type Query {\n     getErrors: [String]! \n }\n']);
                return (
                    (s = function () {
                        return e;
                    }),
                    e
                );
            }
            const l = (0, n(4420).ZP)(s());
            const u = {
                Query: {
                    getErrors: function () {
                        return [];
                    },
                },
            };
            function p(e, t) {
                var n = Object.keys(e);
                if (Object.getOwnPropertySymbols) {
                    var r = Object.getOwnPropertySymbols(e);
                    t &&
                        (r = r.filter(function (t) {
                            return Object.getOwnPropertyDescriptor(e, t).enumerable;
                        })),
                        n.push.apply(n, r);
                }
                return n;
            }
            function h(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = null != arguments[t] ? arguments[t] : {};
                    t % 2
                        ? p(Object(n), !0).forEach(function (t) {
                              m(e, t, n[t]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n))
                        : p(Object(n)).forEach(function (t) {
                              Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t));
                          });
                }
                return e;
            }
            function m(e, t, n) {
                return (
                    t in e
                        ? Object.defineProperty(e, t, { value: n, enumerable: !0, configurable: !0, writable: !0 })
                        : (e[t] = n),
                    e
                );
            }
            const f = h(
                h(
                    {},
                    {
                        successful: 'successful',
                        fail: 'fail',
                        csrfHeaderName: 'X-CSRFToken',
                        csrfName: 'csrftoken',
                        errorMsg: { not_started: 'Sự kiện chưa bắt đầu', ended: 'Sự kiện đã kết thúc' },
                    },
                ),
                {},
                { env: 'production' },
            );
            var g = new a.h(),
                d = new o.u({ uri: '/graphql', credentials: 'include', headers: {} }),
                v = (0, i.q)(function (e) {
                    var t = e.graphQLErrors,
                        n = (e.networkError, []);
                    t &&
                        t.map(function (e) {
                            var t = e.message;
                            e.locations, e.path;
                            f.errorMsg[t] && n.push(t);
                        });
                }),
                _ = r.ApolloLink.from([v, d]);
            const b = new c.f({ link: _, cache: g, typeDefs: l, resolvers: u });
        },
        5305: (e, t, n) => {
            n.d(t, { x2: () => o, s$: () => c, HG: () => i, GI: () => l, vE: () => u });
            var r = n(5176),
                a = n.n(r);
            function o(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 'Thông báo',
                    n = '';
                switch (e) {
                    case 'NOT_LOGIN':
                        return void (window.location.href = '/user/login');
                    case 'NOT_STARTED':
                        n = 'Sự kiện chưa diễn ra!';
                        break;
                    case 'ENDED':
                        n = 'Sự kiện đã kết thúc!';
                        break;
                    case 'OWNED_ITEM':
                        n = 'Bạn đã sở hữu vật phẩm này rồi';
                        break;
                    case 'NOT_FINISHED_OR_CLAIMED':
                        n = 'Bạn chưa hoàn thành hoặc đã nhận quà của nhiệm vụ này rồi';
                        break;
                    case 'NOT_FOUND_PLAYER_ON_EXPERIMENT_SERVER':
                        n = 'Không tìm thấy người chơi trên máy chủ thử nghiệm';
                        break;
                    case 'OVER_SHOP_LIMIT':
                        n = 'Vượt quá số lượng cho phép của vật phẩm này';
                        break;
                    case 'missing_tencent_id':
                        n = 'Bạn chưa đăng ký tài khoản!';
                        break;
                    case 'mission_incomplete':
                        n = 'Hãy hoàn thành nhiệm vụ tại Máy chủ thử nghiệm để nhận quà nhé!';
                        break;
                    case 'mission_already_completed':
                        n = 'Bạn đã hoàn thành nhiệm vụ này rồi!';
                        break;
                    case 'no_account':
                        n = 'Bạn chưa đăng ký tài khoản!';
                        break;
                    case 'no_experimental_account':
                        n = 'Bạn chưa có tài khoản máy chủ thử nghiệm';
                        break;
                    case 'item_expired':
                        n = 'Vật phẩm này đã hết hạn quy đổi';
                        break;
                    case 'exchange_limit_exceeded':
                        n = 'Vật phẩm này giới hạn số lượt đổi';
                        break;
                    case 'transaction_failed':
                        n = 'Giao dịch không thể thực hiện, vui lòng thử lại sau';
                        break;
                    case 'NOT_ENOUGH_TOKEN':
                        n = 'Bạn không có đủ số token cần thiết để đổi';
                        break;
                    case 'OVER_SHOP_ALL_SERVER_LIMIT':
                        n = 'Đã đạt giới hạn toàn sự kiện, vui lòng đổi sang quà khác';
                        break;
                    default:
                        n = 'Hiện không thể thực hiện tác vụ này, vui lòng thử lại sau';
                }
                return a().fire({
                    title: '<span class="popup-alert__title">'.concat(t, '</span>'),
                    html: '\n      <div class="popup-alert__content">\n        <h5 class="popup-alert__message">'.concat(
                        n,
                        '</h5>\n      </div>\n    ',
                    ),
                    showConfirmButton: !1,
                    showCancelButton: !1,
                    showCloseButton: !0,
                    closeButtonHtml: '<img src="/img/icon-close.png" title="Đóng" />',
                    customClass: { popup: 'popup-alert popup-error' },
                    showClass: { popup: 'animate__animated animate__fadeInDown animate__faster' },
                    hideClass: { popup: 'animate__animated animate__fadeOutUp animate__faster' },
                });
            }
            function c(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : function () {},
                    r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 'Chúc mừng',
                    o = '';
                switch (e) {
                    case 'receive_reward':
                        o = 'Bạn đã nhận được<br/> '.concat(
                            t.name,
                            '.<br/> Hãy đợi vài phút để hệ thống gửi vào tài khoản bạn nhé.',
                        );
                        break;
                    default:
                        o = 'Thực hiện thao tác thành công!';
                }
                return a().fire({
                    title: '<span class="popup-alert__title">'.concat(r, '</span>'),
                    html: '\n      <div class="popup-alert__content">\n        <div class="popup-alert__message">'
                        .concat(o, '</div>\n        ')
                        .concat(
                            t.image ? '<div class="popup-alert__image"><img src="'.concat(t.image, '"/></div>') : '',
                            '\n      </div>\n    ',
                        ),
                    showConfirmButton: !1,
                    showCancelButton: !1,
                    showCloseButton: !0,
                    closeButtonHtml: '<img src="/img/icon-close.png" title="Đóng" />',
                    customClass: { popup: 'popup-alert popup-success' },
                    onClose: function () {
                        n();
                    },
                    showClass: { popup: 'animate__animated animate__fadeInDown animate__faster' },
                    hideClass: { popup: 'animate__animated animate__fadeOutUp animate__faster' },
                });
            }
            function i() {
                var e = navigator.userAgent || navigator.vendor || window.opera;
                return /windows phone/i.test(e)
                    ? 'Windows Phone'
                    : /android/i.test(e)
                    ? 'Android'
                    : /iPad|iPhone|iPod/.test(e) && !window.MSStream
                    ? 'iOS'
                    : 'unknown';
            }
            function s(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : window.location.href;
                e = e.replace(/[\[\]]/g, '\\$&');
                var n = new RegExp('[?&]' + e + '(=([^&#]*)|&|#|$)'),
                    r = n.exec(t);
                return r ? (r[2] ? decodeURIComponent(r[2].replace(/\+/g, ' ')) : '') : null;
            }
            function l() {
                return 'yes' === localStorage.getItem('ingame_browser');
            }
            function u() {
                var e = s('partition'),
                    t = s('ingame');
                ((e && e.length > 0) || (t && t.length > 0 && 'yes' === t)) &&
                    localStorage.setItem('ingame_browser', 'yes');
            }
        },
        3488: (e, t, n) => {
            var r = n(2784),
                a = (n(832), n(8316)),
                o = n(3059),
                c = n(3990),
                i = n(3557),
                s = n(9126),
                l = n.n(s),
                u = n(1863),
                p = (0, r.lazy)(function () {
                    return Promise.all([n.e(216), n.e(844)]).then(n.bind(n, 6844));
                });
            const h = [
                { path: '/', component: r.createElement(p, null) },
                { path: '/faq', component: r.createElement(p, null) },
                { path: '/auth', component: r.createElement(p, null) },
                { path: '/success', component: r.createElement(p, null) },
                { path: '/ios', component: r.createElement(p, null) },
                { path: '/apk', component: r.createElement(p, null) },
                { path: '/tin-tuc/:slug', component: r.createElement(p, null) },
            ];
            var m = n(5305);
            function f() {
                var e = (function (e, t) {
                    t || (t = e.slice(0));
                    return Object.freeze(Object.defineProperties(e, { raw: { value: Object.freeze(t) } }));
                })(['{getUser {id}}']);
                return (
                    (f = function () {
                        return e;
                    }),
                    e
                );
            }
            function g(e, t) {
                if (null == e) return {};
                var n,
                    r,
                    a = (function (e, t) {
                        if (null == e) return {};
                        var n,
                            r,
                            a = {},
                            o = Object.keys(e);
                        for (r = 0; r < o.length; r++) (n = o[r]), t.indexOf(n) >= 0 || (a[n] = e[n]);
                        return a;
                    })(e, t);
                if (Object.getOwnPropertySymbols) {
                    var o = Object.getOwnPropertySymbols(e);
                    for (r = 0; r < o.length; r++)
                        (n = o[r]),
                            t.indexOf(n) >= 0 || (Object.prototype.propertyIsEnumerable.call(e, n) && (a[n] = e[n]));
                }
                return a;
            }
            function d(e, t, n, r, a, o, c) {
                try {
                    var i = e[o](c),
                        s = i.value;
                } catch (e) {
                    return void n(e);
                }
                i.done ? t(s) : Promise.resolve(s).then(r, a);
            }
            (function () {
                var e,
                    t =
                        ((e = regeneratorRuntime.mark(function e() {
                            var t, r, a, o, c, i, s, p, h;
                            return regeneratorRuntime.wrap(
                                function (e) {
                                    for (;;)
                                        switch ((e.prev = e.next)) {
                                            case 0:
                                                if (
                                                    ((t = l().parse(location.search.slice(1))),
                                                    (r = t.access_token),
                                                    (a = t.partition),
                                                    (o = void 0 === a ? 1011 : a),
                                                    (c = g(t, ['access_token', 'partition'])),
                                                    64 !== (null == r ? void 0 : r.length))
                                                ) {
                                                    e.next = 33;
                                                    break;
                                                }
                                                if (
                                                    ((e.prev = 3),
                                                    !(
                                                        o == localStorage.getItem('partition') &&
                                                        r == localStorage.getItem('access_token') &&
                                                        Date.now() - 216e5 <= localStorage.getItem('active_token')
                                                    ))
                                                ) {
                                                    e.next = 18;
                                                    break;
                                                }
                                                return (
                                                    (e.prev = 5), (e.next = 8), Promise.resolve().then(n.bind(n, 3990))
                                                );
                                            case 8:
                                                return (
                                                    (i = e.sent),
                                                    (s = i.default),
                                                    (e.next = 12),
                                                    s.query({ query: (0, u.ZP)(f()) })
                                                );
                                            case 12:
                                                return e.abrupt('return', !0);
                                            case 15:
                                                (e.prev = 15), (e.t0 = e.catch(5)), console.error(e.t0);
                                            case 18:
                                                return (
                                                    (e.next = 20),
                                                    fetch(
                                                        '/login/callback?'.concat(
                                                            l().stringify({
                                                                ingame: !0,
                                                                access_token: r,
                                                                partition: o,
                                                            }),
                                                        ),
                                                        { redirect: 'manual' },
                                                    )
                                                );
                                            case 20:
                                                e.sent.status < 400 &&
                                                    (localStorage.setItem('partition', o),
                                                    localStorage.setItem('active_token', Date.now()),
                                                    localStorage.setItem('access_token', r),
                                                    location.reload()),
                                                    (e.next = 27);
                                                break;
                                            case 24:
                                                (e.prev = 24), (e.t1 = e.catch(3)), console.error(e.t1);
                                            case 27:
                                                return (
                                                    (e.prev = 27),
                                                    (p = location.pathname),
                                                    (h = l().stringify(c)) && (p += '?' + h),
                                                    history.replaceState(null, '', p),
                                                    e.finish(27)
                                                );
                                            case 33:
                                            case 'end':
                                                return e.stop();
                                        }
                                },
                                e,
                                null,
                                [
                                    [3, 24, 27, 33],
                                    [5, 15],
                                ],
                            );
                        })),
                        function () {
                            var t = this,
                                n = arguments;
                            return new Promise(function (r, a) {
                                var o = e.apply(t, n);
                                function c(e) {
                                    d(o, r, a, c, i, 'next', e);
                                }
                                function i(e) {
                                    d(o, r, a, c, i, 'throw', e);
                                }
                                c(void 0);
                            });
                        });
                return function () {
                    return t.apply(this, arguments);
                };
            })()();
            const v = function () {
                (0, r.useEffect)(function () {
                    (0, m.vE)();
                }, []);
                return r.createElement(
                    r.Fragment,
                    null,
                    r.createElement(
                        'main',
                        { className: 'wrapper' },
                        r.createElement(
                            r.Suspense,
                            { fallback: r.createElement(r.Fragment, null) },
                            r.createElement(
                                i.Z5,
                                null,
                                (function (e) {
                                    return e.map(function (e) {
                                        return r.createElement(i.AW, {
                                            key: e.path,
                                            path: e.path,
                                            element: e.component,
                                        });
                                    });
                                })(h),
                                r.createElement(i.AW, { path: '*', element: r.createElement(i.Fg, { to: '/' }) }),
                            ),
                        ),
                    ),
                );
            };
            var _ = n(9857);
            const b = function () {
                return r.createElement(
                    _.VK,
                    null,
                    r.createElement(
                        i.Z5,
                        null,
                        r.createElement(i.AW, { path: '/*', element: r.createElement(v, null) }),
                    ),
                );
            };
            a.render(
                r.createElement(o.ApolloProvider, { client: c.default }, r.createElement(b, null)),
                document.getElementById('root'),
            );
        },
    },
    (e) => {
        e.O(0, [216], () => {
            return (t = 3488), e((e.s = t));
            var t;
        });
        e.O();
    },
]);
