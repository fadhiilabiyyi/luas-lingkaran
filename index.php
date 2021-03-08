<!DOCTYPE html>
<html>
<head>
	<title> Nis ganjil atau genap?</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr class="nis">
				<td> Masukkan Nis </td>
				<td><input type="float" name="nis"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="kirim" value="Masukkan"><button>Reset</button></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 

	if(isset($_POST['kirim'])){
		$nis = @$_POST['nis'];

		if(empty($nis)){
			echo "Masukkan Nis anda";
		}elseif($nis % 2 == 1){
			echo "Nis anda Ganjil";
		}elseif($nis % 2 == 0){
			echo "Nis anda Genap";
		}else{

		}
		
	}
 ?>
