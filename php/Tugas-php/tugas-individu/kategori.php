<?php 
	
	$nama = "Deby Setianengsih";
	$berat_badan = "52";
	$tinggi_badan = "155";
	$bmi = $berat_badan / ($tinggi_badan*$tinggi_badan);

	if ($bmi <= 18.5 ) {
		echo "Halo, $nama. Nilai BMI anda adalah $bmi <br>";
		echo "ANDA TERMASUK <b>KURUS";
	} else if ($bmi > 18.5 and $bmi<=24.9) {
		echo "Halo, $nama. Nilai BMI anda adalah $bmi <br>";
		echo "ANDA TERMASUK <b>SEDANG";
	} else if ($bmi > 24.9 and $bmi<=29.9) {
		echo "Halo, $nama. Nilai BMI anda adalah $bmi <br>";
		echo "ANDA TERMASUK <b>GEMUK";
	}

?>