<?php
$api = "http://api.open-notify.org/iss-now.json";

$results = file_get_contents($api);
$results = json_decode($results);
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <?php echo '<p>Hello Brandito</p>'; ?> 

<p>Latitude <?= $results->iss_position->latitude; ?></p>
<p>Longitude <?php echo $results->iss_position->longitude; ?> </p>

  </body>
</html>