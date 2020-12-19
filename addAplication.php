<?php 
	session_start();
	$con = mysqli_connect("127.0.0.1","root","","urok43");
	$text_zaprosa_vstavit = "INSERT INTO applications (file, descr, name, user_id)
	VALUES ('{$_POST["file"]}', '{$_POST["descr"]}', '{$_POST["name"]}', '{$_SESSION['student_id']}')";

	$zapros_vstavit = mysqli_query($con, $text_zaprosa_vstavit);
	header("location: index.php");
	exit;
	
?>