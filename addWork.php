<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','','urok43');
	$uploadfile = 'img/' . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	$text_zaprosa_vstavit = "INSERT INTO works (file, descr, user_id)
	VALUES ('{$uploadfile}', '{$_POST['descr']}', '{$_SESSION['student_id']}')";
	$zapros_vstavit = mysqli_query($con, $text_zaprosa_vstavit);
	header('Location: accountStudent.php');
 ?>