<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<table border="1">
	<tr>
		<td width="100px">Nama</td>
		<td width="100px">Tanggal Lahir</td>
		<td width="100px">Umur</td>
		<td width="100px">Alamat</td>
		<td width="150px">Kelas</td>
		<td width="50px">Nilai</td>
		<td width="50px">Hasil</td>
	</tr>

	<?php 
		$json_string = file_get_contents('data.json');
		$json = json_decode($json_string, true);

		foreach ($json as $data) {
	?>
		<tr>
			<td><?php echo $data["nama"]; ?></td>
			<td><?php echo $data["tanggal_lahir"]; ?></td>
			<td><?php $lahir =new DateTime($data['tanggal_lahir']);
					$today   =new DateTime();
                    $umur    = $today->diff($lahir);
                    echo $umur->y; echo " Tahun ";?></td>
			<td><?php echo $data["alamat"]; ?></td>
			<td><?php echo $data["kelas"]; ?></td>
			<td><?php echo $data["nilai"]; ?></td>
			<td>
				<?php 
					switch ($data["nilai"]) {
						case ($data["nilai"] >= 90 && $data["nilai"] <= 100):
							echo "A";
							break;
						case ($data["nilai"] >= 80 && $data["nilai"] < 90):
							echo "B";
							break;
						case ($data["nilai"] >= 70 && $data["nilai"] < 80):
							echo "C";
							break;
						case ($data["nilai"] && $data["nilai"] < 70):
							echo "D";
							break;
						default:
							echo "_";
							break;
					}
				?>
			</td>
		</tr>
	<?php
		}

	?>
	
</table>
</body>