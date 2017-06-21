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
<div align="center">
<a href="index.php"><img src="img/header.png" /><br />
</a></a>
  <b>Pinging: <?php echo $_POST["ip"]; ?></b><br />
<table width="400" border="0">
  <tr>
    <td width="100%"><b>
	<?PHP 
	$ping = shell_exec('ping -c 5 '.escapeshellarg($_POST["ip"]));
	echo nl2br($ping);
	 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
  <a href="index.php"><img src="img/menu.png" width="142" height="27" /></a><img src="img/t.png" width="142" height="27" /><a href="advping.php"><img src="img/advping.png"/><br />
  </a>
	<a href="http://127.0.0.2/netpi/active/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=stealth"><img src="img/stealth.png" border="0" /></a><a href="/index.php?function=power"><img src="img/power.png" border="0" /></a></p>
</div>
</body>
</html>

<!---
Aperture Science:
We do what we must
because we can
For the good of all of us.
Except the ones who are dead.

But there's no sense crying
over every mistake.
You just keep on trying
'til you run out of cake.
And the science gets done.
And you make a neat gun
for the people who are
still alive.
-->