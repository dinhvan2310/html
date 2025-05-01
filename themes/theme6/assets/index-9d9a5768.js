import {
    M as j,
    r as O,
    j as i,
    a as e,
    F as K,
    s as Y,
    c as U,
    u as Z,
    b as W,
    g as oa,
    S as ta,
    d as J,
    e as da,
    f as b,
    h as ra,
    i as ua,
    k as fa,
    l as ga,
    m as ma
} from "./index-409f5d7e.js";
import "./Spinner-814413cb.js";
import {
    u as aa
} from "./useMutation-fa3c6e6f.js";
import {
    e as va,
    c as ha,
    a as Na,
    b as la,
    d as pa,
    g as w,
    S as ia,
    f as X
} from "./pagination.min-6cdc55d5.js";
j.setAppElement("#root");
const ya = ({
    lng: a,
    membership_type: L,
    gift_membership_status: r,
    modalStatus: o,
    closeModal: t
}) => {
    var M, T, $, q;
    const [g] = aa("/user/gift_membership_to_account_id"), [h, k] = O.useState(0), [E, d] = O.useState(!1), [y, C] = O.useState(""), [p, m] = O.useState(""), [c, f] = O.useState(""), [N, n] = O.useState(""), [l, u] = O.useState(""), [v, S] = O.useState(!1), G = () => {}, H = s => {
        s.preventDefault(), t()
    };
    O.useRef();
    const x = s => {
            if (s.preventDefault(), !h) return Y("Bạn vui lòng lựa chọn phương thức tặng quà"), !1;
            d(!0)
        },
        P = (s, A) => {
            if (A.preventDefault(), !y) return u("Bạn vui lòng nhập vào UID của bạn mình"), !1;
            if (v) return !1;
            S(!0), g({
                params: {
                    to_account_id: parseInt(y),
                    membership_type: s,
                    message: c
                }
            }).then(D => {
                var B;
                S(!1), (D == null ? void 0 : D.status) == ((B = U) == null ? void 0 : B.statusSuccess) && Y("Bạn đã tặng hạng VIP thành công cho bạn của mình").then(() => {
                    Z("userData", "gift_membership_status", D == null ? void 0 : D.payload), t()
                })
            })
        },
        I = (s, A) => {
            var D, B, F, V;
            if (A.preventDefault(), s == 1 && ((B = (D = r == null ? void 0 : r.single_choice_options) == null ? void 0 : D.GOLD) == null ? void 0 : B.remain) < 1) return Y("Bạn đã hết lượng tặng VIP hạng Vàng rồi"), !1;
            if (s == 2 && ((V = (F = r == null ? void 0 : r.single_choice_options) == null ? void 0 : F.PLATINUM) == null ? void 0 : V.remain) < 1) return Y("Bạn đã hết lượng tặng VIP hạng Bạch Kim rồi"), !1;
            k(s)
        },
        R = s => {
            var D, B, F, V;
            s.preventDefault();
            let A = 0;
            if (!y) return u("Bạn hãy nhập ít nhất một UID bạn của mình"), !1;
            if (v) return !1;
            if (y && A++, p && A++, A > ((B = (D = r == null ? void 0 : r.single_choice_options) == null ? void 0 : D.PLATINUM) == null ? void 0 : B.remain)) return u(`Bạn chỉ còn ${(V=(F=r==null?void 0:r.single_choice_options)==null?void 0:F.PLATINUM)==null?void 0:V.remain} lần gửi tặng`), !1;
            S(!0), g({
                params: {
                    to_account_id: parseInt(y),
                    membership_type: "GOLD",
                    message: c
                }
            }).then(z => {
                var ea;
                S(!1), (z == null ? void 0 : z.status) == ((ea = U) == null ? void 0 : ea.statusSuccess) && (p ? g({
                    params: {
                        to_account_id: parseInt(p),
                        membership_type: "GOLD",
                        message: N
                    }
                }).then(_ => {
                    var na;
                    (_ == null ? void 0 : _.status) == ((na = U) == null ? void 0 : na.statusSuccess) && Y("Bạn đã tặng hạng VIP thành công cho các bạn của mình").then(() => {
                        Z("userData", "gift_membership_status", _ == null ? void 0 : _.payload), t()
                    })
                }) : Y("Bạn đã tặng hạng VIP thành công cho bạn của mình").then(() => {
                    Z("userData", "gift_membership_status", z == null ? void 0 : z.payload), t()
                }))
            })
        };
    return i(j, {
        isOpen: o,
        onAfterOpen: G,
        onRequestClose: H,
        contentLabel: "Example Modal",
        portalClassName: "ReactModalPortal",
        overlayClassName: "",
        className: "swing-in-top-fwd modal-rule",
        children: [e("h2", {
            className: "",
            children: a == null ? void 0 : a[`title_popup_rank_${L}`]
        }), i("div", {
            className: "modal-description",
            children: [L == "DIAMOND" && e(K, {
                children: i("div", {
                    className: "row",
                    children: [i("div", {
                        className: "col-5",
                        children: [e("div", {
                            className: "rank-img rank-img--big",
                            children: e("img", {
                                src: "/images/ranks/GOLD.png",
                                alt: ""
                            })
                        }), i("p", {
                            className: "text-center",
                            children: ['Bạn có thể tặng VIP “Hạng Vàng"', e("br", {}), "cho 1 người bạn Free Fire của mình."]
                        })]
                    }), e("div", {
                        className: "col-7",
                        children: i("form", {
                            action: "",
                            onSubmit: s => P("GOLD", s),
                            children: [e("div", {
                                className: "input-control",
                                children: e("input", {
                                    value: y,
                                    type: "text",
                                    placeholder: a == null ? void 0 : a.your_friend_id,
                                    onChange: s => {
                                        C(s.target.value), u("")
                                    }
                                })
                            }), i("div", {
                                className: "input-control",
                                children: [e("textarea", {
                                    value: c,
                                    onChange: s => f(s.target.value),
                                    name: "",
                                    id: "",
                                    placeholder: a == null ? void 0 : a.message
                                }), l && e("p", {
                                    className: "text-danger text-center",
                                    children: l
                                })]
                            }), e("div", {
                                className: "text-center",
                                children: e("button", {
                                    className: "btn btn--submit",
                                    type: "submit",
                                    children: a == null ? void 0 : a.btn_send
                                })
                            })]
                        })
                    })]
                })
            }), L == "LEGENDARY" && e(K, {
                children: E ? e(K, {
                    children: h == 1 ? i(K, {
                        children: [e("p", {
                            className: "text-center",
                            children: 'Bạn sẽ tặng VIP “Hạng Vàng" cho 2 người bạn Free Fire của mình.'
                        }), e("div", {
                            className: "container",
                            children: i("form", {
                                action: "",
                                className: "row",
                                onSubmit: s => R(s),
                                children: [e("div", {
                                    className: "col-6",
                                    children: i("div", {
                                        className: "row",
                                        children: [e("div", {
                                            className: "col-5",
                                            children: e("div", {
                                                className: "rank-img rank-img--big",
                                                children: e("img", {
                                                    src: "/images/ranks/GOLD.png",
                                                    alt: ""
                                                })
                                            })
                                        }), e("div", {
                                            className: "col-7",
                                            children: i("div", {
                                                children: [e("div", {
                                                    className: "input-control",
                                                    children: e("input", {
                                                        type: "text",
                                                        value: y,
                                                        onChange: s => {
                                                            C(s.target.value), u("")
                                                        },
                                                        placeholder: "UID thứ nhất (Bắt buộc)"
                                                    })
                                                }), e("div", {
                                                    className: "input-control input-control--small",
                                                    children: e("textarea", {
                                                        name: "",
                                                        id: "",
                                                        placeholder: a == null ? void 0 : a.message
                                                    })
                                                })]
                                            })
                                        })]
                                    })
                                }), e("div", {
                                    className: "col-6",
                                    children: i("div", {
                                        className: "row",
                                        children: [e("div", {
                                            className: "col-5",
                                            children: e("div", {
                                                className: "rank-img rank-img--big",
                                                children: e("img", {
                                                    src: "/images/ranks/GOLD.png",
                                                    alt: ""
                                                })
                                            })
                                        }), e("div", {
                                            className: "col-7",
                                            children: i("div", {
                                                children: [e("div", {
                                                    className: "input-control",
                                                    children: e("input", {
                                                        type: "text",
                                                        value: p,
                                                        onChange: s => {
                                                            m(s.target.value)
                                                        },
                                                        placeholder: "UID thứ 2"
                                                    })
                                                }), e("div", {
                                                    className: "input-control input-control--small",
                                                    children: e("textarea", {
                                                        name: "",
                                                        value: N,
                                                        onChange: s => n(s.target.value),
                                                        id: "",
                                                        placeholder: a == null ? void 0 : a.message
                                                    })
                                                })]
                                            })
                                        })]
                                    })
                                }), i("div", {
                                    className: "col-12",
                                    children: [l && e("p", {
                                        className: "text-danger text-center",
                                        children: l
                                    }), e("br", {}), i("div", {
                                        className: "text-center",
                                        children: [e("button", {
                                            className: "btn btn--submit",
                                            type: "submit",
                                            children: a == null ? void 0 : a.btn_send
                                        }), "  ", e("a", {
                                            href: "#",
                                            className: "btn btn--submit grayscale",
                                            onClick: s => {
                                                s.preventDefault(), d(!1)
                                            },
                                            children: "Quay lại"
                                        })]
                                    })]
                                })]
                            })
                        })]
                    }) : e(K, {
                        children: e("div", {
                            className: "container",
                            children: i("div", {
                                className: "row",
                                children: [i("div", {
                                    className: "col-5",
                                    children: [e("div", {
                                        className: "rank-img rank-img--big",
                                        children: e("img", {
                                            src: "/images/ranks/PLATINUM.png",
                                            alt: ""
                                        })
                                    }), i("p", {
                                        className: "text-center",
                                        children: ["Bạn có thể tặng VIP", e("br", {}), ' “Hạng Bạch Kim" cho 1 người bạn Free Fire của mình.']
                                    })]
                                }), e("div", {
                                    className: "col-7",
                                    children: i("form", {
                                        action: "",
                                        onSubmit: s => P("PLATINUM", s),
                                        children: [e("div", {
                                            className: "input-control",
                                            children: e("input", {
                                                type: "text",
                                                placeholder: a == null ? void 0 : a.your_friend_id,
                                                onChange: s => {
                                                    C(s.target.value), u("")
                                                }
                                            })
                                        }), i("div", {
                                            className: "input-control",
                                            children: [e("textarea", {
                                                value: c,
                                                onChange: s => f(s.target.value),
                                                name: "",
                                                id: "",
                                                placeholder: a == null ? void 0 : a.message
                                            }), l && e("p", {
                                                className: "text-danger text-center",
                                                children: l
                                            })]
                                        }), i("div", {
                                            className: "text-center",
                                            children: [e("button", {
                                                className: "btn btn--submit",
                                                type: "submit",
                                                children: a == null ? void 0 : a.btn_send
                                            }), "  ", e("a", {
                                                href: "#",
                                                className: "btn btn--submit grayscale",
                                                onClick: s => {
                                                    s.preventDefault(), d(!1)
                                                },
                                                children: "Quay lại"
                                            })]
                                        })]
                                    })
                                })]
                            })
                        })
                    })
                }) : i(K, {
                    children: [e("p", {
                        className: "text-center",
                        children: 'Bạn có thể tặng VIP "Hạng Vàng" cho 2 người bạn hoặc tặng VIP "Hạng Bạch Kim" cho 1 người bạn Free Fire của mình'
                    }), i("div", {
                        className: "row text-center",
                        children: [i("div", {
                            className: "col-6",
                            onClick: s => I(1, s),
                            children: [i("div", {
                                className: `rank-img has-title rank-img--big${h!=1?" grayscale":""}`,
                                children: [e("img", {
                                    src: "/images/ranks/GOLD.png",
                                    alt: ""
                                }), e("span", {
                                    className: "title",
                                    children: "Hạng Vàng"
                                })]
                            }), i("a", {
                                href: "#",
                                className: `radio${h==1?" checked":""}`,
                                children: ["Cho ", (T = (M = r == null ? void 0 : r.single_choice_options) == null ? void 0 : M.GOLD) == null ? void 0 : T.remain, " người bạn"]
                            })]
                        }), i("div", {
                            className: "col-6",
                            onClick: s => I(2, s),
                            children: [i("div", {
                                className: `rank-img has-title rank-img--big${h!=2?" grayscale":""}`,
                                children: [e("img", {
                                    src: "/images/ranks/PLATINUM.png",
                                    alt: ""
                                }), e("span", {
                                    className: "title",
                                    children: "Hạng Bạch Kim"
                                })]
                            }), i("a", {
                                href: "#",
                                className: `radio${h==2?" checked":""}`,
                                children: ["Cho ", (q = ($ = r == null ? void 0 : r.single_choice_options) == null ? void 0 : $.PLATINUM) == null ? void 0 : q.remain, " người bạn"]
                            })]
                        }), i("div", {
                            className: "col-12",
                            children: [e("br", {}), e("a", {
                                href: "#",
                                className: "btn btn--submit",
                                onClick: s => x(s),
                                children: a == null ? void 0 : a.btn_send
                            })]
                        })]
                    })]
                })
            })]
        }), e("a", {
            onClick: s => H(s),
            className: "close",
            "data-dismiss": "modal",
            "aria-label": "Close",
            children: "×"
        })]
    })
};
j.setAppElement("#root");
const Ca = ({
    lng: a,
    userId: L,
    nick_name: r,
    account_id: o,
    modalStatus: t,
    closeModal: g
}) => {
    const {
        isLoadingInfo: h,
        errorInfo: k,
        data: {
            payload: E = null
        } = {},
        refetch: d
    } = W({
        queryKey: ["userInfo"],
        queryFn: () => oa(),
        enabled: !!L
    }), y = () => {}, C = v => {
        v.preventDefault(), g()
    };
    O.useRef();
    let p = E || {};
    const {
        open_id: m = "",
        name: c = "",
        birthday: f = "",
        phone_number: N = "",
        address: n = "",
        is_active: l = !1,
        create_time: u = ""
    } = p;
    return i(j, {
        isOpen: t,
        onAfterOpen: y,
        onRequestClose: C,
        contentLabel: "Example Modal",
        portalClassName: "ReactModalPortal",
        overlayClassName: "",
        className: "swing-in-top-fwd modal-rule",
        children: [e("h2", {
            children: "Thông tin cá nhân"
        }), e("br", {}), E ? i("div", {
            className: "modal-description",
            children: [e("div", {
                className: "info-line",
                children: i("div", {
                    className: "row",
                    children: [e("div", {
                        className: "col-5",
                        children: e("span", {
                            className: "text-bold",
                            children: "Tên người chơi"
                        })
                    }), e("div", {
                        className: "col-7",
                        children: r
                    })]
                })
            }), e("div", {
                className: "info-line",
                children: i("div", {
                    className: "row",
                    children: [e("div", {
                        className: "col-5",
                        children: e("span", {
                            className: "text-bold",
                            children: "UID"
                        })
                    }), e("div", {
                        className: "col-7",
                        children: o
                    })]
                })
            }), e("div", {
                className: "info-line",
                children: i("div", {
                    className: "row",
                    children: [e("div", {
                        className: "col-5",
                        children: e("span", {
                            className: "text-bold",
                            children: "Họ và tên"
                        })
                    }), e("div", {
                        className: "col-7",
                        children: c
                    })]
                })
            }), e("div", {
                className: "info-line",
                children: i("div", {
                    className: "row",
                    children: [e("div", {
                        className: "col-5",
                        children: e("span", {
                            className: "text-bold",
                            children: "Sinh nhật"
                        })
                    }), e("div", {
                        className: "col-7",
                        children: f
                    })]
                })
            }), e("div", {
                className: "info-line",
                children: i("div", {
                    className: "row",
                    children: [e("div", {
                        className: "col-5",
                        children: e("span", {
                            className: "text-bold",
                            children: "Số điện thoại"
                        })
                    }), e("div", {
                        className: "col-7",
                        children: N
                    })]
                })
            }), e("div", {
                className: "info-line",
                children: i("div", {
                    className: "row",
                    children: [e("div", {
                        className: "col-5",
                        children: e("span", {
                            className: "text-bold",
                            children: "Địa chỉ"
                        })
                    }), e("div", {
                        className: "col-7",
                        children: n
                    })]
                })
            })]
        }) : e("p", {
            className: "text-center",
            children: "Bạn vui lòng cập nhật thông tin cá nhân trên Membership Garena"
        }), e("a", {
            onClick: v => C(v),
            className: "close",
            "data-dismiss": "modal",
            "aria-label": "Close",
            children: "×"
        })]
    })
};
j.setAppElement("#root");
const xa = ({
    lng: a,
    userId: L,
    modalStatus: r,
    closeModal: o
}) => {
    const {
        isLoadingHistory: t,
        errorHistory: g,
        data: {
            payload: {
                topups: h = []
            } = {}
        } = {}
    } = W({
        queryKey: ["topupHistories"],
        queryFn: () => da(),
        enabled: !!L
    }), k = () => {}, E = d => {
        d.preventDefault(), o()
    };
    return i(j, {
        isOpen: r,
        onAfterOpen: k,
        onRequestClose: E,
        contentLabel: "Example Modal",
        portalClassName: "ReactModalPortal",
        overlayClassName: "",
        className: "swing-in-top-fwd modal-special",
        children: [e("h2", {
            children: "Lịch sử nạp"
        }), i("div", {
            className: "wrap-history",
            children: [i("div", {
                className: "row g-0 thead",
                children: [e("div", {
                    className: "col-4",
                    children: "Thời gian"
                }), e("div", {
                    className: "col-3",
                    children: "Kim cương nạp"
                }), e("div", {
                    className: "col-3",
                    children: "Kim cương tích luỹ"
                }), e("div", {
                    className: "col-2",
                    children: "Hạng VIP"
                })]
            }), e(ta, {
                style: {
                    height: "45vh"
                },
                className: "modal-scrollbar",
                noScrollX: !0,
                children: (h == null ? void 0 : h.length) > 0 ? e(K, {
                    children: h.map((d, y) => {
                        var C;
                        return i("div", {
                            className: "row g-0 tbody",
                            children: [i("div", {
                                className: "col-4",
                                children: [J((d == null ? void 0 : d.start_ts) * 1e3).format("DD/MM/YYYY"), " - ", J((d == null ? void 0 : d.end_ts) * 1e3).format("DD/MM/YYYY")]
                            }), e("div", {
                                className: "col-3",
                                children: d == null ? void 0 : d.topup
                            }), i("div", {
                                className: "col-3",
                                children: [(d == null ? void 0 : d.accumulated_diamond) - (d == null ? void 0 : d.bonus), d != null && d.bonus ? i(K, {
                                    children: ["(+", d == null ? void 0 : d.bonus, ")"]
                                }) : ""]
                            }), e("div", {
                                className: "col-2",
                                children: d != null && d.membership_type ? i("div", {
                                    className: "has-title",
                                    children: [e("img", {
                                        src: `/images/ranks/${d==null?void 0:d.membership_type}.png`,
                                        alt: "",
                                        className: "icon-rank"
                                    }), e("span", {
                                        className: "title",
                                        children: (C = U) == null ? void 0 : C.rankMap[d == null ? void 0 : d.membership_type]
                                    })]
                                }) : e(K, {})
                            })]
                        }, y)
                    })
                }) : e("p", {
                    className: "text-center",
                    children: "Chưa có lịch sử"
                })
            })]
        }), e("a", {
            onClick: d => E(d),
            className: "close",
            "data-dismiss": "modal",
            "aria-label": "Close",
            children: "×"
        })]
    })
};
j.setAppElement("#root");
const La = ({
    modalStatus: a,
    closeModal: L
}) => {
    const {
        isLoadingSpecialDay: r,
        errorSpecialDay: o,
        data: {
            payload: {
                convertable_user_topup: t = 0,
                gem_bonus: g = 0,
                special_day_config: h = {},
                claimed_gem: k = 0
            } = {}
        } = {}
    } = W({
        queryKey: ["userSpecialDay"],
        queryFn: () => ra()
    }), [E] = aa("/user/claim_special_day_gem_bonus"), [d, y] = O.useState(!1), C = () => {}, p = c => {
        c.preventDefault(), L()
    };
    O.useRef();
    const m = c => {
        if (c.preventDefault(), !g || d) return !1;
        y(!0), E({
            cacheKey: ["userSpecialDay"],
            cacheReplace: !0,
            params: {
                gem_bonus: parseInt(g)
            }
        }).then(f => {
            var N;
            y(!1), (f == null ? void 0 : f.status) == ((N = U) == null ? void 0 : N.statusSuccess) && Y(`Bạn đã nhận thành công ${b(g)} <img src="/images/gem.png" alt="" class="icon-gem icon-gem--medium" />`)
        })
    };
    return i(j, {
        isOpen: a,
        onAfterOpen: C,
        onRequestClose: p,
        contentLabel: "Example Modal",
        portalClassName: "ReactModalPortal",
        overlayClassName: "",
        className: "swing-in-top-fwd modal-benefit",
        children: [i("div", {
            className: "title-special text-gradient",
            children: ["nhận thêm ", h == null ? void 0 : h.bonus_gem_percent, "% KIM CƯƠNG NẠP HÔM NAY", i("em", {
                children: ["nhận thêm ", h == null ? void 0 : h.bonus_gem_percent, "% KIM CƯƠNG NẠP HÔM NAY"]
            })]
        }), e("div", {
            className: "modal-description",
            children: i("div", {
                className: "container",
                children: [i("div", {
                    className: "row text-center",
                    children: [i("div", {
                        className: "col-8 pr",
                        children: [e("img", {
                            src: "/images/gems.png",
                            alt: "",
                            className: "gems"
                        }), i("div", {
                            className: "benefit-content",
                            children: [e("div", {
                                className: "text-large",
                                children: "Kim cương được tính ưu đãi"
                            }), i("div", {
                                className: "text-gradient big-num",
                                children: [b(t), " ", e("em", {
                                    children: b(t)
                                })]
                            })]
                        }), e("div", {
                            className: "border-col"
                        })]
                    }), i("div", {
                        className: "col-4",
                        children: [e("div", {
                            className: "text-large",
                            children: "Kim cương nhận thêm"
                        }), i("div", {
                            className: "text-gradient big-num",
                            children: ["+", b(g), " ", i("em", {
                                children: ["+", b(g)]
                            })]
                        }), e("br", {}), e("br", {}), e("a", {
                            href: "#",
                            className: `btn${g==0?" grayscale":""}`,
                            onClick: c => m(c),
                            children: e("span", {
                                children: "Nhận"
                            })
                        })]
                    })]
                }), i("p", {
                    className: "benefit-balance",
                    children: ["*TỔNG KIM CƯƠNG ƯU ĐÃI ĐÃ NHẬN: ", b(k)]
                })]
            })
        }), e("a", {
            onClick: c => p(c),
            className: "close",
            "data-dismiss": "modal",
            "aria-label": "Close",
            children: "×"
        })]
    })
};

