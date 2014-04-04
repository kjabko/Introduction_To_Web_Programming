<?php

$shop = array(array(
		'Title'=>'rose',
		'Price'=>1.25,
		'Number'=>15,
		),
		array(
		'Title'=>'daisy',
		'Price'=>0.75,
		'Number'=>25
			),
		array(
		'Title'=>'orchid',
		'Price'=>1.15,
		'Number'=>7
		)

);

for ($i=0; $i < 3 ; $i++) { 
	


foreach ($shop[$i] as $a => $b) {
	echo "<li>".$a." = ".$b."</li>";
}

}



$secondShop = array(array(array("rose",1.25,15), 
						  array("daisy",0.75,25),
						  array("orchid",1.15,7)
						  ),
					array(array("tulip",2.30,10), 
						  array("dandelion",0.90,40),
						  array("freesia",0.19,5)
						  ),
					array(array("lily",3.10,29), 
						  array("sunflower",4.15,33),
						  array("rhododendron",1.50,9)
						  )
					);

echo "<table border='2' width='100%'";
for ($layer=0; $layer < 3 ; $layer++) { 
	echo "<tr>";
	echo "<th>The layer number $layer</th>";



for ($row=0; $row < 3 ; $row++) { 
	echo "<td>The row number $row</td>";
	


for ($col=0; $col < 3 ; $col++) { 
	echo "<td>".$secondShop[$layer][$row][$col]."</td>";
	}


}

	
}

echo "<p>";
echo "<table border = '1' width = '50%'>";
for ($i=1; $i <= 10 ; $i++) { 
	echo "<tr>";
	echo "<td>".$i."</td>";
	for ($j=2; $j <= 10; $j++) { 
		
		echo "<td>".$i * $j."</td>";
	}
}

echo "</p>";
?>









