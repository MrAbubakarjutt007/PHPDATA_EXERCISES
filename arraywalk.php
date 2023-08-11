<?php

function myfuncname($value,$keys)
{
   echo "$keys putting values $value <br>";

} 



$not = array(

	'a' => 'lemon',             //array_waik_recursive() using foe multidimantion array
	'b' => 'patato',
	'c' => 'mango',
	'd' => 'orenge',
	'e' => 'apple',
 ); 
array_walk($not,'myfuncname');
?>