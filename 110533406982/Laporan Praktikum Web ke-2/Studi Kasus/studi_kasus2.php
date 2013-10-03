<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<tittle>Studi Kasus 2</tittle>
</head>
<body>

	<table border="1">
	<?php

		function matriks($baris,$kolom){
			for($j=1;$j<=$baris;$j++){
				for($i=1;$i<=$kolom;$i++){
					echo '<td>'.$i.'</td>';
				}
				echo '<tr>'.$j.'</tr>';
			}
		}
		matriks(4,3);
	?>
	
	</table>
	
</body>
</html>
