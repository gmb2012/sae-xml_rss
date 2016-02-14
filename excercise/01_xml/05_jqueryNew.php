<html>
<head>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div id="movieList">
    <?php
    $xml = simplexml_load_file("05_jqueryNew.xml");
    foreach($xml->movie as $movie) {
        $artists = array();
        foreach($movie->artists->artist as $artist) {
            array_push($artists, (string) $artist);
        }

        echo "<h2>" . (string) $movie->title . "<i> (" . (string) $movie->publishYear . ")</i></h2>";
        echo "<p>" . join(", ", $artists) . "</p>";
    }

    ?>
</div>
</body>
</html>