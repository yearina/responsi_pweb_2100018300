<?php 
 	$file = "struk_pengiriman.txt";
	$fl = fopen($file, "w");
	$nama1 = $_POST['nama1'];
	$notelp1 = $_POST['notelp1'];
	$alamat1 = $_POST['alamat1'];
	$nama2 = $_POST['nama2'];
	$notelp2 = $_POST['notelp2'];
	$alamat2 = $_POST['alamat2'];
	$jarak = $_POST['jarak'];
	$total = $_POST['total'];
	$arr1 = array($nama1, $notelp1, $alamat1);
	$arr2 = array($nama2, $notelp2, $alamat2);
	$arr3 = array($jarak, $total);
	fwrite($fl, "Data Pengirim\n");
	fwrite($fl, "Nama\t|No. Telp\t|Alamat\t|\n");
	for ($i=0; $i < 3 ; $i++) { 
		fwrite($fl, $arr1[$i]);
		fwrite($fl, "|");
	}
	fwrite($fl, "\n\nData Penerima\n");
	fwrite($fl, "Nama\t|No. Telp\t|Alamat\t|\n");
	for ($i=0; $i < 3 ; $i++) { 
		fwrite($fl, $arr2[$i]);
		fwrite($fl, "|");
	}
	fwrite($fl, "\n\nJarak|Total Ongkir|\n");
	for ($i=0; $i < 2 ; $i++) { 
		fwrite($fl, $arr3[$i]);
		fwrite($fl, "|");
	}
	fclose($fl);
	header("Location: kirim.php")
?>