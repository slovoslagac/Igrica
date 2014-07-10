<?php
include 'gen_armije.php';

$VA = pravljenje_armije ( 10 );
$VB = pravljenje_armije ( 8 );

include 'stat_armije.php';

armija_spi ( $VA );
armija_spi ( $VB );

$dA = count ( $VA );
$dB = count ( $VB );

if ($dA > 0 and $dB > 0 and $dA <= $dB) {
	$duz = $dA;
} elseif ($dA > 0 and $dB > 0) {
	$duz = $dB;
}

echo $duz;


	