function ca(a, L, r, o) {
    return a.params.createElements && Object.keys(o).forEach(t => {
        if (!r[t] && r.auto === !0) {
            let g = va(a.el, `.${o[t]}`)[0];
            g || (g = ha("div", o[t]), g.className = o[t], a.el.append(g)), r[t] = g, L[t] = g
        }
    }), r
}

function ka({
    swiper: a,
    extendParams: L,
    on: r,
    emit: o
}) {
    L({
        navigation: {
            nextEl: null,
            prevEl: null,
            hideOnClick: !1,
            disabledClass: "swiper-button-disabled",
            hiddenClass: "swiper-button-hidden",
            lockClass: "swiper-button-lock",
            navigationDisabledClass: "swiper-navigation-disabled"
        }
    }), a.navigation = {
        nextEl: null,
        prevEl: null
    };
    const t = c => (Array.isArray(c) || (c = [c].filter(f => !!f)), c);

    function g(c) {
        let f;
        return c && typeof c == "string" && a.isElement && (f = a.el.shadowRoot.querySelector(c), f) ? f : (c && (typeof c == "string" && (f = [...document.querySelectorAll(c)]), a.params.uniqueNavElements && typeof c == "string" && f.length > 1 && a.el.querySelectorAll(c).length === 1 && (f = a.el.querySelector(c))), c && !f ? c : f)
    }

    function h(c, f) {
        const N = a.params.navigation;
        c = t(c), c.forEach(n => {
            n && (n.classList[f ? "add" : "remove"](...N.disabledClass.split(" ")), n.tagName === "BUTTON" && (n.disabled = f), a.params.watchOverflow && a.enabled && n.classList[a.isLocked ? "add" : "remove"](N.lockClass))
        })
    }

    function k() {
        const {
            nextEl: c,
            prevEl: f
        } = a.navigation;
        if (a.params.loop) {
            h(f, !1), h(c, !1);
            return
        }
        h(f, a.isBeginning && !a.params.rewind), h(c, a.isEnd && !a.params.rewind)
    }

    function E(c) {
        c.preventDefault(), !(a.isBeginning && !a.params.loop && !a.params.rewind) && (a.slidePrev(), o("navigationPrev"))
    }

    function d(c) {
        c.preventDefault(), !(a.isEnd && !a.params.loop && !a.params.rewind) && (a.slideNext(), o("navigationNext"))
    }

    function y() {
        const c = a.params.navigation;
        if (a.params.navigation = ca(a, a.originalParams.navigation, a.params.navigation, {
                nextEl: "swiper-button-next",
                prevEl: "swiper-button-prev"
            }), !(c.nextEl || c.prevEl)) return;
        let f = g(c.nextEl),
            N = g(c.prevEl);
        Object.assign(a.navigation, {
            nextEl: f,
            prevEl: N
        }), f = t(f), N = t(N);
        const n = (l, u) => {
            l && l.addEventListener("click", u === "next" ? d : E), !a.enabled && l && l.classList.add(...c.lockClass.split(" "))
        };
        f.forEach(l => n(l, "next")), N.forEach(l => n(l, "prev"))
    }

    function C() {
        let {
            nextEl: c,
            prevEl: f
        } = a.navigation;
        c = t(c), f = t(f);
        const N = (n, l) => {
            n.removeEventListener("click", l === "next" ? d : E), n.classList.remove(...a.params.navigation.disabledClass.split(" "))
        };
        c.forEach(n => N(n, "next")), f.forEach(n => N(n, "prev"))
    }
    r("init", () => {
        a.params.navigation.enabled === !1 ? m() : (y(), k())
    }), r("toEdge fromEdge lock unlock", () => {
        k()
    }), r("destroy", () => {
        C()
    }), r("enable disable", () => {
        let {
            nextEl: c,
            prevEl: f
        } = a.navigation;
        c = t(c), f = t(f), [...c, ...f].filter(N => !!N).forEach(N => N.classList[a.enabled ? "remove" : "add"](a.params.navigation.lockClass))
    }), r("click", (c, f) => {
        let {
            nextEl: N,
            prevEl: n
        } = a.navigation;
        N = t(N), n = t(n);
        const l = f.target;
        if (a.params.navigation.hideOnClick && !n.includes(l) && !N.includes(l)) {
            if (a.pagination && a.params.pagination && a.params.pagination.clickable && (a.pagination.el === l || a.pagination.el.contains(l))) return;
            let u;
            N.length ? u = N[0].classList.contains(a.params.navigation.hiddenClass) : n.length && (u = n[0].classList.contains(a.params.navigation.hiddenClass)), o(u === !0 ? "navigationShow" : "navigationHide"), [...N, ...n].filter(v => !!v).forEach(v => v.classList.toggle(a.params.navigation.hiddenClass))
        }
    });
    const p = () => {
            a.el.classList.remove(...a.params.navigation.navigationDisabledClass.split(" ")), y(), k()
        },
        m = () => {
            a.el.classList.add(...a.params.navigation.navigationDisabledClass.split(" ")), C()
        };
    Object.assign(a.navigation, {
        enable: p,
        disable: m,
        update: k,
        init: y,
        destroy: C
    })
}

