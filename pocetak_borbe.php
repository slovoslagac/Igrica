<?php
if ($a != 0 and $b != 0) {
	// Generisanje armija;

	$armijaA = pravljenje_armije ( $a );
	$armijaB = pravljenje_armije ( $b );

	// Ispis jedinica po redosledu napada;

	armija_spi ( $armijaA, 'Armija A' );
	armija_spi ( $armijaB, 'Armija B' );

	// Proracun rata;

	obracun ( $armijaA, $armijaB );
} else {
	echo "Niste uneli broj jedinica za armije";
}