<?php
// xml daten einlesen
$xmldata = file_get_contents('translation.xml');
// an den Wert des xml:lang-Attributes kommen wir sonst nicht ran ;)
$xmldata = str_replace('xml:lang', 'lang', $xmldata);
$XMLDocument = simplexml_load_string($xmldata, null, LIBXML_NOCDATA);

$Translations = array();
foreach( $XMLDocument->xpath("//tu") as $translationUnit) {
	$tuid = (string) $translationUnit['tuid'];
	$Translations[$tuid] = array();
	foreach($translationUnit->tuv as $segment) {
		$lang = (string) $segment['lang'];
		$Translations[$tuid][$lang] = (string)$segment->seg;
		}
	}

$ContentLanguage = (isset($_GET['lang'])) ? $_GET['lang'] : 'de';
?>

<form action="login.php" method="post">
<fieldset><legend><?php echo $Translations['Authentifizierung'][$ContentLanguage]; ?></legend>
<label for="Username"><?php echo $Translations['Benutzername'][$ContentLanguage]; ?></label>
<input type="text" name="Username" id="Username" /><br />
<label for="Password"><?php echo $Translations['Passwort'][$ContentLanguage]; ?></label>
<input type="password" name="Password" id="Password" /><br />
</fieldset>
</form>
