<?php

$not =[
  "first" => "red",
  "seand" => "green",
  "thired" => "blue",
  "fourth" => "pink",
  "fiveth" => "gray"

];
$he = key_exists("fiveth",$not);
// echo "<pre>";
// print_r($he);  
// echo "</pre>";

if ($he){


	 echo "our key exists";

}
else
{
  echo "our not exists";
}

                    //array_key()
                    //array_key_first()
                    //array_key_last()
                    //array_key_exist()
                    //key_exist() 



  ?>