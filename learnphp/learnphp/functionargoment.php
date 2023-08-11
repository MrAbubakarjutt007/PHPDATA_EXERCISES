<?php

function vel(&$string)
{

  $string .= "he is a good person.<br>he is a great men<br>he is my love.<br>";

}

$str = "Ali is my best friend.<br> he loves playing<br>";
vel($str);
echo $str;


function Val(&$num)

{
	
 $num += 4;

}


// function sum(&$fun)

// {
//   $fun += 7;	 
	
// }

$number = 5;
Val($number);
echo $number;



?>