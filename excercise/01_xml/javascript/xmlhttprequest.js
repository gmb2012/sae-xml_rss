
var xmlHttp = null;

// Mozilla, Opera, Safari sowie IE7+
if (typeof XMLHttpRequest != 'undefined') {
    xmlHttp = new XMLHttpRequest();
}
if (!xmlHttp) {
    // Internet Explorer 6 und älter
    try {
        xmlHttp  = new ActiveXObject("Msxml2.XMLHTTP"); }
	catch(e) {
        try {
            xmlHttp  = new ActiveXObject("Microsoft.XMLHTTP"); }
		catch(e) {
            xmlHttp  = null; }
    	}
	}
