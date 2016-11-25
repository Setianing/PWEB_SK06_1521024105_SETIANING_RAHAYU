<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<table>
		<tr>
			<td>Alas</td><td>:</td><td><input type="text" name="alas"></td>
		</tr>
		<tr>
			<td>Tinggi</td><td>:</td><td><input type="text" name="tinggi"></td>
		</tr>
			<tr>
				<td><input type="Sumbit" name="luas" value="Hasil"/></td>
	</table>
	<?php
		$alas = $_REQUEST['alas'];
		$tinggi = $_REQUEST['tinggi'];
	$luas = ($alas*$tinggi)/2;
		echo "Jadi luas segitiganya yaitu". $luas;
	?>

</body>
</html>
	