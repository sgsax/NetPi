<?php

//////////////////////////////////////////////////////////////////
// Global configuration vars are set here
//

$script_path = "/nettools/NetPi/scripts/";
$log_path = "/var/log/netpi";
global $script_path, $log_path;

// used by main pages to invoke tests
function run_func($func) {
    if($func == "draw") {
        // stealth
        exec("dia &");
    }
    elseif($func == "notepad") {
        // active, pentest, stealth
        exec("$script_path/notepad.sh");
    }
    elseif($func == "zenmap") {
        // pentest
        exec("$script_path/zenmap.sh");
    }
    elseif($func == "pentest") {
        exec("$script_path/netmode.sh pentest");
        echo "<meta http-equiv='refresh' content='3; URL=http://127.0.0.2/netpi/pentest' />";
    }
    elseif($func == "analyze") {
        exec("$script_path/netmode.sh stealth");
        echo "<meta http-equiv='refresh' content='3; URL=http://127.0.0.2/netpi/stealth' />";
    }
    elseif($func == "active") {
        exec("$script_path/netmode.sh active");
        echo "<meta http-equiv='refresh' content='3; URL=http://127.0.0.2/netpi/active' />";
    }
    elseif($func == "power") {
        exec("sudo init 0");
    }
}

?>
