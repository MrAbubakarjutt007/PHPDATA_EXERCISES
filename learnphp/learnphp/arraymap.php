<?php

function myfunction($a,$n) 
{
   return $a * $n;  

} 

$not = array(1,2,3,4,5);
$cat = array(1,5,6,6,5);
$array = array('cap','cat','dog','line','elephent');

$new = array_map('myfunction', $not , $cat/* arrays....arrayn*/);//inthis function we are using 1 or more arrays1,array2,......arrayn.

echo "<pre>";
print_r($new);
echo "<pre>";

  ?>