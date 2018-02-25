<?php
function ft_array_key_exists($key_exist,$tab)
{	
	foreach ($tab as $key => $value) {
		if($key == $key_exist)
			return true;
	}
	return false;
}
?>