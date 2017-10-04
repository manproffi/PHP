#!/usr/bin/php
<?php
	if ($argc != 1)
	{
		$arrayRow = preg_split("/ /", $argv[1], -1, PREG_SPLIT_NO_EMPTY);
		$arrayRow[] = $arrayRow[0];
		$arrayRow[0] = "";
		$newStr = "";
		foreach ($arrayRow as $value) {
		    $newStr = $newStr . " " . $value;
		}
		$trimStr = trim($newStr);
		echo $trimStr . "\n";
		}
		else {
			return ;
		}
?>
