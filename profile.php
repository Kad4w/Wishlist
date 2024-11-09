<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #222431; height: 100%;">
		<div class="col-8 mx-auto p-5 d-flex" style="background-color: #222431; height: 100%;">
			<div class="col-8 d-flex ps-5" style="height: 600px;">				
				<div class="col-4">
					<img src="profile.jfif" style="height: 250px">
				</div>
				<div class="col-8 ms-5"> 
					<h2 class="fw-light text-white"></h2>  <!-- 1  -->
					<p class="text-white">Электронная почта: <?php echo $_GET['account_mail'] ?></p> <!-- 2  -->
					<p class="text-white">Возраст: <?php echo $_GET['account_age'] ?></p> <!-- 3  -->
					<?php
					if($_GET['account_age'] >= 18){
						echo '<p class="text-success">Ограничений нет</p>';
					} else {
						echo '<p class="text-danger">Ограничения есть</p>';
					}
					?>					
				</div>
			</div>
			<div class="col-4" style="height: 600px;">
				<h1 class="text-white fs-2">Уровень 1</h1>
				<p class="text-white">Вы можете отобразить один из ваших значков здесь. Выберите его на странице редактирования профиля</p>
				<button class="btn btn-dark btn-outline-secondary">
					<a href="edit.php" class="text-white text-decoration-none">
						Редактировать профиль
					</a>
				</button>
			</div>
		</div>
	</div>
</body>
</html>