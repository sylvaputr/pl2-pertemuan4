<h1>Ubah Data Dosen</h1>

<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$kode_dosen= $_GET['kode_dosen'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM tbl_dosen WHERE kode_dosen='$kode_dosen'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['proses']))
{
$nama= $_POST['nama'];
$query=mysqli_query($con,"UPDATE tbl_dosen SET kode_dosen='$kode_dosen', nama='$nama' WHERE kode_dosen='$kode_dosen'");
header('location:latihan5.php');
}

?>

<form action="" method="POST">
Kode Dosen <br>
<input type="text" name="kode_dosen" value="<?php echo $data['kode_dosen'] ?>" disabled><br>
Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form>

<?php } ?>
