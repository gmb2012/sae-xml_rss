<html>
<head>
</head>
<body>

<?php
// xml daten einlesen
$xmldata = file_get_contents('05_jquery_self.xml');
// an den Wert des xml:lang-Attributes kommen wir sonst nicht ran ;)
$XMLDocument = simplexml_load_string($xmldata);

foreach( $XMLDocument->xpath("//title[@language='en']/parent::*") as $title) {
	echo "<h2>" . $title->title . "</h2>";
}
?>

</body>
