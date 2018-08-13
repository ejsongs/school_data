<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>서가앤쿡</title>
	<link rel="stylesheet" href="./css/gallery.css">
	<link rel="stylesheet" href="./css/common.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
		<?php
			include "./layout/header.php";
		?>
		<div class="wrap">
			<div class="hanburgerMenu"></div>
			<div class="galleryWrap">
				<div class="container">
					<div class="sectionTitle">
						<div class="titleWrap">
							<h2>For</h2><span><img class="icon" src="./image/heart.ico" alt="하트 아이콘"></span><h2>You</h2>
						</div>
					</div>
					<div class="gallery">
						<ul class="photos">
							<li>
								<img src="./image/gallery1.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery2.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery3.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery4.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery5.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery6.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery7.jpg" alt="">
							</li>
							<li>
								<img src="./image/gallery8.jpg" alt="">
							</li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<?php
			include "./layout/footer.php";
		?>
	<script src="./js/scroll.js"></script>
	<script src="./js/hamburger.js"></script>
</body>
</html>