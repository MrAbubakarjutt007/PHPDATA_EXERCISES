<?php

$per = 30;

if ( $per >= 80 && $per  <= 100 ) 
{
   echo "you are in marit.";
} 						
else if ( $per  >= 60 && $per  < 80 ) 
{
	echo "you are in first divison.";
}
else if ( $per  >= 40 && $per  < 60)
{
	echo "you are in 2nd divison.";
}
else if ( $per  >= 33 )
{
  echo "you are fall.";
}
else
{
	echo "please enter the valed per";
}

echo "<br>";
echo "<b>switch</b>";
echo "<br>";



    $weekday = 2;


 switch ($weekday) {
 	
 	case 1:
 	      echo "monday";
 		# code...
 		break;
 	case 2:
 	      echo " tusday";
 		# code...
 		break;
 	case 3:
 	      echo " wesnsday";
 		# code...
 		break;
 	case 4:
 	      echo " thusday";
 		# code...
 		break;
 	case 5:
 	      echo " friday";
 		# code...
 		break;
 	case 6:
 	      echo " saturday";
 		# code...
 		break;
 	case 7:
 	      echo " sunday";
 		# code...
 		break;
 	
 	default:

 	     echo "enter the week day";
 		# code...
 		break;
 }

?>