<?php
function is_prime($nbr)
{
    for($i = 2; $i <= $nbr / 2; ++$i)
    {
        if($nbr % $i == 0)
        {
           	return false;
            break;
        }
    }
    return true;
}
?>