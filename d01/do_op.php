<?php
	if ($argc == 4) {
		$a = trim($argv[1]);
		$b = trim($argv[3]);
		$k = trim($argv[2]);
		switch ($k) {
			case "+":
				echo intval($a, 10) + intval($b, 10);
				break;
			case "-":
				echo intval($a, 10) - intval($b, 10);
				break;
			case "*":
				echo intval($a, 10) * intval($b, 10);
				break;
			case "/":
				echo intval($a, 10) / intval($b, 10);
				break;
			case "%":
				echo intval($a, 10) % intval($b, 10);
				break;
		}
	}
	else {
		echo "Incorrect Parameters\n";
	}
?>