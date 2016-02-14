<?php
// send the right headers
header("Content-Type: application/json ");

$movie1 = new stdClass();
$movie1->title = "Bla";
$movie1->release = 1985;
$movie1->actors = array("12", "34", "56");

$movie2 = new stdClass();
$movie2->title = "Bla 2";
$movie2->release = 1995;
$movie2->actors = array("AA", "BB", "CC");


$output = array($movie1, $movie2);

echo json_encode($output);