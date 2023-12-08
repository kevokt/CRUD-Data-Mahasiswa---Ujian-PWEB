<?php
include_once("config.php");
 
// Untuk READ data dari database, akan menyimpan ke variable result
$result = mysqli_query($mysqli, "SELECT * FROM data_mahasiswa ORDER BY id DESC");
?>

<html>
<head>    
    <title>Ujian PWEB - Kevin Oktavian</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>

<br><center><h2>Ujian Project PWEB - Kevin Oktavian</h2> <br></center>

    <div>
        <h3>Tambah Data </h3> 
        <button onclick="window.location.href='create.php'"><ion-icon name="person-add-outline"></ion-icon></button> <br><br>
    </div>
 
<!-- Menampilan result kedalam tabel -->
<fieldset>
    <legend><h3>Data Mahasiswa</h3></legend>
    <table width='90%' border=1>
 
    <tr>
        <th>Nama</th> <th>Kelas</th> <th>NPM</th> <th>Ubah Data</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['kelas']."</td>";
        echo "<td>".$user_data['npm']."</td>";    
        echo "<td><button onclick=\"window.location.href='update.php?id=$user_data[id]'\">Update</button> 
        <button onclick=\"window.location.href='delete.php?id=$user_data[id]'\">Delete</button></td></tr>";
    }
    ?>
    </table>
    </fieldset>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>