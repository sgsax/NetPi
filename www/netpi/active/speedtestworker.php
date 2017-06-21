<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Speedtest</title>
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

  $cmd = 'speedtest-cli';
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
“Mad Hatter: “Why is a raven like a writing-desk?”
“Have you guessed the riddle yet?” the Hatter said, turning to Alice again.
“No, I give it up,” Alice replied: “What’s the answer?”
“I haven’t the slightest idea,” said the Hatter” 
-->