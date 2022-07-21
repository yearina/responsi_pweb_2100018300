<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengiriman Barang</title>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php include ('navbar.html'); ?>
		<div class="content">
			<h2>Form Pengiriman Barang</h2>
			<div class="formm">	
				<form  name="form1" action="struk_pengiriman.php" method="POST">
					<table border="0">
						<tr>
							<td colspan="2" id="data1"><h4>Data Pengirim</h4></td>
						</tr>
						<tr>
							<td>Nama:</td>
							<td><input type="text" name="nama1" required></td>
						</tr>
						<tr>
							<td>No. telp:</td>
							<td><input type="text" name="notelp1"></td>
						</tr>
						<tr>
							<td>Alamat:</td>
							<td><textarea name="alamat1"></textarea></td>
						</tr>
					</table>
					<br>
					<table border="0">
						<tr>
							<td colspan="2" id="data2"><h4>Data Penerima</h4></td>
						</tr>
						<tr>
							<td>Nama:</td>
							<td><input type="text" name="nama2" required></td>
						</tr>
						<tr>
							<td>No. telp:</td>
							<td><input type="text" name="notelp2"></td>
						</tr>
						<tr>
							<td>Alamat:</td>
							<td><textarea name="alamat2"></textarea></td>
						</tr>
					</table>
					<table border="0">
						<tr>
							<td class="jarak">Jarak:</td>
							<td><input id="jarak" type="text" name="jarak" placeholder="km" required></td>
						</tr>
						<tr>
							<td><input type="hidden" id="total" name="total"></td>
							<td align="right">
								<input type="submit" name="kirim" value="Kirim" id="kirim" onclick="pengiriman()">
								<input type="reset" name="batal" value="Batal" id="batal">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php include ('footer.html'); ?>
	</div>	
</body>
</html>