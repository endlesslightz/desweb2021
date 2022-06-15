<?php
$apaaaapuuuun = "budi";
$m = ['Yamaha','Honda','Suzuki'];
$h = "$apaaaapuuuun suka motor $m[0]";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 7 - FORM</title>
</head>
<body style="background:cyan">
<center>
	<h1>Form Pendaftaran Anggota HMP</h1>
</center>
	<hr>
	<form method="post" action="handler.php">
		Username : <input type="text" name="username" placeholder="Silakan masukan username Anda" required="true">
		<br><br>
		Password : <input type="password" name="password" placeholder="Silakan masukan password Anda" required="true">
		<br><br>
		Email : <input type="email" name="email" required="true">
		<br><br>
		Tanggal lahir : <input type="date" name="tanggallahir">
		<br><br>
		Jenis Kelamin : 
		<input type="radio" name="jeniskelamin" value="laki-laki">Laki-laki
		<input type="radio" name="jeniskelamin" value="perempuan">Perempuan
		<br><br>
		Hobi :<br>
		<input type="checkbox" name="hobi1" value="sepak bola">Sepak Bola<br>
		<input type="checkbox" name="hobi2" value="basket">Basket<br>
		<input type="checkbox" name="hobi3" value="renang">Renang<br>
		<input type="checkbox" name="hobi4" value="golf">Golf<br>
		<br><br>
		Foto Profil :<input type="file" name="profil">
		<br><br><br>
		<input type="submit" name="tombol" value="Submit">
		<?php echo $hasil; ?>
	</form>
</body>
</html>