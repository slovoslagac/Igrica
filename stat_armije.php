<?php
// Ispis prikaza za armije

// Funkcija za prikaz jedinica po redosledu ucestvovanja u napadu;
function armija_spi($vojska, $ime) {
	echo "<strong>", $ime, " je napravljena u sledecem rasporedu: </strong><br />";
	echo "<br />";
	while ( list ( $key, $value ) = each ( $vojska ) ) {
		
		echo "Jedinica na poziciji ", $key + 1, " je ", $value, "<br />";
	}
	
	echo "<br />";
}

// Funkcija za sumarni prikaz armije po broju raspolozivih jedinica;
function armija_sum($vojska, $ime) {
	$statvoj = array_count_values ( $vojska );
	
	echo "Vojska ", $ime, " ima u sastavu <br />";
	
	while ( list ( $key, $value ) = each ( $statvoj ) ) {
		
		echo $key, " = ", $value, "<br />";
	}
	echo "<br />";
}
?>