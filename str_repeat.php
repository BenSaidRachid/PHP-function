<?php
function ft_str_repeat($str,$multi)
{
	$new_str = "";
	if($multi == 0)
		return $new_str;
	for ($i=0; $i < $multi; $i++) { 
		$new_str .= $str;
	}
	return $new_str;
}
?>