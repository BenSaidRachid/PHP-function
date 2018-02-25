<?php
function ft_count($tab)
{	
	$i = 0;
	foreach($tab as $value) {		
		$i++;
	}
	return $i;
}
function ft_sort(&$tab)
{
	$count = 0;
	$tmp = "";
	while ($count < ft_count($tab)) {
		if($count != ft_count($tab) - 1)
		{
			if($tab[$count] > $tab[$count + 1])
			{			
				$tmp = $tab[$count];
				$tab[$count] = $tab[$count+1];
				$tab[$count+1] = $tmp;
				$count = 0;
			}
			else
				$count++;
		}
		else
			$count++;
	}
}
?>