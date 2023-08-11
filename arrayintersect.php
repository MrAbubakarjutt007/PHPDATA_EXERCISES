<?php

 $not = ["1" => "red","2" => "green","3" => "blue", "4" => "gray"];
 $good = ["1" => "red","b" => "green","3" => "onean", "4" => "patato"];

$go =array_intersect_assoc($not, $good);

   echo "<pre>";
   print_r($go);  
   echo "</pre>";

//array_intersect()
//array_intersect_key()
//array_intersect_assoc()
// array_intersect_uassoc()
//array_intersect_ukey()
//array_uintersect()
//array_uintersect_assoc()
//array_Uintersect_uassoc()   
 ?>


