<?php
	include "./db/db.php";
	$select = "select * from notice ORDER BY  date DESC limit 0,8 "; 
		$rs = $pdo -> query($select); 
		$rs -> execute();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>서가앤쿡</title>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	
	<div class="wrap">
		<?php
		include_once "./layout/header.php";
	?>
		<!-- 홍보영상/음소거/자동재생 -->
		<section class="promotionVideo">
			<h2 class="hidden">홍보영상</h2>
			<div class="cover">
				<video autoplay muted loop >
					<source src="./image/promotion.mp4" type="video/mp4">
				</video>
			</div>
		</section>
		<!-- <div class="promotionText">
			<p>
				커다란 접시에 가득 담은 푸짐한 음식을 함께 먹으며 나누는 담소는 그날 하루의 피로를 싹 가시게 합니다. <br>
				마치 집에서 먹는 저녁 식사처럼 <br>서가앤쿡은 고된 일이 끝나고 난 뒤<br> 소중한 사람과 함께 할 수 있는 따듯한 <br>장소로 기억되었으면 합니다. 
			</p>
		</div> -->
		<section class="aboutStore">
			<div class="container">
				<div class="sectionTitle">
					<h2>ABOUT</h2>
					<hr>
					<p class="name">Seoga and Cook</p>
					<p class="explain">합리적인 가격으로 건강하고  깨끗한 음식을 제공하겠습니다. </p>
				</div>
				<div class="brandStory">
					<ul>
						<li>
							<div class="box">
								<div class="image">
									<img src="./image/story_home.png" alt="집" id="icon">
									<h3>Home</h3>
								</div>
								<div class="text">
									<p>원 플레이트의 푸짐한 양과, 편안하고 가족같은 분위기로 소중한 추억이 되겠습니다. </p>
								</div>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="image">
									<img src="./image/story_heart.png" alt="집">
									<h3>Grow up</h3>
								</div>
								<div class="text">
									<p>
										서가앤쿡은 2006년 오픈을 시작으로 빠른 성잘률을 보이고 있습니다. 
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="image">
									<img src="./image/story_egg.png" alt="집">
									<h3>Egg fried</h3>
								</div>
								<div class="text">
									<p>
										귀한손님을 정성으로 대접해 드리고자 하는 서가앤쿡의 작은 마음이 담겨져 있습니다. 
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="gallery">
			<div class="galleryBox">
				<ul>
					<li>
						<div class="storeImg" id="store1">
							<span class="hidden">잠실</span>
						</div>
						<div class="imgCover">
							<div class="box">
								<h4>잠실점</h4>
								<p class="location">
									성남시 분당구 황새울로335번길 5 서현앤타운 3F
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="storeImg" id="store2">
							<span class="hidden">타임스퀘어</span>
						</div>
						<div class="imgCover">
							<div class="box">
								<h4>타임스퀘어</h4>
								<p class="location">
									서울특별시 영등포구 영중로 15
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="storeImg" id="store3">
							<span class="hidden">목동</span>
						</div>
						<div class="imgCover">
							<div class="box">
								<h4>목동</h4>
								<p class="location">
									서울특별시 양천구 오목로 286 2층
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="storeImg" id="store4">
							<span class="hidden">이수</span>
						</div>
						<div class="imgCover">
							<div class="box">
								<h4>이수</h4>
								<p class="location">
									서울특별시 동작구 사당동 139-30 2F
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="storeImg" id="store5">
							<span class="hidden">강남</span>
						</div>
						<div class="imgCover">
							<div class="box">
								<h4>강남</h4>
								<p class="location">
									서울특별시 서초구 서초대로73길 24 B1
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="storeImg" id="store6">
							<span class="hidden">홍대</span>
						</div>
						<div class="imgCover">
							<div class="box">
								<h4>홍대</h4>
								<p class="location">
									서울특별시 마포구 잔다리로 27
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<!-- <section class="call">
			<div class="container">
				<div class="sectionTitle">
					<h2>sns</h2>
					<hr>
					<p class="name">Seoga and Cook</p>
					<p class="explain">합리적인 가격으로 건강<p>
				</div>
				<div class="snsWrap">
					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</section> -->
		<section class="notice">
			<div class="container">
				<div class="sectionTitle">
					<h2>NOTICE</h2>
					<hr>
					<p class="name">공지사항</p>
					<p class="expalin">서가앤쿡의 공지사항입니다. </p>
				</div>
				<div class="noticeList">
					<div class="listTop">
						<ul>
							<li class="date">날짜 </li>
							<li class="title">제목 </li>
							<li class="hit">조회수</li>
						</ul>
					</div>
					<?php 
						while ($data = $rs -> fetch()) {
						
					 ?>
					<div class="listBottom">
						<ul>
							<li class="idx hidden"><?=$data['date']?></li>
							<li class="date"><?=$data['date']?></li>
							<li class="title"><?=$data['title']?></li>
							<li class="hit"><?=$data['hit']?></li>
						</ul>
					</div>
					<?php 
						}
					 ?>
				</div>
			</div>			
		</section>
		</div>
		<?php
			include_once "./layout/footer.php";
		?>
		<script src="./js/hamburger.js"></script>
		

	</body>
</html>