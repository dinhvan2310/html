var Be = Object.defineProperty;
var q = Object.getOwnPropertySymbols;
var he = Object.prototype.hasOwnProperty,
    me = Object.prototype.propertyIsEnumerable;
var B = Math.pow,
    pe = (e, t, i) => t in e ? Be(e, t, {
        enumerable: !0,
        configurable: !0,
        writable: !0,
        value: i
    }) : e[t] = i,
    ge = (e, t) => {
        for (var i in t || (t = {})) he.call(t, i) && pe(e, i, t[i]);
        if (q)
            for (var i of q(t)) me.call(t, i) && pe(e, i, t[i]);
        return e
    };
var ie = (e, t) => {
    var i = {};
    for (var s in e) he.call(e, s) && t.indexOf(s) < 0 && (i[s] = e[s]);
    if (e != null && q)
        for (var s of q(e)) t.indexOf(s) < 0 && me.call(e, s) && (i[s] = e[s]);
    return i
};
import {
    R as I,
    r as O
} from "./index-409f5d7e.js";

function ve(e) {
    return e !== null && typeof e == "object" && "constructor" in e && e.constructor === Object
}

function ue(e = {}, t = {}) {
    Object.keys(t).forEach(i => {
        typeof e[i] == "undefined" ? e[i] = t[i] : ve(t[i]) && ve(e[i]) && Object.keys(t[i]).length > 0 && ue(e[i], t[i])
    })
}
const Me = {
    body: {},
    addEventListener() {},
    removeEventListener() {},
    activeElement: {
        blur() {},
        nodeName: ""
    },
    querySelector() {
        return null
    },
    querySelectorAll() {
        return []
    },
    getElementById() {
        return null
    },
    createEvent() {
        return {
            initEvent() {}
        }
    },
    createElement() {
        return {
            children: [],
            childNodes: [],
            style: {},
            setAttribute() {},
            getElementsByTagName() {
                return []
            }
        }
    },
    createElementNS() {
        return {}
    },
    importNode() {
        return null
    },
    location: {
        hash: "",
        host: "",
        hostname: "",
        href: "",
        origin: "",
        pathname: "",
        protocol: "",
        search: ""
    }
};

function F() {
    const e = typeof document != "undefined" ? document : {};
    return ue(e, Me), e
}
const Re = {
    document: Me,
    navigator: {
        userAgent: ""
    },
    location: {
        hash: "",
        host: "",
        hostname: "",
        href: "",
        origin: "",
        pathname: "",
        protocol: "",
        search: ""
    },
    history: {
        replaceState() {},
        pushState() {},
        go() {},
        back() {}
    },
    CustomEvent: function() {
        return this
    },
    addEventListener() {},
    removeEventListener() {},
    getComputedStyle() {
        return {
            getPropertyValue() {
                return ""
            }
        }
    },
    Image() {},
    Date() {},
    screen: {},
    setTimeout() {},
    clearTimeout() {},
    matchMedia() {
        return {}
    },
    requestAnimationFrame(e) {
        return typeof setTimeout == "undefined" ? (e(), null) : setTimeout(e, 0)
    },
    cancelAnimationFrame(e) {
        typeof setTimeout != "undefined" && clearTimeout(e)
    }
};

function G() {
    const e = typeof window != "undefined" ? window : {};
    return ue(e, Re), e
}

function Fe(e) {
    const t = e;
    Object.keys(t).forEach(i => {
        try {
            t[i] = null
        } catch (s) {}
        try {
            delete t[i]
        } catch (s) {}
    })
}

function oe(e, t = 0) {
    return setTimeout(e, t)
}

function J() {
    return Date.now()
}

function He(e) {
    const t = G();
    let i;
    return t.getComputedStyle && (i = t.getComputedStyle(e, null)), !i && e.currentStyle && (i = e.currentStyle), i || (i = e.style), i
}

function je(e, t = "x") {
    const i = G();
    let s, n, r;
    const l = He(e);
    return i.WebKitCSSMatrix ? (n = l.transform || l.webkitTransform, n.split(",").length > 6 && (n = n.split(", ").map(o => o.replace(",", ".")).join(", ")), r = new i.WebKitCSSMatrix(n === "none" ? "" : n)) : (r = l.MozTransform || l.OTransform || l.MsTransform || l.msTransform || l.transform || l.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), s = r.toString().split(",")), t === "x" && (i.WebKitCSSMatrix ? n = r.m41 : s.length === 16 ? n = parseFloat(s[12]) : n = parseFloat(s[4])), t === "y" && (i.WebKitCSSMatrix ? n = r.m42 : s.length === 16 ? n = parseFloat(s[13]) : n = parseFloat(s[5])), n || 0
}

function K(e) {
    return typeof e == "object" && e !== null && e.constructor && Object.prototype.toString.call(e).slice(8, -1) === "Object"
}

function We(e) {
    return typeof window != "undefined" && typeof window.HTMLElement != "undefined" ? e instanceof HTMLElement : e && (e.nodeType === 1 || e.nodeType === 11)
}

function A(...e) {
    const t = Object(e[0]),
        i = ["__proto__", "constructor", "prototype"];
    for (let s = 1; s < e.length; s += 1) {
        const n = e[s];
        if (n != null && !We(n)) {
            const r = Object.keys(Object(n)).filter(l => i.indexOf(l) < 0);
            for (let l = 0, o = r.length; l < o; l += 1) {
                const a = r[l],
                    d = Object.getOwnPropertyDescriptor(n, a);
                d !== void 0 && d.enumerable && (K(t[a]) && K(n[a]) ? n[a].__swiper__ ? t[a] = n[a] : A(t[a], n[a]) : !K(t[a]) && K(n[a]) ? (t[a] = {}, n[a].__swiper__ ? t[a] = n[a] : A(t[a], n[a])) : t[a] = n[a])
            }
        }
    }
    return t
}

function U(e, t, i) {
    e.style.setProperty(t, i)
}

function Pe({
    swiper: e,
    targetPosition: t,
    side: i
}) {
    const s = G(),
        n = -e.translate;
    let r = null,
        l;
    const o = e.params.speed;
    e.wrapperEl.style.scrollSnapType = "none", s.cancelAnimationFrame(e.cssModeFrameID);
    const a = t > n ? "next" : "prev",
        d = (c, p) => a === "next" && c >= p || a === "prev" && c <= p,
        u = () => {
            l = new Date().getTime(), r === null && (r = l);
            const c = Math.max(Math.min((l - r) / o, 1), 0),
                p = .5 - Math.cos(c * Math.PI) / 2;
            let f = n + p * (t - n);
            if (d(f, t) && (f = t), e.wrapperEl.scrollTo({
                    [i]: f
                }), d(f, t)) {
                e.wrapperEl.style.overflow = "hidden", e.wrapperEl.style.scrollSnapType = "", setTimeout(() => {
                    e.wrapperEl.style.overflow = "", e.wrapperEl.scrollTo({
                        [i]: f
                    })
                }), s.cancelAnimationFrame(e.cssModeFrameID);
                return
            }
            e.cssModeFrameID = s.requestAnimationFrame(u)
        };
    u()
}

function N(e, t = "") {
    return [...e.children].filter(i => i.matches(t))
}

function Xe(e, t = []) {
    const i = document.createElement(e);
    return i.classList.add(...Array.isArray(t) ? t : [t]), i
}

function Ye(e, t) {
    const i = [];
    for (; e.previousElementSibling;) {
        const s = e.previousElementSibling;
        t ? s.matches(t) && i.push(s) : i.push(s), e = s
    }
    return i
}

function qe(e, t) {
    const i = [];
    for (; e.nextElementSibling;) {
        const s = e.nextElementSibling;
        t ? s.matches(t) && i.push(s) : i.push(s), e = s
    }
    return i
}

function $(e, t) {
    return G().getComputedStyle(e, null).getPropertyValue(t)
}

function we(e) {
    let t = e,
        i;
    if (t) {
        for (i = 0;
            (t = t.previousSibling) !== null;) t.nodeType === 1 && (i += 1);
        return i
    }
}

function Ke(e, t) {
    const i = [];
    let s = e.parentElement;
    for (; s;) t ? s.matches(t) && i.push(s) : i.push(s), s = s.parentElement;
    return i
}

function Se(e, t, i) {
    const s = G();
    return i ? e[t === "width" ? "offsetWidth" : "offsetHeight"] + parseFloat(s.getComputedStyle(e, null).getPropertyValue(t === "width" ? "margin-right" : "margin-top")) + parseFloat(s.getComputedStyle(e, null).getPropertyValue(t === "width" ? "margin-left" : "margin-bottom")) : e.offsetWidth
}
let se;

function Ue() {
    const e = G(),
        t = F();
    return {
        smoothScroll: t.documentElement && "scrollBehavior" in t.documentElement.style,
        touch: !!("ontouchstart" in e || e.DocumentTouch && t instanceof e.DocumentTouch)
    }
}

function Oe() {
    return se || (se = Ue()), se
}
let re;

function Ze({
    userAgent: e
} = {}) {
    const t = Oe(),
        i = G(),
        s = i.navigator.platform,
        n = e || i.navigator.userAgent,
        r = {
            ios: !1,
            android: !1
        },
        l = i.screen.width,
        o = i.screen.height,
        a = n.match(/(Android);?[\s\/]+([\d.]+)?/);
    let d = n.match(/(iPad).*OS\s([\d_]+)/);
    const u = n.match(/(iPod)(.*OS\s([\d_]+))?/),
        c = !d && n.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
        p = s === "Win32";
    let f = s === "MacIntel";
    const g = ["1024x1366", "1366x1024", "834x1194", "1194x834", "834x1112", "1112x834", "768x1024", "1024x768", "820x1180", "1180x820", "810x1080", "1080x810"];
    return !d && f && t.touch && g.indexOf(`${l}x${o}`) >= 0 && (d = n.match(/(Version)\/([\d.]+)/), d || (d = [0, 1, "13_0_0"]), f = !1), a && !p && (r.os = "android", r.android = !0), (d || c || u) && (r.os = "ios", r.ios = !0), r
}

function Je(e = {}) {
    return re || (re = Ze(e)), re
}
let ne;

function Qe() {
    const e = G();
    let t = !1;

    function i() {
        const s = e.navigator.userAgent.toLowerCase();
        return s.indexOf("safari") >= 0 && s.indexOf("chrome") < 0 && s.indexOf("android") < 0
    }
    if (i()) {
        const s = String(e.navigator.userAgent);
        if (s.includes("Version/")) {
            const [n, r] = s.split("Version/")[1].split(" ")[0].split(".").map(l => Number(l));
            t = n < 16 || n === 16 && r < 2
        }
    }
    return {
        isSafari: t || i(),
        needPerspectiveFix: t,
        isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(e.navigator.userAgent)
    }
}

function et() {
    return ne || (ne = Qe()), ne
}

function tt({
    swiper: e,
    on: t,
    emit: i
}) {
    const s = G();
    let n = null,
        r = null;
    const l = () => {
            !e || e.destroyed || !e.initialized || (i("beforeResize"), i("resize"))
        },
        o = () => {
            !e || e.destroyed || !e.initialized || (n = new ResizeObserver(u => {
                r = s.requestAnimationFrame(() => {
                    const {
                        width: c,
                        height: p
                    } = e;
                    let f = c,
                        g = p;
                    u.forEach(({
                        contentBoxSize: m,
                        contentRect: S,
                        target: h
                    }) => {
                        h && h !== e.el || (f = S ? S.width : (m[0] || m).inlineSize, g = S ? S.height : (m[0] || m).blockSize)
                    }), (f !== c || g !== p) && l()
                })
            }), n.observe(e.el))
        },
        a = () => {
            r && s.cancelAnimationFrame(r), n && n.unobserve && e.el && (n.unobserve(e.el), n = null)
        },
        d = () => {
            !e || e.destroyed || !e.initialized || i("orientationchange")
        };
    t("init", () => {
        if (e.params.resizeObserver && typeof s.ResizeObserver != "undefined") {
            o();
            return
        }
        s.addEventListener("resize", l), s.addEventListener("orientationchange", d)
    }), t("destroy", () => {
        a(), s.removeEventListener("resize", l), s.removeEventListener("orientationchange", d)
    })
}

