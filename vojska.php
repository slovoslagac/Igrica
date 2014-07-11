<?php

// Spisak pozicija
$pozicije = array (
		'pesadija',
		'tenk',
		'top',
		'bomba' 
);

// Vracanje pozicije aktuelnog vojnika u matrici
function vojska_poz($tip) {
	global $pozicije;
	$poz = array_search ( $tip, $pozicije );
	return $poz;
}
;

// Vraca naziv tipa vojske koji je dobijen generisanjem
function vojska_value($tip) {
	global $pozicije;
	
	return $poz = $pozicije [$tip];
}

// Matrica za obracun medjusobnih duela preuzeta iz popularne igre papir, kamen, makaze
function vojska($kol, $red) {
	$vojska = array (
			array (
					2,
					0,
					1,
					0 
			),
			array (
					1,
					2,
					0,
					0 
			),
			array (
					0,
					1,
					2,
					0 
			),
			array (
					1,
					1,
					1,
					2 
			) 
	);
	
	return $vojska [$kol] [$red];
}

?>