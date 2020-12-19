<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'urok43');
	$query = mysqli_query($con, "SELECT * FROM universities");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Проект</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <a class="navbar-brand" href="index.php">Поступай легко!</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item ml-3">
	         <a href="accountStudent.php">Аккаунт студента</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<div class="col-10 mx-auto">
		<div class="row">	
			
			<!--карточка одного университета-->
			<?php 
				for ($i=0; $i < mysqli_num_rows($query); $i++) {
					$stroka = $query->fetch_assoc();	
			 ?>
			<div class="col-3">
				<img class="w-100" src="<?php echo $stroka['photo'] ?>">
				<h4><?php echo $stroka['name'] ?></h4>
				<p><?php echo $stroka['description'] ?></p>
				<form action="addAplication.php" method="POST">
					<input name="file" value="<?php echo $stroka['photo'] ?>" style="display: none">
					<input name="name" value="<?php echo $stroka['name'] ?>" style="display: none">
					<input name="descr" value="<?php echo $stroka['description'] ?>" style="display: none">
					<button class="btn btn-info">Подать заявку</button>	
				</form>
							
			</div>	
		<?php 
			}
		?>
		</div>
	</div>
</body>
</html>