function it({
    swiper: e,
    extendParams: t,
    on: i,
    emit: s
}) {
    const n = [],
        r = G(),
        l = (d, u = {}) => {
            const c = r.MutationObserver || r.WebkitMutationObserver,
                p = new c(f => {
                    if (e.__preventObserver__) return;
                    if (f.length === 1) {
                        s("observerUpdate", f[0]);
                        return
                    }
                    const g = function() {
                        s("observerUpdate", f[0])
                    };
                    r.requestAnimationFrame ? r.requestAnimationFrame(g) : r.setTimeout(g, 0)
                });
            p.observe(d, {
                attributes: typeof u.attributes == "undefined" ? !0 : u.attributes,
                childList: typeof u.childList == "undefined" ? !0 : u.childList,
                characterData: typeof u.characterData == "undefined" ? !0 : u.characterData
            }), n.push(p)
        },
        o = () => {
            if (e.params.observer) {
                if (e.params.observeParents) {
                    const d = Ke(e.el);
                    for (let u = 0; u < d.length; u += 1) l(d[u])
                }
                l(e.el, {
                    childList: e.params.observeSlideChildren
                }), l(e.wrapperEl, {
                    attributes: !1
                })
            }
        },
        a = () => {
            n.forEach(d => {
                d.disconnect()
            }), n.splice(0, n.length)
        };
    t({
        observer: !1,
        observeParents: !1,
        observeSlideChildren: !1
    }), i("init", o), i("destroy", a)
}
const st = {
    on(e, t, i) {
        const s = this;
        if (!s.eventsListeners || s.destroyed || typeof t != "function") return s;
        const n = i ? "unshift" : "push";
        return e.split(" ").forEach(r => {
            s.eventsListeners[r] || (s.eventsListeners[r] = []), s.eventsListeners[r][n](t)
        }), s
    },
    once(e, t, i) {
        const s = this;
        if (!s.eventsListeners || s.destroyed || typeof t != "function") return s;

        function n(...r) {
            s.off(e, n), n.__emitterProxy && delete n.__emitterProxy, t.apply(s, r)
        }
        return n.__emitterProxy = t, s.on(e, n, i)
    },
    onAny(e, t) {
        const i = this;
        if (!i.eventsListeners || i.destroyed || typeof e != "function") return i;
        const s = t ? "unshift" : "push";
        return i.eventsAnyListeners.indexOf(e) < 0 && i.eventsAnyListeners[s](e), i
    },
    offAny(e) {
        const t = this;
        if (!t.eventsListeners || t.destroyed || !t.eventsAnyListeners) return t;
        const i = t.eventsAnyListeners.indexOf(e);
        return i >= 0 && t.eventsAnyListeners.splice(i, 1), t
    },
    off(e, t) {
        const i = this;
        return !i.eventsListeners || i.destroyed || !i.eventsListeners || e.split(" ").forEach(s => {
            typeof t == "undefined" ? i.eventsListeners[s] = [] : i.eventsListeners[s] && i.eventsListeners[s].forEach((n, r) => {
                (n === t || n.__emitterProxy && n.__emitterProxy === t) && i.eventsListeners[s].splice(r, 1)
            })
        }), i
    },
    emit(...e) {
        const t = this;
        if (!t.eventsListeners || t.destroyed || !t.eventsListeners) return t;
        let i, s, n;
        return typeof e[0] == "string" || Array.isArray(e[0]) ? (i = e[0], s = e.slice(1, e.length), n = t) : (i = e[0].events, s = e[0].data, n = e[0].context || t), s.unshift(n), (Array.isArray(i) ? i : i.split(" ")).forEach(l => {
            t.eventsAnyListeners && t.eventsAnyListeners.length && t.eventsAnyListeners.forEach(o => {
                o.apply(n, [l, ...s])
            }), t.eventsListeners && t.eventsListeners[l] && t.eventsListeners[l].forEach(o => {
                o.apply(n, s)
            })
        }), t
    }
};

function rt() {
    const e = this;
    let t, i;
    const s = e.el;
    typeof e.params.width != "undefined" && e.params.width !== null ? t = e.params.width : t = s.clientWidth, typeof e.params.height != "undefined" && e.params.height !== null ? i = e.params.height : i = s.clientHeight, !(t === 0 && e.isHorizontal() || i === 0 && e.isVertical()) && (t = t - parseInt($(s, "padding-left") || 0, 10) - parseInt($(s, "padding-right") || 0, 10), i = i - parseInt($(s, "padding-top") || 0, 10) - parseInt($(s, "padding-bottom") || 0, 10), Number.isNaN(t) && (t = 0), Number.isNaN(i) && (i = 0), Object.assign(e, {
        width: t,
        height: i,
        size: e.isHorizontal() ? t : i
    }))
}

function nt() {
    const e = this;

    function t(w) {
        return e.isHorizontal() ? w : {
            width: "height",
            "margin-top": "margin-left",
            "margin-bottom ": "margin-right",
            "margin-left": "margin-top",
            "margin-right": "margin-bottom",
            "padding-left": "padding-top",
            "padding-right": "padding-bottom",
            marginRight: "marginBottom"
        }[w]
    }

    function i(w, E) {
        return parseFloat(w.getPropertyValue(t(E)) || 0)
    }
    const s = e.params,
        {
            wrapperEl: n,
            slidesEl: r,
            size: l,
            rtlTranslate: o,
            wrongRTL: a
        } = e,
        d = e.virtual && s.virtual.enabled,
        u = d ? e.virtual.slides.length : e.slides.length,
        c = N(r, `.${e.params.slideClass}, swiper-slide`),
        p = d ? e.virtual.slides.length : c.length;
    let f = [];
    const g = [],
        m = [];
    let S = s.slidesOffsetBefore;
    typeof S == "function" && (S = s.slidesOffsetBefore.call(e));
    let h = s.slidesOffsetAfter;
    typeof h == "function" && (h = s.slidesOffsetAfter.call(e));
    const C = e.snapGrid.length,
        T = e.slidesGrid.length;
    let v = s.spaceBetween,
        y = -S,
        b = 0,
        L = 0;
    if (typeof l == "undefined") return;
    typeof v == "string" && v.indexOf("%") >= 0 ? v = parseFloat(v.replace("%", "")) / 100 * l : typeof v == "string" && (v = parseFloat(v)), e.virtualSize = -v, c.forEach(w => {
        o ? w.style.marginLeft = "" : w.style.marginRight = "", w.style.marginBottom = "", w.style.marginTop = ""
    }), s.centeredSlides && s.cssMode && (U(n, "--swiper-centered-offset-before", ""), U(n, "--swiper-centered-offset-after", ""));
    const x = s.grid && s.grid.rows > 1 && e.grid;
    x && e.grid.initSlides(p);
    let P;
    const Q = s.slidesPerView === "auto" && s.breakpoints && Object.keys(s.breakpoints).filter(w => typeof s.breakpoints[w].slidesPerView != "undefined").length > 0;
    for (let w = 0; w < p; w += 1) {
        P = 0;
        let E;
        if (c[w] && (E = c[w]), x && e.grid.updateSlide(w, E, p, t), !(c[w] && $(E, "display") === "none")) {
            if (s.slidesPerView === "auto") {
                Q && (c[w].style[t("width")] = "");
                const M = getComputedStyle(E),
                    _ = E.style.transform,
                    H = E.style.webkitTransform;
                if (_ && (E.style.transform = "none"), H && (E.style.webkitTransform = "none"), s.roundLengths) P = e.isHorizontal() ? Se(E, "width", !0) : Se(E, "height", !0);
                else {
                    const Y = i(M, "width"),
                        ee = i(M, "padding-left"),
                        te = i(M, "padding-right"),
                        j = i(M, "margin-left"),
                        z = i(M, "margin-right"),
                        V = M.getPropertyValue("box-sizing");
                    if (V && V === "border-box") P = Y + j + z;
                    else {
                        const {
                            clientWidth: $e,
                            offsetWidth: ke
                        } = E;
                        P = Y + ee + te + j + z + (ke - $e)
                    }
                }
                _ && (E.style.transform = _), H && (E.style.webkitTransform = H), s.roundLengths && (P = Math.floor(P))
            } else P = (l - (s.slidesPerView - 1) * v) / s.slidesPerView, s.roundLengths && (P = Math.floor(P)), c[w] && (c[w].style[t("width")] = `${P}px`);
            c[w] && (c[w].swiperSlideSize = P), m.push(P), s.centeredSlides ? (y = y + P / 2 + b / 2 + v, b === 0 && w !== 0 && (y = y - l / 2 - v), w === 0 && (y = y - l / 2 - v), Math.abs(y) < 1 / 1e3 && (y = 0), s.roundLengths && (y = Math.floor(y)), L % s.slidesPerGroup === 0 && f.push(y), g.push(y)) : (s.roundLengths && (y = Math.floor(y)), (L - Math.min(e.params.slidesPerGroupSkip, L)) % e.params.slidesPerGroup === 0 && f.push(y), g.push(y), y = y + P + v), e.virtualSize += P + v, b = P, L += 1
        }
    }
    if (e.virtualSize = Math.max(e.virtualSize, l) + h, o && a && (s.effect === "slide" || s.effect === "coverflow") && (n.style.width = `${e.virtualSize+v}px`), s.setWrapperSize && (n.style[t("width")] = `${e.virtualSize+v}px`), x && e.grid.updateWrapperSize(P, f, t), !s.centeredSlides) {
        const w = [];
        for (let E = 0; E < f.length; E += 1) {
            let M = f[E];
            s.roundLengths && (M = Math.floor(M)), f[E] <= e.virtualSize - l && w.push(M)
        }
        f = w, Math.floor(e.virtualSize - l) - Math.floor(f[f.length - 1]) > 1 && f.push(e.virtualSize - l)
    }
    if (d && s.loop) {
        const w = m[0] + v;
        if (s.slidesPerGroup > 1) {
            const E = Math.ceil((e.virtual.slidesBefore + e.virtual.slidesAfter) / s.slidesPerGroup),
                M = w * s.slidesPerGroup;
            for (let _ = 0; _ < E; _ += 1) f.push(f[f.length - 1] + M)
        }
        for (let E = 0; E < e.virtual.slidesBefore + e.virtual.slidesAfter; E += 1) s.slidesPerGroup === 1 && f.push(f[f.length - 1] + w), g.push(g[g.length - 1] + w), e.virtualSize += w
    }
    if (f.length === 0 && (f = [0]), v !== 0) {
        const w = e.isHorizontal() && o ? "marginLeft" : t("marginRight");
        c.filter((E, M) => !s.cssMode || s.loop ? !0 : M !== c.length - 1).forEach(E => {
            E.style[w] = `${v}px`
        })
    }
    if (s.centeredSlides && s.centeredSlidesBounds) {
        let w = 0;
        m.forEach(M => {
            w += M + (v || 0)
        }), w -= v;
        const E = w - l;
        f = f.map(M => M < 0 ? -S : M > E ? E + h : M)
    }
    if (s.centerInsufficientSlides) {
        let w = 0;
        if (m.forEach(E => {
                w += E + (v || 0)
            }), w -= v, w < l) {
            const E = (l - w) / 2;
            f.forEach((M, _) => {
                f[_] = M - E
            }), g.forEach((M, _) => {
                g[_] = M + E
            })
        }
    }
    if (Object.assign(e, {
            slides: c,
            snapGrid: f,
            slidesGrid: g,
            slidesSizesGrid: m
        }), s.centeredSlides && s.cssMode && !s.centeredSlidesBounds) {
        U(n, "--swiper-centered-offset-before", `${-f[0]}px`), U(n, "--swiper-centered-offset-after", `${e.size/2-m[m.length-1]/2}px`);
        const w = -e.snapGrid[0],
            E = -e.slidesGrid[0];
        e.snapGrid = e.snapGrid.map(M => M + w), e.slidesGrid = e.slidesGrid.map(M => M + E)
    }
    if (p !== u && e.emit("slidesLengthChange"), f.length !== C && (e.params.watchOverflow && e.checkOverflow(), e.emit("snapGridLengthChange")), g.length !== T && e.emit("slidesGridLengthChange"), s.watchSlidesProgress && e.updateSlidesOffset(), !d && !s.cssMode && (s.effect === "slide" || s.effect === "fade")) {
        const w = `${s.containerModifierClass}backface-hidden`,
            E = e.el.classList.contains(w);
        p <= s.maxBackfaceHiddenSlides ? E || e.el.classList.add(w) : E && e.el.classList.remove(w)
    }
}

function at(e) {
    const t = this,
        i = [],
        s = t.virtual && t.params.virtual.enabled;
    let n = 0,
        r;
    typeof e == "number" ? t.setTransition(e) : e === !0 && t.setTransition(t.params.speed);
    const l = o => s ? t.slides[t.getSlideIndexByData(o)] : t.slides[o];
    if (t.params.slidesPerView !== "auto" && t.params.slidesPerView > 1)
        if (t.params.centeredSlides)(t.visibleSlides || []).forEach(o => {
            i.push(o)
        });
        else
            for (r = 0; r < Math.ceil(t.params.slidesPerView); r += 1) {
                const o = t.activeIndex + r;
                if (o > t.slides.length && !s) break;
                i.push(l(o))
            } else i.push(l(t.activeIndex));
    for (r = 0; r < i.length; r += 1)
        if (typeof i[r] != "undefined") {
            const o = i[r].offsetHeight;
            n = o > n ? o : n
        }(n || n === 0) && (t.wrapperEl.style.height = `${n}px`)
}

function lt() {
    const e = this,
        t = e.slides,
        i = e.isElement ? e.isHorizontal() ? e.wrapperEl.offsetLeft : e.wrapperEl.offsetTop : 0;
    for (let s = 0; s < t.length; s += 1) t[s].swiperSlideOffset = (e.isHorizontal() ? t[s].offsetLeft : t[s].offsetTop) - i - e.cssOverflowAdjustment()
}

function ot(e = this && this.translate || 0) {
    const t = this,
        i = t.params,
        {
            slides: s,
            rtlTranslate: n,
            snapGrid: r
        } = t;
    if (s.length === 0) return;
    typeof s[0].swiperSlideOffset == "undefined" && t.updateSlidesOffset();
    let l = -e;
    n && (l = e), s.forEach(a => {
        a.classList.remove(i.slideVisibleClass)
    }), t.visibleSlidesIndexes = [], t.visibleSlides = [];
    let o = i.spaceBetween;
    typeof o == "string" && o.indexOf("%") >= 0 ? o = parseFloat(o.replace("%", "")) / 100 * t.size : typeof o == "string" && (o = parseFloat(o));
    for (let a = 0; a < s.length; a += 1) {
        const d = s[a];
        let u = d.swiperSlideOffset;
        i.cssMode && i.centeredSlides && (u -= s[0].swiperSlideOffset);
        const c = (l + (i.centeredSlides ? t.minTranslate() : 0) - u) / (d.swiperSlideSize + o),
            p = (l - r[0] + (i.centeredSlides ? t.minTranslate() : 0) - u) / (d.swiperSlideSize + o),
            f = -(l - u),
            g = f + t.slidesSizesGrid[a];
        (f >= 0 && f < t.size - 1 || g > 1 && g <= t.size || f <= 0 && g >= t.size) && (t.visibleSlides.push(d), t.visibleSlidesIndexes.push(a), s[a].classList.add(i.slideVisibleClass)), d.progress = n ? -c : c, d.originalProgress = n ? -p : p
    }
}

