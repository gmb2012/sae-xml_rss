<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RSS einlesen</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php

// xml daten einlesen
$xmldata = file_get_contents('10_rss.xml');
// $xmldata = iconv('ISO-8859-1', 'UTF-8', $xmldata);
// an den Wert des xml:lang-Attributes kommen wir sonst nicht ran ;)
$xmldata = str_replace('xml:lang', 'lang', $xmldata);
$XMLDocument = simplexml_load_string($xmldata, null, LIBXML_NOCDATA);

foreach( $XMLDocument->xpath("//item") as $item) {

	$title = htmlspecialchars((string) $item->title, ENT_QUOTES, 'UTF-8');
	$link = htmlspecialchars((string) $item->link, ENT_QUOTES, 'UTF-8');
	$description = htmlspecialchars((string) $item->description, ENT_QUOTES, 'UTF-8');

	$pubDate = htmlspecialchars((string) $item->pubDate, ENT_QUOTES, 'UTF-8');
	$date = date('d.m.Y H:i:s', strtotime($pubDate));

	?><h2><?php echo $title; ?></h2>
	<p><?php echo $description; ?></p>
	<p><?php echo $date; ?>, &raquo; <a href="<?php echo $link; ?>">details</a></p>
<?php }

?>
</body>
</html>