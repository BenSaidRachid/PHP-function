<?php
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
?>