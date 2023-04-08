<?php include('cek-login.php'); ?>
<?php include('header.php'); ?>

<h3>Edit Data Siswa</h3>

<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id

//include atau memasukkan file koneksi ke database
include('koneksi.php');

//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
$id = $_GET['id'];

//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
$sql = "SELECT * FROM siswa WHERE siswa_id='$id'";
$result = mysqli_query($koneksi, $sql);

//cek apakah data dari hasil query ada atau tidak
if(mysqli_num_rows($result) == 0){

	//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
	echo '<script>window.history.back()</script>';

}else{

	//jika data ditemukan, maka membuat variabel $data
	$data = mysqli_fetch_assoc($result);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah

}
?>





<form action="update-proses.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>NIS</td>
			<td>:</td>
			<td><input type="text" name="nis" value="<?php echo $data['siswa_nis']; ?>" required></td>	<!-- value diambil dari hasil query -->
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" size="30" value="<?php echo $data['siswa_nama']; ?>" required></td> <!-- value diambil dari hasil query -->
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<select name="kelas" required>
					<option value="">Pilih Kelas</option>
					<option value="X" <?php if($data['siswa_kelas'] == 'X'){ echo 'selected'; } ?>>X</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					<option value="XI" <?php if($data['siswa_kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					<option value="XII" <?php if($data['siswa_kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
				</select>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
				<select name="jurusan" required>
					<option value="">Pilih Jurusan</option>
					<option value="RPL" <?php if($data['siswa_jurusan'] == 'RPL'){ echo 'selected'; } ?>>RPL</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					<option value="Multimedia" <?php if($data['siswa_jurusan'] == 'Multimedia'){ echo 'selected'; } ?>>Multimedia</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					<option value="Akuntansi" <?php if($data['siswa_jurusan'] == 'Akuntansi'){ echo 'selected'; } ?>>Akuntansi</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					<option value="Perbankan" <?php if($data['siswa_jurusan'] == 'Perbankan'){ echo 'selected'; } ?>>Perbankan</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					<option value="Pemasaran" <?php if($data['siswa_jurusan'] == 'Pemasaran'){ echo 'selected'; } ?>>Pemasaran</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php include('footer.php'); ?>
