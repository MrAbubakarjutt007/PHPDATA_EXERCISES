<?php 

//arrayreplace function

$fruits = [ 'banana', 'apple', 'orenge','orange'];

$vaggies = ['onean', 'patato','peech'];

$new =array_replace($fruits,$vaggies);

echo "<pre>";
print_r($new);
echo "</pre>";


 ?>