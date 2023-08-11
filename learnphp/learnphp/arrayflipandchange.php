<?php

$not = array(

         'Ali' => 10,
         'akram' => 20,
         'Raza' => 25,   
        
);
 // $no = array_change_key_case($not,CASE_LOWER);//it is used for excanging the values uper csae into lower case and lower case in to uper case
$no = array_flip($not);// it use for interchanging the values
echo "<pre>";
print_r($no);
echo "</pre>";





  ?>