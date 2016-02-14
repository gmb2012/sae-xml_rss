<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>AJAX TMX</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/content.css" />
<link rel="stylesheet" type="text/css" href="css/forms.css" />
<script type="text/javascript" src="javascript/xmlhttprequest.js"></script>
</head><body>
<div id="Header"><h1>AJAX</h1></div>

<div id="Display">
<fieldset><legend>Übersetzen</legend>
<input type="text" name="Segment" id="Segment" />
<input type="submit" name="Suche" value="Suchen" id="Suche" />
</fieldset>
</div>

<script type="text/javascript">
/* <![CDATA[ */

document.getElementById('Suche').onclick = function() {
	xmlHttp.open('GET', 'translation.xml', true);
	xmlHttp.onreadystatechange = function () {
    	if (xmlHttp.readyState == 4) {
			getResult(xmlHttp.responseXML);
			}
		};

	xmlHttp.send(null);
	return true;
	}
function getResult(XMLData) {
	var units = XMLData.getElementsByTagName("tu");
	var length = units.length;
	for (xx=0; xx<length; xx++) {
		alert(units[xx].getAttribute("tuid"));
		}
	}

/* ]]> */
</script>

</body></html>