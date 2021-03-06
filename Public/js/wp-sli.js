/**
 * Created by yuchao on 16/5/18.
 */
var SlimStat = {
    _id: "undefined" != typeof SlimStatParams.id ? SlimStatParams.id: "-1.0",
    _base64_key_str: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    _plugins: {
        acrobat: {
            substrings: ["Adobe", "Acrobat"],
            active_x_strings: ["AcroPDF.PDF", "PDF.PDFCtrl.5"]
        },
        director: {
            substrings: ["Shockwave", "Director"],
            active_x_strings: ["SWCtl.SWCtl"]
        },
        flash: {
            substrings: ["Shockwave", "Flash"],
            active_x_strings: ["ShockwaveFlash.ShockwaveFlash"]
        },
        mediaplayer: {
            substrings: ["Windows Media"],
            active_x_strings: ["WMPlayer.OCX"]
        },
        quicktime: {
            substrings: ["QuickTime"],
            active_x_strings: ["QuickTime.QuickTime"]
        },
        real: {
            substrings: ["RealPlayer"],
            active_x_strings: ["rmocx.RealPlayer G2 Control", "RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)", "RealVideo.RealVideo(tm) ActiveX Control (32-bit)"]
        },
        silverlight: {
            substrings: ["Silverlight"],
            active_x_strings: ["AgControl.AgControl"]
        }
    },
    _utf8_encode: function(t) {
        var e, a, n = "";
        for (t = t.replace(/\r\n/g, "\n"), e = 0; e < t.length; e++)
            a = t.charCodeAt(e), 128 > a ? n += String.fromCharCode(a) : a > 127 && 2048 > a ? (n += String.fromCharCode(a>>6 | 192), n += String.fromCharCode(63 & a | 128)) : (n += String.fromCharCode(a>>12 | 224), n += String.fromCharCode(a>>6 & 63 | 128), n += String.fromCharCode(63 & a | 128));
        return n
    },
    _base64_encode: function(t) {
        var e, a, n, i, r, s, o, d = "", l = 0;
        for (t = SlimStat._utf8_encode(t); l < t.length;)
            e = t.charCodeAt(l++), a = t.charCodeAt(l++), n = t.charCodeAt(l++), i = e>>2, r = (3 & e)<<4 | a>>4, s = (15 & a)<<2 | n>>6, o = 63 & n, isNaN(a) ? s = o = 64 : isNaN(n) && (o = 64), d = d + SlimStat._base64_key_str.charAt(i) + SlimStat._base64_key_str.charAt(r) + SlimStat._base64_key_str.charAt(s) + this._base64_key_str.charAt(o);
        return d
    },
    _detect_single_plugin_not_ie: function(t) {
        var e, a, n, i;
        for (n in navigator.plugins) {
            e = "" + navigator.plugins[n].name + navigator.plugins[n].description, a = 0;
            for (i in SlimStat._plugins[t].substrings)
                - 1 != e.indexOf(SlimStat._plugins[t].substrings[i]) && a++;
            if (a == SlimStat._plugins[t].substrings.length)
                return !0
        }
        return !1
    },
    _detect_single_plugin_ie: function(t) {
        var e;
        for (e in SlimStat._plugins[t].active_x_strings)
            try {
                return new ActiveXObject(SlimStat._plugins[t].active_x_strings[e]), !0
            } catch (a) {
                return !1
            }
    },
    _detect_single_plugin: function(t) {
        return navigator.plugins.length ? this.detect = this._detect_single_plugin_not_ie : this.detect = this._detect_single_plugin_ie, this.detect(t)
    },
    detect_plugins: function() {
        var t, e = [];
        for (t in SlimStat._plugins)
            SlimStat._detect_single_plugin(t) && e.push(t);
        return e.join(",")
    },
    get_page_performance: function() {
        return slim_performance = window.performance || window.mozPerformance || window.msPerformance || window.webkitPerformance || {}, "undefined" == typeof slim_performance.timing ? 0 : slim_performance.timing.loadEventEnd - slim_performance.timing.responseEnd
    },
    get_server_latency: function() {
        return slim_performance = window.performance || window.mozPerformance || window.msPerformance || window.webkitPerformance || {}, "undefined" == typeof slim_performance.timing ? 0 : slim_performance.timing.responseEnd - slim_performance.timing.connectEnd
    },
    send_to_server: function(t, e, a) {
        if ("undefined" == typeof SlimStatParams.ajaxurl || "undefined" == typeof t)
            return "function" == typeof e && e(), !1;
        "undefined" == typeof a && (a=!0);
        try {
            window.XMLHttpRequest ? request = new XMLHttpRequest : window.ActiveXObject && (request = new ActiveXObject("Microsoft.XMLHTTP"))
        } catch (n) {
            return "function" == typeof e && e(), !1
        }
        return slimstat_data_with_client_info = t + "&sw=" + screen.width + "&sh=" + screen.height + "&bw=" + window.innerWidth + "&bh=" + window.innerHeight + "&sl=" + SlimStat.get_server_latency() + "&pp=" + SlimStat.get_page_performance() + "&pl=" + SlimStat.detect_plugins(), request ? (request.open("POST", SlimStatParams.ajaxurl, a), request.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), request.send(slimstat_data_with_client_info), a ? request.onreadystatechange = function() {
            4 == request.readyState && ("undefined" == typeof SlimStatParams.id ? (parsed_id = parseInt(request.responseText), !isNaN(parsed_id) && parsed_id > 0 && (SlimStat._id = request.responseText)) : SlimStat._id = SlimStatParams.id, "function" == typeof e && e())
        } : ("undefined" == typeof SlimStatParams.id ? (parsed_id = parseInt(request.responseText), !isNaN(parsed_id) && parsed_id > 0 && (SlimStat._id = request.responseText)) : SlimStat._id = SlimStatParams.id, "function" == typeof e && e()), !0) : !1
    },
    ss_track: function(t, e, a, n, i) {
        if (t = t ? t : window.event, type = "undefined" == typeof e ? 0 : parseInt(e), note_array = [], "undefined" == typeof i && (i=!0), parsed_id = parseInt(SlimStat._id), isNaN(parsed_id) || parsed_id <= 0)
            return "function" == typeof n && n(), !1;
        if (node = "undefined" != typeof t.target ? t.target : "undefined" != typeof t.srcElement ? t.srcElement : !1, !node)
            return "function" == typeof n && n(), !1;
        switch (3 == node.nodeType && (node = node.parentNode), parent_node = node.parentNode, resource_url = "", node.nodeName) {
            case"FORM":
                "undefined" != typeof node.action && node.action && (resource_url = node.action);
                break;
            case"INPUT":
                for (; "undefined" != typeof parent_node && "FORM" != parent_node.nodeName && "BODY" != parent_node.nodeName;)
                    parent_node = parent_node.parentNode;
                if ("undefined" != typeof parent_node.action && parent_node.action) {
                    resource_url = parent_node.action;
                    break
                }
            default:
                if ("A" != node.nodeName)
                    for (; "undefined" != typeof node.parentNode && null != node.parentNode && "A" != node.nodeName && "BODY" != node.nodeName;)
                        node = node.parentNode;
                "undefined" != typeof node.hash && node.hash && node.hostname == location.hostname ? resource_url = node.hash : "undefined" != typeof node.href && (resource_url = node.href), "function" == typeof node.getAttribute && ("undefined" != typeof node.getAttribute("title") && node.getAttribute("title") && note_array.push("Title:" + node.getAttribute("title")), "undefined" != typeof node.getAttribute("id") && node.getAttribute("id") && note_array.push("ID:" + node.getAttribute("id")))
        }
        return pos_x =- 1, pos_y =- 1, position = "", "undefined" != typeof t.pageX && "undefined" != typeof t.pageY ? (pos_x = t.pageX, pos_y = t.pageY) : "undefined" != typeof t.clientX && "undefined" != typeof t.clientY && "undefined" != typeof document.body.scrollLeft && "undefined" != typeof document.documentElement.scrollLeft && "undefined" != typeof document.body.scrollTop && "undefined" != typeof document.documentElement.scrollTop && (pos_x = t.clientX + document.body.scrollLeft + document.documentElement.scrollLeft, pos_y = t.clientY + document.body.scrollTop + document.documentElement.scrollTop), pos_x > 0 && pos_y > 0 && (position = pos_x + "," + pos_y), event_description = t.type, "keypress" == t.type ? event_description += "; keypress:" + String.fromCharCode(parseInt(t.which)) : "click" == t.type && (event_description += "; which:" + t.which), "undefined" != typeof a && a && note_array.push(a), note_string = SlimStat._base64_encode(note_array.join(", ")), requested_op = "add", 1 == type ? resource_url = resource_url.substring(resource_url.indexOf(location.hostname) + location.hostname.length) : (0 == type || 2 == type) && (requested_op = "update"), SlimStat.send_to_server("action=slimtrack&op=" + requested_op + "&id=" + SlimStat._id + "&ty=" + type + "&ref=" + SlimStat._base64_encode(document.referrer) + "&res=" + SlimStat._base64_encode(resource_url) + "&pos=" + position + "&des=" + SlimStat._base64_encode(event_description) + "&no=" + note_string, n, i), !0
    },
    add_event: function(t, e, a) {
        t && t.addEventListener ? t.addEventListener(e, a, !1) : t && t.attachEvent ? (t["e" + e + a] = a, t[e + a] = function() {
            t["e" + e + a](window.event)
        }, t.attachEvent("on" + e, t[e + a])) : t["on" + e] = t["e" + e + a]
    },
    event_fire: function(t, e) {
        document.createEvent ? (new_event = document.createEvent("MouseEvents"), new_event.initEvent(e.type, !0, !1, document.defaultView, e.button), t.dispatchEvent(new_event)) : document.createEventObject && (new_event = document.createEventObject(), t.fireEvent("on" + e.type, new_event))
    },
    in_array: function(t, e) {
        for (var a = 0; a < e.length; a++)
            if (e[a].trim() == t)
                return !0;
        return !1
    },
    in_array_substring: function(t, e) {
        for (var a = 0; a < e.length; a++)
            if ( - 1 != t.indexOf(e[a].trim()))
                return !0;
        return !1
    }
};
SlimStat.add_event(window, "load", function() {
    if ("undefined" == typeof SlimStatParams.disable_outbound_tracking) {
        all_links = document.getElementsByTagName("a");
        for (var t = "undefined" != typeof SlimStatParams.extensions_to_track && SlimStatParams.extensions_to_track ? SlimStatParams.extensions_to_track.split(",") : [], e = "undefined" != typeof SlimStatParams.outbound_classes_rel_href_to_ignore && SlimStatParams.outbound_classes_rel_href_to_ignore ? SlimStatParams.outbound_classes_rel_href_to_ignore.split(",") : [], a = "undefined" != typeof SlimStatParams.outbound_classes_rel_href_to_not_track && SlimStatParams.outbound_classes_rel_href_to_not_track ? SlimStatParams.outbound_classes_rel_href_to_not_track.split(",") : [], n = 0; n < all_links.length; n++) {
            var i = all_links[n];
            if (i.setAttribute("data-slimstat-clicked", "false"), i.setAttribute("data-slimstat-type", !i.href || i.hostname != location.hostname&&-1 != i.href.indexOf("://") ? 0 : 2), i.setAttribute("data-slimstat-tracking", "true"), i.setAttribute("data-slimstat-async", "undefined" != typeof SlimStatParams.async_tracker && "false" != SlimStatParams.async_tracker ? "true" : "false"), i.setAttribute("data-slimstat-callback", "false" == i.getAttribute("data-slimstat-async") ? "true" : "false"), 2 != i.getAttribute("data-slimstat-type") || "undefined" != typeof SlimStatParams.track_internal_links && "false" != SlimStatParams.track_internal_links || i.setAttribute("data-slimstat-tracking", "false"), "true" == i.getAttribute("data-slimstat-tracking") && (e.length > 0 || a.length > 0)) {
                classes_current_link = "undefined" != typeof i.className && i.className ? i.className.split(" ") : [];
                for (var r = 0; r < classes_current_link.length; r++)
                    if (SlimStat.in_array_substring(classes_current_link[r], e) && i.setAttribute("data-slimstat-callback", "false"), SlimStat.in_array_substring(classes_current_link[r], a)) {
                        i.setAttribute("data-slimstat-tracking", "false");
                        break
                    }
            }
            "true" == i.getAttribute("data-slimstat-tracking") && "undefined" != typeof i.attributes.rel && i.attributes.rel.value && (SlimStat.in_array_substring(i.attributes.rel.value, e) && i.setAttribute("data-slimstat-callback", "false"), SlimStat.in_array_substring(i.attributes.rel.value, a) && i.setAttribute("data-slimstat-tracking", "false")), "true" == i.getAttribute("data-slimstat-tracking") && "undefined" != typeof i.href && i.href && (SlimStat.in_array_substring(i.href, e) && i.setAttribute("data-slimstat-callback", "false"), SlimStat.in_array_substring(i.href, a) && i.setAttribute("data-slimstat-tracking", "false")), extension_current_link = i.pathname.split(".").pop().replace(/[\/\-]/g, ""), t.length > 0 && 2 == i.getAttribute("data-slimstat-type") && SlimStat.in_array(extension_current_link, t) && (i.setAttribute("data-slimstat-tracking", "true"), i.setAttribute("data-slimstat-type", 1)), "true" == i.getAttribute("data-slimstat-tracking") && i.target&&!i.target.match(/^_(self|parent|top)$/i) && (i.setAttribute("data-slimstat-callback", "false"), i.setAttribute("data-slimstat-async", "true")), "false" == i.getAttribute("data-slimstat-tracking") && i.setAttribute("data-slimstat-callback", "false"), SlimStat.add_event(i, "click", function(t) {
                if ("true" == this.getAttribute("data-slimstat-tracking") && "false" == this.getAttribute("data-slimstat-clicked")) {
                    if ("true" == this.getAttribute("data-slimstat-callback"))
                        return this.setAttribute("data-slimstat-clicked", "true"), function(t, e) {
                            SlimStat.ss_track(e, t.getAttribute("data-slimstat-type"), "", function() {
                                SlimStat.event_fire(t, e)
                            }, "true" == t.getAttribute("data-slimstat-async") || "false" == t.getAttribute("data-slimstat-callback"))
                        }(this, t), !1;
                    SlimStat.ss_track(t, this.getAttribute("data-slimstat-type"), "", function() {}, "true" == this.getAttribute("data-slimstat-async") || "false" == this.getAttribute("data-slimstat-callback"))
                }
            })
        }
    }
});
var slimstat_data = "action=slimtrack";
"undefined" != typeof SlimStatParams.id && parseInt(SlimStatParams.id) > 0 ? slimstat_data += "&op=update&id=" + SlimStatParams.id : "undefined" != typeof SlimStatParams.ci ? slimstat_data += "&op=add&id=" + SlimStatParams.ci + "&ref=" + SlimStat._base64_encode(document.referrer) + "&res=" + SlimStat._base64_encode(window.location.href) : slimstat_data = "", slimstat_data.length > 0 && SlimStat.add_event(window, "load", function() {
    setTimeout(function() {
        SlimStat.send_to_server(slimstat_data)
    }, 0)
}), "function" != typeof String.prototype.trim && (String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g, "")
});