function dt(e) {
    const t = this;
    if (typeof e == "undefined") {
        const u = t.rtlTranslate ? -1 : 1;
        e = t && t.translate && t.translate * u || 0
    }
    const i = t.params,
        s = t.maxTranslate() - t.minTranslate();
    let {
        progress: n,
        isBeginning: r,
        isEnd: l,
        progressLoop: o
    } = t;
    const a = r,
        d = l;
    if (s === 0) n = 0, r = !0, l = !0;
    else {
        n = (e - t.minTranslate()) / s;
        const u = Math.abs(e - t.minTranslate()) < 1,
            c = Math.abs(e - t.maxTranslate()) < 1;
        r = u || n <= 0, l = c || n >= 1, u && (n = 0), c && (n = 1)
    }
    if (i.loop) {
        const u = t.getSlideIndexByData(0),
            c = t.getSlideIndexByData(t.slides.length - 1),
            p = t.slidesGrid[u],
            f = t.slidesGrid[c],
            g = t.slidesGrid[t.slidesGrid.length - 1],
            m = Math.abs(e);
        m >= p ? o = (m - p) / g : o = (m + g - f) / g, o > 1 && (o -= 1)
    }
    Object.assign(t, {
        progress: n,
        progressLoop: o,
        isBeginning: r,
        isEnd: l
    }), (i.watchSlidesProgress || i.centeredSlides && i.autoHeight) && t.updateSlidesProgress(e), r && !a && t.emit("reachBeginning toEdge"), l && !d && t.emit("reachEnd toEdge"), (a && !r || d && !l) && t.emit("fromEdge"), t.emit("progress", n)
}

function ct() {
    const e = this,
        {
            slides: t,
            params: i,
            slidesEl: s,
            activeIndex: n
        } = e,
        r = e.virtual && i.virtual.enabled,
        l = a => N(s, `.${i.slideClass}${a}, swiper-slide${a}`)[0];
    t.forEach(a => {
        a.classList.remove(i.slideActiveClass, i.slideNextClass, i.slidePrevClass)
    });
    let o;
    if (r)
        if (i.loop) {
            let a = n - e.virtual.slidesBefore;
            a < 0 && (a = e.virtual.slides.length + a), a >= e.virtual.slides.length && (a -= e.virtual.slides.length), o = l(`[data-swiper-slide-index="${a}"]`)
        } else o = l(`[data-swiper-slide-index="${n}"]`);
    else o = t[n];
    if (o) {
        o.classList.add(i.slideActiveClass);
        let a = qe(o, `.${i.slideClass}, swiper-slide`)[0];
        i.loop && !a && (a = t[0]), a && a.classList.add(i.slideNextClass);
        let d = Ye(o, `.${i.slideClass}, swiper-slide`)[0];
        i.loop && !d === 0 && (d = t[t.length - 1]), d && d.classList.add(i.slidePrevClass)
    }
    e.emitSlidesClasses()
}
const Z = (e, t) => {
        if (!e || e.destroyed || !e.params) return;
        const i = () => e.isElement ? "swiper-slide" : `.${e.params.slideClass}`,
            s = t.closest(i());
        if (s) {
            const n = s.querySelector(`.${e.params.lazyPreloaderClass}`);
            n && n.remove()
        }
    },
    Te = (e, t) => {
        if (!e.slides[t]) return;
        const i = e.slides[t].querySelector('[loading="lazy"]');
        i && i.removeAttribute("loading")
    },
    de = e => {
        if (!e || e.destroyed || !e.params) return;
        let t = e.params.lazyPreloadPrevNext;
        const i = e.slides.length;
        if (!i || !t || t < 0) return;
        t = Math.min(t, i);
        const s = e.params.slidesPerView === "auto" ? e.slidesPerViewDynamic() : Math.ceil(e.params.slidesPerView),
            n = e.activeIndex,
            r = n + s - 1;
        if (e.params.rewind)
            for (let l = n - t; l <= r + t; l += 1) {
                const o = (l % i + i) % i;
                o !== n && o > r && Te(e, o)
            } else
                for (let l = Math.max(r - t, 0); l <= Math.min(r + t, i - 1); l += 1) l !== n && l > r && Te(e, l)
    };

function ft(e) {
    const {
        slidesGrid: t,
        params: i
    } = e, s = e.rtlTranslate ? e.translate : -e.translate;
    let n;
    for (let r = 0; r < t.length; r += 1) typeof t[r + 1] != "undefined" ? s >= t[r] && s < t[r + 1] - (t[r + 1] - t[r]) / 2 ? n = r : s >= t[r] && s < t[r + 1] && (n = r + 1) : s >= t[r] && (n = r);
    return i.normalizeSlideIndex && (n < 0 || typeof n == "undefined") && (n = 0), n
}

function ut(e) {
    const t = this,
        i = t.rtlTranslate ? t.translate : -t.translate,
        {
            snapGrid: s,
            params: n,
            activeIndex: r,
            realIndex: l,
            snapIndex: o
        } = t;
    let a = e,
        d;
    const u = p => {
        let f = p - t.virtual.slidesBefore;
        return f < 0 && (f = t.virtual.slides.length + f), f >= t.virtual.slides.length && (f -= t.virtual.slides.length), f
    };
    if (typeof a == "undefined" && (a = ft(t)), s.indexOf(i) >= 0) d = s.indexOf(i);
    else {
        const p = Math.min(n.slidesPerGroupSkip, a);
        d = p + Math.floor((a - p) / n.slidesPerGroup)
    }
    if (d >= s.length && (d = s.length - 1), a === r) {
        d !== o && (t.snapIndex = d, t.emit("snapIndexChange")), t.params.loop && t.virtual && t.params.virtual.enabled && (t.realIndex = u(a));
        return
    }
    let c;
    t.virtual && n.virtual.enabled && n.loop ? c = u(a) : t.slides[a] ? c = parseInt(t.slides[a].getAttribute("data-swiper-slide-index") || a, 10) : c = a, Object.assign(t, {
        previousSnapIndex: o,
        snapIndex: d,
        previousRealIndex: l,
        realIndex: c,
        previousIndex: r,
        activeIndex: a
    }), t.initialized && de(t), t.emit("activeIndexChange"), t.emit("snapIndexChange"), l !== c && t.emit("realIndexChange"), (t.initialized || t.params.runCallbacksOnInit) && t.emit("slideChange")
}

function pt(e) {
    const t = this,
        i = t.params,
        s = e.closest(`.${i.slideClass}, swiper-slide`);
    let n = !1,
        r;
    if (s) {
        for (let l = 0; l < t.slides.length; l += 1)
            if (t.slides[l] === s) {
                n = !0, r = l;
                break
            }
    }
    if (s && n) t.clickedSlide = s, t.virtual && t.params.virtual.enabled ? t.clickedIndex = parseInt(s.getAttribute("data-swiper-slide-index"), 10) : t.clickedIndex = r;
    else {
        t.clickedSlide = void 0, t.clickedIndex = void 0;
        return
    }
    i.slideToClickedSlide && t.clickedIndex !== void 0 && t.clickedIndex !== t.activeIndex && t.slideToClickedSlide()
}
const ht = {
    updateSize: rt,
    updateSlides: nt,
    updateAutoHeight: at,
    updateSlidesOffset: lt,
    updateSlidesProgress: ot,
    updateProgress: dt,
    updateSlidesClasses: ct,
    updateActiveIndex: ut,
    updateClickedSlide: pt
};

function mt(e = this.isHorizontal() ? "x" : "y") {
    const t = this,
        {
            params: i,
            rtlTranslate: s,
            translate: n,
            wrapperEl: r
        } = t;
    if (i.virtualTranslate) return s ? -n : n;
    if (i.cssMode) return n;
    let l = je(r, e);
    return l += t.cssOverflowAdjustment(), s && (l = -l), l || 0
}

function gt(e, t) {
    const i = this,
        {
            rtlTranslate: s,
            params: n,
            wrapperEl: r,
            progress: l
        } = i;
    let o = 0,
        a = 0;
    const d = 0;
    i.isHorizontal() ? o = s ? -e : e : a = e, n.roundLengths && (o = Math.floor(o), a = Math.floor(a)), i.previousTranslate = i.translate, i.translate = i.isHorizontal() ? o : a, n.cssMode ? r[i.isHorizontal() ? "scrollLeft" : "scrollTop"] = i.isHorizontal() ? -o : -a : n.virtualTranslate || (i.isHorizontal() ? o -= i.cssOverflowAdjustment() : a -= i.cssOverflowAdjustment(), r.style.transform = `translate3d(${o}px, ${a}px, ${d}px)`);
    let u;
    const c = i.maxTranslate() - i.minTranslate();
    c === 0 ? u = 0 : u = (e - i.minTranslate()) / c, u !== l && i.updateProgress(e), i.emit("setTranslate", i.translate, t)
}

function vt() {
    return -this.snapGrid[0]
}

function wt() {
    return -this.snapGrid[this.snapGrid.length - 1]
}

function St(e = 0, t = this.params.speed, i = !0, s = !0, n) {
    const r = this,
        {
            params: l,
            wrapperEl: o
        } = r;
    if (r.animating && l.preventInteractionOnTransition) return !1;
    const a = r.minTranslate(),
        d = r.maxTranslate();
    let u;
    if (s && e > a ? u = a : s && e < d ? u = d : u = e, r.updateProgress(u), l.cssMode) {
        const c = r.isHorizontal();
        if (t === 0) o[c ? "scrollLeft" : "scrollTop"] = -u;
        else {
            if (!r.support.smoothScroll) return Pe({
                swiper: r,
                targetPosition: -u,
                side: c ? "left" : "top"
            }), !0;
            o.scrollTo({
                [c ? "left" : "top"]: -u,
                behavior: "smooth"
            })
        }
        return !0
    }
    return t === 0 ? (r.setTransition(0), r.setTranslate(u), i && (r.emit("beforeTransitionStart", t, n), r.emit("transitionEnd"))) : (r.setTransition(t), r.setTranslate(u), i && (r.emit("beforeTransitionStart", t, n), r.emit("transitionStart")), r.animating || (r.animating = !0, r.onTranslateToWrapperTransitionEnd || (r.onTranslateToWrapperTransitionEnd = function(p) {
        !r || r.destroyed || p.target === this && (r.wrapperEl.removeEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.onTranslateToWrapperTransitionEnd = null, delete r.onTranslateToWrapperTransitionEnd, i && r.emit("transitionEnd"))
    }), r.wrapperEl.addEventListener("transitionend", r.onTranslateToWrapperTransitionEnd))), !0
}
const Tt = {
    getTranslate: mt,
    setTranslate: gt,
    minTranslate: vt,
    maxTranslate: wt,
    translateTo: St
};

function bt(e, t) {
    const i = this;
    i.params.cssMode || (i.wrapperEl.style.transitionDuration = `${e}ms`), i.emit("setTransition", e, t)
}

function Le({
    swiper: e,
    runCallbacks: t,
    direction: i,
    step: s
}) {
    const {
        activeIndex: n,
        previousIndex: r
    } = e;
    let l = i;
    if (l || (n > r ? l = "next" : n < r ? l = "prev" : l = "reset"), e.emit(`transition${s}`), t && n !== r) {
        if (l === "reset") {
            e.emit(`slideResetTransition${s}`);
            return
        }
        e.emit(`slideChangeTransition${s}`), l === "next" ? e.emit(`slideNextTransition${s}`) : e.emit(`slidePrevTransition${s}`)
    }
}

function xt(e = !0, t) {
    const i = this,
        {
            params: s
        } = i;
    s.cssMode || (s.autoHeight && i.updateAutoHeight(), Le({
        swiper: i,
        runCallbacks: e,
        direction: t,
        step: "Start"
    }))
}

function Et(e = !0, t) {
    const i = this,
        {
            params: s
        } = i;
    i.animating = !1, !s.cssMode && (i.setTransition(0), Le({
        swiper: i,
        runCallbacks: e,
        direction: t,
        step: "End"
    }))
}
const yt = {
    setTransition: bt,
    transitionStart: xt,
    transitionEnd: Et
};

function Ct(e = 0, t = this.params.speed, i = !0, s, n) {
    typeof e == "string" && (e = parseInt(e, 10));
    const r = this;
    let l = e;
    l < 0 && (l = 0);
    const {
        params: o,
        snapGrid: a,
        slidesGrid: d,
        previousIndex: u,
        activeIndex: c,
        rtlTranslate: p,
        wrapperEl: f,
        enabled: g
    } = r;
    if (r.animating && o.preventInteractionOnTransition || !g && !s && !n) return !1;
    const m = Math.min(r.params.slidesPerGroupSkip, l);
    let S = m + Math.floor((l - m) / r.params.slidesPerGroup);
    S >= a.length && (S = a.length - 1);
    const h = -a[S];
    if (o.normalizeSlideIndex)
        for (let T = 0; T < d.length; T += 1) {
            const v = -Math.floor(h * 100),
                y = Math.floor(d[T] * 100),
                b = Math.floor(d[T + 1] * 100);
            typeof d[T + 1] != "undefined" ? v >= y && v < b - (b - y) / 2 ? l = T : v >= y && v < b && (l = T + 1) : v >= y && (l = T)
        }
    if (r.initialized && l !== c && (!r.allowSlideNext && h < r.translate && h < r.minTranslate() || !r.allowSlidePrev && h > r.translate && h > r.maxTranslate() && (c || 0) !== l)) return !1;
    l !== (u || 0) && i && r.emit("beforeSlideChangeStart"), r.updateProgress(h);
    let C;
    if (l > c ? C = "next" : l < c ? C = "prev" : C = "reset", p && -h === r.translate || !p && h === r.translate) return r.updateActiveIndex(l), o.autoHeight && r.updateAutoHeight(), r.updateSlidesClasses(), o.effect !== "slide" && r.setTranslate(h), C !== "reset" && (r.transitionStart(i, C), r.transitionEnd(i, C)), !1;
    if (o.cssMode) {
        const T = r.isHorizontal(),
            v = p ? h : -h;
        if (t === 0) {
            const y = r.virtual && r.params.virtual.enabled;
            y && (r.wrapperEl.style.scrollSnapType = "none", r._immediateVirtual = !0), y && !r._cssModeVirtualInitialSet && r.params.initialSlide > 0 ? (r._cssModeVirtualInitialSet = !0, requestAnimationFrame(() => {
                f[T ? "scrollLeft" : "scrollTop"] = v
            })) : f[T ? "scrollLeft" : "scrollTop"] = v, y && requestAnimationFrame(() => {
                r.wrapperEl.style.scrollSnapType = "", r._immediateVirtual = !1
            })
        } else {
            if (!r.support.smoothScroll) return Pe({
                swiper: r,
                targetPosition: v,
                side: T ? "left" : "top"
            }), !0;
            f.scrollTo({
                [T ? "left" : "top"]: v,
                behavior: "smooth"
            })
        }
        return !0
    }
    return r.setTransition(t), r.setTranslate(h), r.updateActiveIndex(l), r.updateSlidesClasses(), r.emit("beforeTransitionStart", t, s), r.transitionStart(i, C), t === 0 ? r.transitionEnd(i, C) : r.animating || (r.animating = !0, r.onSlideToWrapperTransitionEnd || (r.onSlideToWrapperTransitionEnd = function(v) {
        !r || r.destroyed || v.target === this && (r.wrapperEl.removeEventListener("transitionend", r.onSlideToWrapperTransitionEnd), r.onSlideToWrapperTransitionEnd = null, delete r.onSlideToWrapperTransitionEnd, r.transitionEnd(i, C))
    }), r.wrapperEl.addEventListener("transitionend", r.onSlideToWrapperTransitionEnd)), !0
}

