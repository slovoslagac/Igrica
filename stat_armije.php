<?php
function armija_spi($vojska, $ime) {
		echo $ime, " je napravljena u sledecem rasporedu: <br />";
		echo "<br />";
	while ( list ( $key, $value ) = each ( $vojska ) ) {
		
		echo "Vojnik na poziciji ", $key + 1, " je ", $value, "<br />";
	}
	
	echo "<br />";
}

function armija_sum($vojska, $ime) {

$statvoj = array_count_values($vojska);


echo "Vojska ", $ime, " ima u sastavu <br />";

while (list($key, $value) = each($statvoj)) {

	echo $key, " = ", $value, "<br />";


}
echo "<br />";
}
?>