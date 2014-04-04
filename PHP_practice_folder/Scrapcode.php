<?php

for ($i=1; $i <= 10; $i++) { 
	switch ($i) {
		case $i < 10:
			echo $i."-";
			break;
		
		default:
			echo $i;
			break;
	}

}
echo "<p/>";
echo "<hr>";	

for ($i=1; $i <=5; $i++) { 
	
for ($j=1; $j <= (6 - $i); $j++) { 
	 echo "@";
}

echo "<br>";
}

echo "<p/>";
echo "<hr>";

for ($i=1; $i <=12 ; $i++) { 
	echo "<br>";
	for ($j=1; $j <= ($i > 6 ? 12-$i : $i) ; $j++) { 
		echo "@";
	}
}
echo "<p/>";
echo "<hr>";

for ($i=0; $i <= 5 ; $i++) { 
	echo "<br>";
	for ($j=0; $j <= $i ; $j++) { 
		echo "@";
	}
}

echo "<p/>";
echo "<hr>";
for ($i=0; $i <= 6 ; $i++) { 
	echo "<br>";
	for ($j=0; $j < $i ; $j++) { 
		echo "@";	
	}
}

for ($k=6; $k >= 1 ; $k--) { 
	echo "<br>";
	for ($l=0; $l < $k ; $l++) { 
		echo "@";
	}
}
echo "<p/>";
echo "<hr>";

$total = 1;

for ($i=6; $i > 0 ; $i--) { 
	$total *= $i;
	if ($i > 1) {
		echo $i." * "; }
	else {echo $i;}



}
 
    echo " = ".$total;

echo "<p/>";
echo "<hr>";

for ($i=0; $i <10; $i++) { 
	

for ($j=0; $j < 10 ; $j++) { 
	if ($i.$j < 99)
	{echo $i.$j.", ";}
	
	else {echo $i.$j.".";}


	
}

}

echo "<p/>";
echo "<hr>";

$count = 0 ;
$number = 2 ;
while ($count < 20 )
{
$div_count=0;
for ( $i=1;$i<=$number;$i++)
{
if (($number%$i)==0)
	
{
$div_count++;
}
}

if ($div_count<3)
{
echo $number." , ";
$count=$count+1;
}
$number++;
} 

echo "<p/>";
echo "<hr>";

$num =10;

for( $j = 2; $j <= $num; $j++ )
{ echo " <br>{L:j$j} ";
for( $k = 2; $k <= $j; $k++ )
{ echo " [j$j] / (k$k) ";

}
}

echo "<p/>";
echo "<hr>";

$num =100;

for( $j = 2; $j <= $num; $j++ )
{ 
for( $k = 2; $k < $j; $k++ )
{ 
if( $j % $k == 0 )
{
break;
}
}
if( $k == $j ) 
{
echo $j.", ";
}
}

echo "<p/>";
echo "<hr>";



$str = "Cirrostratus";


$length = strlen($str);
$counter = 0;

for ($i=0; $i < $length; $i++) { 
	$index = $str{$i};
	if ($index == 'r') 
	{
		$counter++;
	}
}	

echo "The word ".strtolower($str). " contains $counter r's.";

echo "<p/>";
echo "<hr>";

echo "<h1>Multiplication table made of 2 nested loops.</h1>";
echo "<table border='2px' cellspacing='1px' width='30%'";
		 
$c = 1;
echo "<tr>";
for ($a=1; $a <= 6; $a++) { 
	echo "<br>";
	for ($b=1; $b < 6 ; $b++) { 
		 
		 $c = $a * $b;
		 
		 echo "<td>".$a." * ".$b." = ".$c."</td>";
		 }

		 echo "</tr>";
}
echo "</table>";

echo "<p/>";
echo "<hr>";


echo "<table border='2' width='30%'";

for ($i=0; $i <= 10; $i++) { 
	echo "<tr>";
	for ($j=0; $j <= 10 ; $j++) { 
		
		$total = $i + $j;
		if ($total % 2 != 0) 
		{
			echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
		}
		else 
		{
			echo "<td height=30px width=30px bgcolor=#000000></td>";
		}
	}

	echo "</tr>";
}

echo "<p/>";
echo "<hr/>";

echo "<table border='2'";
for ($i=1; $i <= 10 ; $i++) { 
	echo "<tr>";
	
	for ($j=1; $j <= 10 ; $j++) { 
		
		echo "<td>".$i*$j."</td>";
	}
		echo "</tr>";
}
echo "</table>";

echo "<p/>";
echo "<hr/>";


for ($i=1; $i <=100; $i++) { 
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo " FizzBuzz, ";
	}
	elseif ($i % 5 == 0) {
		echo " Buzz, ";
	}
	elseif ($i % 3 ==0) {
		echo " Fizz ";
	}

	else echo $i.", ";
}

echo "<p/>";
echo "<hr/>";

$n = 10;

for ($i=$n; $i > 0 ; $i--) { 
	echo "<br>";
	for ($j=0; $j < $i ; $j++) { 
		echo $j;
	}
}

echo "<p/>";
echo "<hr>";

echo date("D d M Y"). ', sunrise time : '. date_sunrise(time(), SUNFUNCS_RET_STRING, 53.35, -6.26, 90, 0 );


date_default_timezone_set('UTC');

?>