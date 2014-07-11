<?php
function obracun($VA, $VB) {
	// Ulazni parametri
	$nizA = $VA;
	$nizB = $VB;
	
	$dA = count ( $nizA );
	$dB = count ( $nizB );
	
	$duz = min ( $dA, $dB );
	
	$j = 1;
	
	// Proveravamo da li vojska ima jedinica za borbu;
	
	while ( $duz > 0 ) {
		
		// Generisanje novog niza jedinstvenog za odgovorajucu borbu;
		
		${'A' . $j} = array ();
		${'B' . $j} = array ();
		
		echo "<strong>Sastav armija pred borbu broj ", $j, "</strong><br />";
		echo "<br />";
		
		armija_sum ( $nizA, 'Armija A' );
		armija_sum ( $nizB, 'Armija B' );
		
		echo "<strong>Borba broj ", $j, " pocinje</strong><br />";
		echo "<br />";
		
		// Obracun same borbe ucestvuje isti broj jedinica u svakoj vojsci (prvih n);
		
		for($x = 0; $x < $duz; $x ++) {
			$vojA = $nizA [$x];
			$vojB = $nizB [$x];
			$red = vojska_poz ( $vojA );
			$kol = vojska_poz ( $vojB );
			$rez = vojska ( $kol, $red );
			
			echo "potez ", $x + 1, ": ";
			
			switch ($rez) {
				
				case 0 :
					echo $vojA, " vs ", $vojB, " -- pobedjuje ", $vojA, " Armije A";
					array_push ( ${'A' . $j}, $vojA );
					break;
				case 1 :
					echo $vojA, " vs ", $vojB, " -- pobedjuje ", $vojB, " Armije B";
					array_push ( ${'B' . $j}, $vojB );
					break;
				case 2 :
					echo $vojA, " vs ", $vojB, " -- Izgubljeno je svo ljudstvo i tehnika";
					break;
				default :
					echo "Nije moguce obracunati ovu borbu vojska ce biti izbrisana";
			}
			
			echo "<br />";
		}
		
		// Dodavanje jedinica koje nisu ucestvovale u borbi na kraj niza;
		
		if ($dA > $duz) {
			for($a = 0; $a < $dA - $duz; $a ++) {
				$raz = $duz + $a;
				$dod = $nizA [$raz];
				array_push ( ${'A' . $j}, $dod );
			}
		}
		
		if ($dB > $duz) {
			for($b = 0; $b < $dB - $duz; $b ++) {
				$raz = $duz + $b;
				$dod = $nizB [$raz];
				array_push ( ${'B' . $j}, $dod );
			}
		}
		
		echo "<br />";
		
		$nizA = ${'A' . $j};
		$nizB = ${'B' . $j};
		
		$dA = count ( $nizA );
		$dB = count ( $nizB );
		
		$duz = min ( $dA, $dB );
		
		$j ++;
	}
	
	// Kraj borbe i provera ko je pobedio;
	
	if ($dA == 0 and $dB == 0) {
		"Borba nema pobednika posto su obe vojske ostale bez jedinica<br />";
	} elseif ($dA == 0) {
		if($j>5) {
		echo "Armija A je porazena posle ", $j - 1, " borbi<br />";
		} else {
		echo "Armija A je porazena posle ", $j - 1, " borbe<br />";
		}
		echo "<br />";
		armija_sum ( $nizB, 'Armija B' );
	} elseif ($dB == 0) {
		if($j>5) {
		echo "Armija B je porazena posle ", $j - 1, " borbi<br />";
		} else {
		echo "Armija B je porazena posle ", $j - 1, " borbe<br />";
		}
		echo "<br />";
		armija_sum ( $nizA, 'Armija A' );
	}
}