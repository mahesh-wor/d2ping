<?php
	include 'JJG/Ping.php';
	use \JJG\Ping as Ping;

	//$sevip = array("103.28.54.1","146.66.152.1",
	//"146.66.155.1","192.69.96.1",
	//"208.78.164.1","103.10.125.1",
	//"146.66.156.1","209.197.29.1",
	//"197.80.200.1","185.25.183.1");
	//$sevip='www.google.com';
		$latency = new Ping("127.0.0.1");
		echo $latency;
	
?>