<?php
	$arrayNew = preg_split("/ /", $argv[1], -1, PREG_SPLIT_NO_EMPTY);
	//print_r($arrayNew);
	$newStr = "";
	foreach ($arrayNew as $value) {
		$newStr = $newStr . " " . $value;
	}
	$trimStr = trim($newStr);
	echo $trimStr;
?>