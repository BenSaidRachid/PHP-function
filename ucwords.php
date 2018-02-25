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
function ft_trim($str)
{
	$i = 0;
	$new_str = "";
	$flag = true;
	$j =  ft_strlen($str) -1;
	while ($j > 0) {		
		if($str[$j] != " ")
		{
			$j++;
			break;
		}
		else
			$j--;				
	}
	while ($i < $j) {
		if($str[$i] != " ")
		{
			$flag = false;
		}
		if(!$flag)
		{
			$new_str .= $str[$i];
		}
		$i++;
	}	
	return $new_str;
}
function ft_count($tab)
{	
	$i = 0;
	foreach($tab as $value) {		
		$i++;
	}
	return $i;
}
function ft_array_push(&$tab,$new_elem)
{
	$i = ft_count($tab);
	$tab[$i] = $new_elem;
}
function ft_implode($glue,$array)
{
	$str = "";
	for ($i=0; $i < count($array); $i++) { 
		$str .= $array[$i];
		if($i < count($array) -1)
		$str .= $glue;
	}
	return $str;
}

function ft_explode($delimiter,$str)
{
	$i = 0;
	$j = 0;
	$test = false;
	$tmp = "";
	$array = array();	
	if(ft_strlen($delimiter) == 0)
	{
		echo "PHP Warning:  ft_explode(): Empty delimiter\n";
		return;
	}
	while($i <  ft_strlen($str))
	{
		if($str[$i] == $delimiter)
		{
			$test = true;
			$str[$i] = "";
			while ($j <= $i) {
				$tmp.=$str[$j];
				$j++;
			}
			$tmp = ft_trim($tmp);
			if($tmp !== $delimiter)
				ft_array_push($array, $tmp);
			$tmp = "";			
		}
		$i++;
	}
	if($test)
	{
		while ($j < ft_strlen($str)) {
				$tmp.=$str[$j];
				$j++;
			}
			$tmp = ft_trim($tmp);
			if($tmp !==$delimiter)
				ft_array_push($array, $tmp);
	}
	if(!$test)
	{
		ft_array_push($array, $str);		
	}
	return $array;
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

function ft_ucwords($str,$delimiters = " ")
{
	$lower = "abcdefghijklmnopqrstuvwxyz";
	$upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$word = ft_explode($delimiter,$str);
	$str = "";
	for ($i = 0; $i < ft_count($word); $i++) { 
		if(ft_strpos($lower,$word[$i][0]) !== false)
		{
			$letter = ft_strpos($lower,$word[$i][0]);
			$word[$i][0] = $upper[$letter];
		}
		$str .= $word[$i];
	}
	return $str;
}    
?>