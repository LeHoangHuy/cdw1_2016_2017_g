function ws_collage(s, J, B) {
    var z = jQuery,
        f = z(this),
        D = z(".ws_list", B),
        m = s.maxQuality || true,
        v = s.maxPreload || 20,
        F = !s.noCanvas && document.createElement("canvas").getContext,
        n = 30,
        e = 10,
        G = false,
        O = 0.3,
        l = 0.7,
        y = -180,
        a = 180,
        d = J.length,
        T = [];
    B = B.parent();
    var w = z("<div>").addClass("ws_effect ws_collage").css({
        position: "absolute",
        width: "100%",
        height: "100%",
        left: 0,
        top: 0,
        overflow: "hidden",
        "z-index": 8
    }).appendTo(B);

    function I(x, j, i) {
        return parseFloat(i * (j - x) + x)
    }

    function S(X, W, N) {
        var i = N * W.x,
            Y = N * W.y,
            j = N * W.width,
            V = N * W.height;
        if (F) {
            X.save();
            X.translate(i + 0.5 * j, Y + 0.5 * V);
            X.rotate(W.angle * Math.PI / 180);
            X.scale(W.scale, W.scale);
            if (W.img) {
                X.drawImage(W.img, -0.5 * j, -0.5 * V, j, V)
            }
            X.restore()
        } else {
            z("<img>").attr("src", W.img).css({
                position: "absolute",
                width: 100 * j / s.width + "%",
                height: 100 * V / s.height + "%",
                left: 100 * i / s.width + "%",
                top: 100 * Y / s.height + "%"
            }).appendTo(X)
        }
    }

    function c(X, aa, W, V, Y, ab) {
        var N = T[X],
            Z = T[aa],
            j = new Date;
        if (F) {
            var x = z(J[aa]);
            x = {
                width: x.width(),
                height: x.height(),
                marginTop: parseFloat(x.css("marginTop")),
                marginLeft: parseFloat(x.css("marginLeft"))
            };
            z(u).css(x)
        }
        var i = setInterval(function() {
            var ac = (new Date - j) / s.duration;
            if (ac > 1) {
                ac = 1
            }
            var al = 1 - 2 * ac;
            if (al < 0) {
                al *= -1;
                if (al > 1) {
                    al = 1
                }
            }
            al = jQuery.easing.easeInOutQuad(1, al, 0, 1, 1);
            ac = jQuery.easing.easeInOutQuad(1, ac, 0, 1, 1);
            if (F) {
                p.width = V;
                p.height = Y;
                u.width = V;
                u.height = Y;
                var ad = I(s.width / Z.width, s.width / N.width, ac),
                    ae = I(0.5, I(1 / Z.scale, 1 / N.scale, ac), al),
                    ai = I(1 / Z.scale, 1 / N.scale, ac),
                    aj = I(Z.angle, N.angle, ac),
                    ak = W * N.width,
                    af = W * N.height,
                    ah = W * I(Z.x, N.x, ac),
                    ag = W * I(Z.y, N.y, ac);
                if (R && k) {
                    p.ctx.drawImage(k, 0, 0, V, Y);
                    p.ctx.save();
                    p.ctx.translate(ah + 0.5 * ak, ag + 0.5 * af);
                    p.ctx.rotate(-aj * Math.PI / 180);
                    p.ctx.scale(ai, ai);
                    p.ctx.translate(-(ah + 0.5 * ak), -(ag + 0.5 * af));
                    p.ctx.transform(ai, 0, 0, ai, -ah * ai, -ag * ai);
                    p.ctx.drawImage(k, -V, -Y, V * 4, Y * 4);
                    p.ctx.restore()
                }
                p.ctx.transform(ad, 0, 0, ad, -ah * ad, -ag * ad);
                p.ctx.translate(ah + 0.5 * ak, ag + 0.5 * af);
                p.ctx.rotate(-aj * Math.PI / 180);
                p.ctx.scale(ae, ae);
                p.ctx.translate(-(ah + 0.5 * ak), -(ag + 0.5 * af));
                p.ctx.globalAlpha = I(0.2, 1, al);
                if (m) {
                    for (Q in T) {
                        S(p.ctx, T[Q], W)
                    }
                } else {
                    p.ctx.drawImage(M, 0, 0)
                }
                p.ctx.globalAlpha = 1;
                p.ctx.globalAlpha = I(0, 1, al);
                S(p.ctx, N, W);
                p.ctx.globalAlpha = I(1, 0, ac * 2 > 1 ? 1 : ac * 2);
                S(p.ctx, Z, W);
                p.ctx.globalAlpha = 1;
                u.ctx.drawImage(p, 0, 0)
            } else {
                var am = I(2, V / (Z.width * W), al),
                    ah = -W * I(Z.x, N.x, ac) * am,
                    ag = -W * I(Z.y, N.y, ac) * am,
                    ak = V * am,
                    af = Y * am;
                u.css({
                    left: ah,
                    top: ag,
                    width: ak,
                    height: af
                })
            }
            w.show();
            if (ac == 1) {
                clearInterval(i);
                ab()
            }
        }, Math.ceil(1000 / n))
    }

    function C(W, i, V, j, N) {
        if (W > i || !T[W] || T[W].img) {
            return
        }
        var x = new Image();
        x.onload = function() {
            T[W].img = x;
            if (V && W != N[0] && W != N[1]) {
                S(j, T[W], 1);
                C(W + 1, i, true, j, N)
            } else {
                C(W + 1, i, false)
            }
        };
        x.onerror = function() {
            if (V && W != N[0] && W != N[1]) {
                S(j, T[W], 1);
                C(W + 1, i, true, j, N)
            } else {
                C(W + 1, i, false)
            }
        };
        x.src = J[W].src
    }
    var r = 0,
        q = 0,
        t = s.width / (Math.sqrt(d) + 1),
        A = s.height / (Math.sqrt(d) + 1),
        b = Math.floor(s.width / t);
    for (Q = 0; Q < d; Q++) {
        if (t + r > t * b) {
            q = Math.floor(t * (Q + 1) / s.width) * A;
            r = 0
        }
        T[Q] = {
            x: r,
            y: q,
            width: t,
            height: A,
            img: null
        };
        if (F) {
            T[Q].scale = I(O, l, Math.random());
            T[Q].angle = I(y, a, Math.random())
        }
        r += parseFloat(t)
    }
    for (var P, E, Q = T.length; Q; P = parseInt(Math.random() * Q), E = T[--Q], T[Q] = T[P], T[P] = E) {}
    if (F) {
        var u = z("<canvas>")[0];
        u.ctx = u.getContext("2d");
        u.width = w.width();
        u.height = w.height();
        var p = z("<canvas>")[0];
        p.ctx = p.getContext("2d");
        p.width = w.width();
        p.height = w.height();
        var k = z("<canvas>")[0];
        k.ctx = k.getContext("2d");
        k.width = w.width();
        k.height = w.height();
        if (!m) {
            var M = z("<canvas>")[0];
            M.ctx = M.getContext("2d");
            M.width = w.width();
            M.height = w.height()
        }
        w.append(u)
    } else {
        var u = w.clone().removeClass("ws_effect").css({
            overflow: "visible"
        });
        w.css("display", "none").append(u);
        for (Q in T) {
            T[Q].img = J[Q].src;
            S(u, T[Q], 1)
        }
        var h = (d % b == "undefined" ? 0 : d % b);
        startRight = 0, bottomAddCount = 2 * b - h, rightAddCount = Math.ceil(d / b) + 1;
        for (var Q = 0; Q < bottomAddCount; Q++) {
            S(u, {
                img: J[Q % J.length].src,
                width: t,
                height: A,
                x: t * ((h + Q) % b),
                y: q + Math.floor((h + Q) / b) * A
            }, 1)
        }
        for (var Q = 0; Q < bottomAddCount; Q++) {
            S(u, {
                img: J[Q % J.length].src,
                width: t,
                height: A,
                x: t * b,
                y: Q * A
            }, 1)
        }
    }
    var H, R;
    this.go = function(x, V) {
        if (H) {
            return -1
        }
        if (s.images) {
            T[x].img = J[x]
        }
        if (window.XMLHttpRequest) {
            if (F) {
                var N = s.width,
                    j = s.height,
                    i = 1;
                C(V, V, false);
                C(x, x, false);
                if (m) {
                    C(2, v + 1, false)
                } else {
                    M.width = N;
                    M.height = j;
                    C(2, v + 1, true, M.ctx, [V, x])
                }
                if (!R && !G) {
                    rand = Math.round(I(0, d - 1, Math.random()));
                    k.width = w.width();
                    k.height = w.height();
                    R = K(z(J[rand]), e, k)
                }
            } else {
                var N = B.width(),
                    j = B.height(),
                    i = N / s.width
            }
            H = new c(x, V, i, N, j, function W() {
                f.trigger("effectEnd");
                w.hide();
                H = 0;
                if (!m && F) {
                    for (i in T) {
                        T[i].img = null
                    }
                }
            })
        } else {
            H = 0;
            D.stop(true).animate({
                left: (x ? -x + "00%" : (/Safari/.test(navigator.userAgent) ? "0%" : 0))
            }, s.duration, "easeInOutExpo", function() {
                f.trigger("effectEnd")
            })
        }
    };

    function K(i, x, j) {
        if (F) {
            j.ctx.drawImage(i.get(0), 0, 0);
            if (!o(j.ctx, 0, 0, j.width, j.height, x)) {
                j.ctx.drawImage(i.get(0), 0, 0)
            }
            return true
        }
        return cont
    }
    var g = [512, 512, 456, 512, 328, 456, 335, 512, 405, 328, 271, 456, 388, 335, 292, 512, 454, 405, 364, 328, 298, 271, 496, 456, 420, 388, 360, 335, 312, 292, 273, 512, 482, 454, 428, 405, 383, 364, 345, 328, 312, 298, 284, 271, 259, 496, 475, 456, 437, 420, 404, 388, 374, 360, 347, 335, 323, 312, 302, 292, 282, 273, 265, 512, 497, 482, 468, 454, 441, 428, 417, 405, 394, 383, 373, 364, 354, 345, 337, 328, 320, 312, 305, 298, 291, 284, 278, 271, 265, 259, 507, 496, 485, 475, 465, 456, 446, 437, 428, 420, 412, 404, 396, 388, 381, 374, 367, 360, 354, 347, 341, 335, 329, 323, 318, 312, 307, 302, 297, 292, 287, 282, 278, 273, 269, 265, 261, 512, 505, 497, 489, 482, 475, 468, 461, 454, 447, 441, 435, 428, 422, 417, 411, 405, 399, 394, 389, 383, 378, 373, 368, 364, 359, 354, 350, 345, 341, 337, 332, 328, 324, 320, 316, 312, 309, 305, 301, 298, 294, 291, 287, 284, 281, 278, 274, 271, 268, 265, 262, 259, 257, 507, 501, 496, 491, 485, 480, 475, 470, 465, 460, 456, 451, 446, 442, 437, 433, 428, 424, 420, 416, 412, 408, 404, 400, 396, 392, 388, 385, 381, 377, 374, 370, 367, 363, 360, 357, 354, 350, 347, 344, 341, 338, 335, 332, 329, 326, 323, 320, 318, 315, 312, 310, 307, 304, 302, 299, 297, 294, 292, 289, 287, 285, 282, 280, 278, 275, 273, 271, 269, 267, 265, 263, 261, 259];
    var L = [9, 11, 12, 13, 13, 14, 14, 15, 15, 15, 15, 16, 16, 16, 16, 17, 17, 17, 17, 17, 17, 17, 18, 18, 18, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24];

    function o(aJ, aq, ao, j, N, aA) {
        if (isNaN(aA) || aA < 1) {
            return
        }
        aA |= 0;
        var aE;
        try {
            aE = aJ.getImageData(aq, ao, j, N)
        } catch (aI) {
            console.log("error:unable to access image data: " + aI);
            return false
        }
        var Y = aE.data;
        var ay, ax, aG, aD, af, ai, ac, W, X, an, ad, ap, al, au, az, ag, ab, ah, aj, at;
        var aH = aA + aA + 1;
        var av = j << 2;
        var ae = j - 1;
        var aC = N - 1;
        var aa = aA + 1;
        var aB = aa * (aa + 1) / 2;
        var ar = new U();
        var am = ar;
        for (aG = 1; aG < aH; aG++) {
            am = am.next = new U();
            if (aG == aa) {
                var Z = am
            }
        }
        am.next = ar;
        var aF = null;
        var aw = null;
        ac = ai = 0;
        var ak = g[aA];
        var V = L[aA];
        for (ax = 0; ax < N; ax++) {
            au = az = ag = W = X = an = 0;
            ad = aa * (ab = Y[ai]);
            ap = aa * (ah = Y[ai + 1]);
            al = aa * (aj = Y[ai + 2]);
            W += aB * ab;
            X += aB * ah;
            an += aB * aj;
            am = ar;
            for (aG = 0; aG < aa; aG++) {
                am.r = ab;
                am.g = ah;
                am.b = aj;
                am = am.next
            }
            for (aG = 1; aG < aa; aG++) {
                aD = ai + ((ae < aG ? ae : aG) << 2);
                W += (am.r = (ab = Y[aD])) * (at = aa - aG);
                X += (am.g = (ah = Y[aD + 1])) * at;
                an += (am.b = (aj = Y[aD + 2])) * at;
                au += ab;
                az += ah;
                ag += aj;
                am = am.next
            }
            aF = ar;
            aw = Z;
            for (ay = 0; ay < j; ay++) {
                Y[ai] = (W * ak) >> V;
                Y[ai + 1] = (X * ak) >> V;
                Y[ai + 2] = (an * ak) >> V;
                W -= ad;
                X -= ap;
                an -= al;
                ad -= aF.r;
                ap -= aF.g;
                al -= aF.b;
                aD = (ac + ((aD = ay + aA + 1) < ae ? aD : ae)) << 2;
                au += (aF.r = Y[aD]);
                az += (aF.g = Y[aD + 1]);
                ag += (aF.b = Y[aD + 2]);
                W += au;
                X += az;
                an += ag;
                aF = aF.next;
                ad += (ab = aw.r);
                ap += (ah = aw.g);
                al += (aj = aw.b);
                au -= ab;
                az -= ah;
                ag -= aj;
                aw = aw.next;
                ai += 4
            }
            ac += j
        }
        for (ay = 0; ay < j; ay++) {
            az = ag = au = X = an = W = 0;
            ai = ay << 2;
            ad = aa * (ab = Y[ai]);
            ap = aa * (ah = Y[ai + 1]);
            al = aa * (aj = Y[ai + 2]);
            W += aB * ab;
            X += aB * ah;
            an += aB * aj;
            am = ar;
            for (aG = 0; aG < aa; aG++) {
                am.r = ab;
                am.g = ah;
                am.b = aj;
                am = am.next
            }
            af = j;
            for (aG = 1; aG <= aA; aG++) {
                ai = (af + ay) << 2;
                W += (am.r = (ab = Y[ai])) * (at = aa - aG);
                X += (am.g = (ah = Y[ai + 1])) * at;
                an += (am.b = (aj = Y[ai + 2])) * at;
                au += ab;
                az += ah;
                ag += aj;
                am = am.next;
                if (aG < aC) {
                    af += j
                }
            }
            ai = ay;
            aF = ar;
            aw = Z;
            for (ax = 0; ax < N; ax++) {
                aD = ai << 2;
                Y[aD] = (W * ak) >> V;
                Y[aD + 1] = (X * ak) >> V;
                Y[aD + 2] = (an * ak) >> V;
                W -= ad;
                X -= ap;
                an -= al;
                ad -= aF.r;
                ap -= aF.g;
                al -= aF.b;
                aD = (ay + (((aD = ax + aa) < aC ? aD : aC) * j)) << 2;
                W += (au += (aF.r = Y[aD]));
                X += (az += (aF.g = Y[aD + 1]));
                an += (ag += (aF.b = Y[aD + 2]));
                aF = aF.next;
                ad += (ab = aw.r);
                ap += (ah = aw.g);
                al += (aj = aw.b);
                au -= ab;
                az -= ah;
                ag -= aj;
                aw = aw.next;
                ai += j
            }
        }
        aJ.putImageData(aE, aq, ao);
        return true
    }

    function U() {
        this.r = 0;
        this.g = 0;
        this.b = 0;
        this.a = 0;
        this.next = null
    }
}
jQuery.extend(jQuery.easing, {
    easeInOutQuad: function(e, f, a, h, g) {
        if ((f /= g / 2) < 1) {
            return h / 2 * f * f + a
        }
        return -h / 2 * ((--f) * (f - 2) - 1) + a
    }
}); // -----------------------------------------------------------------------------------

