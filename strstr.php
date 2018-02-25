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
function ft_strstr($str, $needle , $before_needle = false )
{
	$i = 0;
	$j = 0;
	$flag = false;
	$find = false;
	$strstr = "";
	if(ft_strlen($needle) == 1)
	{
		$flag = true;
	}
	while ($i < ft_strlen($str)) {
		if($flag)
		{
			if($str[$i] == $needle)
			{
				$find = true;
				break;
			}				
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
			{
				$find = true;
				break;
			}			
		}
		$i++;
	}
	if($find)
	{
		if($before_needle)
		{
			for ($count=0; $count < $i; $count++) { 
				$strstr .= $str[$count]; 
			}
			return $strstr;
		}
		for ($count=$i; $count < ft_strlen($str); $count++) { 
			$strstr .= $str[$count]; 
		}
		return $strstr;
	}
	return false;
}
?>