function Mt(e = 0, t = this.params.speed, i = !0, s) {
    typeof e == "string" && (e = parseInt(e, 10));
    const n = this;
    let r = e;
    return n.params.loop && (n.virtual && n.params.virtual.enabled ? r = r + n.virtual.slidesBefore : r = n.getSlideIndexByData(r)), n.slideTo(r, t, i, s)
}

function Pt(e = this.params.speed, t = !0, i) {
    const s = this,
        {
            enabled: n,
            params: r,
            animating: l
        } = s;
    if (!n) return s;
    let o = r.slidesPerGroup;
    r.slidesPerView === "auto" && r.slidesPerGroup === 1 && r.slidesPerGroupAuto && (o = Math.max(s.slidesPerViewDynamic("current", !0), 1));
    const a = s.activeIndex < r.slidesPerGroupSkip ? 1 : o,
        d = s.virtual && r.virtual.enabled;
    if (r.loop) {
        if (l && !d && r.loopPreventsSliding) return !1;
        s.loopFix({
            direction: "next"
        }), s._clientLeft = s.wrapperEl.clientLeft
    }
    return r.rewind && s.isEnd ? s.slideTo(0, e, t, i) : s.slideTo(s.activeIndex + a, e, t, i)
}

function Ot(e = this.params.speed, t = !0, i) {
    const s = this,
        {
            params: n,
            snapGrid: r,
            slidesGrid: l,
            rtlTranslate: o,
            enabled: a,
            animating: d
        } = s;
    if (!a) return s;
    const u = s.virtual && n.virtual.enabled;
    if (n.loop) {
        if (d && !u && n.loopPreventsSliding) return !1;
        s.loopFix({
            direction: "prev"
        }), s._clientLeft = s.wrapperEl.clientLeft
    }
    const c = o ? s.translate : -s.translate;

    function p(h) {
        return h < 0 ? -Math.floor(Math.abs(h)) : Math.floor(h)
    }
    const f = p(c),
        g = r.map(h => p(h));
    let m = r[g.indexOf(f) - 1];
    if (typeof m == "undefined" && n.cssMode) {
        let h;
        r.forEach((C, T) => {
            f >= C && (h = T)
        }), typeof h != "undefined" && (m = r[h > 0 ? h - 1 : h])
    }
    let S = 0;
    if (typeof m != "undefined" && (S = l.indexOf(m), S < 0 && (S = s.activeIndex - 1), n.slidesPerView === "auto" && n.slidesPerGroup === 1 && n.slidesPerGroupAuto && (S = S - s.slidesPerViewDynamic("previous", !0) + 1, S = Math.max(S, 0))), n.rewind && s.isBeginning) {
        const h = s.params.virtual && s.params.virtual.enabled && s.virtual ? s.virtual.slides.length - 1 : s.slides.length - 1;
        return s.slideTo(h, e, t, i)
    }
    return s.slideTo(S, e, t, i)
}

function Lt(e = this.params.speed, t = !0, i) {
    const s = this;
    return s.slideTo(s.activeIndex, e, t, i)
}

function It(e = this.params.speed, t = !0, i, s = .5) {
    const n = this;
    let r = n.activeIndex;
    const l = Math.min(n.params.slidesPerGroupSkip, r),
        o = l + Math.floor((r - l) / n.params.slidesPerGroup),
        a = n.rtlTranslate ? n.translate : -n.translate;
    if (a >= n.snapGrid[o]) {
        const d = n.snapGrid[o],
            u = n.snapGrid[o + 1];
        a - d > (u - d) * s && (r += n.params.slidesPerGroup)
    } else {
        const d = n.snapGrid[o - 1],
            u = n.snapGrid[o];
        a - d <= (u - d) * s && (r -= n.params.slidesPerGroup)
    }
    return r = Math.max(r, 0), r = Math.min(r, n.slidesGrid.length - 1), n.slideTo(r, e, t, i)
}

function zt() {
    const e = this,
        {
            params: t,
            slidesEl: i
        } = e,
        s = t.slidesPerView === "auto" ? e.slidesPerViewDynamic() : t.slidesPerView;
    let n = e.clickedIndex,
        r;
    const l = e.isElement ? "swiper-slide" : `.${t.slideClass}`;
    if (t.loop) {
        if (e.animating) return;
        r = parseInt(e.clickedSlide.getAttribute("data-swiper-slide-index"), 10), t.centeredSlides ? n < e.loopedSlides - s / 2 || n > e.slides.length - e.loopedSlides + s / 2 ? (e.loopFix(), n = e.getSlideIndex(N(i, `${l}[data-swiper-slide-index="${r}"]`)[0]), oe(() => {
            e.slideTo(n)
        })) : e.slideTo(n) : n > e.slides.length - s ? (e.loopFix(), n = e.getSlideIndex(N(i, `${l}[data-swiper-slide-index="${r}"]`)[0]), oe(() => {
            e.slideTo(n)
        })) : e.slideTo(n)
    } else e.slideTo(n)
}
const _t = {
    slideTo: Ct,
    slideToLoop: Mt,
    slideNext: Pt,
    slidePrev: Ot,
    slideReset: Lt,
    slideToClosest: It,
    slideToClickedSlide: zt
};

function At(e) {
    const t = this,
        {
            params: i,
            slidesEl: s
        } = t;
    if (!i.loop || t.virtual && t.params.virtual.enabled) return;
    N(s, `.${i.slideClass}, swiper-slide`).forEach((r, l) => {
        r.setAttribute("data-swiper-slide-index", l)
    }), t.loopFix({
        slideRealIndex: e,
        direction: i.centeredSlides ? void 0 : "next"
    })
}

function Gt({
    slideRealIndex: e,
    slideTo: t = !0,
    direction: i,
    setTranslate: s,
    activeSlideIndex: n,
    byController: r,
    byMousewheel: l
} = {}) {
    const o = this;
    if (!o.params.loop) return;
    o.emit("beforeLoopFix");
    const {
        slides: a,
        allowSlidePrev: d,
        allowSlideNext: u,
        slidesEl: c,
        params: p
    } = o;
    if (o.allowSlidePrev = !0, o.allowSlideNext = !0, o.virtual && p.virtual.enabled) {
        t && (!p.centeredSlides && o.snapIndex === 0 ? o.slideTo(o.virtual.slides.length, 0, !1, !0) : p.centeredSlides && o.snapIndex < p.slidesPerView ? o.slideTo(o.virtual.slides.length + o.snapIndex, 0, !1, !0) : o.snapIndex === o.snapGrid.length - 1 && o.slideTo(o.virtual.slidesBefore, 0, !1, !0)), o.allowSlidePrev = d, o.allowSlideNext = u, o.emit("loopFix");
        return
    }
    const f = p.slidesPerView === "auto" ? o.slidesPerViewDynamic() : Math.ceil(parseFloat(p.slidesPerView, 10));
    let g = p.loopedSlides || f;
    g % p.slidesPerGroup !== 0 && (g += p.slidesPerGroup - g % p.slidesPerGroup), o.loopedSlides = g;
    const m = [],
        S = [];
    let h = o.activeIndex;
    typeof n == "undefined" ? n = o.getSlideIndex(o.slides.filter(b => b.classList.contains(p.slideActiveClass))[0]) : h = n;
    const C = i === "next" || !i,
        T = i === "prev" || !i;
    let v = 0,
        y = 0;
    if (n < g) {
        v = Math.max(g - n, p.slidesPerGroup);
        for (let b = 0; b < g - n; b += 1) {
            const L = b - Math.floor(b / a.length) * a.length;
            m.push(a.length - L - 1)
        }
    } else if (n > o.slides.length - g * 2) {
        y = Math.max(n - (o.slides.length - g * 2), p.slidesPerGroup);
        for (let b = 0; b < y; b += 1) {
            const L = b - Math.floor(b / a.length) * a.length;
            S.push(L)
        }
    }
    if (T && m.forEach(b => {
            o.slides[b].swiperLoopMoveDOM = !0, c.prepend(o.slides[b]), o.slides[b].swiperLoopMoveDOM = !1
        }), C && S.forEach(b => {
            o.slides[b].swiperLoopMoveDOM = !0, c.append(o.slides[b]), o.slides[b].swiperLoopMoveDOM = !1
        }), o.recalcSlides(), p.slidesPerView === "auto" && o.updateSlides(), p.watchSlidesProgress && o.updateSlidesOffset(), t) {
        if (m.length > 0 && T)
            if (typeof e == "undefined") {
                const b = o.slidesGrid[h],
                    x = o.slidesGrid[h + v] - b;
                l ? o.setTranslate(o.translate - x) : (o.slideTo(h + v, 0, !1, !0), s && (o.touches[o.isHorizontal() ? "startX" : "startY"] += x))
            } else s && o.slideToLoop(e, 0, !1, !0);
        else if (S.length > 0 && C)
            if (typeof e == "undefined") {
                const b = o.slidesGrid[h],
                    x = o.slidesGrid[h - y] - b;
                l ? o.setTranslate(o.translate - x) : (o.slideTo(h - y, 0, !1, !0), s && (o.touches[o.isHorizontal() ? "startX" : "startY"] += x))
            } else o.slideToLoop(e, 0, !1, !0)
    }
    if (o.allowSlidePrev = d, o.allowSlideNext = u, o.controller && o.controller.control && !r) {
        const b = {
            slideRealIndex: e,
            slideTo: !1,
            direction: i,
            setTranslate: s,
            activeSlideIndex: n,
            byController: !0
        };
        Array.isArray(o.controller.control) ? o.controller.control.forEach(L => {
            !L.destroyed && L.params.loop && L.loopFix(b)
        }) : o.controller.control instanceof o.constructor && o.controller.control.params.loop && o.controller.control.loopFix(b)
    }
    o.emit("loopFix")
}

function Vt() {
    const e = this,
        {
            params: t,
            slidesEl: i
        } = e;
    if (!t.loop || e.virtual && e.params.virtual.enabled) return;
    e.recalcSlides();
    const s = [];
    e.slides.forEach(n => {
        const r = typeof n.swiperSlideIndex == "undefined" ? n.getAttribute("data-swiper-slide-index") * 1 : n.swiperSlideIndex;
        s[r] = n
    }), e.slides.forEach(n => {
        n.removeAttribute("data-swiper-slide-index")
    }), s.forEach(n => {
        i.append(n)
    }), e.recalcSlides(), e.slideTo(e.realIndex, 0)
}
const Dt = {
    loopCreate: At,
    loopFix: Gt,
    loopDestroy: Vt
};

function Nt(e) {
    const t = this;
    if (!t.params.simulateTouch || t.params.watchOverflow && t.isLocked || t.params.cssMode) return;
    const i = t.params.touchEventsTarget === "container" ? t.el : t.wrapperEl;
    t.isElement && (t.__preventObserver__ = !0), i.style.cursor = "move", i.style.cursor = e ? "grabbing" : "grab", t.isElement && requestAnimationFrame(() => {
        t.__preventObserver__ = !1
    })
}

function $t() {
    const e = this;
    e.params.watchOverflow && e.isLocked || e.params.cssMode || (e.isElement && (e.__preventObserver__ = !0), e[e.params.touchEventsTarget === "container" ? "el" : "wrapperEl"].style.cursor = "", e.isElement && requestAnimationFrame(() => {
        e.__preventObserver__ = !1
    }))
}
const kt = {
    setGrabCursor: Nt,
    unsetGrabCursor: $t
};

function Bt(e, t = this) {
    function i(s) {
        if (!s || s === F() || s === G()) return null;
        s.assignedSlot && (s = s.assignedSlot);
        const n = s.closest(e);
        return !n && !s.getRootNode ? null : n || i(s.getRootNode().host)
    }
    return i(t)
}

