<?php
function ft_array_values($tab)
{	
	$values = [];
	$count = 0;
	foreach ($tab as $key => $value) {
		$values[$count] = $value;
		$count++;
	}
	return $values;
}
?>