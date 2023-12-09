<?php
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$divisi = $_POST['divisi'];
    $alasan = $_POST['alasan'];

	// Database connection
	$conn = new mysqli('localhost','root','','db_user');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(nama, email, password, divisi, alasan) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $nama, $email, $password, $divisi, $alasan);
		$execval = $stmt->execute();
		echo $execval;
		header('Location: index.php');
		$stmt->close();
		$conn->close();
	}
?>