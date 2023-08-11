<?php 

 $arrayName = array("red","green","blue","yellow");


for($i= 0; $i < 4; $i++)
{
	echo $arrayName[$i];
}
// echo $arrayName[0]."<br>";
// echo $arrayName[1]."<br>";
// echo $arrayName[2]."<br>";
// echo $arrayName[3];

echo "<pre>";
print_r($arrayName);
echo "</pre>";






//assocative array

$a = 
[
"Ali" => 25,
"Amjed" => 35,  //using keys ali amjaed and akter are keys  
"Akter" => 45
];
echo $a["Ali"];


?>