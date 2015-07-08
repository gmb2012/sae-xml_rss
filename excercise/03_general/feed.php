<?php
$name = 'feed.xml';

// send the right headers
header("Content-Type: application/xml ");
header("Content-Length: " . filesize($name));

// dump the file
fpassthru(fopen($name, 'r'));