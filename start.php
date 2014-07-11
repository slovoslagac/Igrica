<?php
include 'gen_armije.php';
include 'stat_armije.php';
include 'obracun_borbe.php';

// Generisanje armija;

$armijaA = pravljenje_armije ( 20 );
$armijaB = pravljenje_armije ( 20 );

// Ispis jedinica po redosledu napada;

armija_spi ( $armijaA, 'Armija A' );
armija_spi ( $armijaB, 'Armija B' );

// Proracun rata;

obracun ( $armijaA, $armijaB );

?>