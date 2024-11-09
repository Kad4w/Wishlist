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
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase text-decoration-none">Поддержка</a>					
				</div>
			</div>
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto">
			<div class="col-10 mx-auto pt-5 d-flex">
				<img src="img/images.jpg" class="col-1">
				<h4 class="text-uppercase text-light ms-4">список желаемого нам</h4>
				</div>
				<div class="col-10 mx-auto pt-3 d-flex">
					<input type="text" class="w-50 fst-italic bg-dark" placeholder="Поиск по названию или метке">
					<button class="btn dropdown-toggle text-light" type="button" style="background: #3d434f" data-bs-toggle="dropdown">Настройки</button>
					<button class="btn dropdown-toggle text-light" type="button" style="background: #3d434f" data-bs-toggle="dropdown"><span class="text-primary">Сортировать по: </span><span>вашему предпочтению</span></button>
				</div>
				<div class="col-10 mx-auto d-flex" style="background: #3d4d5d; height: 150px; margin-top: 15px">
					<img src="img/handle.png" style="height: 30px; margin-top: 60px; margin-left: 7px">
					<div class="col-11 d-flex ms-2" style="border-left: 2px solid gray">
						<img style="height: 100px; margin-left: 10px; margin-top: 25px;" src="img/header.jpg">
						<p class="text-light" style="margin-left: 10px; margin-top: 25px">Black Myth: Wukong<p>
						<div class="text-light" style="height: 30px; margin-top: 50px; margin-left: 100px; background: #323e4c">3599 руб <button class="btn-success">В корзину</button></div>
					</div>
				</div>
				<?php
					$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
					$query = mysqli_query($connect, 'SELECT * FROM wish');
					$game = $query->fetch_assoc();
				?>
				<div class="col-10 mx-auto d-flex" style="background: #3d4d5d; height: 150px; margin-top: 15px">
					<img src="img/handle.png" style="height: 30px; margin-top: 60px; margin-left: 7px">
					<div class="col-11 d-flex ms-2" style="border-left: 2px solid gray">
						<img style="height: 100px; margin-left: 10px; margin-top: 25px;" src="<?php echo $game['img']?>">
						<p class="text-light" style="margin-left: 10px; margin-top: 25px"><?php echo $game['names']?><p>
						<div class="text-light" style="height: 30px; margin-top: 50px; margin-left: 100px; background: #323e4c"><?php echo $game['price']?><button class="btn-success">В корзину</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>