function Q(a = "") {
    return `.${a.trim().replace(/([\.:!+\/])/g,"\\$1").replace(/ /g,".")}`
}

function sa({
    swiper: a,
    extendParams: L,
    on: r,
    emit: o
}) {
    const t = "swiper-pagination";
    L({
        pagination: {
            el: null,
            bulletElement: "span",
            clickable: !1,
            hideOnClick: !1,
            renderBullet: null,
            renderProgressbar: null,
            renderFraction: null,
            renderCustom: null,
            progressbarOpposite: !1,
            type: "bullets",
            dynamicBullets: !1,
            dynamicMainBullets: 1,
            formatFractionCurrent: n => n,
            formatFractionTotal: n => n,
            bulletClass: `${t}-bullet`,
            bulletActiveClass: `${t}-bullet-active`,
            modifierClass: `${t}-`,
            currentClass: `${t}-current`,
            totalClass: `${t}-total`,
            hiddenClass: `${t}-hidden`,
            progressbarFillClass: `${t}-progressbar-fill`,
            progressbarOppositeClass: `${t}-progressbar-opposite`,
            clickableClass: `${t}-clickable`,
            lockClass: `${t}-lock`,
            horizontalClass: `${t}-horizontal`,
            verticalClass: `${t}-vertical`,
            paginationDisabledClass: `${t}-disabled`
        }
    }), a.pagination = {
        el: null,
        bullets: []
    };
    let g, h = 0;
    const k = n => (Array.isArray(n) || (n = [n].filter(l => !!l)), n);

    function E() {
        return !a.params.pagination.el || !a.pagination.el || Array.isArray(a.pagination.el) && a.pagination.el.length === 0
    }

    function d(n, l) {
        const {
            bulletActiveClass: u
        } = a.params.pagination;
        n && (n = n[`${l==="prev"?"previous":"next"}ElementSibling`], n && (n.classList.add(`${u}-${l}`), n = n[`${l==="prev"?"previous":"next"}ElementSibling`], n && n.classList.add(`${u}-${l}-${l}`)))
    }

    function y(n) {
        const l = n.target.closest(Q(a.params.pagination.bulletClass));
        if (!l) return;
        n.preventDefault();
        const u = la(l) * a.params.slidesPerGroup;
        if (a.params.loop) {
            if (a.realIndex === u) return;
            const v = a.getSlideIndexByData(u),
                S = a.getSlideIndexByData(a.realIndex);
            v > a.slides.length - a.loopedSlides && a.loopFix({
                direction: v > S ? "next" : "prev",
                activeSlideIndex: v,
                slideTo: !1
            }), a.slideToLoop(u)
        } else a.slideTo(u)
    }

    function C() {
        const n = a.rtl,
            l = a.params.pagination;
        if (E()) return;
        let u = a.pagination.el;
        u = k(u);
        let v, S;
        const G = a.virtual && a.params.virtual.enabled ? a.virtual.slides.length : a.slides.length,
            H = a.params.loop ? Math.ceil(G / a.params.slidesPerGroup) : a.snapGrid.length;
        if (a.params.loop ? (S = a.previousRealIndex || 0, v = a.params.slidesPerGroup > 1 ? Math.floor(a.realIndex / a.params.slidesPerGroup) : a.realIndex) : typeof a.snapIndex != "undefined" ? (v = a.snapIndex, S = a.previousSnapIndex) : (S = a.previousIndex || 0, v = a.activeIndex || 0), l.type === "bullets" && a.pagination.bullets && a.pagination.bullets.length > 0) {
            const x = a.pagination.bullets;
            let P, I, R;
            if (l.dynamicBullets && (g = Na(x[0], a.isHorizontal() ? "width" : "height", !0), u.forEach(M => {
                    M.style[a.isHorizontal() ? "width" : "height"] = `${g*(l.dynamicMainBullets+4)}px`
                }), l.dynamicMainBullets > 1 && S !== void 0 && (h += v - (S || 0), h > l.dynamicMainBullets - 1 ? h = l.dynamicMainBullets - 1 : h < 0 && (h = 0)), P = Math.max(v - h, 0), I = P + (Math.min(x.length, l.dynamicMainBullets) - 1), R = (I + P) / 2), x.forEach(M => {
                    const T = [...["", "-next", "-next-next", "-prev", "-prev-prev", "-main"].map($ => `${l.bulletActiveClass}${$}`)].map($ => typeof $ == "string" && $.includes(" ") ? $.split(" ") : $).flat();
                    M.classList.remove(...T)
                }), u.length > 1) x.forEach(M => {
                const T = la(M);
                T === v && M.classList.add(...l.bulletActiveClass.split(" ")), l.dynamicBullets && (T >= P && T <= I && M.classList.add(...`${l.bulletActiveClass}-main`.split(" ")), T === P && d(M, "prev"), T === I && d(M, "next"))
            });
            else {
                const M = x[v];
                if (M && M.classList.add(...l.bulletActiveClass.split(" ")), l.dynamicBullets) {
                    const T = x[P],
                        $ = x[I];
                    for (let q = P; q <= I; q += 1) x[q] && x[q].classList.add(...`${l.bulletActiveClass}-main`.split(" "));
                    d(T, "prev"), d($, "next")
                }
            }
            if (l.dynamicBullets) {
                const M = Math.min(x.length, l.dynamicMainBullets + 4),
                    T = (g * M - g) / 2 - R * g,
                    $ = n ? "right" : "left";
                x.forEach(q => {
                    q.style[a.isHorizontal() ? $ : "top"] = `${T}px`
                })
            }
        }
        u.forEach((x, P) => {
            if (l.type === "fraction" && (x.querySelectorAll(Q(l.currentClass)).forEach(I => {
                    I.textContent = l.formatFractionCurrent(v + 1)
                }), x.querySelectorAll(Q(l.totalClass)).forEach(I => {
                    I.textContent = l.formatFractionTotal(H)
                })), l.type === "progressbar") {
                let I;
                l.progressbarOpposite ? I = a.isHorizontal() ? "vertical" : "horizontal" : I = a.isHorizontal() ? "horizontal" : "vertical";
                const R = (v + 1) / H;
                let M = 1,
                    T = 1;
                I === "horizontal" ? M = R : T = R, x.querySelectorAll(Q(l.progressbarFillClass)).forEach($ => {
                    $.style.transform = `translate3d(0,0,0) scaleX(${M}) scaleY(${T})`, $.style.transitionDuration = `${a.params.speed}ms`
                })
            }
            l.type === "custom" && l.renderCustom ? (x.innerHTML = l.renderCustom(a, v + 1, H), P === 0 && o("paginationRender", x)) : (P === 0 && o("paginationRender", x), o("paginationUpdate", x)), a.params.watchOverflow && a.enabled && x.classList[a.isLocked ? "add" : "remove"](l.lockClass)
        })
    }

    function p() {
        const n = a.params.pagination;
        if (E()) return;
        const l = a.virtual && a.params.virtual.enabled ? a.virtual.slides.length : a.slides.length;
        let u = a.pagination.el;
        u = k(u);
        let v = "";
        if (n.type === "bullets") {
            let S = a.params.loop ? Math.ceil(l / a.params.slidesPerGroup) : a.snapGrid.length;
            a.params.freeMode && a.params.freeMode.enabled && S > l && (S = l);
            for (let G = 0; G < S; G += 1) n.renderBullet ? v += n.renderBullet.call(a, G, n.bulletClass) : v += `<${n.bulletElement} class="${n.bulletClass}"></${n.bulletElement}>`
        }
        n.type === "fraction" && (n.renderFraction ? v = n.renderFraction.call(a, n.currentClass, n.totalClass) : v = `<span class="${n.currentClass}"></span> / <span class="${n.totalClass}"></span>`), n.type === "progressbar" && (n.renderProgressbar ? v = n.renderProgressbar.call(a, n.progressbarFillClass) : v = `<span class="${n.progressbarFillClass}"></span>`), a.pagination.bullets = [], u.forEach(S => {
            n.type !== "custom" && (S.innerHTML = v || ""), n.type === "bullets" && a.pagination.bullets.push(...S.querySelectorAll(Q(n.bulletClass)))
        }), n.type !== "custom" && o("paginationRender", u[0])
    }

    function m() {
        a.params.pagination = ca(a, a.originalParams.pagination, a.params.pagination, {
            el: "swiper-pagination"
        });
        const n = a.params.pagination;
        if (!n.el) return;
        let l;
        typeof n.el == "string" && a.isElement && (l = a.el.shadowRoot.querySelector(n.el)), !l && typeof n.el == "string" && (l = [...document.querySelectorAll(n.el)]), l || (l = n.el), !(!l || l.length === 0) && (a.params.uniqueNavElements && typeof n.el == "string" && Array.isArray(l) && l.length > 1 && (l = [...a.el.querySelectorAll(n.el)], l.length > 1 && (l = l.filter(u => pa(u, ".swiper")[0] === a.el)[0])), Array.isArray(l) && l.length === 1 && (l = l[0]), Object.assign(a.pagination, {
            el: l
        }), l = k(l), l.forEach(u => {
            n.type === "bullets" && n.clickable && u.classList.add(n.clickableClass), u.classList.add(n.modifierClass + n.type), u.classList.add(a.isHorizontal() ? n.horizontalClass : n.verticalClass), n.type === "bullets" && n.dynamicBullets && (u.classList.add(`${n.modifierClass}${n.type}-dynamic`), h = 0, n.dynamicMainBullets < 1 && (n.dynamicMainBullets = 1)), n.type === "progressbar" && n.progressbarOpposite && u.classList.add(n.progressbarOppositeClass), n.clickable && u.addEventListener("click", y), a.enabled || u.classList.add(n.lockClass)
        }))
    }

    function c() {
        const n = a.params.pagination;
        if (E()) return;
        let l = a.pagination.el;
        l && (l = k(l), l.forEach(u => {
            u.classList.remove(n.hiddenClass), u.classList.remove(n.modifierClass + n.type), u.classList.remove(a.isHorizontal() ? n.horizontalClass : n.verticalClass), n.clickable && u.removeEventListener("click", y)
        })), a.pagination.bullets && a.pagination.bullets.forEach(u => u.classList.remove(...n.bulletActiveClass.split(" ")))
    }
    r("changeDirection", () => {
        if (!a.pagination || !a.pagination.el) return;
        const n = a.params.pagination;
        let {
            el: l
        } = a.pagination;
        l = k(l), l.forEach(u => {
            u.classList.remove(n.horizontalClass, n.verticalClass), u.classList.add(a.isHorizontal() ? n.horizontalClass : n.verticalClass)
        })
    }), r("init", () => {
        a.params.pagination.enabled === !1 ? N() : (m(), p(), C())
    }), r("activeIndexChange", () => {
        typeof a.snapIndex == "undefined" && C()
    }), r("snapIndexChange", () => {
        C()
    }), r("snapGridLengthChange", () => {
        p(), C()
    }), r("destroy", () => {
        c()
    }), r("enable disable", () => {
        let {
            el: n
        } = a.pagination;
        n && (n = k(n), n.forEach(l => l.classList[a.enabled ? "remove" : "add"](a.params.pagination.lockClass)))
    }), r("lock unlock", () => {
        C()
    }), r("click", (n, l) => {
        const u = l.target;
        let {
            el: v
        } = a.pagination;
        if (Array.isArray(v) || (v = [v].filter(S => !!S)), a.params.pagination.el && a.params.pagination.hideOnClick && v && v.length > 0 && !u.classList.contains(a.params.pagination.bulletClass)) {
            if (a.navigation && (a.navigation.nextEl && u === a.navigation.nextEl || a.navigation.prevEl && u === a.navigation.prevEl)) return;
            const S = v[0].classList.contains(a.params.pagination.hiddenClass);
            o(S === !0 ? "paginationShow" : "paginationHide"), v.forEach(G => G.classList.toggle(a.params.pagination.hiddenClass))
        }
    });
    const f = () => {
            a.el.classList.remove(a.params.pagination.paginationDisabledClass);
            let {
                el: n
            } = a.pagination;
            n && (n = k(n), n.forEach(l => l.classList.remove(a.params.pagination.paginationDisabledClass))), m(), p(), C()
        },
        N = () => {
            a.el.classList.add(a.params.pagination.paginationDisabledClass);
            let {
                el: n
            } = a.pagination;
            n && (n = k(n), n.forEach(l => l.classList.add(a.params.pagination.paginationDisabledClass))), c()
        };
    Object.assign(a.pagination, {
        enable: f,
        disable: N,
        render: p,
        update: C,
        init: m,
        destroy: c
    })
}

