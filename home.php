 <?php include('header.php'); ?>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/style.bundle.css">
</head>
<body style="background: none">
    <h3>Data Siswa</h3>

    <table cellpadding="5" cellspacing="0" border="1">
        <tr bgcolor="#CCCCCC">
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th></th>
            <th>Opsi</th>
        </tr>
        <?php

        //iclude file koneksi ke database
        include('koneksi.php');

        $sql = "SELECT * FROM siswa ORDER BY siswa_nis DESC";

        $result = mysqli_query($koneksi, $sql);
        if (!$result) { //gagal request data
            die('Error: '.mysqli_error($koneksi));
        }else{
            if (mysqli_num_rows($result) > 0) {
                //jika data tidak kosong, maka akan melakukan perulangan while
                $no = 1;	//membuat variabel $no untuk membuat nomor urut
                while($data = mysqli_fetch_assoc($result)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database

                    //menampilkan row dengan data di database
                    echo '<tr>';
                    echo '<td>'.$no.'</td>';	//menampilkan nomor urut
                    echo '<td>'.$data['siswa_nis'].'</td>';	//menampilkan data nis dari database
                    echo '<td>'.$data['siswa_nama'].'</td>';	//menampilkan data nama lengkap dari database
                    echo '<td>'.$data['siswa_kelas'].'</td>';	//menampilkan data kelas dari database
                    echo '<td>'.$data['siswa_jurusan'].'</td>';	//menampilkan data jurusan dari database
                    echo '<td><a href="update.php?id='.$data['siswa_id'].'">Edit</a> / <a href="delete.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
                    echo '</tr>';

                    $no++;	//menambah jumlah nomor urut setiap row
                }

            } else {
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            }
        }


    ?>
    </table>
</body>


<?php include('./core/footer.php'); ?>
