<html> 
<body> 
<h2>NetPi System Status</h2>
<pre><b>Uptime:</b> <?php system("uptime"); ?> 
<br/><b>System Information:</b> <?php system("uname -a"); ?> 
<br/><b>Memory Usage (MB):</b> <?php system("free -m"); ?> 
<br/><b>Disk Usage:</b> <?php system("df -h"); ?> 
<br/><b>CPU Information:</b> <?php system("cat /proc/cpuinfo | grep \"model name\|processor\""); ?> 
<br/><b>Hostname:</b> <?php system("hostname -s"); ?> 
<br/><b>Logged in Users:</b> <?PHP echo shell_exec('who'); ?>
<br/><br/><b>Network: </b> <?PHP echo shell_exec('/sbin/ifconfig eth0 | grep "inet addr:"'); ?>
</pre> 
</body> 
</html>
