<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - External IP</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center">
  <p><a href="index.php"><img src="img/header.png" /></a></a></p>
  <table width="350" border="0">
    <tr>
    <td width="116"><img src="img/externalip.png"/></td>
    <td width="224">
    <b>
	<?PHP echo shell_exec('wget -qO- http://ipecho.net/plain'); ?>
    </b>
    </td>
  </tr>
</table>
  <p>&nbsp;</p>
  <p><a href="index.php"><img src="img/menu.png" width="142" height="27" /></a><br />
    <a href="http://127.0.0.2/netpi/active/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=stealth"><img src="img/stealth.png" border="0" /></a><a href="index.php?function=power"><img src="img/power.png" border="0" /></a></p>
  </p>
</div>
</body>
</html>
<!--
Didn’t we run out of IPv4 jokes?
There’s no place like 127.0.0.1
-->