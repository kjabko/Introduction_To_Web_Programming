<?php

$jablonscy = array('Krzyk+', 'Mik+','Dan+','Adek+', 'Filip+');
//$jablonscy = ['Krzyk+', 'Mik+','Dan+','Adek+', 'Filip+']
/*$jablonscy = array(
	'Krzyk' => 'http://www.tvn24.pl',
	'Mik' => 'http://www.wyborcza.pl',
	'Dan' => 'http://www.independent.ie',
	'Adek' => 'http://www.tvn24.pl',
	'Filip' => 'http://www.tvn24.pl',


 ); */
//array_push($jablonscy, 'something');
$jablonscy[] = 'anything'; //adding extra thing to the bottom of the list

array_shift($jablonscy); //removes first thing on the top of the list
array_unshift($jablonscy, 'Krzyk'); //brings it back
?>


<!doctype html>
<head>
	<title>Arrays</title>
</head>
<body>
	<h1>Jablonscy</h1>
	<ul>
		<?php
		foreach ($jablonscy as $jabka) {
			
		
		 //foreach ($jablonscy as $name => $url){
echo "<li>$jabka</li>";
//echo "<li><a href='url'>$name</a></li>";


		}

?>

	</ul>

</body>
</html>