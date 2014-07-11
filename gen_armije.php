<?php
include 'vojska.php';
function pravljenje_armije($br) {
	for($i = 0; $i < $br; $i ++) {
		
		// Generisanje random pozicija koje iz niza pozicije uzimaju jedinice
		
		$broj = rand ( 0, 3 );
		
		// Uveden je drugi random generator da bi se smanjilo pojavljivanje specijalne jedinice bombe
		
		if ($broj == 3) {
			$broj = rand ( 0, 3 );
			$vojska [$i] = vojska_value ( $broj );
		} else {
			$vojska [$i] = vojska_value ( $broj );
		}
	}
	
	return $vojska;
}

?>