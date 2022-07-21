<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cek Ongkir</title>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php include ('navbar.html'); ?>
		<div class="content">
			<h2>Cek Ongkir</h2>
			<div class="formm">	
				<form name="form2" action="struk_ongkir.php" method="POST" id="form2">
					<table border="0">
						<tr>
							<td><input type="text" name="asal" placeholder="Kota/Kecamatan asal" required></td>
							<td><input type="text" name="tujuan" placeholder="Kota/Kecamatan tujuan" required></td>
						</tr>
						<tr>
							<td colspan="2"><input id="jarak2" type="text" name="jarak2" placeholder="Jarak (km)" required></td>
						</tr>
						<tr>
							<td><input type="hidden" id="data" name="data"></td>
							<td align="right"><input id="hitung" type="submit" name="cek" onclick="ongkir()" value="Cek"></td>
						</tr>
					</table>
					<br>
				</form>
			</div>
		</div>
		<div class="kosong"></div>
		<?php include ('footer.html'); ?>
	</div>	
</body>
</html>