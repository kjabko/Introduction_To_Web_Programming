<?php
$month = 'January';

/*if ($month != "January") {
	echo "This is January";
}
elseif ($month == "February") {
	echo "This is February";
}
elseif ($month == "March") {
	echo "This is March";
}
else {echo "Not the right month";}
*/
/*switch ($month) {
	case 'January':
		echo "This is January";
		break;
	case 'February':
		echo "This is February";
		break;
	default:
		echo "This is not the right month";
		break;
}
*/
if ($month != 'January' && $month != 'February') {
	echo "This is not January or February";
}
else {echo "This is either January or February";}



?>