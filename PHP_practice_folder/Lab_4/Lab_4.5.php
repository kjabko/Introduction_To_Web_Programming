<?php
echo "<br>";
echo "<h2>Fibonacci Sequence</h2>";
echo "<br>";
$one = 0;
$two = 1;
$count = 0;
$total = 0;
$div = 0;
echo "$one, $two, ";
while ($count < 19)	 {
	$three = $one + $two;
	echo "$three, ";
	$one = $two;
	$two = $three;
	$total += $three;
	$div = $total / 20;
$count++;

}

echo "<br>";
echo "<br>";
echo "Total: $total";
echo "<br>";
echo "The average is: $div";
?>