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
function ft_strpos($str,$needle)
{
	$i = 0;
	$j = 0;
	$flag = false;
	if(ft_strlen($needle) == 1)
	{
		$flag = true;
	}
	while ($i < ft_strlen($str)) {
		if($flag)
		{
			if($str[$i] == $needle)
					return $i;
		}
		else
		{
			$j = 0;	
			if($str[$i] == $needle[$j])
			{						
				while ($j < ft_strlen($needle)) {
					if($str[$i+$j] == $needle[$j])
					{
						$j++;
					}
					else
					{
						break;
					}
				}
			}
			if(ft_strlen($needle) == $j)
				return $i;			
		}
		$i++;
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
function ft_ord($str)
{
	$letter = " !\"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~";
	$ascii = ascii_val();
	$index;
	if(ft_strlen($str) == 0)
	{
		return 0;
	}	
	if(ft_strpos($letter,$str[0]) !== false)
	{
		$index = ft_strpos($letter,$str[0]);
		return $ascii[$index];
	}
	return false;
}
?>