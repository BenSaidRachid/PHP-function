<?php
function ft_strlen($str)
{
	$tmp = "";
	$i = 0;
	while ($tmp != $str) {
		$tmp .= $str[$i];
		$i++;
	}
	return $i;
}
function ft_array_search($needle,$tab)
{	
	foreach ($tab as $key => $value) {
		if($needle == $value)
			return $key;
	}
	return false;
}
function ascii_val()
{
	$tab = [];
	$count = 0;
	for ($i = 32; $i < 127; $i++) { 
		$tab[$count] = $i;
		$count++;
	}
	return $tab;
}
function ft_chr($ascii_value)
{
	$letter = " !\"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~";
	$ascii = ascii_val();
	$index;
	if($ascii_value < 32 || $ascii_value > 126)
	{
		return;
	}	
	if(ft_array_search($ascii_value,$ascii) !== false)
	{
		$index = ft_array_search($ascii_value,$ascii);
		return $letter[$index];
	}
	return false;
}
?>