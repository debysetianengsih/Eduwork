<?php

	$nilai = 82;

	if ($nilai > 90 && $nilai <= 100) {
		echo "Nilai anda A";
	} else if ($nilai > 80) {
		echo "Nilai anda B";
	} else if ($nilai > 70) {
		echo "Nilai anda C";
	} elseif ($nilai > 0) {
		echo "Nilai anda D";
	}

?>