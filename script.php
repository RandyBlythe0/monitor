<?php
$command = "sshpass -p DS@ki#47-THD ssh -tq root@103.19.18.47";
// '{"id":"1","data":"238 ms"},{"id":"2","data":"CentOS"},{"id":"3","data":"60%"},{"id":"4","data":"20%"},{"id":"5","data":"2%"}'
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
		$ping_command = "";
		$ping_command .= $command;
		$ping_command .= " \"ping -c 4 8.8.8.8 | tail -n 1\"";
    	$ping_output = shell_exec($ping_command);
    	//while (!isset($ping_output));
    	$ping_output = str_replace('\r\n', '\n', $ping_output);
    	$uname_output = shell_exec("uname -a");
    	// while (!isset($uname_output));
    	$disk_output = shell_exec("df -h . | tail -n 1");
    	// while (!isset($disk_output));
    	$ram_output = shell_exec("free -h | awk 'FNR == 2 { print $3 \" / \" $2}'");
    	// while (!isset($ram_output));
    	$cpu_output = shell_exec("head -1 /proc/stat");
    	// while (!isset($cpu_output));
	//$ping_output = "230ms";
	//$uname_output = "Linux";
	//$disk_output = "30 MB";
	//$ram_output = "2 GB";
	//while (!isset($ram_output));
	} else {
    	echo 'Error Code 1 : OS Unssuported';
	}
	$jsonData = array(array('id' => '1','data' => $ping_output),array('id' => '2','data' => $uname_output),array('id' => '3','data' => $disk_output),array('id' => '4','data' => $ram_output),array('id' => '5','data' => $cpu_output));
	echo json_encode($jsonData);
?>