function Rt(e) {
    const t = this,
        i = F(),
        s = G(),
        n = t.touchEventsData;
    n.evCache.push(e);
    const {
        params: r,
        touches: l,
        enabled: o
    } = t;
    if (!o || !r.simulateTouch && e.pointerType === "mouse" || t.animating && r.preventInteractionOnTransition) return;
    !t.animating && r.cssMode && r.loop && t.loopFix();
    let a = e;
    a.originalEvent && (a = a.originalEvent);
    let d = a.target;
    if (r.touchEventsTarget === "wrapper" && !t.wrapperEl.contains(d) || "which" in a && a.which === 3 || "button" in a && a.button > 0 || n.isTouched && n.isMoved) return;
    const u = !!r.noSwipingClass && r.noSwipingClass !== "",
        c = e.composedPath ? e.composedPath() : e.path;
    u && a.target && a.target.shadowRoot && c && (d = c[0]);
    const p = r.noSwipingSelector ? r.noSwipingSelector : `.${r.noSwipingClass}`,
        f = !!(a.target && a.target.shadowRoot);
    if (r.noSwiping && (f ? Bt(p, d) : d.closest(p))) {
        t.allowClick = !0;
        return
    }
    if (r.swipeHandler && !d.closest(r.swipeHandler)) return;
    l.currentX = a.pageX, l.currentY = a.pageY;
    const g = l.currentX,
        m = l.currentY,
        S = r.edgeSwipeDetection || r.iOSEdgeSwipeDetection,
        h = r.edgeSwipeThreshold || r.iOSEdgeSwipeThreshold;
    if (S && (g <= h || g >= s.innerWidth - h))
        if (S === "prevent") e.preventDefault();
        else return;
    Object.assign(n, {
        isTouched: !0,
        isMoved: !1,
        allowTouchCallbacks: !0,
        isScrolling: void 0,
        startMoving: void 0
    }), l.startX = g, l.startY = m, n.touchStartTime = J(), t.allowClick = !0, t.updateSize(), t.swipeDirection = void 0, r.threshold > 0 && (n.allowThresholdMove = !1);
    let C = !0;
    d.matches(n.focusableElements) && (C = !1, d.nodeName === "SELECT" && (n.isTouched = !1)), i.activeElement && i.activeElement.matches(n.focusableElements) && i.activeElement !== d && i.activeElement.blur();
    const T = C && t.allowTouchMove && r.touchStartPreventDefault;
    (r.touchStartForcePreventDefault || T) && !d.isContentEditable && a.preventDefault(), t.params.freeMode && t.params.freeMode.enabled && t.freeMode && t.animating && !r.cssMode && t.freeMode.onTouchStart(), t.emit("touchStart", a)
}

function Ft(e) {
    const t = F(),
        i = this,
        s = i.touchEventsData,
        {
            params: n,
            touches: r,
            rtlTranslate: l,
            enabled: o
        } = i;
    if (!o || !n.simulateTouch && e.pointerType === "mouse") return;
    let a = e;
    if (a.originalEvent && (a = a.originalEvent), !s.isTouched) {
        s.startMoving && s.isScrolling && i.emit("touchMoveOpposite", a);
        return
    }
    const d = s.evCache.findIndex(b => b.pointerId === a.pointerId);
    d >= 0 && (s.evCache[d] = a);
    const u = s.evCache.length > 1 ? s.evCache[0] : a,
        c = u.pageX,
        p = u.pageY;
    if (a.preventedByNestedSwiper) {
        r.startX = c, r.startY = p;
        return
    }
    if (!i.allowTouchMove) {
        a.target.matches(s.focusableElements) || (i.allowClick = !1), s.isTouched && (Object.assign(r, {
            startX: c,
            startY: p,
            prevX: i.touches.currentX,
            prevY: i.touches.currentY,
            currentX: c,
            currentY: p
        }), s.touchStartTime = J());
        return
    }
    if (n.touchReleaseOnEdges && !n.loop) {
        if (i.isVertical()) {
            if (p < r.startY && i.translate <= i.maxTranslate() || p > r.startY && i.translate >= i.minTranslate()) {
                s.isTouched = !1, s.isMoved = !1;
                return
            }
        } else if (c < r.startX && i.translate <= i.maxTranslate() || c > r.startX && i.translate >= i.minTranslate()) return
    }
    if (t.activeElement && a.target === t.activeElement && a.target.matches(s.focusableElements)) {
        s.isMoved = !0, i.allowClick = !1;
        return
    }
    if (s.allowTouchCallbacks && i.emit("touchMove", a), a.targetTouches && a.targetTouches.length > 1) return;
    r.currentX = c, r.currentY = p;
    const f = r.currentX - r.startX,
        g = r.currentY - r.startY;
    if (i.params.threshold && Math.sqrt(B(f, 2) + B(g, 2)) < i.params.threshold) return;
    if (typeof s.isScrolling == "undefined") {
        let b;
        i.isHorizontal() && r.currentY === r.startY || i.isVertical() && r.currentX === r.startX ? s.isScrolling = !1 : f * f + g * g >= 25 && (b = Math.atan2(Math.abs(g), Math.abs(f)) * 180 / Math.PI, s.isScrolling = i.isHorizontal() ? b > n.touchAngle : 90 - b > n.touchAngle)
    }
    if (s.isScrolling && i.emit("touchMoveOpposite", a), typeof s.startMoving == "undefined" && (r.currentX !== r.startX || r.currentY !== r.startY) && (s.startMoving = !0), s.isScrolling || i.zoom && i.params.zoom && i.params.zoom.enabled && s.evCache.length > 1) {
        s.isTouched = !1;
        return
    }
    if (!s.startMoving) return;
    i.allowClick = !1, !n.cssMode && a.cancelable && a.preventDefault(), n.touchMoveStopPropagation && !n.nested && a.stopPropagation();
    let m = i.isHorizontal() ? f : g,
        S = i.isHorizontal() ? r.currentX - r.previousX : r.currentY - r.previousY;
    n.oneWayMovement && (m = Math.abs(m) * (l ? 1 : -1), S = Math.abs(S) * (l ? 1 : -1)), r.diff = m, m *= n.touchRatio, l && (m = -m, S = -S);
    const h = i.touchesDirection;
    i.swipeDirection = m > 0 ? "prev" : "next", i.touchesDirection = S > 0 ? "prev" : "next";
    const C = i.params.loop && !n.cssMode;
    if (!s.isMoved) {
        if (C && i.loopFix({
                direction: i.swipeDirection
            }), s.startTranslate = i.getTranslate(), i.setTransition(0), i.animating) {
            const b = new window.CustomEvent("transitionend", {
                bubbles: !0,
                cancelable: !0
            });
            i.wrapperEl.dispatchEvent(b)
        }
        s.allowMomentumBounce = !1, n.grabCursor && (i.allowSlideNext === !0 || i.allowSlidePrev === !0) && i.setGrabCursor(!0), i.emit("sliderFirstMove", a)
    }
    let T;
    s.isMoved && h !== i.touchesDirection && C && Math.abs(m) >= 1 && (i.loopFix({
        direction: i.swipeDirection,
        setTranslate: !0
    }), T = !0), i.emit("sliderMove", a), s.isMoved = !0, s.currentTranslate = m + s.startTranslate;
    let v = !0,
        y = n.resistanceRatio;
    if (n.touchReleaseOnEdges && (y = 0), m > 0 ? (C && !T && s.currentTranslate > (n.centeredSlides ? i.minTranslate() - i.size / 2 : i.minTranslate()) && i.loopFix({
            direction: "prev",
            setTranslate: !0,
            activeSlideIndex: 0
        }), s.currentTranslate > i.minTranslate() && (v = !1, n.resistance && (s.currentTranslate = i.minTranslate() - 1 + B(-i.minTranslate() + s.startTranslate + m, y)))) : m < 0 && (C && !T && s.currentTranslate < (n.centeredSlides ? i.maxTranslate() + i.size / 2 : i.maxTranslate()) && i.loopFix({
            direction: "next",
            setTranslate: !0,
            activeSlideIndex: i.slides.length - (n.slidesPerView === "auto" ? i.slidesPerViewDynamic() : Math.ceil(parseFloat(n.slidesPerView, 10)))
        }), s.currentTranslate < i.maxTranslate() && (v = !1, n.resistance && (s.currentTranslate = i.maxTranslate() + 1 - B(i.maxTranslate() - s.startTranslate - m, y)))), v && (a.preventedByNestedSwiper = !0), !i.allowSlideNext && i.swipeDirection === "next" && s.currentTranslate < s.startTranslate && (s.currentTranslate = s.startTranslate), !i.allowSlidePrev && i.swipeDirection === "prev" && s.currentTranslate > s.startTranslate && (s.currentTranslate = s.startTranslate), !i.allowSlidePrev && !i.allowSlideNext && (s.currentTranslate = s.startTranslate), n.threshold > 0)
        if (Math.abs(m) > n.threshold || s.allowThresholdMove) {
            if (!s.allowThresholdMove) {
                s.allowThresholdMove = !0, r.startX = r.currentX, r.startY = r.currentY, s.currentTranslate = s.startTranslate, r.diff = i.isHorizontal() ? r.currentX - r.startX : r.currentY - r.startY;
                return
            }
        } else {
            s.currentTranslate = s.startTranslate;
            return
        }!n.followFinger || n.cssMode || ((n.freeMode && n.freeMode.enabled && i.freeMode || n.watchSlidesProgress) && (i.updateActiveIndex(), i.updateSlidesClasses()), i.params.freeMode && n.freeMode.enabled && i.freeMode && i.freeMode.onTouchMove(), i.updateProgress(s.currentTranslate), i.setTranslate(s.currentTranslate))
}

function Ht(e) {
    const t = this,
        i = t.touchEventsData,
        s = i.evCache.findIndex(T => T.pointerId === e.pointerId);
    if (s >= 0 && i.evCache.splice(s, 1), ["pointercancel", "pointerout", "pointerleave"].includes(e.type) && !(e.type === "pointercancel" && (t.browser.isSafari || t.browser.isWebView))) return;
    const {
        params: n,
        touches: r,
        rtlTranslate: l,
        slidesGrid: o,
        enabled: a
    } = t;
    if (!a || !n.simulateTouch && e.pointerType === "mouse") return;
    let d = e;
    if (d.originalEvent && (d = d.originalEvent), i.allowTouchCallbacks && t.emit("touchEnd", d), i.allowTouchCallbacks = !1, !i.isTouched) {
        i.isMoved && n.grabCursor && t.setGrabCursor(!1), i.isMoved = !1, i.startMoving = !1;
        return
    }
    n.grabCursor && i.isMoved && i.isTouched && (t.allowSlideNext === !0 || t.allowSlidePrev === !0) && t.setGrabCursor(!1);
    const u = J(),
        c = u - i.touchStartTime;
    if (t.allowClick) {
        const T = d.path || d.composedPath && d.composedPath();
        t.updateClickedSlide(T && T[0] || d.target), t.emit("tap click", d), c < 300 && u - i.lastClickTime < 300 && t.emit("doubleTap doubleClick", d)
    }
    if (i.lastClickTime = J(), oe(() => {
            t.destroyed || (t.allowClick = !0)
        }), !i.isTouched || !i.isMoved || !t.swipeDirection || r.diff === 0 || i.currentTranslate === i.startTranslate) {
        i.isTouched = !1, i.isMoved = !1, i.startMoving = !1;
        return
    }
    i.isTouched = !1, i.isMoved = !1, i.startMoving = !1;
    let p;
    if (n.followFinger ? p = l ? t.translate : -t.translate : p = -i.currentTranslate, n.cssMode) return;
    if (t.params.freeMode && n.freeMode.enabled) {
        t.freeMode.onTouchEnd({
            currentPos: p
        });
        return
    }
    let f = 0,
        g = t.slidesSizesGrid[0];
    for (let T = 0; T < o.length; T += T < n.slidesPerGroupSkip ? 1 : n.slidesPerGroup) {
        const v = T < n.slidesPerGroupSkip - 1 ? 1 : n.slidesPerGroup;
        typeof o[T + v] != "undefined" ? p >= o[T] && p < o[T + v] && (f = T, g = o[T + v] - o[T]) : p >= o[T] && (f = T, g = o[o.length - 1] - o[o.length - 2])
    }
    let m = null,
        S = null;
    n.rewind && (t.isBeginning ? S = t.params.virtual && t.params.virtual.enabled && t.virtual ? t.virtual.slides.length - 1 : t.slides.length - 1 : t.isEnd && (m = 0));
    const h = (p - o[f]) / g,
        C = f < n.slidesPerGroupSkip - 1 ? 1 : n.slidesPerGroup;
    if (c > n.longSwipesMs) {
        if (!n.longSwipes) {
            t.slideTo(t.activeIndex);
            return
        }
        t.swipeDirection === "next" && (h >= n.longSwipesRatio ? t.slideTo(n.rewind && t.isEnd ? m : f + C) : t.slideTo(f)), t.swipeDirection === "prev" && (h > 1 - n.longSwipesRatio ? t.slideTo(f + C) : S !== null && h < 0 && Math.abs(h) > n.longSwipesRatio ? t.slideTo(S) : t.slideTo(f))
    } else {
        if (!n.shortSwipes) {
            t.slideTo(t.activeIndex);
            return
        }
        t.navigation && (d.target === t.navigation.nextEl || d.target === t.navigation.prevEl) ? d.target === t.navigation.nextEl ? t.slideTo(f + C) : t.slideTo(f) : (t.swipeDirection === "next" && t.slideTo(m !== null ? m : f + C), t.swipeDirection === "prev" && t.slideTo(S !== null ? S : f))
    }
}

function be() {
    const e = this,
        {
            params: t,
            el: i
        } = e;
    if (i && i.offsetWidth === 0) return;
    t.breakpoints && e.setBreakpoint();
    const {
        allowSlideNext: s,
        allowSlidePrev: n,
        snapGrid: r
    } = e, l = e.virtual && e.params.virtual.enabled;
    e.allowSlideNext = !0, e.allowSlidePrev = !0, e.updateSize(), e.updateSlides(), e.updateSlidesClasses();
    const o = l && t.loop;
    (t.slidesPerView === "auto" || t.slidesPerView > 1) && e.isEnd && !e.isBeginning && !e.params.centeredSlides && !o ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.params.loop && !l ? e.slideToLoop(e.realIndex, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0), e.autoplay && e.autoplay.running && e.autoplay.paused && (clearTimeout(e.autoplay.resizeTimeout), e.autoplay.resizeTimeout = setTimeout(() => {
        e.autoplay && e.autoplay.running && e.autoplay.paused && e.autoplay.resume()
    }, 500)), e.allowSlidePrev = n, e.allowSlideNext = s, e.params.watchOverflow && r !== e.snapGrid && e.checkOverflow()
}

