<?php
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['nama'];
		$rombel = $_POST['rombel'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_siswa (nama,rombel) VALUES ('$name','$rombel')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Siswa';
		}else{
		echo 'Gagal Menambahkan Siswa';
		}
		mysqli_close($con);
    }
?>
<p>asdasdasdas</p>