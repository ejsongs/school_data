<?php
	include "./db/db.php";
	$select = "select * from menu";
	$rs = $pdo -> query($select);
		$rs -> execute(); 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Sega&Cook</title>
	<link rel="stylesheet" href="./css/menu.css">
	<link rel="stylesheet" href="./css/common.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="wrap">
		<?php
			include "./layout/header.php";
		?>
		<div class="hanburgerMenu">
			
		</div>
		<section class="banner">
			<h2 class="hidden">배너이미지</h2>
			<div class="content">
				<!-- 배너 이미지 -->
			</div>
		</section>
		<!-- 메뉴정보 -->
		<section class="menuInfo">
			<div class="container">
				<h2 class="hidden">메뉴들 </h2>
				<h3>Our Menu</h3>
				<div class="menuListBox">
					<ul>
						<li>HANSANG</li>
						<li>PIZZA</li>
						<li>PASTA</li>
						<li>SIDE</li>
						<li>BEVERAGE</li>
					</ul>
					<div class="menuList">
						<ul>
						<?php 
							while($data = $rs -> fetch()){
						 ?>
							<li>
								<div class="image">
									<img src=<?=$data['foodImg']?> alt="음식 사진 "> 
								</div>
								<div class="infor">
									<h4><?=$data['foodName']?></h4>
									<p><?=$data['foodEx']?></p>
									<div class="price"><?=$data['price']?></div>
								</div>
						<?php 
							}
						 ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="./js/scroll.js"></script>
	<script src="./js/hamburger.js"></script>
	<script src="./js/menu.js"></script>
</body>
</html>
<!-- https://www.templatemonster.com/demo/62171.html -->