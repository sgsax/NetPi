<?PHP

require_once "../../netpi.php";

if (isset($_GET['function'])) {
    $function = $_GET['function'];
    run_func ($function);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Active</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center"><img src="img/header.png" />
  <br />
  <a href="http://127.0.0.2/netpi/active/ping.php"><img src="img/function1.png" width="142" height="86" border="0"/></a><a href="http://127.0.0.2/netpi/active/traceroute.php"><img src="img/function2.png" width="142" height="86" border="0" /></a><a href="http://127.0.0.2/netpi/active/speedtest.php"><img src="img/function3.png" width="142" height="86" border="0" /></a>
  <br />
  <a href="http://127.0.0.2/netpi/active/net_details.php"><img src="img/function4.png" width="142" height="86" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=notepad"><img src="img/function5.png" width="142" height="86" border="0" /></a><a href="http://127.0.0.2/netpi/active/iperf.php"><img src="img/function6.png" width="142" height="86" border="0" /></a><br />
  <a href="http://127.0.0.2/netpi/active/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=analyze"><img src="img/stealth.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=power"><img src="img/power.png" border="0" /></a></div>
</body>
</html>
<!---
The worst thing about broadcast storm jokes is that everyone’s already heard them a hundred times.
--->
