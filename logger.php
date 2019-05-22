<?php
//Simple PHP IP logger.
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$file = fopen('./iplog.html','a'); // Log Output path
date_default_timezone_set('America/New_York'); //Timezone for log
$time = date('l jS \of F Y h:i:s A');
fwrite($file, "\r\n");
fwrite($file, "<b>Time: </b>$time<br/>" );
fwrite($file, "<b>Ip Address: $ip</b><br/>");
fwrite($file, "\r\n");
fclose($file);
?>
