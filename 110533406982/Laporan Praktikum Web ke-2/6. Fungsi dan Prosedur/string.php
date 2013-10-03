<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<tittle>String</tittle>
</head>
<body>
	<?php
		function print_teks($teks, $bold=true) {
			echo $bold ? '<b>' .$teks. '</b>' : $teks;
		}

		print_teks('Indonesiaku');
		//Mencetak dengan huruf tebal
		
		print_teks('Indonesiaku', false);
		//Mencetak dengan huruf reguler
	?>
</body>
</html>
