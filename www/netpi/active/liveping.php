<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Advanced PING - Results</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style>
</head>
<body>
<html>
<body>


<?php

  $cmd = 'ping -c 10 127.0.0.1';
  echo "<pre>$output</pre>";



while (@ ob_end_flush()); // end all output buffers if any

$proc = popen($cmd, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';




?>





</body>
</html>
<!---
I made an NTP joke once. The timing was perfect.
-->

