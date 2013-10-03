<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<tittle>Prosedur</tittle>
</head>
<body>

	<?php
	
		function do_print() {
			echo time();
		}
		//Memanggil prosedur
		do_print();
		echo '<br />';
		
		//Contoh fungsi penjumlahan
		function jumlah($a, $b) {
			return($a+$b);
		}

		echo jumlah(2,3);
		//output 5
	?>
	
</body>
</html>
