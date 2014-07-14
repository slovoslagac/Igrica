<?php
include 'vojska.php';
function pravljenje_armije($br) {
	for($i = 0; $i < $br; $i ++) {
		
		// Generisanje random pozicija koje iz niza pozicije uzimaju jedinice
		
		$distribution = array(0=>0.3,1=>0.3,2=>0.3,3=>0.1);
		
		$broj = rand ( 0, 3 );
		
		$vojska [$i] = vojska_value ($distribution[$broj]);
		
	}
	
		
	while ( list ( $key, $value ) = each ( $vojska ) ) {
	
		echo "Jedinica na poziciji ", $key + 1, " je ", $value, "<br />";
	}
}

pravljenje_armije(20)

?>