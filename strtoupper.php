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
function ft_strtoupper($str)
{	
	$count = 0;
	$lower = "abcdefghijklmnopqrstuvwxyz";
	$upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$letter = "";
	while ($count < ft_strlen($str)) {
		if(ft_strpos($lower,$str[$count]) !== false)
		{
			$letter = ft_strpos($lower,$str[$count]);
			$str[$count] = $upper[$letter];
		}
		$count++;
	}
	return $str;
}
?>