function ws_seven(m, A, o) {
    var p = jQuery;
    var w = p(this);
    var n = m.distance || 5;
    var d = m.cols;
    var z = m.rows;
    var a = m.duration * 2;
    var q = m.blur || 50;
    var E = o.find(".ws_list");
    var x = p("<div>").css({
        position: "absolute",
        top: 0,
        left: 0,
        width: "100%",
        height: "100%",
        overflow: (m.responsive > 1 ? "hidden" : "visible")
    });
    var c = x.clone().css("overflow", "hidden");
    x.addClass("ws_effect ws_seven");
    o = o.parent();
    var t = !m.noCanvas && !window.opera && !!document.createElement("canvas").getContext;
    var l;
    var e = p("<div>").addClass("ws_parts").css({
        position: "absolute",
        width: "100%",
        height: "100%",
        left: 0,
        top: 0,
        zIndex: 8,
        transform: "translate3d(0,0,0)"
    });
    var B = p("<div>").addClass("ws_zoom").css({
        position: "absolute",
        width: "100%",
        height: "100%",
        top: 0,
        left: 0,
        zIndex: 2,
        transform: "translate3d(0,0,0)"
    });
    x.append(e, B, c).appendTo(o);
    var f = {
        t: p(window).scrollTop(),
        l: p(window).scrollLeft(),
        w: p(window).width(),
        h: p(window).height()
    };
    var D = Math.max((m.width || e.width()) / (m.height || e.height()) || 3, 3);
    d = d || Math.round(D < 1 ? 3 : 3 * D);
    z = z || Math.round(D < 1 ? 3 / D : 3);
    var J = [];
    var y = [];
    for (var v = 0; v < d * z; v++) {
        var H = v % d;
        var G = Math.floor(v / d);
        p(J[v] = p("<div>")[0]).css({
            position: "absolute",
            overflow: "hidden",
            transform: "translate3d(0,0,0)"
        }).appendTo(e).append(p("<img>").css({
            position: "absolute",
            transform: "translate3d(0,0,0)"
        }));
        p(y[v] = p("<div>")[0]).css({
            position: "absolute",
            overflow: "hidden",
            transform: "translate3d(0,0,0)"
        }).appendTo(B).append(p("<img>").css({
            position: "absolute",
            transform: "translate3d(0,0,0)"
        }))
    }
    J = p(J);
    y = p(y);
    jQuery.extend(jQuery.easing, {
        easeOutQuart: function(j, K, i, M, L) {
            return -M * ((K = K / L - 1) * K * K * K - 1) + i
        },
        easeInExpo: function(j, K, i, M, L) {
            return (K == 0) ? i : M * Math.pow(2, 10 * (K / L - 1)) + i
        },
        easeInCirc: function(j, K, i, M, L) {
            return -M * (Math.sqrt(1 - (K /= L) * K) - 1) + i
        }
    });

    function s(j, i) {
        return Math.abs((i % 2 ? 1 : 0) + ((i - i % 2) / 2) - j) / i
    }

    function I(M, L, N, i) {
        var K = (L >= i) ? (i) / (L) : 1;
        var j = (M >= N) ? (N) / (M) : 1;
        return {
            l: j,
            t: K,
            m: Math.min(j, K)
        }
    }

    function k(L, P) {
        var O = new Date().getTime(),
            i, N, K, M;
        var j = function() {
            var U = new Date().getTime();
            var X = 0;
            for (var W in L) {
                if (L[W].disabled) {
                    continue
                }
                X++;
                if ((O + L[W].delay) > U) {
                    var Q = 0
                } else {
                    var Q = (U - (O + L[W].delay)) / L[W].duration
                }
                M = {};
                if (Q > 1) {
                    if (L[W].callback) {
                        L[W].callback()
                    }
                    L[W].disabled = true;
                    continue
                }
                Q = p.easing[L[W].easing](1, Q, 0, 1, 1, 1).toFixed(3);
                var T = "";
                for (var S in L[W].begin) {
                    var ab = L[W].begin[S] || 0,
                        V = L[W].end[S] || 0;
                    if (S == "translate") {
                        var aa = ab[0] + (V[0] - ab[0]) * Q;
                        var Z = ab[1] + (V[1] - ab[1]) * Q;
                        var Y = ab[2] + (V[2] - ab[2]) * Q;
                        T += "translate3d(" + aa + "px," + Z + "px," + Y + "px)"
                    } else {
                        if (S == "scale") {
                            var R = ab + (V - ab) * Q;
                            T += " scale(" + R + ")"
                        } else {
                            M[S] = ab + (V - ab) * Q
                        }
                    }
                }
                M.transform = T;
                delete M.translate;
                delete M.scale;
                L[W].item.css(M)
            }
            if (!X) {
                cancelAnimationFrame(j);
                if (P) {
                    P()
                }
            } else {
                requestAnimationFrame(j)
            }
        };
        j()
    }

    function u(U, i, j, M, W) {
        var Q = e.width(),
            S = e.height(),
            T = n * Q / d,
            O = n * S / z,
            P = a * (M ? 4 : 5) / (d * z),
            L = M ? "easeInExpo" : "easeOutQuart";
        var K = f.h + f.t - S / z,
            R = f.w + f.l - Q / d,
            X = e.offset().top + e.height(),
            N = e.offset().left + e.width();
        if (K < X) {
            K = X
        }
        if (R < N) {
            R = N
        }
        var V = [];
        p(U).each(function(af) {
            var ac = af % d,
                Z = Math.floor(af / d),
                ad = a * 0.2 * (s(ac, d) * 45 + Z * 4) / (d * z),
                ab = e.offset().left + f.l + T * ac - Q * n / 2 + T,
                ae = e.offset().top + f.t + O * Z - S * n / 2 + O,
                Y = I(ab, ae, R, K);
            if (m.support.transform) {
                var ag = {
                        opacity: 1,
                        translate: [Q * ac / d, S * Z / z, 0],
                        scale: 1,
                        width: Q / d,
                        height: S / z,
                        zIndex: Math.ceil(100 - s(ac, d) * 100)
                    },
                    aj = {
                        opacity: 0,
                        translate: [(T * ac - Q * n / 2.115) * Y.l, (O * Z - S * n / 2.115) * Y.t, 0],
                        scale: n * Y.m,
                        width: Q / d,
                        height: S / z,
                        zIndex: Math.ceil(100 - s(ac, d) * 100)
                    };
                p(this).find("img").css({
                    transform: "translate3d(" + (-Q * ac / d + j.marginLeft) + "px," + (-S * Z / z + j.marginTop) + "px,0px)",
                    width: j.width,
                    height: j.height
                })
            } else {
                var ag = {
                        opacity: 1,
                        left: Q * ac / d,
                        top: S * Z / z,
                        width: Q / d,
                        height: S / z,
                        zIndex: Math.ceil(100 - s(ac, d) * 100)
                    },
                    aj = {
                        opacity: 0,
                        left: (T * ac - Q * n / 2) * Y.l,
                        top: (O * Z - S * n / 2) * Y.t,
                        width: T * Y.m,
                        height: O * Y.m
                    },
                    ai = {
                        left: -(Q * ac / d) + j.marginLeft,
                        top: -(S * Z / z) + j.marginTop,
                        width: j.width,
                        height: j.height
                    },
                    ah = {
                        left: -n * (Q / d * ac - j.marginLeft) * Y.m,
                        top: -n * (S / z * Z - j.marginTop) * Y.m,
                        width: n * j.width * Y.m,
                        height: n * j.height * Y.m
                    }
            }
            if (!M) {
                var aa = ag;
                ag = aj;
                aj = aa;
                aa = ai;
                ai = ah;
                ah = aa
            }
            V.push({
                item: p(this).show(),
                begin: ag,
                end: aj,
                easing: L,
                delay: ad,
                duration: P,
                callback: M ? function() {
                    this.item.hide()
                } : 0
            });
            if (ai) {
                V.push({
                    item: p(this).find("img"),
                    begin: ai,
                    end: ah,
                    easing: L,
                    delay: ad,
                    duration: P
                })
            }
        });
        if (M) {
            p(i).each(function(ac) {
                var Z = ac % d;
                var Y = Math.floor(ac / d);
                var aa = a * 0.2 + a * 0.15 * (s(Z, d) * 35 + Y * 4) / (d * z);
                var ab = a * 4 / (d * z);
                if (m.support.transform) {
                    var ad = {
                            opacity: 0,
                            translate: [Q / 2, S / 2, 0],
                            scale: 0,
                            width: Q / d,
                            height: S / z,
                            zIndex: Math.ceil(100 - s(Z, d) * 100)
                        },
                        af = {
                            opacity: 1,
                            translate: [Q * Z / d, S * Y / z, 0],
                            scale: 1,
                            width: Q / d,
                            height: S / z,
                            zIndex: Math.ceil(100 - s(Z, d) * 100)
                        };
                    p(this).find("img").css({
                        transform: "translate3d(" + (-Q * Z / d + j.marginLeft) + "px," + (-S * Y / z + j.marginTop) + "px,0px)",
                        width: j.width,
                        height: j.height
                    })
                } else {
                    var ad = {
                            left: Q / 2,
                            top: S / 2,
                            width: 0,
                            height: 0,
                            zIndex: Math.ceil(100 - s(Z, d) * 100)
                        },
                        af = {
                            left: Q * Z / d,
                            top: S * Y / z,
                            width: Q / d,
                            height: S / z
                        },
                        ag = {
                            left: 0,
                            top: 0,
                            width: 0,
                            height: 0
                        },
                        ae = {
                            left: -Q * Z / d + j.marginLeft,
                            top: -S * Y / z + j.marginTop,
                            width: j.width,
                            height: j.height
                        }
                }
                V.push({
                    item: p(this),
                    begin: ad,
                    end: af,
                    easing: "easeOutBack",
                    delay: aa,
                    duration: ab
                });
                if (ag) {
                    V.push({
                        item: p(this).find("img"),
                        begin: ag,
                        end: ae,
                        easing: "easeOutBack",
                        delay: aa,
                        duration: ab
                    })
                }
            });
            B.delay(a * 0.1).animate({
                opacity: 1
            }, a * 0.2, "easeInCirc")
        }
        k(V, W);
        return {
            stop: function() {
                W()
            }
        }
    }
    var h;
    this.go = function(i, j, M) {
        if (h) {
            return j
        }
        if (M == undefined) {
            M = (j == 0 && i != j + 1) || (i == j - 1) ? false : true
        }
        f.t = p(window).scrollTop();
        f.l = p(window).scrollLeft();
        f.w = p(window).width();
        f.h = p(window).height();
        var N = p(A.get(j));
        N = {
            width: N.width(),
            height: N.height(),
            marginTop: parseFloat(N.css("marginTop")),
            marginLeft: parseFloat(N.css("marginLeft"))
        };
        J.find("img").attr("src", A.get(M ? j : i).src);
        y.find("img").attr("src", A.get(i).src);
        e.show();
        if (M) {
            B.show()
        }
        var L = 0;
        if (M) {
            if (t) {
                try {
                    document.createElement("canvas").getContext("2d").getImageData(0, 0, 1, 1)
                } catch (K) {
                    t = 0
                }
                l = '<canvas width="' + x.width + '" height="' + x.height + '"/>';
                l = p(l).css({
                    "z-index": 1,
                    position: "absolute",
                    left: 0,
                    top: 0
                }).css(N).appendTo(c);
                L = F(p(A.get(j)), N, q, l.get(0))
            }
            if (!t || !L) {
                t = 0;
                L = F(p(A.get(j)), N, 8);
                if (l) {
                    l.remove();
                    l = 0
                }
            }
        }
        h = new u(J, y, N, M, function() {
            w.trigger("effectEnd");
            e.hide();
            B.hide();
            if (l) {
                l.remove()
            } else {
                if (L) {
                    L.remove()
                }
            }
            h = 0
        })
    };

    function F(P, K, O, L) {
        var S = (parseInt(P.parent().css("z-index")) || 0) + 1;
        if (t) {
            var V = L.getContext("2d");
            V.drawImage(P.get(0), 0, 0, K.width, K.height);
            if (!b(V, 0, 0, L.width, L.height, O)) {
                return 0
            }
            return p(L)
        }
        var W = p("<div></div>").css({
            position: "absolute",
            "z-index": S,
            left: 0,
            top: 0,
            overflow: "hidden"
        }).css(K).appendTo(c);
        var U = (Math.sqrt(5) + 1) / 2;
        var M = 1 - U / 2;
        for (var N = 0; M * N < O; N++) {
            var Q = Math.PI * U * N;
            var j = (M * N + 1);
            var T = j * Math.cos(Q);
            var R = j * Math.sin(Q);
            p(document.createElement("img")).attr("src", P.attr("src")).css({
                opacity: 1 / (N / 1.8 + 1),
                position: "absolute",
                "z-index": S,
                left: Math.round(T) + "px",
                top: Math.round(R) + "px",
                width: "100%",
                height: "100%"
            }).appendTo(W)
        }
        return W
    }
    var r = [512, 512, 456, 512, 328, 456, 335, 512, 405, 328, 271, 456, 388, 335, 292, 512, 454, 405, 364, 328, 298, 271, 496, 456, 420, 388, 360, 335, 312, 292, 273, 512, 482, 454, 428, 405, 383, 364, 345, 328, 312, 298, 284, 271, 259, 496, 475, 456, 437, 420, 404, 388, 374, 360, 347, 335, 323, 312, 302, 292, 282, 273, 265, 512, 497, 482, 468, 454, 441, 428, 417, 405, 394, 383, 373, 364, 354, 345, 337, 328, 320, 312, 305, 298, 291, 284, 278, 271, 265, 259, 507, 496, 485, 475, 465, 456, 446, 437, 428, 420, 412, 404, 396, 388, 381, 374, 367, 360, 354, 347, 341, 335, 329, 323, 318, 312, 307, 302, 297, 292, 287, 282, 278, 273, 269, 265, 261, 512, 505, 497, 489, 482, 475, 468, 461, 454, 447, 441, 435, 428, 422, 417, 411, 405, 399, 394, 389, 383, 378, 373, 368, 364, 359, 354, 350, 345, 341, 337, 332, 328, 324, 320, 316, 312, 309, 305, 301, 298, 294, 291, 287, 284, 281, 278, 274, 271, 268, 265, 262, 259, 257, 507, 501, 496, 491, 485, 480, 475, 470, 465, 460, 456, 451, 446, 442, 437, 433, 428, 424, 420, 416, 412, 408, 404, 400, 396, 392, 388, 385, 381, 377, 374, 370, 367, 363, 360, 357, 354, 350, 347, 344, 341, 338, 335, 332, 329, 326, 323, 320, 318, 315, 312, 310, 307, 304, 302, 299, 297, 294, 292, 289, 287, 285, 282, 280, 278, 275, 273, 271, 269, 267, 265, 263, 261, 259];
    var C = [9, 11, 12, 13, 13, 14, 14, 15, 15, 15, 15, 16, 16, 16, 16, 17, 17, 17, 17, 17, 17, 17, 18, 18, 18, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24];

    function b(az, ag, ae, j, K, ap) {
        if (isNaN(ap) || ap < 1) {
            return
        }
        ap |= 0;
        var au;
        try {
            au = az.getImageData(ag, ae, j, K)
        } catch (ay) {
            console.log("error:unable to access image data: " + ay);
            return false
        }
        var O = au.data;
        var an, am, aw, at, V, Y, S, M, N, ad, T, af, ab, aj, ao, W, R, X, Z, ai;
        var ax = ap + ap + 1;
        var ak = j << 2;
        var U = j - 1;
        var ar = K - 1;
        var Q = ap + 1;
        var aq = Q * (Q + 1) / 2;
        var ah = new g();
        var ac = ah;
        for (aw = 1; aw < ax; aw++) {
            ac = ac.next = new g();
            if (aw == Q) {
                var P = ac
            }
        }
        ac.next = ah;
        var av = null;
        var al = null;
        S = Y = 0;
        var aa = r[ap];
        var L = C[ap];
        for (am = 0; am < K; am++) {
            aj = ao = W = M = N = ad = 0;
            T = Q * (R = O[Y]);
            af = Q * (X = O[Y + 1]);
            ab = Q * (Z = O[Y + 2]);
            M += aq * R;
            N += aq * X;
            ad += aq * Z;
            ac = ah;
            for (aw = 0; aw < Q; aw++) {
                ac.r = R;
                ac.g = X;
                ac.b = Z;
                ac = ac.next
            }
            for (aw = 1; aw < Q; aw++) {
                at = Y + ((U < aw ? U : aw) << 2);
                M += (ac.r = (R = O[at])) * (ai = Q - aw);
                N += (ac.g = (X = O[at + 1])) * ai;
                ad += (ac.b = (Z = O[at + 2])) * ai;
                aj += R;
                ao += X;
                W += Z;
                ac = ac.next
            }
            av = ah;
            al = P;
            for (an = 0; an < j; an++) {
                O[Y] = (M * aa) >> L;
                O[Y + 1] = (N * aa) >> L;
                O[Y + 2] = (ad * aa) >> L;
                M -= T;
                N -= af;
                ad -= ab;
                T -= av.r;
                af -= av.g;
                ab -= av.b;
                at = (S + ((at = an + ap + 1) < U ? at : U)) << 2;
                aj += (av.r = O[at]);
                ao += (av.g = O[at + 1]);
                W += (av.b = O[at + 2]);
                M += aj;
                N += ao;
                ad += W;
                av = av.next;
                T += (R = al.r);
                af += (X = al.g);
                ab += (Z = al.b);
                aj -= R;
                ao -= X;
                W -= Z;
                al = al.next;
                Y += 4
            }
            S += j
        }
        for (an = 0; an < j; an++) {
            ao = W = aj = N = ad = M = 0;
            Y = an << 2;
            T = Q * (R = O[Y]);
            af = Q * (X = O[Y + 1]);
            ab = Q * (Z = O[Y + 2]);
            M += aq * R;
            N += aq * X;
            ad += aq * Z;
            ac = ah;
            for (aw = 0; aw < Q; aw++) {
                ac.r = R;
                ac.g = X;
                ac.b = Z;
                ac = ac.next
            }
            V = j;
            for (aw = 1; aw <= ap; aw++) {
                Y = (V + an) << 2;
                M += (ac.r = (R = O[Y])) * (ai = Q - aw);
                N += (ac.g = (X = O[Y + 1])) * ai;
                ad += (ac.b = (Z = O[Y + 2])) * ai;
                aj += R;
                ao += X;
                W += Z;
                ac = ac.next;
                if (aw < ar) {
                    V += j
                }
            }
            Y = an;
            av = ah;
            al = P;
            for (am = 0; am < K; am++) {
                at = Y << 2;
                O[at] = (M * aa) >> L;
                O[at + 1] = (N * aa) >> L;
                O[at + 2] = (ad * aa) >> L;
                M -= T;
                N -= af;
                ad -= ab;
                T -= av.r;
                af -= av.g;
                ab -= av.b;
                at = (an + (((at = am + Q) < ar ? at : ar) * j)) << 2;
                M += (aj += (av.r = O[at]));
                N += (ao += (av.g = O[at + 1]));
                ad += (W += (av.b = O[at + 2]));
                av = av.next;
                T += (R = al.r);
                af += (X = al.g);
                ab += (Z = al.b);
                aj -= R;
                ao -= X;
                W -= Z;
                al = al.next;
                Y += j
            }
        }
        az.putImageData(au, ag, ae);
        return true
    }

    function g() {
        this.r = 0;
        this.g = 0;
        this.b = 0;
        this.a = 0;
        this.next = null
    }
}; // -----------------------------------------------------------------------------------

jQuery("#wowslider-container1").wowSlider({
    effect: "collage,seven",
    prev: "",
    next: "",
    duration: 20 * 100,
    delay: 20 * 100,
    width: 583,
    height: 559,
    autoPlay: true,
    autoPlayVideo: false,
    playPause: true,
    stopOnHover: false,
    loop: false,
    bullets: 1,
    caption: true,
    captionEffect: "parallax",
    controls: true,
    responsive: 1,
    fullScreen: false,
    gestures: 2,
    onBeforeStep: 0,
    images: 0
});