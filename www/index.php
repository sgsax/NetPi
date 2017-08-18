<?PHP

require_once "netpi.php";

if (isset($_GET['function'])) {
    $function = $_GET['function'];
    run_func ($function);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Start</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
.text {
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
}
-->
</style></head>

<body>
<div align="center">
  <img src="header.jpg" /><br />
  <table width="75%" border="0">
    <tr>
      <td><a href="http://127.0.0.2/netpi/active/index.php?function=active"><img src="active.png" width="142" height="60" /></a></td>
      <td><strong class="text">NetPi Active</strong><br />
      Ping, Traceroute, iPerf and Internet Speed test</td>
    </tr>
    <tr>
      <td><a href="http://127.0.0.2/netpi/stealth/index.php?function=analyze"><img src="stealth.png" width="142" height="60" /></a></td>
      <td><strong class="text">NetPi Stealth</strong><br />
CDP,  LLDP Info, WiFi Sniffing</td>
    </tr>
    <tr>
      <td><a href="http://127.0.0.2/netpi/pentest/index.php?function=pentest"><img src="pentest.png" width="142" height="60" /></a></td>
      <td><strong class="text">NetPi Pen Test</strong><br />
Port Scanning, wireshark and Zenmap </td>
    </tr>
  </table>
</div>
</body>
</html>
<!---
Caution: Do not stare into the fiber optic laser with remaining good eye.
-->
