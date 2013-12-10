<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
  1. Mulai
  2. Masukkan dua angka yang akan di hitung
	3. Pilih operasi matematika yang diinginkan
  4. Tekan tombol OK untuk men-submit form
  5. Akan muncul hasil dari perhitungan kedua angka tersebut
  6. Selesai
--->
	<head>
		<title>Tugas</title>
	</head>
	<body>
		<h1>Kalkulator Sederhana</h1>
		<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="text" name="v1" placeholder="Variable 1" value="<?php echo $_POST['v1']; ?>" required />
			<!-- tag select digunakan untuk menentukan operasi perhitungan dan validasi php pada masing-masing option yang digunakan untuk prefilling inputan yang telah dipilih tetap ditandai dengan menambahkan attribut selected -->
			<select name="ops">
				<option value="+" <?php if($_POST['ops']=='+') echo"selected"; ?>>+</option>
				<option value="-" <?php if($_POST['ops']=='-') echo"selected"; ?>>-</option>
				<option value="x" <?php if($_POST['ops']=='x') echo"selected"; ?>>x</option>
				<option value="/" <?php if($_POST['ops']=='/') echo"selected"; ?>>/</option>
			</select>
			<input type="text" name="v2" placeholder="Variable 2" value="<?php echo $_POST['v2']; ?>" required />
			<input type="submit" value="=" />
		<?php
		// selection "if" digunakan untuk menentukan proses yang akan dieksekusi berdasarkan $_POST['ops'] yang didapat
			if(isset($_POST['v1']) && isset($_POST['v2'])){
				if($_POST['ops']=='+') $hasil=$_POST['v1'] + $_POST['v2'];
				else if($_POST['ops']=='-') $hasil=$_POST['v1'] - $_POST['v2'];
				else if($_POST['ops']=='x') $hasil=$_POST['v1'] * $_POST['v2'];
				else if($_POST['ops']=='/') $hasil=$_POST['v1'] / $_POST['v2'];
				
			}
		?>
			<input type='text' name='hasil' value='<?php echo $hasil;?>' readonly />
		</form>
	</body>
</html>
