<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<h1><?php echo $head; ?></h1>
	<p>
		
		<?php

		foreach ($semuadata as $key => $value) {
		 	# code...
			// foreach ($value as $v) {
			// 	echo $v;
				echo '<h3>', $value['judul'], '</h3><br/>';
			}
		 	
		?> 
	</p>

</body>
</html>

