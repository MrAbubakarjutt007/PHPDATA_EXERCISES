<?php
echo "<b>using for extract </b>";
echo "<br>";
echo "<br>";
echo "<br>";


$not = array('a'=>'orange', 'b' =>'mango','c' =>'apple','d' =>'peech','e' =>'Patato','f' =>'tomato');

extract($not,EXTR_OVERWRITE);//convert key into vareable which are use in side the array
extract($not,EXTR_SKIP); //covert key into vareable  which are used out side the array
//extract($not,EXTR_SKIP); //covert key into vareable  which are used out side the array
//extract($not,EXTR_PREFIX_SAME,'WORK'); //covert key into vareable  which are used out side the array

echo "value of a is: $a <br>" ;
echo "value of b is: $b <br>";
echo "value of c is: $c <br> ";
echo "value of d is: $d <br> ";
echo "value of e is: $e <br>";
echo "value of f is: $f <br> ";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//compact(varname)compact
echo "<b> using for compact </b>";

$a = 'pink';
$b = 'green';
$c = 'red';


$new = compact('a','b','c');

echo "<pre>";
print_r($new);
echo "</pre>";


?>