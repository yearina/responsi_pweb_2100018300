function ongkir() {
	var jarak = parseFloat(document.form2.jarak2.value);
	var biaya = jarak*5000;
	alert(biaya);
	document.getElementById("data").value = biaya;
}

function pengiriman() {
	var jarak = parseFloat(document.form1.jarak.value);
	var biaya = jarak*5000;
	alert("Form berhasil dikirim\nTotal ongkir = "+biaya);
	document.getElementById("total").value = biaya;
}