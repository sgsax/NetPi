<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Ping 8.8.8.8</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center"><a href="index.php"><img src="img/header.png" /></a></a>
  <br />
  <?php
$str = exec("ping -c 1 www.google.com");
if ($result == 0){
  echo "Ping Succeeded";
}else{
  echo "Ping Failed";
}
?>
<table width="325" border="0">
  <tr>
    <td width="100%">
    <b>
	<?PHP echo shell_exec('ping -q -c 2 8.8.8.8'); ?>
    </b>
    </td>
  </tr>
</table>
  <a href="index.php"><img src="img/menu.png"/></a>
  <a href="advping.php"><img src="img/advping.png" width="142" height="27"/><br />
  </a>
  <a href="http://127.0.0.2/netpi/active/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=stealth"><img src="img/stealth.png" border="0" /></a><a href="/index.php?function=power"><img src="img/power.png" border="0" />
  </a></p>
</div>
	</body>
</html>
<!---
If you have experienced an ICMP joke, ping me.
-->