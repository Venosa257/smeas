<?php //include('cek-login.php'); ?>
<?php include('header.php'); ?>

<h3>Tambah Data Siswa</h3>

<form action="create-proses.php" method="post">
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" size="30" required></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<select name="kelas" required>
					<option value="">Pilih Kelas</option>
					<option value="X">X</option>
					<option value="XI">XI</option>
					<option value="XII">XII</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
				<select name="jurusan" required>
					<option value="">Pilih Jurusan</option>
					<option value="RPL">RPL</option>
					<option value="Multimedia">Multimedia</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="Perbankan">Perbankan</option>
					<option value="Pemasaran">Pemasaran</option>
                    <option value="Perhotelan">Perhotelan</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
				</select>
			</td>
		</tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td>
                <select name="role" required>
                    <option value="">Pilih Role</option>
                    <option value="1">Admin</option>
                    <option value="2">Teacher</option>
                    <option value="3">Student</option>
                </select>
            </td>
        </tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
</form>

<?php include('footer.php'); ?>
