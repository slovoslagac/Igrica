<?php
include 'gen_armije.php';

$armijaA = pravljenje_armije(10);
$armijaB = pravljenje_armije(12);

include 'stat_armije.php';

armija_spi ( $armijaA, 'Armija A' );
armija_spi ( $armijaB, 'Armija B' );







?>