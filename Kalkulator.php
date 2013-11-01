<!DOCTYPE html>
<html>
<!-- 
Algoritma
 1. Start
 2. Masukkan angka yang akan dihitung
 3. Pilihlah operasi matematika
 4. Klik tombol OK untuk masuk ke form selanjutnya
 5. Hasil perhitungan
 6. Selesai
-->
	<head>
		<title>Kalkulator</title>
	</head>
	<body>
		<h1>&nbsp;</h1>
		<!-- pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="text" name="nilai1" placeholder="Angka" value="<?php echo $_POST['nilai1']; ?>" required />
			<!-- untuk menentukan operasi perhitungan dan validasi php pada masing-masing option  -->
			<select name="operasi">
				<option value="+" <?php if($_POST['operasi']=='+') echo"selected"; ?>>+</option>
				<option value="-" <?php if($_POST['operasi']=='-') echo"selected"; ?>>-</option>
				<option value="x" <?php if($_POST['operasi']=='x') echo"selected"; ?>>x</option>
				<option value="/" <?php if($_POST['operasi']=='/') echo"selected"; ?>>/</option>
			</select>
			<input type="text" name="nilai2" placeholder="Angka" value="<?php echo $_POST['nilai2']; ?>" required />
			<input type="submit" value="=" />
		<?php
			// selection "if" digunakan untuk menentukan proses yang akan dieksekusi
			if(isset($_POST['nilai1']) && isset($_POST['nilai2'])){
				if($_POST['operasi']=='+') $hasil=$_POST['nilai1'] + $_POST['nilai2'];
				else if($_POST['operasi']=='-') $hasil=$_POST['nilai1'] - $_POST['nilai2'];
				else if($_POST['operasi']=='x') $hasil=$_POST['nilai1'] * $_POST['nilai2'];
				else if($_POST['operasi']=='/') $hasil=$_POST['nilai1'] / $_POST['nilai2'];
				
			}
		?>
			<input type='text' name='hasil' value='<?php echo $hasil;?>' readonly />
		</form>
	</body>
</html>