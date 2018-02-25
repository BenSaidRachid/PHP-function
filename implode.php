<?php
function ft_count($tab)
{	
	$i = 0;
	foreach($tab as $value) {		
		$i++;
	}
	return $i;
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
?>