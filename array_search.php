<?php
function ft_array_search($needle,$tab)
{	
	foreach ($tab as $key => $value) {
		if($needle == $value)
			return $key;
	}
	return false;
}
?>