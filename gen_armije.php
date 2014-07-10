<?php

function pravljenje_armije($br) {

for ( $i = 0; $i< $br; $i++) {
	
	
	$broj= rand(1, 3);
#	echo $broj, '<br />';
	if ($broj == 3) {
		$vojska[$i]= 'pesadija';
	} elseif ($broj==2) {
		$vojska[$i]='tenk';
	} else {
		$vojska[$i]='artiljerija';
	}

}

return $vojska;

}


		
//$occurences = array_count_values($vojska);
//print_r($occurences);

?>