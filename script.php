<?php
// '{"id":"1","data":"238 ms"},{"id":"2","data":"CentOS"},{"id":"3","data":"60%"},{"id":"4","data":"20%"},{"id":"5","data":"2%"}'
sleep(5);
	$jsonData = array(array('id' => '1','data' => '238 ms'),array('id' => '2','data' => 'CentOS'),array('id' => '3','data' => '60%'),array('id' => '4','data' => '20%'),array('id' => '5','data' => '2%'));
	echo json_encode($jsonData);
?>