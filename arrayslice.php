<?php 

$don = ['red', 'green', 'blue', 'pink', 'gray'];
//$don = [ 'a' => 'red', 'b' => 'green','c' =>  'blue','d' =>  'pink','e' =>  'gray'];

$new = array_slice($don,2,4);// $ver = using array_slice(array, index, length);


echo "<pre>";
print_r($new);
echo "</pre>";




 ?>