function jt(e) {
    const t = this;
    t.enabled && (t.allowClick || (t.params.preventClicks && e.preventDefault(), t.params.preventClicksPropagation && t.animating && (e.stopPropagation(), e.stopImmediatePropagation())))
}

function Wt() {
    const e = this,
        {
            wrapperEl: t,
            rtlTranslate: i,
            enabled: s
        } = e;
    if (!s) return;
    e.previousTranslate = e.translate, e.isHorizontal() ? e.translate = -t.scrollLeft : e.translate = -t.scrollTop, e.translate === 0 && (e.translate = 0), e.updateActiveIndex(), e.updateSlidesClasses();
    let n;
    const r = e.maxTranslate() - e.minTranslate();
    r === 0 ? n = 0 : n = (e.translate - e.minTranslate()) / r, n !== e.progress && e.updateProgress(i ? -e.translate : e.translate), e.emit("setTranslate", e.translate, !1)
}

function Xt(e) {
    const t = this;
    Z(t, e.target), t.update()
}
let xe = !1;

function Yt() {}
const Ie = (e, t) => {
    const i = F(),
        {
            params: s,
            el: n,
            wrapperEl: r,
            device: l
        } = e,
        o = !!s.nested,
        a = t === "on" ? "addEventListener" : "removeEventListener",
        d = t;
    n[a]("pointerdown", e.onTouchStart, {
        passive: !1
    }), i[a]("pointermove", e.onTouchMove, {
        passive: !1,
        capture: o
    }), i[a]("pointerup", e.onTouchEnd, {
        passive: !0
    }), i[a]("pointercancel", e.onTouchEnd, {
        passive: !0
    }), i[a]("pointerout", e.onTouchEnd, {
        passive: !0
    }), i[a]("pointerleave", e.onTouchEnd, {
        passive: !0
    }), (s.preventClicks || s.preventClicksPropagation) && n[a]("click", e.onClick, !0), s.cssMode && r[a]("scroll", e.onScroll), s.updateOnWindowResize ? e[d](l.ios || l.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", be, !0) : e[d]("observerUpdate", be, !0), n[a]("load", e.onLoad, {
        capture: !0
    })
};

function qt() {
    const e = this,
        t = F(),
        {
            params: i
        } = e;
    e.onTouchStart = Rt.bind(e), e.onTouchMove = Ft.bind(e), e.onTouchEnd = Ht.bind(e), i.cssMode && (e.onScroll = Wt.bind(e)), e.onClick = jt.bind(e), e.onLoad = Xt.bind(e), xe || (t.addEventListener("touchstart", Yt), xe = !0), Ie(e, "on")
}

function Kt() {
    Ie(this, "off")
}
const Ut = {
        attachEvents: qt,
        detachEvents: Kt
    },
    Ee = (e, t) => e.grid && t.grid && t.grid.rows > 1;

function Zt() {
    const e = this,
        {
            realIndex: t,
            initialized: i,
            params: s,
            el: n
        } = e,
        r = s.breakpoints;
    if (!r || r && Object.keys(r).length === 0) return;
    const l = e.getBreakpoint(r, e.params.breakpointsBase, e.el);
    if (!l || e.currentBreakpoint === l) return;
    const a = (l in r ? r[l] : void 0) || e.originalParams,
        d = Ee(e, s),
        u = Ee(e, a),
        c = s.enabled;
    d && !u ? (n.classList.remove(`${s.containerModifierClass}grid`, `${s.containerModifierClass}grid-column`), e.emitContainerClasses()) : !d && u && (n.classList.add(`${s.containerModifierClass}grid`), (a.grid.fill && a.grid.fill === "column" || !a.grid.fill && s.grid.fill === "column") && n.classList.add(`${s.containerModifierClass}grid-column`), e.emitContainerClasses()), ["navigation", "pagination", "scrollbar"].forEach(m => {
        const S = s[m] && s[m].enabled,
            h = a[m] && a[m].enabled;
        S && !h && e[m].disable(), !S && h && e[m].enable()
    });
    const p = a.direction && a.direction !== s.direction,
        f = s.loop && (a.slidesPerView !== s.slidesPerView || p);
    p && i && e.changeDirection(), A(e.params, a);
    const g = e.params.enabled;
    Object.assign(e, {
        allowTouchMove: e.params.allowTouchMove,
        allowSlideNext: e.params.allowSlideNext,
        allowSlidePrev: e.params.allowSlidePrev
    }), c && !g ? e.disable() : !c && g && e.enable(), e.currentBreakpoint = l, e.emit("_beforeBreakpoint", a), f && i && (e.loopDestroy(), e.loopCreate(t), e.updateSlides()), e.emit("breakpoint", a)
}

function Jt(e, t = "window", i) {
    if (!e || t === "container" && !i) return;
    let s = !1;
    const n = G(),
        r = t === "window" ? n.innerHeight : i.clientHeight,
        l = Object.keys(e).map(o => {
            if (typeof o == "string" && o.indexOf("@") === 0) {
                const a = parseFloat(o.substr(1));
                return {
                    value: r * a,
                    point: o
                }
            }
            return {
                value: o,
                point: o
            }
        });
    l.sort((o, a) => parseInt(o.value, 10) - parseInt(a.value, 10));
    for (let o = 0; o < l.length; o += 1) {
        const {
            point: a,
            value: d
        } = l[o];
        t === "window" ? n.matchMedia(`(min-width: ${d}px)`).matches && (s = a) : d <= i.clientWidth && (s = a)
    }
    return s || "max"
}
const Qt = {
    setBreakpoint: Zt,
    getBreakpoint: Jt
};

function ei(e, t) {
    const i = [];
    return e.forEach(s => {
        typeof s == "object" ? Object.keys(s).forEach(n => {
            s[n] && i.push(t + n)
        }) : typeof s == "string" && i.push(t + s)
    }), i
}

function ti() {
    const e = this,
        {
            classNames: t,
            params: i,
            rtl: s,
            el: n,
            device: r
        } = e,
        l = ei(["initialized", i.direction, {
            "free-mode": e.params.freeMode && i.freeMode.enabled
        }, {
            autoheight: i.autoHeight
        }, {
            rtl: s
        }, {
            grid: i.grid && i.grid.rows > 1
        }, {
            "grid-column": i.grid && i.grid.rows > 1 && i.grid.fill === "column"
        }, {
            android: r.android
        }, {
            ios: r.ios
        }, {
            "css-mode": i.cssMode
        }, {
            centered: i.cssMode && i.centeredSlides
        }, {
            "watch-progress": i.watchSlidesProgress
        }], i.containerModifierClass);
    t.push(...l), n.classList.add(...t), e.emitContainerClasses()
}

function ii() {
    const e = this,
        {
            el: t,
            classNames: i
        } = e;
    t.classList.remove(...i), e.emitContainerClasses()
}
const si = {
    addClasses: ti,
    removeClasses: ii
};

function ri() {
    const e = this,
        {
            isLocked: t,
            params: i
        } = e,
        {
            slidesOffsetBefore: s
        } = i;
    if (s) {
        const n = e.slides.length - 1,
            r = e.slidesGrid[n] + e.slidesSizesGrid[n] + s * 2;
        e.isLocked = e.size > r
    } else e.isLocked = e.snapGrid.length === 1;
    i.allowSlideNext === !0 && (e.allowSlideNext = !e.isLocked), i.allowSlidePrev === !0 && (e.allowSlidePrev = !e.isLocked), t && t !== e.isLocked && (e.isEnd = !1), t !== e.isLocked && e.emit(e.isLocked ? "lock" : "unlock")
}
const ni = {
        checkOverflow: ri
    },
    ye = {
        init: !0,
        direction: "horizontal",
        oneWayMovement: !1,
        touchEventsTarget: "wrapper",
        initialSlide: 0,
        speed: 300,
        cssMode: !1,
        updateOnWindowResize: !0,
        resizeObserver: !0,
        nested: !1,
        createElements: !1,
        enabled: !0,
        focusableElements: "input, select, option, textarea, button, video, label",
        width: null,
        height: null,
        preventInteractionOnTransition: !1,
        userAgent: null,
        url: null,
        edgeSwipeDetection: !1,
        edgeSwipeThreshold: 20,
        autoHeight: !1,
        setWrapperSize: !1,
        virtualTranslate: !1,
        effect: "slide",
        breakpoints: void 0,
        breakpointsBase: "window",
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerGroupSkip: 0,
        slidesPerGroupAuto: !1,
        centeredSlides: !1,
        centeredSlidesBounds: !1,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        normalizeSlideIndex: !0,
        centerInsufficientSlides: !1,
        watchOverflow: !0,
        roundLengths: !1,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: !0,
        shortSwipes: !0,
        longSwipes: !0,
        longSwipesRatio: .5,
        longSwipesMs: 300,
        followFinger: !0,
        allowTouchMove: !0,
        threshold: 5,
        touchMoveStopPropagation: !1,
        touchStartPreventDefault: !0,
        touchStartForcePreventDefault: !1,
        touchReleaseOnEdges: !1,
        uniqueNavElements: !0,
        resistance: !0,
        resistanceRatio: .85,
        watchSlidesProgress: !1,
        grabCursor: !1,
        preventClicks: !0,
        preventClicksPropagation: !0,
        slideToClickedSlide: !1,
        loop: !1,
        loopedSlides: null,
        loopPreventsSliding: !0,
        rewind: !1,
        allowSlidePrev: !0,
        allowSlideNext: !0,
        swipeHandler: null,
        noSwiping: !0,
        noSwipingClass: "swiper-no-swiping",
        noSwipingSelector: null,
        passiveListeners: !0,
        maxBackfaceHiddenSlides: 10,
        containerModifierClass: "swiper-",
        slideClass: "swiper-slide",
        slideActiveClass: "swiper-slide-active",
        slideVisibleClass: "swiper-slide-visible",
        slideNextClass: "swiper-slide-next",
        slidePrevClass: "swiper-slide-prev",
        wrapperClass: "swiper-wrapper",
        lazyPreloaderClass: "swiper-lazy-preloader",
        lazyPreloadPrevNext: 0,
        runCallbacksOnInit: !0,
        _emitClasses: !1
    };

function ai(e, t) {
    return function(s = {}) {
        const n = Object.keys(s)[0],
            r = s[n];
        if (typeof r != "object" || r === null) {
            A(t, s);
            return
        }
        if (["navigation", "pagination", "scrollbar"].indexOf(n) >= 0 && e[n] === !0 && (e[n] = {
                auto: !0
            }), !(n in e && "enabled" in r)) {
            A(t, s);
            return
        }
        e[n] === !0 && (e[n] = {
            enabled: !0
        }), typeof e[n] == "object" && !("enabled" in e[n]) && (e[n].enabled = !0), e[n] || (e[n] = {
            enabled: !1
        }), A(t, s)
    }
}
const ae = {
        eventsEmitter: st,
        update: ht,
        translate: Tt,
        transition: yt,
        slide: _t,
        loop: Dt,
        grabCursor: kt,
        events: Ut,
        breakpoints: Qt,
        checkOverflow: ni,
        classes: si
    },
    le = {};
