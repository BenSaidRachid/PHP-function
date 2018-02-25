<?php
function ft_count($tab)
{	
	$i = 0;
	foreach($tab as $value) {		
		$i++;
	}
	return $i;
}
function ft_array_shift(&$tab)
{	
	$new_tab = [];
	$count = 0;
	$value = $tab[0];	
	while ($count < ft_count($tab) - 1) {
		$new_tab[$count] = $tab[$count + 1];
		$count++;
	}
	$tab = $new_tab;
	return $value;
}
?>