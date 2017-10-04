<?php
	function ft_split($str){
		$arrayNew = preg_split("/ /", $str, -1, PREG_SPLIT_NO_EMPTY);
		sort($arrayNew);
		return $arrayNew;
	}
?>