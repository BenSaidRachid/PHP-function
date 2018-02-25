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
?>