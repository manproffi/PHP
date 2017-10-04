<?php
	while (1)
	{
		echo ("Enter a number: ");
		if ($line = fgets(STDIN)) {
			$clear = trim($line);
			if (is_numeric($clear)) {
				if (fmod($clear, 2) == 0) {
					echo "The number " . $clear . " is even\n"; 
				}
				else {
					echo "The number " . $clear . " is odd\n"; 
				}
			}
			else {
				echo "'{$clear}' is not a number\n";
			}
		}
		else {
			echo "\n";
			break ;
		}
	}

?>