<?php
	include "lib/morse.php";

	$morse = new MorseCode();
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		if($_GET["met"] == "api_conv"){
			echo json_encode($morse->api_conv($_GET["value"]));
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		if($_POST["met"] == "api_conv"){
			echo json_encode($morse->api_conv($_POST["value"]));
		}
	}

?>