function Sa({
    swiper: a,
    extendParams: L,
    on: r,
    emit: o,
    params: t
}) {
    a.autoplay = {
        running: !1,
        paused: !1,
        timeLeft: 0
    }, L({
        autoplay: {
            enabled: !1,
            delay: 3e3,
            waitForTransition: !0,
            disableOnInteraction: !0,
            stopOnLastSlide: !1,
            reverseDirection: !1,
            pauseOnMouseEnter: !1
        }
    });
    let g, h, k = t && t.autoplay ? t.autoplay.delay : 3e3,
        E = t && t.autoplay ? t.autoplay.delay : 3e3,
        d, y = new Date().getTime,
        C, p, m, c, f, N;

    function n(s) {
        !a || a.destroyed || !a.wrapperEl || s.target === a.wrapperEl && (a.wrapperEl.removeEventListener("transitionend", n), x())
    }
    const l = () => {
            if (a.destroyed || !a.autoplay.running) return;
            a.autoplay.paused ? C = !0 : C && (E = d, C = !1);
            const s = a.autoplay.paused ? d : y + E - new Date().getTime();
            a.autoplay.timeLeft = s, o("autoplayTimeLeft", s, s / k), h = requestAnimationFrame(() => {
                l()
            })
        },
        u = () => {
            let s;
            return a.virtual && a.params.virtual.enabled ? s = a.slides.filter(D => D.classList.contains("swiper-slide-active"))[0] : s = a.slides[a.activeIndex], s ? parseInt(s.getAttribute("data-swiper-autoplay"), 10) : void 0
        },
        v = s => {
            if (a.destroyed || !a.autoplay.running) return;
            cancelAnimationFrame(h), l();
            let A = typeof s == "undefined" ? a.params.autoplay.delay : s;
            k = a.params.autoplay.delay, E = a.params.autoplay.delay;
            const D = u();
            !Number.isNaN(D) && D > 0 && typeof s == "undefined" && (A = D, k = D, E = D), d = A;
            const B = a.params.speed,
                F = () => {
                    !a || a.destroyed || (a.params.autoplay.reverseDirection ? !a.isBeginning || a.params.loop || a.params.rewind ? (a.slidePrev(B, !0, !0), o("autoplay")) : a.params.autoplay.stopOnLastSlide || (a.slideTo(a.slides.length - 1, B, !0, !0), o("autoplay")) : !a.isEnd || a.params.loop || a.params.rewind ? (a.slideNext(B, !0, !0), o("autoplay")) : a.params.autoplay.stopOnLastSlide || (a.slideTo(0, B, !0, !0), o("autoplay")), a.params.cssMode && (y = new Date().getTime(), requestAnimationFrame(() => {
                        v()
                    })))
                };
            return A > 0 ? (clearTimeout(g), g = setTimeout(() => {
                F()
            }, A)) : requestAnimationFrame(() => {
                F()
            }), A
        },
        S = () => {
            a.autoplay.running = !0, v(), o("autoplayStart")
        },
        G = () => {
            a.autoplay.running = !1, clearTimeout(g), cancelAnimationFrame(h), o("autoplayStop")
        },
        H = (s, A) => {
            if (a.destroyed || !a.autoplay.running) return;
            clearTimeout(g), s || (N = !0);
            const D = () => {
                o("autoplayPause"), a.params.autoplay.waitForTransition ? a.wrapperEl.addEventListener("transitionend", n) : x()
            };
            if (a.autoplay.paused = !0, A) {
                f && (d = a.params.autoplay.delay), f = !1, D();
                return
            }
            d = (d || a.params.autoplay.delay) - (new Date().getTime() - y), !(a.isEnd && d < 0 && !a.params.loop) && (d < 0 && (d = 0), D())
        },
        x = () => {
            a.isEnd && d < 0 && !a.params.loop || a.destroyed || !a.autoplay.running || (y = new Date().getTime(), N ? (N = !1, v(d)) : v(), a.autoplay.paused = !1, o("autoplayResume"))
        },
        P = () => {
            if (a.destroyed || !a.autoplay.running) return;
            const s = w();
            s.visibilityState === "hidden" && (N = !0, H(!0)), s.visibilityState === "visible" && x()
        },
        I = s => {
            s.pointerType === "mouse" && (N = !0, H(!0))
        },
        R = s => {
            s.pointerType === "mouse" && a.autoplay.paused && x()
        },
        M = () => {
            a.params.autoplay.pauseOnMouseEnter && (a.el.addEventListener("pointerenter", I), a.el.addEventListener("pointerleave", R))
        },
        T = () => {
            a.el.removeEventListener("pointerenter", I), a.el.removeEventListener("pointerleave", R)
        },
        $ = () => {
            w().addEventListener("visibilitychange", P)
        },
        q = () => {
            w().removeEventListener("visibilitychange", P)
        };
    r("init", () => {
        a.params.autoplay.enabled && (M(), $(), y = new Date().getTime(), S())
    }), r("destroy", () => {
        T(), q(), a.autoplay.running && G()
    }), r("beforeTransitionStart", (s, A, D) => {
        a.destroyed || !a.autoplay.running || (D || !a.params.autoplay.disableOnInteraction ? H(!0, !0) : G())
    }), r("sliderFirstMove", () => {
        if (!(a.destroyed || !a.autoplay.running)) {
            if (a.params.autoplay.disableOnInteraction) {
                G();
                return
            }
            p = !0, m = !1, N = !1, c = setTimeout(() => {
                N = !0, m = !0, H(!0)
            }, 200)
        }
    }), r("touchEnd", () => {
        if (!(a.destroyed || !a.autoplay.running || !p)) {
            if (clearTimeout(c), clearTimeout(g), a.params.autoplay.disableOnInteraction) {
                m = !1, p = !1;
                return
            }
            m && a.params.cssMode && x(), m = !1, p = !1
        }
    }), r("slideChange", () => {
        a.destroyed || !a.autoplay.running || (f = !0)
    }), Object.assign(a.autoplay, {
        start: S,
        stop: G,
        pause: H,
        resume: x
    })
}
const Ea = ({
        membership_type: a,
        accumulated_diamond: L,
        available_converted_score: r
    }) => {
        var o, t, g, h;
        return e(K, {
            children: i("div", {
                className: "rank-balance",
                children: [e("div", {
                    className: "rank-image",
                    children: e("img", {
                        src: `/images/ranks/${a||"UNRANK"}.png`,
                        alt: ""
                    })
                }), e("div", {
                    className: "rank-name",
                    children: i("span", {
                        className: "text-gradient text-gradient--silver",
                        children: [(t = (o = U) == null ? void 0 : o.rankMap) == null ? void 0 : t[a], " ", e("em", {
                            children: (h = (g = U) == null ? void 0 : g.rankMap) == null ? void 0 : h[a]
                        })]
                    })
                }), e("div", {
                    className: "gem-accumulate",
                    children: b(L)
                }), e("div", {
                    className: "gem-exchanging",
                    children: b(r)
                })]
            })
        })
    },
    Da = ({
        membership_type: a,
        in_special_day: L,
        can_access_to_exclusive_store: r,
        gift_membership_status: o,
        setModalGiftStatus: t,
        setModalBenefitStatus: g
    }) => {
        let h = ua();
        return e(K, {
            children: e("div", {
                className: "home-slider",
                children: e("div", {
                    className: "container",
                    children: e("div", {
                        className: "row",
                        children: i("div", {
                            className: "col-12",
                            children: [i(ia, {
                                modules: [Sa, sa],
                                autoplay: {
                                    delay: 5e3,
                                    disableOnInteraction: !0
                                },
                                pagination: {
                                    clickable: !0,
                                    el: ".slide__pagination"
                                },
                                children: [L && e(X, {
                                    children: i("div", {
                                        className: "slide",
                                        onClick: () => g(!0),
                                        children: [e("img", {
                                            src: "/images/slide-benefit.jpg",
                                            alt: "",
                                            className: "slide__img"
                                        }), e("span", {
                                            className: "slide__title",
                                            children: "Click xem ưu đãi kim cương dành riêng cho bạn"
                                        })]
                                    })
                                }), r && e(X, {
                                    children: i("div", {
                                        className: "slide",
                                        onClick: () => h("/exclusive"),
                                        children: [e("img", {
                                            src: "/images/slide-exclusive.jpg",
                                            alt: "",
                                            className: "slide__img"
                                        }), e("span", {
                                            className: "slide__title",
                                            children: "Xem ngay cửa hàng độc quyền"
                                        })]
                                    })
                                }), (a == "DIAMOND" || a == "LEGENDARY") && e(X, {
                                    children: i("div", {
                                        className: "slide",
                                        onClick: () => {
                                            if (!(o != null && o.can_gift_membership)) {
                                                Y("Bạn đã hết lượt tặng hạng vip cho bạn của mình rồi");
                                                return
                                            }
                                            t(!0)
                                        },
                                        children: [e("img", {
                                            src: "/images/slide-gift.jpg",
                                            alt: "",
                                            className: "slide__img"
                                        }), e("span", {
                                            className: "slide__title",
                                            children: a == "DIAMOND" ? "Tặng bạn bè VIP hạng VÀNG" : "Tặng bạn bè VIP hạng Bạch kim hoặc hạng VÀNG"
                                        })]
                                    })
                                }), e(X, {
                                    children: i("div", {
                                        className: "slide",
                                        onClick: () => h("/info"),
                                        children: [e("img", {
                                            src: "/images/slide.jpg",
                                            alt: "",
                                            className: "slide__img"
                                        }), e("span", {
                                            className: "slide__title",
                                            children: "Quyền lợi các hạng vip"
                                        })]
                                    })
                                })]
                            }), e("div", {
                                className: "slide__pagination"
                            })]
                        })
                    })
                })
            })
        })
    };
