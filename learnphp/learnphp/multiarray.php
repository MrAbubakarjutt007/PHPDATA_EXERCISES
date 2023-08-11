<?php 

$sum = 
[
"Ali"=>
[
   "math" => 50,
   "computer" => 60 

],
"Akter"=>
[
  "physics" => 50,
  "chmestry" => 60 	
],

];

foreach ($sum as $key => $v1){

  echo $key ;
      

  foreach ($v1 as $v2 ){
    
    echo $v2;


  }

}
















echo "<pre>";
print_r($sum );
echo "</pre>"; 






?>