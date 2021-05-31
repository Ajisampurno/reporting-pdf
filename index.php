<?php
    require 'function.php';

	if (isset($_POST["submit"])) {
		
		if (tambah($_POST) >0 ) {
		echo "
				<script>
					alert('data berhasil di tambahkan!');
					document.location.href= 'biodata.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('data gagal di tambahkan!');
					document.location.href= 'biodata.php';
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MASUKAN DATA PENGUNJUNG HOTEL</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="">Nama:</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="">NO telp:</label>
                <input type="text" name="telp" id="telp">
            </li>
            <li>
                <label for="">No kamar:</label>
                <input type="text" name="nokamar" id="nokamar">
            </li>
            <li>
                <label for="">Masuk</label>
                <input type="date" name="masuk" id="masuk">
            </li>
            <li>
                <label for="">Keluar</label>
                <input type="date" name="keluar" id="keluar">
            </li>
            <button type="submit" name="submit">Simpan</button>
        </ul>
    </form>
    
</body>
</html>