const Ma = ({
        params: a,
        memberships: L,
        membership_type: r,
        membership_topup_deals: o,
        currentMembershipIndex: t,
        setCurrentMembershipIndex: g
    }) => {
        var C, p;
        const [h] = aa("/user/claim_membership_topup_bonus"), [k, E] = O.useState(!1), d = (p = a == null ? void 0 : a[`membership_benefits_${(C=L==null?void 0:L[t])==null?void 0:C[0]}`]) == null ? void 0 : p.split("|"), y = (m, c) => {
            if (c.preventDefault(), k || m != null && m.claimed) return !1;
            E(!0), h({
                cacheKey: ["userData"],
                params: {
                    year: parseInt(m == null ? void 0 : m.year),
                    month: parseInt(m == null ? void 0 : m.month)
                }
            }).then(f => {
                var N;
                E(!1), (f == null ? void 0 : f.status) == ((N = U) == null ? void 0 : N.statusSuccess) && Y(`Bạn nhận được ${m==null?void 0:m.accumulated_diamond} <img src="/images/gem.png" alt="" class="icon-gem icon-gem--small" /> tích luỹ`)
            })
        };
        return e(K, {
            children: i("div", {
                className: "home-list",
                children: [(L == null ? void 0 : L.length) > 0 && e(ia, {
                    modules: [sa, ka],
                    pagination: {
                        clickable: !0
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev"
                    },
                    allowTouchMove: !1,
                    noSwiping: !1,
                    onSlideChange: m => {
                        g(m.realIndex)
                    },
                    children: (r != "LEGENDARY" ? [...L].slice(0, -1) : L).map((m, c) => e(X, {
                        children: e(ta, {
                            style: {
                                height: "45vh"
                            },
                            className: `list-scrollbar${(o==null?void 0:o.length)>0?" list-scrollbar--short":""}`,
                            children: !!(d != null && d.length) && d.map((f, N) => e("div", {
                                className: "line",
                                children: f
                            }, N))
                        })
                    }, c))
                }), e("a", {
                    href: "#",
                    className: "swiper-button-next",
                    children: " "
                }), e("a", {
                    href: "#",
                    className: "swiper-button-prev",
                    children: " "
                }), !!(o != null && o.length) && e("div", {
                    className: "accumulate-bonus",
                    children: e("div", {
                        className: "container",
                        children: e("div", {
                            className: "row",
                            children: o.map((m, c) => i("div", {
                                className: "col-4",
                                children: [i("h3", {
                                    children: ["NẠP KIM CƯƠNG", e("br", {}), "TRONG THÁNG ", m == null ? void 0 : m.month]
                                }), i("a", {
                                    onClick: f => y(m, f),
                                    href: "#",
                                    className: `accumulate-cover${m!=null&&m.claimed?" grayscale":""}`,
                                    children: [i("span", {
                                        children: ["+", b(m == null ? void 0 : m.accumulated_diamond), " ", e("img", {
                                            src: "/images/gem.png",
                                            alt: "",
                                            className: "icon-gem icon-gem--medium"
                                        })]
                                    }), i("em", {
                                        children: ["Tích luỹ", (m == null ? void 0 : m.claimed) && "(Đã nhận)"]
                                    })]
                                })]
                            }, c))
                        })
                    })
                })]
            })
        })
    },
    Ia = ({
        lng: a,
        userId: L,
        delta: r,
        membership: o,
        memberships: t,
        currentMembershipIndex: g,
        accumulated_diamond: h
    }) => {
        var l, u, v, S, G, H, x, P, I, R, M, T, $, q, s;
        const k = !!((o == null ? void 0 : o.membership_type) == "LEGENDARY" || g == 0 && o && J(o == null ? void 0 : o.to_dt).diff(J().add(r, "ms"), "d") <= 7),
            {
                isLoadingExpiredGem: E,
                errorExpiredGem: d,
                data: {
                    payload: {
                        accumulated_diamond_when_membership_expire: y = 0
                    } = {}
                } = {}
            } = W({
                queryKey: ["keepingGem"],
                queryFn: () => fa(),
                enabled: k
            });
        let C = ((l = U) == null ? void 0 : l.rankMap[o == null ? void 0 : o.membership_type]) || "Chưa có hạng",
            p = k && y < ((u = t == null ? void 0 : t[g]) == null ? void 0 : u[1]),
            m = p ? (P = U) == null ? void 0 : P.rankMap[(x = t == null ? void 0 : t[g]) == null ? void 0 : x[0]] : ((S = U) == null ? void 0 : S.rankMap[(v = t == null ? void 0 : t[g + 1]) == null ? void 0 : v[0]]) || ((H = U) == null ? void 0 : H.rankMap[(G = t == null ? void 0 : t[(t == null ? void 0 : t.length) - 1]) == null ? void 0 : G[0]]),
            c = p ? (M = t == null ? void 0 : t[g]) == null ? void 0 : M[1] : ((I = t == null ? void 0 : t[g + 1]) == null ? void 0 : I[1]) || ((R = t == null ? void 0 : t[(t == null ? void 0 : t.length) - 1]) == null ? void 0 : R[1]),
            f = !p && (o == null ? void 0 : o.membership_type) != "LEGENDARY" ? a == null ? void 0 : a.accumulate_topup.replace("[xxx]", b(c - h)).replace("[yyy]", m) : ` tích luỹ thêm ${c-y} <img src="/images/gem.png" alt="" class="icon-gem icon-gem--small" /> trước cuối ngày ${J(o==null?void 0:o.to_dt).format("DD/MM")}<br>Để giữ hạng ${m}`,
            N = p ? (s = t == null ? void 0 : t[g]) == null ? void 0 : s[0] : (T = t == null ? void 0 : t[g + 1]) != null && T[0] ? ($ = t == null ? void 0 : t[g + 1]) == null ? void 0 : $[0] : (q = t == null ? void 0 : t[g]) == null ? void 0 : q[0],
            n = (o == null ? void 0 : o.membership_type) == "LEGENDARY" || p ? y * 100 / c : parseInt(h * 100 / c);
        return e(K, {
            children: i("div", {
                className: "progress",
                children: [e("div", {
                    className: "prog",
                    children: e("div", {
                        className: "prog__percent",
                        style: {
                            width: n + "%"
                        }
                    })
                }), i("div", {
                    className: "current-rank has-title",
                    children: [e("img", {
                        src: `/images/ranks/${(o==null?void 0:o.membership_type)||"UNRANK"}.png`,
                        alt: ""
                    }), e("span", {
                        className: "title",
                        children: C
                    })]
                }), i("div", {
                    className: "next-rank has-title",
                    children: [e("img", {
                        src: `/images/ranks/${N}.png`,
                        alt: ""
                    }), e("span", {
                        className: "title",
                        children: m
                    })]
                }), L && e("div", {
                    className: "progress__text",
                    dangerouslySetInnerHTML: {
                        __html: f
                    }
                })]
            })
        })
    },
    Pa = ({
        lng: a,
        delta: L,
        user: {
            player: {
                id: r = null,
                account_id: o = null,
                nick_name: t = ""
            } = {},
            in_special_day: g = !1,
            available_converted_score: h = 0,
            membership: k = null,
            accumulated_diamond: E = 0,
            membership_topup_deals: d = [],
            can_access_to_exclusive_store: y = !1,
            gift_membership_status: C = {}
        } = {},
        event: {
            membership_config: p = {},
            params: m = {}
        } = {}
    }) => {
        var D;
        const {
            isLoadingExpiredGem: c,
            errorExpiredGem: f,
            data: {
                payload: {
                    accumulated_diamond_expired_tomorrow: N = 0
                } = {}
            } = {}
        } = W({
            queryKey: ["expiredGemBalance"],
            queryFn: () => ma(),
            enabled: !!r
        }), [n, l] = O.useState(!1), u = () => l(!1), [v, S] = O.useState(!1), G = () => S(!1), [H, x] = O.useState(!1), P = () => x(!1), [I, R] = O.useState(!1), M = () => R(!1), [T, $] = O.useState([]), [q, s] = O.useState(0);
        O.useState(!1);
        const A = k == null ? void 0 : k.membership_type;
        return O.useEffect(() => {
            if (p != null && p.required_accumulated_diamond) {
                let B = null;
                const F = [
                    ["UNRANK", 0], ...p == null ? void 0 : p.required_accumulated_diamond
                ];
                for (let V = 0; V < F.length; V++) {
                    const z = F[V];
                    if ((z == null ? void 0 : z[0]) == A) {
                        B = V;
                        break
                    }
                }
                $(B !== null ? B != (F == null ? void 0 : F.length) ? [...F].slice(B) : [...F].slice(B - 1) : F)
            }
        }, [p == null ? void 0 : p.required_accumulated_diamond, A]), i(K, {
            children: [e("div", {
                className: "main-content main-home",
                children: e("div", {
                    className: "main",
                    children: e("div", {
                        className: "container",
                        children: i("div", {
                            className: "row",
                            children: [i("div", {
                                className: "col col--home-left",
                                children: [e(Ea, {
                                    membership_type: A,
                                    accumulated_diamond: E,
                                    available_converted_score: h
                                }), i("div", {
                                    className: "acuumulate-notice",
                                    children: ["* ", b(N), " ", e("img", {
                                        src: "/images/gem.png",
                                        alt: "",
                                        className: "icon-gem icon-gem--small"
                                    }), " ", (D = a == null ? void 0 : a.accumulate_expiring) == null ? void 0 : D.replace("[xxx]", "mai")]
                                }), e("div", {
                                    className: "home-btns",
                                    children: e("div", {
                                        className: "container",
                                        children: i("div", {
                                            className: "row",
                                            children: [e("div", {
                                                className: "col-6",
                                                children: e("a", {
                                                    href: "#",
                                                    className: "btn btn--long btn--fw",
                                                    onClick: B => {
                                                        B.preventDefault(), x(!0)
                                                    },
                                                    children: e("span", {
                                                        children: a == null ? void 0 : a.top_up_history
                                                    })
                                                })
                                            }), e("div", {
                                                className: "col-6",
                                                children: e("a", {
                                                    href: "#",
                                                    className: "btn btn--long btn--long--right btn--fw",
                                                    onClick: B => {
                                                        if (B.preventDefault(), !r) return ga(), !1;
                                                        S(!0)
                                                    },
                                                    children: e("span", {
                                                        children: a == null ? void 0 : a.profile
                                                    })
                                                })
                                            })]
                                        })
                                    })
                                }), e(Da, {
                                    membership_type: A,
                                    userId: r,
                                    can_access_to_exclusive_store: y,
                                    setModalGiftStatus: l,
                                    setModalBenefitStatus: R,
                                    in_special_day: g,
                                    gift_membership_status: C
                                })]
                            }), i("div", {
                                className: "col col--home-right",
                                children: [e(Ia, {
                                    lng: a,
                                    userId: r,
                                    delta: L,
                                    membership: k,
                                    memberships: T,
                                    membership_type: A,
                                    currentMembershipIndex: q,
                                    accumulated_diamond: E
                                }), e(Ma, {
                                    memberships: T,
                                    membership_type: A,
                                    membership_topup_deals: d,
                                    currentMembershipIndex: q,
                                    setCurrentMembershipIndex: s,
                                    params: m
                                })]
                            })]
                        })
                    })
                })
            }), I && e(La, {
                modalStatus: I,
                closeModal: M
            }), n && e(ya, {
                lng: a,
                gift_membership_status: C,
                membership_type: A,
                modalStatus: n,
                closeModal: u
            }), v && e(Ca, {
                lng: a,
                userId: r,
                account_id: o,
                nick_name: t,
                modalStatus: v,
                closeModal: G
            }), H && e(xa, {
                lng: a,
                userId: r,
                modalStatus: H,
                closeModal: P
            })]
        })
    };
export {
    Pa as
    default
};