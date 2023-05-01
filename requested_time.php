<?php
// Get the requested time
$request_time = $_SERVER['REQUEST_TIME'];

// Format the timestamp into a readable string
$requested_at = date('Y-m-d H:i:s', $request_time);

// Output the requested time
echo "Page requested at: $requested_at";
?>
