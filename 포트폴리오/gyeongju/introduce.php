<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>경주를 소개합니다</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/introduce.css">
	<script src="./js/map.js"></script>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKvlao1xzlypRnRJVgDZhmK_RIzlLnZyI&callback=initMap">
    </script>
</head>
<body>
	<div class="wrap">
	<?php
		include "./layout/header.php";
	?>
		<div class="content">
			<div class="banner">
				
			</div>
			<!-- 경주의상징, 색, 역사  -->
			<div class="festival">
				<div class="container top" id="contain_color">
					<h2 >Festival</h2>
					<ul class="festivalList">
							<li>
								<a href="#">
									<span>1</span>
									
									<p >벛꽃 축제</p>
									
									<div class="hidden">
										벚꽃이 만개하는 봄에 경주에 오셔서 다양한 체험도 하고, 벚꽃도 구경하하세요~
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<span>2</span>
									<p>도자기 축제</p>
									<div class="hidden">
										도자기를 만들어 볼까요 
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<span>3</span>
									<p>화랑 문화제</p>
									<div class="hidden">
										화랑
									</div>
								</a>
							</li>
						
						
							<li>
								<a href="#">
									<span>4</span>
									<p>버섯 축제</p>
									<div class="hidden">
										버섯은 맛이 없어요
									</div>
								</a>
							</li>
						
							<li>
								<a href="#">
									<span>5</span>
									<p>술과 떡잔치</p>
									<div class="hidden">
										맛있는 떡을 만들어 볼까요
									</div>
								</a>
							</li>
						
							<li>
								<a href="#">
									<span>6</span>
									<p>선덕여왕 행차</p>
									<div class="hidden">
										선덕여왕이 나가신다. 
									</div>
								</a>
							</li>
						
						
							<li>
								<a href="#">
									<span>7</span>
									<p>국악공연</p>
									<div class="hidden">
										국아앙아앙아아악
									</div>
								</a>
							</li>
						
						
							<li>
								<a href="#">
									<span>8</span>
									<p>쌀 문화축제</p>
									<div class="hidden">
										라이스
									</div>
								</a>
							</li>
						
					</ul>
					<div class="popup">
							<div class="infor  container">
									<h3>벚꽃<br>축제</h3>

									<div class="text">
										봄에는 벚꽃잋 활짝 핍니다.<br>
										벚꽃을 구경하러 경주로 가보세요. 
									</div>
								</div>
								<button onclick="close()" class="closeButton" >
									X
								</button>
						</div>
				</div>
			</div>
			<div class="content heritage">
				<div class="container">
					<div class="top">
						<h2>문화재</h2>
					</div>
					<div class="hertiageList">
						<div class="item">
							<div class="leftBox">
								<h2>과거의<br>천문대</h2>
								<!-- <div class="imgBox">
									<img src="./img/chumsungdae.jpg" alt="">
								</div> -->

							</div>	
							<div class="rightBox">
								<dl>
									<dt>첨성대</dt>
									<dd>
										경주시 반월성 동북쪽에 위치한 신라 중기의 석조 건축물로, 선덕여왕때에 세워진, 현존하는 동양 최고(最古)의 천문대로 알려져 있다. 
									</dd>
									<dt>만든사람</dt>
									<dd>
										첨성대에 관한 최초 기록인 <삼국유사>는 첨성대의 건립시점을 선덕여왕대(632~647)로 밝히고 있고, <삼국유사> 이후의 사서에서도 이에 반하는 기록이 보이지 않으므로 선덕여왕대(632~647년)에 첨성대가 건립된 것만큼은 확실해 보인다. 
									</dd>
									<dt>현재는</dt>
									<dd>
										1962년 12월 20일 국보 제31호로 지정되었다.
									</dd>
								</dl>
							</div>
						</div>
						<div class="item">
							<div class="leftBox">
								<h2>함월산 <br>기림사</h2>
								<!-- <div class="imgBox">
									<img src="./img/chumsungdae.jpg" alt="">
								</div> -->

							</div>	
							<div class="rightBox">
								<dl>
									<dt>기림사</dt>
									<dd>
										경상북도 경주시의 함월산 자락에 위치한 대한불교조계종 소속의 사찰이다. 
									</dd>
									<dt>만든사람</dt>
									<dd>
										신라 때 인도 승려인 광유(光有)가 창건하고 이름은 임정사(林井寺)라고 했다. 643년에 원효가 중창한 뒤 기림사로 이름을 바꾸었다고 전해진다.
									 </dd>
									<dt>현재는</dt>
									<dd>
										세계 국가 유산이다.
									</dd>
								</dl>
							</div>
						</div>
						
						<div class="item">
							<div class="leftBox">
								<h2>아름다운 <br>동궁과 월지</h2>
								<!-- <div class="imgBox">
									<img src="./img/chumsungdae.jpg" alt="">
								</div> -->

							</div>	
							<div class="rightBox">
								<dl>
									<dt>동궁과월지</dt>
									<dd>
										왕궁에 딸린 연못으로 서쪽에 별궁인 임해전이 있으며, 동쪽과 북쪽은 굴곡이 심한 곡면을 이루고 있고, 연못 안에는 3개의 성(섬)이 있다. 별궁인 임해전과 여러 부속건물은 나라의 경사가 있을 때나 귀한 손님을 맞을 때 이 곳을 바라보면서 연회를 베풀기도 하였던 곳이다.
									</dd>
									<dt>만든사람</dt>
									<dd>
										1980년, 안압지에서 발굴된 토기 파편 등으로 신라시대에 이 곳이 월지(月池)라고 불렸다는 사실이 확인되었다. 
									</dd>
									<dt>현재는</dt>
									<dd>
										바다에 면한 건물이라고 불렀다는 기록이 있으며, 여기에서 안압지는 바다를 상징한다.
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="imgBox">
				<h3 class="hidden">경주 풍경 사진</h3>
				<div class="box" id="left">
					
				</div>
				<div class="box" id="right">
					<ul>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
			
			<div class="gps">
				<div class="container top">
					<h2 >경주의 위치</h2>
					<div id="map">
						
					</div>
					
				</div>
				
			</div>
			<div class="box">
				
			</div>
		</div>
		<?php
			include "./layout/footer.php";
		?>
	</div>	
	
	<script src="./js/popup.js"></script>
	<script src="./js/menu.js"></script>
	<script src="./js/hamburger.js"></script>
</body>
</html>