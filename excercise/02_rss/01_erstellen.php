<?php header("Content-Type: application/rss+xml"); ?>
<?php echo "<?"; ?>xml version="1.0" encoding="UTF-8" standalone="yes"<?php echo "?"; ?>>
<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" version="2.0">
<channel>
<title>MYRSS - Testlauf</title>
<link>http://www.example.org</link>
<description>Es klappt.</description>
<language>de</language>
<pubDate><?php gmdate("D, d M Y H:i:s O", time()); ?></pubDate>
<lastBuildDate><?php gmdate("D, d M Y H:i:s O", time()); ?></lastBuildDate>

<?php

$Daten = array();
$Daten[] = array(
	'title' 		=> 'Erstes eigenes RSS-Feed',
	'description'	=> 'Mit tatkräftiger Unterstützung von PHP konnte ...',
	'pubDate'		=> gmdate("D, d M Y H:i:s O", mktime(22, 30, 0, 22, 3, 2010))
	);


foreach($Daten as $item) { ?>
<item>
<title><?php echo $item['title']; ?></title>
<description><?php echo $item['description']; ?></description>
<pubDate><?php echo $item['pubDate']; ?></pubDate>
</item>
<?php } ?>
</channel>
</rss>