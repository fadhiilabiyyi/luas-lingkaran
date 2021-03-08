<!DOCTYPE html>
<html>
<head>
	<title> Luas Lingkaran </title>
</head>
<body>
<!-- Tampilan App  -->
	<center>
		<h1> Luas Lingkaran</h1>
		<form method="post">
			<table>
				<tr>
					<td>Diameter</td>
					<td>
						<input type="number" name="diameter">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input style="width: 100%" type="submit" name="submit" value="Hitung">
					</td>
				</tr>
			</table>
		</form>
		<!-- Code PHP -->
		<?php 
		// Variable yang dibutuhkan
		$phi = 3.14;

		// Inialisasikan Value
		if (isset($_POST['submit'])) {
			$diameter = $_POST['diameter'];
		}

		// If conditional sederhana
		if (empty($_POST['diameter'])) {
			echo "";
		} else {
			$luas = 0.25 * $phi * $diameter *$diameter;
			echo "Luas lingkaran dengan diameter : $diameter cm <br>
					adalah $luas cm2
			";
		}



		 ?>
	</center>
</body>
</html>
