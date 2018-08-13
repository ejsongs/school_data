
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>먹거리</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/food.css">
</head>
<body>
	<div class="wrap">
		<?php
				include "./layout/header.php";
		?>
		<!-- 먹거리와 맛집 소개   -->
		<div class="food">
			<div class="container">
				<h2>먹거리</h2>
				<div class="food_top">
					<h3>먹거리&맛집</h3>
					<div class="selectBox">
						<strong class="hidden">선택상자</strong>
						<em class="hidden">선택내용</em>
						<select name="foodCategori" id="foodCategori" onchange="change()">
							<option value="dish">식사</option>
							<option value="tea">차</option>
							<option value="snack">간식</option>
						</select>
					</div>
				</div>
				<div class="foodList">
						<ul>
							<li class="foodImg snack" id="hwangnam">
								<div class="cover">
									<a href="http://www.hwangnam.co.kr">
										<span>
											황남빵
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg snack" id="bori">
								<div class="cover">
									<a href="http://www.diningcode.com/list.php?query=%EA%B2%BD%EC%A3%BC%20%EC%B0%B0%EB%B3%B4%EB%A6%AC%EB%B9%B5">
										<span>
											보리빵
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg snack" id="shilla">
								<div class="cover">
									<a href="http://www.shillamiso.co.kr/">
										
										<span>
											신라미소빵 
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg snack" id="dice">
								<div class="cover">
									<a href="https://m.blog.naver.com/PostView.nhn?blogId=kkcomi&logNo=220751347290&proxyReferer=https%3A%2F%2Fwww.google.co.kr%2F">
										
										<span>
											주령구빵
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg snack" id="chumsungdae">
								<div class="cover">
									<a href="http://blog.naver.com/PostView.nhn?blogId=siley&logNo=220593088168&parentCategoryNo=&categoryNo=10&viewDate=&isShowPopularPosts=false&from=search">
										
										<span>
											첨성대 초콜릿
										</span>
									</a>
								</div>
							</li>
							<!-- 여기서부터는 맛집 -->
							<li class="foodImg " id="tasty1">
								<div class="cover">
									<a href="https://story.kakao.com/ch/lovegj/jAyPDnXBV10">
									
										<span>
											홍시 한정식
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg dish " id="tasty2">
								<div class="cover">
									<a href="http://talproject.tistory.com/831">
										
										<span>
											별채반 교동쌈밥
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg dish" id="tasty4">
								<div class="cover">
									<a href="http://namsieon.com/1935">
										
										<span>
											도솔마을
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg dish" id="tasty5">
								<div class="cover">
									<a href="http://www.surime.co.kr/">
										
										<span>
											수리뫼
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg dish" id="tasty6">
								<div class="cover">
									<a href="http://neowind.tistory.com/980">
										
										<span>
											라선재
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg tea" id="tea1">
								<div class="cover">
									<a href="http://tour.interpark.com/freeya/Discovery/View.aspx?seq=8424">
										
										<span>
											고운님 오시는 길
										</span>
									</a>
								</div>
							</li>
							<li class="foodImg tea" id="tea2">
								<div class="cover">
									<a href="https://m.blog.naver.com/PostView.nhn?blogId=jhbaggio&logNo=220055020787&proxyReferer=https%3A%2F%2Fwww.google.co.kr%2F">
										
										<span>
											아리솔
										</span>
								</div>
								</a>
							</li>
						</ul>
					</div>
			</div>
		</div>
		<?php
			include "./layout/footer.php";
		?>
	</div>
	<script src="./js/menu.js"></script>
	<script src="./js/hamburger.js"></script>
</body>
</html>