<?php

// Connecting, selecting database
$dbconn = pg_connect("host=itchyribs.com port=5432 dbname=home user=arnsong") or die("connection failed");

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
