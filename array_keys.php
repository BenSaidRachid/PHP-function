<?php
function ft_array_keys($tab, $search = null)
{	
	$keys = [];
	$count = 0;
	foreach ($tab as $key => $value) {
		if($search == null)
			$keys[$count] = $key;
		else
		{
			if($value == $search)
				$keys[$count] = $key;
		}
		$count++;
	}
	return $keys;
}
?>