<?php

// function ex($num,$s,$b)

// {

//   $t = $num+$s+$b;
  
//   return $t; 

// }

// function persuntage($st)
// {
  
//   $per =$st/3;

//   echo $per."%";


// }


// $total = ex(10,40,30);

// echo $total."<br>";

// persuntage($total);


// echo "<br>";
// echo "<br>";
// echo "<br>";

function value($sum,$num,$tom) 
{
    $tr = $sum * $num + $tom;

    return  $tr; 
}
function persuntage($sd)
{
 
     $persun = $sd/3;

     echo $persun."%";
}

$total =  value(30,5,5);

echo  $total."<br>";

persuntage($total);



















?>