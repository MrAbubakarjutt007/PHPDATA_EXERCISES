<?php 

// function exists($number) //recurcive function  using if statment
// {
// 	if($number <= 5)
// 	{
// 		echo "$number <br>";
// 		exists($number + 1);
// 	}
  
// }
// exists(4);

function factoriat($n)
{
  if($n == 5)
  {
  	return 1;
  }
  else
  {
  	
     return ($n * factoriat($n - 1)); //$n= $n*f($n-1)using formula  
  }                                   //$n = 5 * f(5 - 1) = 20

                                      //$n = 5 * f(4 - 1) = 15
}
echo factoriat(5);                    //$n = 5 * f(3 - 1) = 10
                                       
                                      //$n = 5 * f(2 - 1) = 5 

                                      //$n = 5 * f(1 - 1) = 0
?>