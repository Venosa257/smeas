<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['id'];

	//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
	// $del = mysql_query("DELETE FROM siswa WHERE siswa_id='$id'");
	$sql = "DELETE FROM siswa WHERE siswa_id='$id'";

	//jika query DELETE berhasil
	if(mysqli_query($koneksi, $sql)){

		echo 'Data siswa berhasil di hapus! ';		//Pesan jika proses hapus berhasil
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda

	}else{

		echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda

	}


}else{

	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';

}
?>
