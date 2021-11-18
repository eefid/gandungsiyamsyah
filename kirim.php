<?php
if($_POST['kirim']){
	$admin = 'eeefid@gmail.com';
	
	$nama	= htmlentities($_POST['nama']);
	$subject	= htmlentities($_POST['subject']);
	$email	= htmlentities($_POST['$email']);
	$message	= htmlentities($_POST['$message']);
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>