let X = class D {
    constructor(...t) {
        let i, s;
        t.length === 1 && t[0].constructor && Object.prototype.toString.call(t[0]).slice(8, -1) === "Object" ? s = t[0] : [i, s] = t, s || (s = {}), s = A({}, s), i && !s.el && (s.el = i);
        const n = F();
        if (s.el && typeof s.el == "string" && n.querySelectorAll(s.el).length > 1) {
            const a = [];
            return n.querySelectorAll(s.el).forEach(d => {
                const u = A({}, s, {
                    el: d
                });
                a.push(new D(u))
            }), a
        }
        const r = this;
        r.__swiper__ = !0, r.support = Oe(), r.device = Je({
            userAgent: s.userAgent
        }), r.browser = et(), r.eventsListeners = {}, r.eventsAnyListeners = [], r.modules = [...r.__modules__], s.modules && Array.isArray(s.modules) && r.modules.push(...s.modules);
        const l = {};
        r.modules.forEach(a => {
            a({
                params: s,
                swiper: r,
                extendParams: ai(s, l),
                on: r.on.bind(r),
                once: r.once.bind(r),
                off: r.off.bind(r),
                emit: r.emit.bind(r)
            })
        });
        const o = A({}, ye, l);
        return r.params = A({}, o, le, s), r.originalParams = A({}, r.params), r.passedParams = A({}, s), r.params && r.params.on && Object.keys(r.params.on).forEach(a => {
            r.on(a, r.params.on[a])
        }), r.params && r.params.onAny && r.onAny(r.params.onAny), Object.assign(r, {
            enabled: r.params.enabled,
            el: i,
            classNames: [],
            slides: [],
            slidesGrid: [],
            snapGrid: [],
            slidesSizesGrid: [],
            isHorizontal() {
                return r.params.direction === "horizontal"
            },
            isVertical() {
                return r.params.direction === "vertical"
            },
            activeIndex: 0,
            realIndex: 0,
            isBeginning: !0,
            isEnd: !1,
            translate: 0,
            previousTranslate: 0,
            progress: 0,
            velocity: 0,
            animating: !1,
            cssOverflowAdjustment() {
                return Math.trunc(this.translate / B(2, 23)) * B(2, 23)
            },
            allowSlideNext: r.params.allowSlideNext,
            allowSlidePrev: r.params.allowSlidePrev,
            touchEventsData: {
                isTouched: void 0,
                isMoved: void 0,
                allowTouchCallbacks: void 0,
                touchStartTime: void 0,
                isScrolling: void 0,
                currentTranslate: void 0,
                startTranslate: void 0,
                allowThresholdMove: void 0,
                focusableElements: r.params.focusableElements,
                lastClickTime: 0,
                clickTimeout: void 0,
                velocities: [],
                allowMomentumBounce: void 0,
                startMoving: void 0,
                evCache: []
            },
            allowClick: !0,
            allowTouchMove: r.params.allowTouchMove,
            touches: {
                startX: 0,
                startY: 0,
                currentX: 0,
                currentY: 0,
                diff: 0
            },
            imagesToLoad: [],
            imagesLoaded: 0
        }), r.emit("_swiper"), r.params.init && r.init(), r
    }
    getSlideIndex(t) {
        const {
            slidesEl: i,
            params: s
        } = this, n = N(i, `.${s.slideClass}, swiper-slide`), r = we(n[0]);
        return we(t) - r
    }
    getSlideIndexByData(t) {
        return this.getSlideIndex(this.slides.filter(i => i.getAttribute("data-swiper-slide-index") * 1 === t)[0])
    }
    recalcSlides() {
        const t = this,
            {
                slidesEl: i,
                params: s
            } = t;
        t.slides = N(i, `.${s.slideClass}, swiper-slide`)
    }
    enable() {
        const t = this;
        t.enabled || (t.enabled = !0, t.params.grabCursor && t.setGrabCursor(), t.emit("enable"))
    }
    disable() {
        const t = this;
        t.enabled && (t.enabled = !1, t.params.grabCursor && t.unsetGrabCursor(), t.emit("disable"))
    }
    setProgress(t, i) {
        const s = this;
        t = Math.min(Math.max(t, 0), 1);
        const n = s.minTranslate(),
            l = (s.maxTranslate() - n) * t + n;
        s.translateTo(l, typeof i == "undefined" ? 0 : i), s.updateActiveIndex(), s.updateSlidesClasses()
    }
    emitContainerClasses() {
        const t = this;
        if (!t.params._emitClasses || !t.el) return;
        const i = t.el.className.split(" ").filter(s => s.indexOf("swiper") === 0 || s.indexOf(t.params.containerModifierClass) === 0);
        t.emit("_containerClasses", i.join(" "))
    }
    getSlideClasses(t) {
        const i = this;
        return i.destroyed ? "" : t.className.split(" ").filter(s => s.indexOf("swiper-slide") === 0 || s.indexOf(i.params.slideClass) === 0).join(" ")
    }
    emitSlidesClasses() {
        const t = this;
        if (!t.params._emitClasses || !t.el) return;
        const i = [];
        t.slides.forEach(s => {
            const n = t.getSlideClasses(s);
            i.push({
                slideEl: s,
                classNames: n
            }), t.emit("_slideClass", s, n)
        }), t.emit("_slideClasses", i)
    }
    slidesPerViewDynamic(t = "current", i = !1) {
        const s = this,
            {
                params: n,
                slides: r,
                slidesGrid: l,
                slidesSizesGrid: o,
                size: a,
                activeIndex: d
            } = s;
        let u = 1;
        if (n.centeredSlides) {
            let c = r[d].swiperSlideSize,
                p;
            for (let f = d + 1; f < r.length; f += 1) r[f] && !p && (c += r[f].swiperSlideSize, u += 1, c > a && (p = !0));
            for (let f = d - 1; f >= 0; f -= 1) r[f] && !p && (c += r[f].swiperSlideSize, u += 1, c > a && (p = !0))
        } else if (t === "current")
            for (let c = d + 1; c < r.length; c += 1)(i ? l[c] + o[c] - l[d] < a : l[c] - l[d] < a) && (u += 1);
        else
            for (let c = d - 1; c >= 0; c -= 1) l[d] - l[c] < a && (u += 1);
        return u
    }
    update() {
        const t = this;
        if (!t || t.destroyed) return;
        const {
            snapGrid: i,
            params: s
        } = t;
        s.breakpoints && t.setBreakpoint(), [...t.el.querySelectorAll('[loading="lazy"]')].forEach(l => {
            l.complete && Z(t, l)
        }), t.updateSize(), t.updateSlides(), t.updateProgress(), t.updateSlidesClasses();

        function n() {
            const l = t.rtlTranslate ? t.translate * -1 : t.translate,
                o = Math.min(Math.max(l, t.maxTranslate()), t.minTranslate());
            t.setTranslate(o), t.updateActiveIndex(), t.updateSlidesClasses()
        }
        let r;
        if (t.params.freeMode && t.params.freeMode.enabled) n(), t.params.autoHeight && t.updateAutoHeight();
        else {
            if ((t.params.slidesPerView === "auto" || t.params.slidesPerView > 1) && t.isEnd && !t.params.centeredSlides) {
                const l = t.virtual && t.params.virtual.enabled ? t.virtual.slides : t.slides;
                r = t.slideTo(l.length - 1, 0, !1, !0)
            } else r = t.slideTo(t.activeIndex, 0, !1, !0);
            r || n()
        }
        s.watchOverflow && i !== t.snapGrid && t.checkOverflow(), t.emit("update")
    }
    changeDirection(t, i = !0) {
        const s = this,
            n = s.params.direction;
        return t || (t = n === "horizontal" ? "vertical" : "horizontal"), t === n || t !== "horizontal" && t !== "vertical" || (s.el.classList.remove(`${s.params.containerModifierClass}${n}`), s.el.classList.add(`${s.params.containerModifierClass}${t}`), s.emitContainerClasses(), s.params.direction = t, s.slides.forEach(r => {
            t === "vertical" ? r.style.width = "" : r.style.height = ""
        }), s.emit("changeDirection"), i && s.update()), s
    }
    changeLanguageDirection(t) {
        const i = this;
        i.rtl && t === "rtl" || !i.rtl && t === "ltr" || (i.rtl = t === "rtl", i.rtlTranslate = i.params.direction === "horizontal" && i.rtl, i.rtl ? (i.el.classList.add(`${i.params.containerModifierClass}rtl`), i.el.dir = "rtl") : (i.el.classList.remove(`${i.params.containerModifierClass}rtl`), i.el.dir = "ltr"), i.update())
    }
    mount(t) {
        const i = this;
        if (i.mounted) return !0;
        let s = t || i.params.el;
        if (typeof s == "string" && (s = document.querySelector(s)), !s) return !1;
        s.swiper = i, s.shadowEl && (i.isElement = !0);
        const n = () => `.${(i.params.wrapperClass||"").trim().split(" ").join(".")}`;
        let l = (() => s && s.shadowRoot && s.shadowRoot.querySelector ? s.shadowRoot.querySelector(n()) : N(s, n())[0])();
        return !l && i.params.createElements && (l = Xe("div", i.params.wrapperClass), s.append(l), N(s, `.${i.params.slideClass}`).forEach(o => {
            l.append(o)
        })), Object.assign(i, {
            el: s,
            wrapperEl: l,
            slidesEl: i.isElement ? s : l,
            mounted: !0,
            rtl: s.dir.toLowerCase() === "rtl" || $(s, "direction") === "rtl",
            rtlTranslate: i.params.direction === "horizontal" && (s.dir.toLowerCase() === "rtl" || $(s, "direction") === "rtl"),
            wrongRTL: $(l, "display") === "-webkit-box"
        }), !0
    }
    init(t) {
        const i = this;
        return i.initialized || i.mount(t) === !1 || (i.emit("beforeInit"), i.params.breakpoints && i.setBreakpoint(), i.addClasses(), i.updateSize(), i.updateSlides(), i.params.watchOverflow && i.checkOverflow(), i.params.grabCursor && i.enabled && i.setGrabCursor(), i.params.loop && i.virtual && i.params.virtual.enabled ? i.slideTo(i.params.initialSlide + i.virtual.slidesBefore, 0, i.params.runCallbacksOnInit, !1, !0) : i.slideTo(i.params.initialSlide, 0, i.params.runCallbacksOnInit, !1, !0), i.params.loop && i.loopCreate(), i.attachEvents(), [...i.el.querySelectorAll('[loading="lazy"]')].forEach(n => {
            n.complete ? Z(i, n) : n.addEventListener("load", r => {
                Z(i, r.target)
            })
        }), de(i), i.initialized = !0, de(i), i.emit("init"), i.emit("afterInit")), i
    }
    destroy(t = !0, i = !0) {
        const s = this,
            {
                params: n,
                el: r,
                wrapperEl: l,
                slides: o
            } = s;
        return typeof s.params == "undefined" || s.destroyed || (s.emit("beforeDestroy"), s.initialized = !1, s.detachEvents(), n.loop && s.loopDestroy(), i && (s.removeClasses(), r.removeAttribute("style"), l.removeAttribute("style"), o && o.length && o.forEach(a => {
            a.classList.remove(n.slideVisibleClass, n.slideActiveClass, n.slideNextClass, n.slidePrevClass), a.removeAttribute("style"), a.removeAttribute("data-swiper-slide-index")
        })), s.emit("destroy"), Object.keys(s.eventsListeners).forEach(a => {
            s.off(a)
        }), t !== !1 && (s.el.swiper = null, Fe(s)), s.destroyed = !0), null
    }
    static extendDefaults(t) {
        A(le, t)
    }
    static get extendedDefaults() {
        return le
    }
    static get defaults() {
        return ye
    }
    static installModule(t) {
        D.prototype.__modules__ || (D.prototype.__modules__ = []);
        const i = D.prototype.__modules__;
        typeof t == "function" && i.indexOf(t) < 0 && i.push(t)
    }
    static use(t) {
        return Array.isArray(t) ? (t.forEach(i => D.installModule(i)), D) : (D.installModule(t), D)
    }
};
Object.keys(ae).forEach(e => {
    Object.keys(ae[e]).forEach(t => {
        X.prototype[t] = ae[e][t]
    })
});
X.use([tt, it]);

function R(e) {
    return typeof e == "object" && e !== null && e.constructor && Object.prototype.toString.call(e).slice(8, -1) === "Object"
}

function k(e, t) {
    const i = ["__proto__", "constructor", "prototype"];
    Object.keys(t).filter(s => i.indexOf(s) < 0).forEach(s => {
        typeof e[s] == "undefined" ? e[s] = t[s] : R(t[s]) && R(e[s]) && Object.keys(t[s]).length > 0 ? t[s].__swiper__ ? e[s] = t[s] : k(e[s], t[s]) : e[s] = t[s]
    })
}

function ze(e = {}) {
    return e.navigation && typeof e.navigation.nextEl == "undefined" && typeof e.navigation.prevEl == "undefined"
}

function _e(e = {}) {
    return e.pagination && typeof e.pagination.el == "undefined"
}

function Ae(e = {}) {
    return e.scrollbar && typeof e.scrollbar.el == "undefined"
}

function Ge(e = "") {
    const t = e.split(" ").map(s => s.trim()).filter(s => !!s),
        i = [];
    return t.forEach(s => {
        i.indexOf(s) < 0 && i.push(s)
    }), i.join(" ")
}

function li(e = "") {
    return e ? e.includes("swiper-wrapper") ? e : `swiper-wrapper ${e}` : "swiper-wrapper"
}
const Ve = ["eventsPrefix", "injectStyles", "injectStylesUrls", "modules", "init", "_direction", "oneWayMovement", "touchEventsTarget", "initialSlide", "_speed", "cssMode", "updateOnWindowResize", "resizeObserver", "nested", "focusableElements", "_enabled", "_width", "_height", "preventInteractionOnTransition", "userAgent", "url", "_edgeSwipeDetection", "_edgeSwipeThreshold", "_freeMode", "_autoHeight", "setWrapperSize", "virtualTranslate", "_effect", "breakpoints", "_spaceBetween", "_slidesPerView", "maxBackfaceHiddenSlides", "_grid", "_slidesPerGroup", "_slidesPerGroupSkip", "_slidesPerGroupAuto", "_centeredSlides", "_centeredSlidesBounds", "_slidesOffsetBefore", "_slidesOffsetAfter", "normalizeSlideIndex", "_centerInsufficientSlides", "_watchOverflow", "roundLengths", "touchRatio", "touchAngle", "simulateTouch", "_shortSwipes", "_longSwipes", "longSwipesRatio", "longSwipesMs", "_followFinger", "allowTouchMove", "_threshold", "touchMoveStopPropagation", "touchStartPreventDefault", "touchStartForcePreventDefault", "touchReleaseOnEdges", "uniqueNavElements", "_resistance", "_resistanceRatio", "_watchSlidesProgress", "_grabCursor", "preventClicks", "preventClicksPropagation", "_slideToClickedSlide", "_loop", "loopedSlides", "loopPreventsSliding", "_rewind", "_allowSlidePrev", "_allowSlideNext", "_swipeHandler", "_noSwiping", "noSwipingClass", "noSwipingSelector", "passiveListeners", "containerModifierClass", "slideClass", "slideActiveClass", "slideVisibleClass", "slideNextClass", "slidePrevClass", "wrapperClass", "lazyPreloaderClass", "lazyPreloadPrevNext", "runCallbacksOnInit", "observer", "observeParents", "observeSlideChildren", "a11y", "_autoplay", "_controller", "coverflowEffect", "cubeEffect", "fadeEffect", "flipEffect", "creativeEffect", "cardsEffect", "hashNavigation", "history", "keyboard", "mousewheel", "_navigation", "_pagination", "parallax", "_scrollbar", "_thumbs", "virtual", "zoom", "control"];

function oi(e = {}, t = !0) {
    const i = {
            on: {}
        },
        s = {},
        n = {};
    k(i, X.defaults), k(i, X.extendedDefaults), i._emitClasses = !0, i.init = !1;
    const r = {},
        l = Ve.map(a => a.replace(/_/, "")),
        o = Object.assign({}, e);
    return Object.keys(o).forEach(a => {
        typeof e[a] != "undefined" && (l.indexOf(a) >= 0 ? R(e[a]) ? (i[a] = {}, n[a] = {}, k(i[a], e[a]), k(n[a], e[a])) : (i[a] = e[a], n[a] = e[a]) : a.search(/on[A-Z]/) === 0 && typeof e[a] == "function" ? t ? s[`${a[2].toLowerCase()}${a.substr(3)}`] = e[a] : i.on[`${a[2].toLowerCase()}${a.substr(3)}`] = e[a] : r[a] = e[a])
    }), ["navigation", "pagination", "scrollbar"].forEach(a => {
        i[a] === !0 && (i[a] = {}), i[a] === !1 && delete i[a]
    }), {
        params: i,
        passedParams: n,
        rest: r,
        events: s
    }
}

