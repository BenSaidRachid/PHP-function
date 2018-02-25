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
?>