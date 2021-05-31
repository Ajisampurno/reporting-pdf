<?php 
    $konek = mysqli_connect("localhost","root","","hotel");

	function query($query){
		global $konek;

		$hasil = mysqli_query($konek,$query);

		$row = [];
		while ($row = mysqli_fetch_assoc($hasil)) {
			$rows[] = $row;
		}
		return $rows;
	}

    function tambah($data){
		global $konek;

		$nama 	 = htmlspecialchars ($data["nama"]); //htmlspecialchars => berguna u/ menonaktihakan script di inputan
		$telp     = htmlspecialchars ($data["telp"]);
		$nokamar   = htmlspecialchars ($data["nokamar"]);
		$masuk = htmlspecialchars ($data["masuk"]);
        $keluar = htmlspecialchars ($data["keluar"]);
		

		$query = "INSERT INTO manajemen VALUES
				('','$nama','$telp','$nokamar','$masuk','$keluar')";

	mysqli_query($konek,$query);
	return mysqli_affected_rows($konek);

	}
?>