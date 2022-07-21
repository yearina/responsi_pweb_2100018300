<?php 
	$file = "struk_ongkir.txt";
	$fl = fopen($file, "w");
	$asal = $_POST['asal'];
	$tujuan = $_POST['tujuan'];
	$jarak = $_POST['jarak2'];
	$ongkir = $_POST['data'];
	$arr = array($asal, $tujuan, $jarak, $ongkir);
	fwrite($fl, "Asal|Tujuan|Jarak(km)|Ongkir|\n");
	for ($i=0; $i < 4 ; $i++) { 
		fwrite($fl, $arr[$i]);
		fwrite($fl, "|");
	}
	fclose($fl);
	header("Location: cek.php");
?>