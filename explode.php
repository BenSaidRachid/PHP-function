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
?>