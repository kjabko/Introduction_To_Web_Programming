<?php

/*function hello_world () {

echo "Hello World!!!";
}

hello_world(); 

$width = $_GET['width'];
$height = $_GET['height'];

function rectangle_area ($w, $h) {

$area = $w * $h;

echo "<h1>A rectangle of lenght ". $h ."cm and width " . $w ."cm has an area of ". $area."cm.</h1>";

}

rectangle_area($width, $height); */

/*$month = array(
	'january' =>31,
	'february' =>'28 days, if leap year 29', 
	'march' => 31,
	'april' =>30,
	'may' => 31,
	'june' => 30,
	'july' => 31,
	'august' => 31,
	'september'=>30,
	'october' =>31,
	'november'=>30,
	'december' =>31
	);

function months ($m) {

foreach ($m as $k => $v) {
	//echo (ucfirst(strtolower($k))."has".$v. "days." ;
echo "$k has $v days";
}

}

months($month);

$weather = array('rain', 'sunshine', 'clouds', 'hail', 'sleet',
 'snow', 'wind');
 echo "We've seen all kinds of weather this month. At the beginning
  of th emonth, wa had $weather[5] and $weather[6]. Then came $weather[1] 
  with a few $weather[2] and some $weather[0]. At least we didn't get
  any $weather[3] or $weather[4]."; 

$cities = array(
	'tokyo',
	'mexico',
	'new york',
	'mumbai',
	'seoul',
	'shanghai',
	'lagos',
	'buenos aires',
	'cairo',
	'london',
	 );
$strcount = count($cities);
sort($cities);

array_pop($cities);

foreach ($cities as $k) {
	echo $k;
if (($strcount-=1)==0) echo ".";
    else echo ", "; 
}
echo "<br>";
array_push($cities, 'los Angeles', 'calcutta', 'osaka', 'beijing');


foreach ($cities as $key) {
	echo "<p>".ucfirst(strtolower($key))."</p>";
}
*/

/*$weather = array(
	'rain', 'sunshine', 'clouds', 'hail', 'sleet',
 'snow', 'wind');

$numbers = array ('january'=>'rain', 'february'=>'sunnshine', 
	'march'=>'clouds', 'april'=>'hail', 'june'=>'sleet', 'july'=>'snow');

$random_key = array_rand($numbers);

for ($i=0; $i < 7 ; $i++) { 
	print $random_key[$i];
}
//foreach ($numbers as $key => $value) {
//	print $key." ".$value." ";
//}

$Queen = array();
	$Queen['Freddie'] = 'Mercury';
	$Queen['Brian'] = 'May';
	$Queen['Roger']= 'Taylor';
	$Queen['John'] = 'Beacon' ;

print($Queen['Brian']). '<br>';
print $Queen['Freddie']; */

$temperature = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77,
 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 
 85, 89, 83);

$total = 0;
$count = count($temperature);
//foreach ($temperature as $temp) {
//	$total += $temp;
//}
//$count = count($temperature);
for ($i=0; $i < $count ; $i++) { 
	echo $i.'. '.$temperature[$i].", ";

}
echo "<p/>";
$average = round($total / $count);
echo "The average temperature for the month March was $average &deg.<p />";
sort($temperature);
foreach ($temperature as $temp) {
	echo $temp.", ";
}
echo "<p/>";

$top_temp = array_slice($temperature, 25);
echo "This is top five <p/>";
foreach ($top_temp as $k) {
	echo $k.", ";
}
























































?>