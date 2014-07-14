<?php
include 'gen_armije.php';
include 'stat_armije.php';
include 'obracun_borbe.php';

// Broj jedinica svake od armija
$a=3;
$b=3;

if (isset ( $_GET ["army1"] )) {
	$a = $_GET ['army1'];
	
}

If ($a != 0) {
	$a = $a;
} else {
	$a = 3;
}

if (isset ( $_GET ["army2"] )) {
	$b = $_GET ['army2'];

}

If ($b != 0) {
	$b = $b;
} else {
	$b = 3;
}

?>

<html>
<body>
	<form action="<?php $_PHP_SELF ?>" method="GET">
		Podrazumevan broj jedinica u svakoj armiji je 10 ukoliko zelite da promenite molim Vas unesite broj jedinica <strong>armija A: <input
			type="text" name="army1" /> armija B:
		</strong> <input type="text" name="army2" /> <input type="submit" />
	</form>
</body>
</html>


<?php

	// Generisanje armija;
	
	$armijaA = pravljenje_armije ( $a );
	$armijaB = pravljenje_armije ( $b );
	
	// Ispis jedinica po redosledu napada;
	
	armija_spi ( $armijaA, 'Armija A' );
	armija_spi ( $armijaB, 'Armija B' );
	
	// Proracun rata;
	
	obracun ( $armijaA, $armijaB );

?>