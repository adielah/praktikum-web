<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<tittle>Studi Kasus 1</tittle>
</head>
<body>
	<?php
		$jam=13;
		$kosong="";
		
		echo '<br />';
		echo 'Jam=';
		echo $jam;
		echo '<br />';
		
		if($jam==1 || $jam<=12) {
			echo 'Selamat Pagi';}
		elseif($jam==13 || $jam<=18) {
			echo 'Selamat Siang';}
		elseif($jam==19 || $jam<=24) {
			echo 'Selamat Malam';}
		else{
			echo $kosong;}
	?>
</body>
</html>
