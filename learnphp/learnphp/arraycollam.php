<?php

   $not = array(

                 array
                 (
                 	'di' => 3242,
                 	'fiest_name' => 'abubakar',
                 	'last_name' =>'jutt',
                 ),
                array
                 (
                 	'di' => 3242,
                 	'fiest_name' => 'Akram',
                 	'last_name' =>'Resheed',
                 ),
                 array
                 (
                 	'di' => 3242,
                 	'fiest_name' => 'Ali',
                 	'last_name' =>'raza',
                 ),
                 array
                 (
                 	'di' => 3542,
                 	'fiest_name' => 'abdulghaffar',
                 	'last_name' =>'pasha',
                 )

   );

    
   // $no = array_column($not,'last_name');//it is used for finding similer kry value 
   $no = array_chunk($not,1);//it is used for paring
   echo "<pre>";
   print_r($no);
   echo "</pre>"; 
   


  ?>