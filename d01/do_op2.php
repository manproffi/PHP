<?php
	if ($argc != 2) {
		echo "Incorrect Parameters\n";
		return ;
	}
	$arrayNew = preg_split("/\+|\-|\*|\/|\%|\ /", $argv[1], -1, PREG_SPLIT_NO_EMPTY);
	$operaton = strpbrk($argv[1], "+-*/%");
	if (!$operaton) {
		echo "Syntax Error\n";
		return ;
	}
	if (is_numeric($arrayNew[0]) && is_numeric($arrayNew[1])) {
		switch ($operaton[0]) {
			case "+":
				echo intval($arrayNew[0], 10) + intval($arrayNew[1], 10);
				break;
			case "-":
				echo intval($arrayNew[0], 10) - intval($arrayNew[1], 10);
				break;
			case "*":
				echo intval($arrayNew[0], 10) * intval($arrayNew[1], 10);
				break;
			case "/":
				echo intval($arrayNew[0], 10) / intval($arrayNew[1], 10);
				break;
			case "%":
				echo intval($arrayNew[0], 10) % intval($arrayNew[1], 10);
				break;
		}
	}
	else {
		echo "Syntax Error\n";
		return ;
	}
?>