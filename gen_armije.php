<?php
include 'vojska.php';
function pravljenje_armije($br) {
	for($i = 0; $i < $br; $i ++) {
		
		$broj = rand ( 0, 3 );
		// echo $broj, '<br />';
		
		if ($broj = 3) {
			$broj = rand (0,3);
			$vojska [$i] = vojska_value ( $broj );
		} else {
			$vojska [$i] = vojska_value ( $broj );
		}
	}
	
	return $vojska;
}

// $occurences = array_count_values($vojska);
// print_r($occurences);

?>