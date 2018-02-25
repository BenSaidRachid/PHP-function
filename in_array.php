<?php
function ft_count($tab)
{	
	$i = 0;
	foreach($tab as $value) {		
		$i++;
	}
	return $i;
}
function ft_in_array($needle,$array)
{
	$i = 0;
	while ($i < ft_count($array)) {
		if($array[$i] == $needle)
			return true;
		$i++;
	}
	return false;
}
?>