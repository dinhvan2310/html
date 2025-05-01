var b = Object.defineProperty,
    o = Object.defineProperties;
var C = Object.getOwnPropertyDescriptors;
var h = Object.getOwnPropertySymbols;
var K = Object.prototype.hasOwnProperty,
    R = Object.prototype.propertyIsEnumerable;
var n = (u, t, a) => t in u ? b(u, t, {
        enumerable: !0,
        configurable: !0,
        writable: !0,
        value: a
    }) : u[t] = a,
    y = (u, t) => {
        for (var a in t || (t = {})) K.call(t, a) && n(u, a, t[a]);
        if (h)
            for (var a of h(t)) R.call(t, a) && n(u, a, t[a]);
        return u
    },
    x = (u, t) => o(u, C(t));
import {
    r as f,
    t as S,
    c as j,
    q as k
} from "./index-409f5d7e.js";
const i = (u, t = {}) => {
    const [a, p] = f.useState({
        status: "",
        payload: {}
    });
    return [f.useCallback((q = {}) => {
        let c = Object.assign(t, q);
        return S.post(u, (c == null ? void 0 : c.params) || {}).then(s => {
            var l;
            return c != null && c.cacheKey && (s == null ? void 0 : s.status) == ((l = j) == null ? void 0 : l.statusSuccess) && k.setQueriesData(c == null ? void 0 : c.cacheKey, e => c != null && c.cacheReplace ? s : x(y({}, e), {
                payload: y(y({}, e == null ? void 0 : e.payload), s == null ? void 0 : s.payload)
            })), p(s), s
        })
    }), a]
};
export {
    i as u
};