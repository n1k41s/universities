<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'urok43');
$query = mysqli_query($con, "SELECT * FROM students WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'");
$stroka = $query->fetch_assoc();
$num = mysqli_num_rows($query);

$_SESSION['student_id'] = $stroka['id'];

if($num>0){
	header("Location: accountStudent.php");
} else{
	echo "Нет такого пользователя";
}
?>
