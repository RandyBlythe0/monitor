<?php
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    	echo shell_exec("ping -c 4 192.168.31.1 | tail -n 1");
    	echo shell_exec("uname -a");
	} else {
    	echo 'Error Code 1';
	}
?>