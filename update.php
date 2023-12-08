<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$npm=$_POST['npm'];
		
	$result = mysqli_query($mysqli, "UPDATE data_mahasiswa SET nama='$nama',kelas='$kelas',npm='$npm' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_mahasiswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$kelas = $user_data['kelas'];
	$npm = $user_data['npm'];
}
?>
<html>
<head>	
	<title>Update Data Mahasiswa</title>
	<link rel="stylesheet" href="style.css">
</head>
 
<body>
<button onclick="window.location.href='index.php'"><ion-icon name="arrow-back-outline"></ion-icon></button> <br><br>
	<br/><br/>
	
	<div>
	<form name="update_data" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?> requied></td>
			</tr>
			<tr> 
				<td>kelas</td>
				<td><input type="text" name="kelas" value=<?php echo $kelas;?> requied></td>
			</tr>
			<tr> 
				<td>NPM</td>
				<td><input type="text" name="npm" value=<?php echo $npm;?> requied></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
	
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>