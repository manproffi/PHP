#!/src/bin/user
<?php
	$arrayNew = [];

	for ($i=1; $i < $argc; $i++) { 
		$arrayRow = preg_split("/ /", $argv[$i], -1, PREG_SPLIT_NO_EMPTY);
		foreach ($arrayRow as $value) {
			$arrayNew[] = $value;
		}
	}
	sort($arrayNew);
	foreach ($arrayNew as $str) {
		echo $str . "\n";
	}
?>
