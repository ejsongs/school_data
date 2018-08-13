<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>SDHS</title>
	<link rel="stylesheet" href="/css/view.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/sub.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="./js/scroll.js"></script>
	<script src="./js/popup.js"></script>
	<script src="./js/gmap.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDGRMyUWvxWNSrfjgKcPwZHWIo111ssfQ&callback=initMap"
	async defer></script>
</head>
<body>
	<div class="wrap">
		
			<header>
				<div class="container_new">
					<h1 class="logo">
							<a href="./index"><img src="./image/logo.png" alt=""></a>
					</h1>
					<ul class="top_menu">
						<li><a href="/school_info">학교소개</a></li> 
						<li class="menu_major"><a href="/major_intro">학과소개</a>
								<div class="sub_area">
									<ul class="menu_majorsub">
										<li><a href="#game">게임영상과</a></li>
										<li><a href="#gps">공간정보학과</a></li>
										<li><a href="#ubi">유비쿼터스과</a></li>
									</ul>
								</div>
						</li>
						<li><a href="/freshman">입학안내</a></li>
						<li><a href="/club">동아리</a></li>
					</ul>
				</div>
			</header>

			<div class="popup">
				<form action="/process" method="post">
					<button class="close" type="button">X</button>
                    <input type="text" name="id" placeholder="아이디를 입력하세요">
					<input type="Password" name="pw" placeholder="비밀번호를 입력하세요">
					<button>로그인</button>
				</form>	
			</div>

			
		
		<div class="content">