function di({
    el: e,
    nextEl: t,
    prevEl: i,
    paginationEl: s,
    scrollbarEl: n,
    swiper: r
}, l) {
    ze(l) && t && i && (r.params.navigation.nextEl = t, r.originalParams.navigation.nextEl = t, r.params.navigation.prevEl = i, r.originalParams.navigation.prevEl = i), _e(l) && s && (r.params.pagination.el = s, r.originalParams.pagination.el = s), Ae(l) && n && (r.params.scrollbar.el = n, r.originalParams.scrollbar.el = n), r.init(e)
}

function ci(e, t, i, s, n) {
    const r = [];
    if (!t) return r;
    const l = a => {
        r.indexOf(a) < 0 && r.push(a)
    };
    if (i && s) {
        const a = s.map(n),
            d = i.map(n);
        a.join("") !== d.join("") && l("children"), s.length !== i.length && l("children")
    }
    return Ve.filter(a => a[0] === "_").map(a => a.replace(/_/, "")).forEach(a => {
        if (a in e && a in t)
            if (R(e[a]) && R(t[a])) {
                const d = Object.keys(e[a]),
                    u = Object.keys(t[a]);
                d.length !== u.length ? l(a) : (d.forEach(c => {
                    e[a][c] !== t[a][c] && l(a)
                }), u.forEach(c => {
                    e[a][c] !== t[a][c] && l(a)
                }))
            } else e[a] !== t[a] && l(a)
    }), r
}

function De(e) {
    return e.type && e.type.displayName && e.type.displayName.includes("SwiperSlide")
}

function Ne(e) {
    const t = [];
    return I.Children.toArray(e).forEach(i => {
        De(i) ? t.push(i) : i.props && i.props.children && Ne(i.props.children).forEach(s => t.push(s))
    }), t
}

function fi(e) {
    const t = [],
        i = {
            "container-start": [],
            "container-end": [],
            "wrapper-start": [],
            "wrapper-end": []
        };
    return I.Children.toArray(e).forEach(s => {
        if (De(s)) t.push(s);
        else if (s.props && s.props.slot && i[s.props.slot]) i[s.props.slot].push(s);
        else if (s.props && s.props.children) {
            const n = Ne(s.props.children);
            n.length > 0 ? n.forEach(r => t.push(r)) : i["container-end"].push(s)
        } else i["container-end"].push(s)
    }), {
        slides: t,
        slots: i
    }
}

function ui({
    swiper: e,
    slides: t,
    passedParams: i,
    changedParams: s,
    nextEl: n,
    prevEl: r,
    scrollbarEl: l,
    paginationEl: o
}) {
    const a = s.filter(x => x !== "children" && x !== "direction" && x !== "wrapperClass"),
        {
            params: d,
            pagination: u,
            navigation: c,
            scrollbar: p,
            virtual: f,
            thumbs: g
        } = e;
    let m, S, h, C, T, v, y, b;
    s.includes("thumbs") && i.thumbs && i.thumbs.swiper && d.thumbs && !d.thumbs.swiper && (m = !0), s.includes("controller") && i.controller && i.controller.control && d.controller && !d.controller.control && (S = !0), s.includes("pagination") && i.pagination && (i.pagination.el || o) && (d.pagination || d.pagination === !1) && u && !u.el && (h = !0), s.includes("scrollbar") && i.scrollbar && (i.scrollbar.el || l) && (d.scrollbar || d.scrollbar === !1) && p && !p.el && (C = !0), s.includes("navigation") && i.navigation && (i.navigation.prevEl || r) && (i.navigation.nextEl || n) && (d.navigation || d.navigation === !1) && c && !c.prevEl && !c.nextEl && (T = !0);
    const L = x => {
        e[x] && (e[x].destroy(), x === "navigation" ? (e.isElement && (e[x].prevEl.remove(), e[x].nextEl.remove()), d[x].prevEl = void 0, d[x].nextEl = void 0, e[x].prevEl = void 0, e[x].nextEl = void 0) : (e.isElement && e[x].el.remove(), d[x].el = void 0, e[x].el = void 0))
    };
    s.includes("loop") && e.isElement && (d.loop && !i.loop ? v = !0 : !d.loop && i.loop ? y = !0 : b = !0), a.forEach(x => {
        if (R(d[x]) && R(i[x])) k(d[x], i[x]);
        else {
            const P = i[x];
            (P === !0 || P === !1) && (x === "navigation" || x === "pagination" || x === "scrollbar") ? P === !1 && L(x): d[x] = i[x]
        }
    }), a.includes("controller") && !S && e.controller && e.controller.control && d.controller && d.controller.control && (e.controller.control = d.controller.control), s.includes("children") && t && f && d.virtual.enabled && (f.slides = t, f.update(!0)), s.includes("children") && t && d.loop && (b = !0), m && g.init() && g.update(!0), S && (e.controller.control = d.controller.control), h && (e.isElement && (!o || typeof o == "string") && (o = document.createElement("div"), o.classList.add("swiper-pagination"), e.el.shadowEl.appendChild(o)), o && (d.pagination.el = o), u.init(), u.render(), u.update()), C && (e.isElement && (!l || typeof l == "string") && (l = document.createElement("div"), l.classList.add("swiper-scrollbar"), e.el.shadowEl.appendChild(l)), l && (d.scrollbar.el = l), p.init(), p.updateSize(), p.setTranslate()), T && (e.isElement && ((!n || typeof n == "string") && (n = document.createElement("div"), n.classList.add("swiper-button-next"), e.el.shadowEl.appendChild(n)), (!r || typeof r == "string") && (r = document.createElement("div"), r.classList.add("swiper-button-prev"), e.el.shadowEl.appendChild(r))), n && (d.navigation.nextEl = n), r && (d.navigation.prevEl = r), c.init(), c.update()), s.includes("allowSlideNext") && (e.allowSlideNext = i.allowSlideNext), s.includes("allowSlidePrev") && (e.allowSlidePrev = i.allowSlidePrev), s.includes("direction") && e.changeDirection(i.direction, !1), (v || b) && e.loopDestroy(), (y || b) && e.loopCreate(), e.update()
}

function pi(e, t, i) {
    if (!i) return null;
    const s = u => {
            let c = u;
            return u < 0 ? c = t.length + u : c >= t.length && (c = c - t.length), c
        },
        n = e.isHorizontal() ? {
            [e.rtlTranslate ? "right" : "left"]: `${i.offset}px`
        } : {
            top: `${i.offset}px`
        },
        {
            from: r,
            to: l
        } = i,
        o = e.params.loop ? -t.length : 0,
        a = e.params.loop ? t.length * 2 : t.length,
        d = [];
    for (let u = o; u < a; u += 1) u >= r && u <= l && d.push(t[s(u)]);
    return d.map((u, c) => I.cloneElement(u, {
        swiper: e,
        style: n,
        key: `slide-${c}`
    }))
}
const hi = e => {
    !e || e.destroyed || !e.params.virtual || e.params.virtual && !e.params.virtual.enabled || (e.updateSlides(), e.updateProgress(), e.updateSlidesClasses(), e.parallax && e.params.parallax && e.params.parallax.enabled && e.parallax.setTranslate())
};

function W(e, t) {
    return typeof window == "undefined" ? O.useEffect(e, t) : O.useLayoutEffect(e, t)
}
const Ce = O.createContext(null),
    mi = O.createContext(null);

function ce() {
    return ce = Object.assign ? Object.assign.bind() : function(e) {
        for (var t = 1; t < arguments.length; t++) {
            var i = arguments[t];
            for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (e[s] = i[s])
        }
        return e
    }, ce.apply(this, arguments)
}
const gi = O.forwardRef(function(e, t) {
    let j = e === void 0 ? {} : e,
        {
            className: i,
            tag: s = "div",
            wrapperTag: n = "div",
            children: r,
            onSwiper: l
        } = j,
        o = ie(j, ["className", "tag", "wrapperTag", "children", "onSwiper"]),
        a = !1;
    const [d, u] = O.useState("swiper"), [c, p] = O.useState(null), [f, g] = O.useState(!1), m = O.useRef(!1), S = O.useRef(null), h = O.useRef(null), C = O.useRef(null), T = O.useRef(null), v = O.useRef(null), y = O.useRef(null), b = O.useRef(null), L = O.useRef(null), {
        params: x,
        passedParams: P,
        rest: Q,
        events: w
    } = oi(o), {
        slides: E,
        slots: M
    } = fi(r), _ = () => {
        g(!f)
    };
    Object.assign(x.on, {
        _containerClasses(z, V) {
            u(V)
        }
    });
    const H = () => {
        Object.assign(x.on, w), a = !0;
        const z = ge({}, x);
        if (delete z.wrapperClass, h.current = new X(z), h.current.virtual && h.current.params.virtual.enabled) {
            h.current.virtual.slides = E;
            const V = {
                cache: !1,
                slides: E,
                renderExternal: p,
                renderExternalUpdate: !1
            };
            k(h.current.params.virtual, V), k(h.current.originalParams.virtual, V)
        }
    };
    S.current || H(), h.current && h.current.on("_beforeBreakpoint", _);
    const Y = () => {
            a || !w || !h.current || Object.keys(w).forEach(z => {
                h.current.on(z, w[z])
            })
        },
        ee = () => {
            !w || !h.current || Object.keys(w).forEach(z => {
                h.current.off(z, w[z])
            })
        };
    O.useEffect(() => () => {
        h.current && h.current.off("_beforeBreakpoint", _)
    }), O.useEffect(() => {
        !m.current && h.current && (h.current.emitSlidesClasses(), m.current = !0)
    }), W(() => {
        if (t && (t.current = S.current), !!S.current) return h.current.destroyed && H(), di({
            el: S.current,
            nextEl: v.current,
            prevEl: y.current,
            paginationEl: b.current,
            scrollbarEl: L.current,
            swiper: h.current
        }, x), l && l(h.current), () => {
            h.current && !h.current.destroyed && h.current.destroy(!0, !1)
        }
    }, []), W(() => {
        Y();
        const z = ci(P, C.current, E, T.current, V => V.key);
        return C.current = P, T.current = E, z.length && h.current && !h.current.destroyed && ui({
            swiper: h.current,
            slides: E,
            passedParams: P,
            changedParams: z,
            nextEl: v.current,
            prevEl: y.current,
            scrollbarEl: L.current,
            paginationEl: b.current
        }), () => {
            ee()
        }
    }), W(() => {
        hi(h.current)
    }, [c]);

    function te() {
        return x.virtual ? pi(h.current, E, c) : E.map((z, V) => I.cloneElement(z, {
            swiper: h.current,
            swiperSlideIndex: V
        }))
    }
    return I.createElement(s, ce({
        ref: S,
        className: Ge(`${d}${i?` ${i}`:""}`)
    }, Q), I.createElement(mi.Provider, {
        value: h.current
    }, M["container-start"], I.createElement(n, {
        className: li(x.wrapperClass)
    }, M["wrapper-start"], te(), M["wrapper-end"]), ze(x) && I.createElement(I.Fragment, null, I.createElement("div", {
        ref: y,
        className: "swiper-button-prev"
    }), I.createElement("div", {
        ref: v,
        className: "swiper-button-next"
    })), Ae(x) && I.createElement("div", {
        ref: L,
        className: "swiper-scrollbar"
    }), _e(x) && I.createElement("div", {
        ref: b,
        className: "swiper-pagination"
    }), M["container-end"]))
});
gi.displayName = "Swiper";

function fe() {
    return fe = Object.assign ? Object.assign.bind() : function(e) {
        for (var t = 1; t < arguments.length; t++) {
            var i = arguments[t];
            for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (e[s] = i[s])
        }
        return e
    }, fe.apply(this, arguments)
}
const vi = O.forwardRef(function(e, t) {
    let v = e === void 0 ? {} : e,
        {
            tag: i = "div",
            children: s,
            className: n = "",
            swiper: r,
            zoom: l,
            lazy: o,
            virtualIndex: a,
            swiperSlideIndex: d
        } = v,
        u = ie(v, ["tag", "children", "className", "swiper", "zoom", "lazy", "virtualIndex", "swiperSlideIndex"]);
    const c = O.useRef(null),
        [p, f] = O.useState("swiper-slide"),
        [g, m] = O.useState(!1);

    function S(y, b, L) {
        b === c.current && f(L)
    }
    W(() => {
        if (typeof d != "undefined" && (c.current.swiperSlideIndex = d), t && (t.current = c.current), !(!c.current || !r)) {
            if (r.destroyed) {
                p !== "swiper-slide" && f("swiper-slide");
                return
            }
            return r.on("_slideClass", S), () => {
                r && r.off("_slideClass", S)
            }
        }
    }), W(() => {
        r && c.current && !r.destroyed && f(r.getSlideClasses(c.current))
    }, [r]);
    const h = {
            isActive: p.indexOf("swiper-slide-active") >= 0,
            isVisible: p.indexOf("swiper-slide-visible") >= 0,
            isPrev: p.indexOf("swiper-slide-prev") >= 0,
            isNext: p.indexOf("swiper-slide-next") >= 0
        },
        C = () => typeof s == "function" ? s(h) : s,
        T = () => {
            m(!0)
        };
    return I.createElement(i, fe({
        ref: c,
        className: Ge(`${p}${n?` ${n}`:""}`),
        "data-swiper-slide-index": a,
        onLoad: T
    }, u), l && I.createElement(Ce.Provider, {
        value: h
    }, I.createElement("div", {
        className: "swiper-zoom-container",
        "data-swiper-zoom": typeof l == "number" ? l : void 0
    }, C(), o && !g && I.createElement("div", {
        className: "swiper-lazy-preloader"
    }))), !l && I.createElement(Ce.Provider, {
        value: h
    }, C(), o && !g && I.createElement("div", {
        className: "swiper-lazy-preloader"
    })))
});
vi.displayName = "SwiperSlide";
export {
    gi as S, Se as a, we as b, Xe as c, Ke as d, N as e, vi as f, F as g
};