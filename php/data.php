<?php

// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=home user=rdcrla9s");

// Performing SQL query
$query = 'SELECT timestamp, temperature FROM temp_humidity';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

$arr = pg_fetch_all($result);
echo json_encode($arr);

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

?>
