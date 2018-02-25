<?php
function ft_strlen($str)
{
	$tmp = "";
	$i = 0;
	while ($tmp != $str) {
		$tmp.=$str[$i];
		$i++;
	}
	return $i;
}
function ft_strrev($str)
{
	$new_str = "";
	for ($i = ft_strlen($str) - 1; $i >= 0; $i--) { 
		$new_str .= $str[$i];
	}
	return $new_str;
}
?>