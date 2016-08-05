<?php

date_default_timezone_set('America/New_York');
$timestamp = date("Y-m-d H:i:s");

// Retrieve data from POST request
$array = $_POST;
$array["sensor_name"] = "lr01";

// Append timestamp to this request
$array["timestamp"] = $timestamp;

// Connecting, selecting database
$dbconn = pg_connect("host=itchyribs.com dbname=home user=arnsong password=mufasa22");

// Insert values into database
pg_insert($dbconn, 'temp_humidity', $array);

echo $array["temperature"]."\r\n";
echo $array["humidity"];

// Closing connection
pg_close($dbconn);

?>