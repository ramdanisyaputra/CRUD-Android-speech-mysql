<?php 
 
 /*
 
 penulis: Muhammad yusuf
 website: https://www.kodingindonesia.com/
 
 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$name = $_POST['nama'];
		$rombel = $_POST['rombel'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_siswa SET nama = '$name', rombel = '$rombel' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data Siswa';
		}else{
		echo 'Gagal Update Data Siswa';
		}
		
		mysqli_close($con);
	}
?>