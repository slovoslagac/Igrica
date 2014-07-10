<?php
function armija_spi($vojska) {
	while (list($key, $value) = each($vojska)) {

		echo "Vojnik na poziciji ", $key+1, " je ", $value, "<br />";


	}

	echo "<br />";

}



?>