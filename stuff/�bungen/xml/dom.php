<?php

$DOMDocument = new DOMDocument('1.0', 'UTF-8');

$DOMDocument->load('translation.xml');

$Translations = array();

foreach( $DOMDocument->getElementsByTagName('tu') as $translationUnit) {
	$tuid = $translationUnit->getAttribute('tuid');
	$Translations[$tuid] = array();
	foreach( $translationUnit->getElementsByTagName('tuv') as $translationSegment) {
		$lang = $translationSegment->getAttribute('xml:lang');
		$Translations[$tuid][$lang] = $translationSegment->textContent;
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