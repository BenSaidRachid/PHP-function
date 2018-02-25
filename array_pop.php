<?php
function ft_count($tab)
{	
	$i = 0;
	foreach($tab as $value) {		
		$i++;
	}
	return $i;
}
function ft_array_pop(&$tab)
{	
	$new_tab = [];
	$count = 0;
	$value = $tab[ft_count($tab) - 1];	
	while ($count < ft_count($tab) - 1) {
		$new_tab[$count] = $tab[$count];
		$count++;
	}
	$tab = $new_tab;
	return $value;
}
?>