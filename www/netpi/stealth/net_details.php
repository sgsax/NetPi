<?PHP
    if (isset($_GET['function']))
    {
         $function = $_GET['function'];
		 if($function == "lldp")
		 {
		 	exec('lxterminal -e /opt/netpi/scripts/lldpdetails.sh');
		 }
		 elseif($function == "cdp")
		 {
		 	exec('lxterminal -e /opt/netpi/scripts/cdpdetails.sh');
		 }
		 elseif($function == "draw")
		 {
		 	exec('dia &');
		 }
		 elseif($function == "wlanfix")
		 {
		 	exec('lxterminal -e /opt/netpi/scripts/netwake.sh');
		 }
		 elseif($function == "notepad")
		 {
		 	exec('/opt/netpi/scripts/notepad.sh');
		 }
		 elseif($function == "int")
		 {
		 	exec('/opt/netpi/scripts/gnet-if.sh');
		 }
		 elseif($function == "pentest")
		 {
		 	exec('/opt/netpi/scripts/netmode.sh pentest');
			echo "<meta http-equiv='refresh' content='3; URL=http://127.0.0.2/netpi/pentest' />";
		 }
		 elseif($function == "active")
		 {
			echo "<meta http-equiv='refresh' content='3; URL=http://127.0.0.2/netpi/active' />";
			exec('lxterminal -e /opt/netpi/scripts/netmode.sh active &');
		 }
		 elseif($function == "power")
		 {
		 	exec('sudo init 0');
		 }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Stealth</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center"><a href="index.php"><img src="img/header.png" /></a>
  <br />
  What are you doing looking for an IP address while in stealth mode?!<br />
  You will get discovered!<br />
  <strong>OK, just be sure, here is the output of a ifconfig:</strong><br />
  <br />
  <?PHP 
  $ifconfig = shell_exec('/sbin/ifconfig');
  echo nl2br ($ifconfig);
   ?>
</div>
</body>
</html>
<!---
The problem with UDP jokes: I don’t get half of them.
-->
