<?php 
	session_start();
    $link = mysqli_connect('127.0.0.1', 'root','','urok43');
     
    $query = "DELETE FROM works WHERE id = '{$_POST['zayavka_id']}'";
 
    $result = mysqli_query($link, $query);
    header('Location: accountStudent.php');
?>