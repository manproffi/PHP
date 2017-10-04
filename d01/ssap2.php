#!/usr/bin/php
<?php
	function difference($oneChar) {
		$value = ord($oneChar);
		if ($value > 64 && $value < 91) {
			return 10000 - $value;
		}
		else if ($value > 96 && $value < 123) {
			return 10032 - $value;
		}
		else if ($value > 47 && $value < 58) {
			return 1000 - $value;
		}
		return 500 - $value;
	}
	
	function elementCompare($str1, $str2) {
		$array1 = str_split($str1);
		$array2 = str_split($str2);

		for ($i = 0; $i < min(strlen($str1), strlen($str2)); $i++) {
			if (difference($array1[$i]) != difference($array2[$i])) {
				return (difference($array1[$i]) > difference($array2[$i]) ? -1 : 1);
			}
		}
		return (strlen($s1) > strlen($s2)) ? 1 : -1;
	}

	if (isset($argv)) {
		unset($argv[0]);
		$elements = array_filter(explode(' ', implode($argv, ' ')));
		usort($elements, 'elementCompare');
		foreach ($elements as $value) {
			echo "$value\n";
		}
	}
	else {
		echo "\n";
		return ;
	}
?>
