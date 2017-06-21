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
<title>NetPi - Stealth - CDP</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center">
  <p><a href="index.php"><img src="img/header.png" /></a>
    <?PHP 
	$path = "/var/log/netpi/cdp"; 

$latest_ctime = 0;
$latest_filename = '';    

$d = dir($path);
while (false !== ($entry = $d->read())) {
  $filepath = "{$path}/{$entry}";
  // could do also other checks than just checking whether the entry is a file
  if (is_file($filepath) && filectime($filepath) > $latest_ctime) {
    $latest_ctime = filectime($filepath);
    $latest_filename = $entry;
  }
}

$readfile = "/var/log/netpi/cdp/" . $latest_filename;
$file = $readfile;

?>
  <table width="400" border="0">
  <tr>

  </tr>
  <tr>
    <td><strong>Hostname:</strong></td>
    <td><?PHP
	  $contents = file($file, FILE_IGNORE_NEW_LINES);
  $find = 'Device ID';
  if (false !== $key = array_search($find, $contents)) {
      $host = "".$contents[$key+1];
	  $hosta = str_replace('value:', '', $host);
	  echo $hosta;
  } else {
      echo "No match found";
  }
  ?></td>
  </tr>
  <tr>
    <td><strong>IP Address:</strong></td>
    <td><?PHP
	  $contents = file($file, FILE_IGNORE_NEW_LINES);
  $find = 'Addresses';
  if (false !== $key = array_search($find, $contents)) {
      $ip = "".$contents[$key+6];
	  $ipa = str_replace('address val:', '', $ip);
	  echo $ipa;
  } else {
      echo "No match found";
  }
  ?></td>
  </tr>
  <tr>
    <td><strong>Port Number:</strong></td>
    <td><?PHP
	  $contents = file($file, FILE_IGNORE_NEW_LINES);
  $find = 'Port ID';
  if (false !== $key = array_search($find, $contents)) {
      $port = "".$contents[$key+1];
	  $porta = str_replace('value:', '', $port);
	  echo $porta;
  } else {
      echo "No match found";
  }
  ?></td>
  </tr>
  <tr>
    <td><strong>VLAN:</strong></td>
    <td><?PHP
	  $contents = file($file, FILE_IGNORE_NEW_LINES);
  $find = 'Native VLAN';
  if (false !== $key = array_search($find, $contents)) {
       $vlan = "".$contents[$key+1];
	   $vlana = str_replace('value:', '', $vlan);
	  echo $vlana;
  } else {
      echo "No match found";
  }
  ?></td>
  </tr>
  <tr>
    <td><strong>Model:</strong></td>
    <td><?PHP
	  $contents = file($file, FILE_IGNORE_NEW_LINES);
  $find = 'Platform';
  if (false !== $key = array_search($find, $contents)) {
      $model = "".$contents[$key+1];
	  $modela = str_replace('value:', '', $model);
	  echo $modela;
  } else {
      echo "No match found";
  }
  ?></td>
  </tr>
  <tr>
    <td width="34%"><strong>Software version:</strong></td>
    <td width="66%">
	<?PHP
	  $contents = file($file, FILE_IGNORE_NEW_LINES);
  $find = 'Software version';
  if (false !== $key = array_search($find, $contents)) {
      $softwarev = "".$contents[$key+1];
	  $softwareva = str_replace('value:', '', $softwarev);
	  echo $softwareva;
  } else {
      echo "No match found";
  }
  ?>
  
  
  </td>
  </tr>
</table>
  <a href="http://127.0.0.2/netpi/stealth/cdpfull.php"><img src="img/full.png" border="0" /></a>
    <p><a href="http://127.0.0.2/netpi/stealth/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=active"><img src="img/active.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=power"><img src="img/power.png" border="0" /></a>
    </a></p>
    </p>
</div>
</body>
</html>


<!-- 
Massive thanks to Nick Robins, and SBE for their assistance on this page
-
DONT PANIC
Carry your towel.
-
-->
