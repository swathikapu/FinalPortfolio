
var ads_priv = document.location.protocol + "//syndication.exoclick.com/ads-priv.php";
var c_name="splash_i";if(-1==document.cookie.indexOf(c_name+"=")){var expires,date=new Date;date.setTime(date.getTime()+31536e6),expires="; expires="+date.toGMTString(),value="true",isIE=function(i){this.ua=i;var e=this.ua.indexOf("msie ");if(e>0)return parseInt(this.ua.substring(e+5,this.ua.indexOf(".",e)),10);if(this.ua.indexOf("trident/")>0){var t=this.ua.indexOf("rv:");return parseInt(this.ua.substring(t+3,this.ua.indexOf(".",t)),10)}var n=this.ua.indexOf("edge/");return n>0&&parseInt(this.ua.substring(n+5,this.ua.indexOf(".",n)),10)},isSafari=function(i){this.ua=i;try{return!!window.safari||-1!=this.ua.indexOf("safari")&&-1===this.ua.indexOf("chrome")&&-1===this.ua.indexOf("crios")}catch(e){return!1}},isChrome=function(i){this.ua=i;try{return!!window.chrome||-1!==this.ua.indexOf("crios")||0===window.navigator.vendor.indexOf("Google")&&-1!==this.ua.indexOf("chrome")}catch(e){return!1}},isFirefox=function(i){this.ua=i;try{return-1!=this.ua.indexOf("firefox")}catch(e){return!1}},getBrowser=function(){var i=window.navigator.userAgent.toLowerCase(),e={ie:isIE,safari:isSafari,chrome:isChrome,firefox:isFirefox},t=null;for(browser_key in e){var n=e[browser_key];if(1==n(i)){t=browser_key;break}}return t},checkIncognito=function(i,e){var t={chrome:isChromeIncognito,ie:isIEIncognito,safari:isSafariIncognito,firefox:isFirefoxIncognito};if("function"==typeof t[i]){var n=t[i];n(e)}else e(!1)},isIEIncognito=function(i){if(this.browser.isIE<10)return i(!1),!1;try{i(window.indexedDB?!1:!0)}catch(e){i(!1)}},isSafariIncognito=function(i){try{window.localStorage.setItem("check",1),window.localStorage.getItem("check"),window.localStorage.removeItem("check"),i(!1)}catch(e){i(!0)}},isChromeIncognito=function(i){try{window.webkitRequestFileSystem?window.webkitRequestFileSystem(window.TEMPORARY,1,function(){i(!1)}.bind(this),function(){i(!0)}.bind(this)):i(!1)}catch(e){i(!1)}},isFirefoxIncognito=function(i){var e;try{e=window.indexedDB.open("test"),e.onerror=function(){i(!0)}.bind(this),e.onsuccess=function(){i(!1)}.bind(this)}catch(t){i(!0)}};var browser=getBrowser();if(null===browser){if(document.cookie=c_name+"=false"+expires+"; path=/",null===document.getElementById("ads_priv")){var i=document.createElement("script");i.id="ads_priv",i.src=ads_priv+"?i=0",document.body.appendChild(i)}}else checkIncognito(browser,function(i){if(document.cookie=c_name+"="+i+expires+"; path=/",null===document.getElementById("ads_priv")){i=1==i?1:0;var e=document.createElement("script");e.id="ads_priv",e.src=ads_priv+"?i="+i,document.body.appendChild(e)}})}
(function() {
var widthExoLayer;
var heightExoLayer;
var marginExoLayer;

marginExoLayer = 20;
widthExoLayer       = 250;
heightExoLayer      = 150;;
var frequency_period = 360;
var exoDocumentProtocol = (document.location.protocol != "https:" && document.location.protocol != "http:") ? "https:" : document.location.protocol;
var closeImage = '//static.exoclick.com/images/close-icon-circle.png';

function setCookie(c_name, value, minutes_ttl) {
    var exdate = new Date();
    exdate.setMinutes(exdate.getMinutes() + minutes_ttl);
    var c_value = escape(value) + "; expires=" + exdate.toUTCString() + ";path=/";
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++)
    {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name)
        {
            return unescape(y);
        }
    }
}

var codeExoLayer = ''
	+ '<div id="divExoLayerWrapper" style="position: fixed; width: ' + widthExoLayer + 'px; height: 0px; display:none; z-index: 100; bottom: 0 !important; right: ' + marginExoLayer + 'px; !important; transition: height 1s ease-in-out 0s; -webkit-transition: height 1s ease-in-out 0s; -o-transition: height 1s ease-in-out 0s; -moz-transition: height 1s ease-in-out 0s; -ms-transition: height 2s ease-in-out 0s;">'
    + '<div id="divExoLayer" style="position: absolute;  z-index: 101;">'
        + '<div id="exoCloseButton" style="height:24px;width:24px;float:right;top:-12px;right:-12px;position:relative;z-index:100;cursor:pointer;vertical-align:top;">'
            + '<img src="' + closeImage + '">'
        + '</div>'
	+ '<div style="position: relative; top:-24px; width: ' + widthExoLayer + 'px; height: ' + heightExoLayer + 'px; overflow: hidden;">'
    + '<iframe id="exoIMFrame" frameborder="0" scrolling="no" width="250px" height="150px"></iframe>'
	+ '</div>'
    + '</div>'
	+ '</div>';
	

