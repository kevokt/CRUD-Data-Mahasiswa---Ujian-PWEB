<html>
<head>
	<title>Menambahkan Data</title>
</head>
<body>
    
<link rel="stylesheet" href="style.css">
    <button onclick="window.location.href='index.php'"><ion-icon name="arrow-back-outline"></ion-icon></button> <br><br>

    <div>
    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
			<tr> 
				<td><ion-icon name="person-add-outline"></ion-icon></td>
				<td><input type="text" placeholder= "Masukkan Nama" name="nama" required></td>
			</tr>
			<tr> 
				<td><ion-icon name="grid-outline"></ion-icon></td>
				<td><input type="text" placeholder= "Masukkan Kelas" name="kelas" required></td>
			</tr>
			<tr> 
				<td><ion-icon name="id-card-outline"></ion-icon></td>
				<td><input type="text" placeholder= "Masukkan NPM" name="npm" required></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
    </form>
    </div>

    <?php
 
 if(isset($_POST['Submit'])) {
     $nama = $_POST['nama'];
     $kelas = $_POST['kelas'];
     $npm = $_POST['npm'];
     
     include_once("config.php");
             
     $result = mysqli_query($mysqli, "INSERT INTO data_mahasiswa(nama,kelas,npm) VALUES('$nama','$kelas','$npm')");
     
     echo "<center>Data Berhasil ditambah.</center>";
 }
 ?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>