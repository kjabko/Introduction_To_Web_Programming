<?php
$area = 32;

if ($area < 20) {
	echo "Too small";
}
elseif ($area > 20 && $area < 40) {
 	echo "This is perfect size";
}
elseif ($area > 40 && $area < 60) {
	echo "Too big";
}


?>