function writeExoLayer() {
	document.write(codeExoLayer);
    var doc = document.getElementById('exoIMFrame').contentWindow.document;
    doc.open();
        doc.write('<body style="margin:0px;"><a target="_blank" href="http://main.exoclick.com/click.php?data=IHwxNzQ4ODYzfHxodHRwJTNBJTJGJTJGc2VjdXJlLndjbG5rLmNvbSUyRnNpdGVzJTJGJTNGY2F0JTNEd3clMjZjYW1wJTNEd3djYW1wLTI1MHgxNTAlMjZjYXRlZ29yeWlkJTNENTA4JTI2Y29udiUzRG9vZGRMSFBUYkhaWEhOYks3blFqcDU3SmFyYUhUVlYxUzFXVE9tdG1wbWRQVktxYXFWMVV0cnFablR1cGxkSzZWMHJxYnFMWFZ6MTNUVVRPbnJxb25ybWRLNlowcnBYU3VsZE02VjBycFhWYlQ2YWEwUzE1NTB6MHgxVFV6UzJ5MTBXMFZWVFV6WFdPZEs3WDdzUmMuZDQ5UV91YzZWMHJwWEI5Z0EtLXx8fDB8fDE1NjQ4NzE4NTF8Y2xpcHNhZ2UuY29tfDkwLjI0OC43Ni4xODB8fDE1NjUwNTcxfDIyNzA1ODN8NTA4fHw0MXwyfDQwfDB8MHx8MjUweDE1MHwxfDB8fDVkMmJiYzMwNmFhNDI0LjUxNDEwODA2MzgzNTUxNDE5N3w0OTM4fHwxfDB8Y2xpcHNhZ2UuY29tfDB8MTM1MDd8MTgxNDF8ICBjbGlwc2FnZSBjb20gdmlldyBnNTlqNnA1YmxoOGEgaHRtbCB8fDF8MHwwfDB8MHw2MjY5MTMxfDB8MjY1MzI2MXx8fDB8MTh8fDB8MHxPS3xkY2Q0MTg5N2NkMmEzZWY5YjcwMTAzYjE0ODRiOGEzMQ%3D%3D"><img border="0" width="250;" height="150;" src="http://static.exoclick.com/library/322388/0fcff70ed448a54a31c2caeefb073f672c915d58.jpg"></a></body>');
        doc.close();
}

function closeExoLayer(e) {
    e.stopPropagation();
    e.preventDefault();
    document.getElementById('divExoLayerWrapper').style.display = "none";
    closedStatus = true;
    setCookie('splash-closed-2270583', closedStatus, frequency_period);
}

function initExoLayer() {
    var et = document.getElementById('exoCloseButton');
    et.addEventListener('mousedown',closeExoLayer,true);
    et.addEventListener('touchstart',closeExoLayer,true);
    et.addEventListener('mouseup',closeExoLayer,true);
    et.addEventListener('touchend',closeExoLayer,true);
}

function showExoLayer() {
    if (!closedStatus) {
        document.getElementById('divExoLayerWrapper').style.display = "block";
        window.setTimeout(function() {
           document.getElementById('divExoLayerWrapper').style.height = heightExoLayer + 'px';
           hideAgainExoLayer();
        }, 100);
    }
}

function hideExoLayer() {
    document.getElementById('divExoLayerWrapper').style.height = '0px';
    window.setTimeout(function() {
        document.getElementById('divExoLayerWrapper').style.display = "none";
        showAgainExoLayer();
    }, 1000);
}

function showAgainExoLayer() {
	initExoLayer();
	window.setTimeout(showExoLayer, 5000);
}

function hideAgainExoLayer() {
	window.setTimeout(hideExoLayer, 7000);
}

function loadExoLayer() {
	initExoLayer();
	showExoLayer();
}

var closedStatus = getCookie('splash-closed-2270583');
if (!closedStatus) {
    writeExoLayer();
    window.setTimeout(loadExoLayer,3000);
}

    document.getElementById('exoIMFrame').contentWindow.document.body.querySelector('a').addEventListener('click', function(e) {
        e.preventDefault();
        if (this.href.indexOf("?") !== -1) {
            var separatorUrlParams = "&";
        } else {
            var separatorUrlParams = "?";
        }
        clickXY = 'clickX=' + e.clientX + '&clickY=' + e.clientY;
        window.open(this.href + separatorUrlParams + clickXY, '_blank');
    });

})();



    