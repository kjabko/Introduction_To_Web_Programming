<?php

//8.2
$myNewArray = array(array());

//8.3
//we need to decide how big the arrays are going to be if we intend to use a loop to fill them  - lets pick 10

for($i=0; $i < 10; $i++)
{
  for($j=0; $j < 10 ; $j++)
  {
  	//for example, random numbers between 1 and 100
    $myNewArray[$i][$j] = rand(1, 100);
  }
}

echo '<h1> Output from 8.3 </h1>';
//output, just to confirm its working
var_dump ($myNewArray);




//8.4
for($i=0; $i < 10; $i++)
{
  for($j=0; $j < 10 ; $j++)
  {
  	//for example, random numbers between 1 and 100
    $myNewArray[$i][$j] = 'X' . $myNewArray[$i][$j] ;
  }
}

echo '<h1> Output from 8.4 </h1>';
//output, just to confirm its working  -  notice the var_dump function also tells us the data type.. why is it different this time?
var_dump ($myNewArray);

?>