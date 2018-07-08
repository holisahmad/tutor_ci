<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><?php echo $tema; ?></h1>
	<p>
		<?php
		foreach ($alldatasaya as $key => $value) {
			# code...
			//echo '<h5>', $value['isi'], '</h5><br/>';
			echo '<br/><strong>',$value['isi'], '</strong><br/>';
			echo '<strong>',$value['tema'], '</strong><br/>';
			echo '<strong>',$value['judul'], '</strong><br/>';

		}

		?>
	</p>

	<p>
		<?php
		for ($i=1; $i <= 10; $i++) { 
			# code...
			echo '<strong>',$value['isi'], ' ', $i,'</strong><br/>';
		}

		echo "<br/>Sekian terimakasih";
		?>
	</p>

</body>
</html>