<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>QnA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/qna.css">
</head>
<body>
	<div class="wrap">
		<?php 
			include "./layout/header.php";
		 ?>
		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="title">
					<h2>Contact</h2>
					<div class="call">
						<ul>
							<li id="one"><a href="https://www.facebook.com/gyeongjulove/"><img src="./img/facebook.png" alt="경주 페이스북"></a></li>
							<li id="two"><a href="https://www.instagram.com/explore/tags/%EA%B2%BD%EC%A3%BC%ED%95%9C%EC%98%A5%EC%B9%B4%ED%8E%98/"><img src="./img/instagram.png" alt="경주 한옥마을 인스타그램"></a></li>
							<li id="three"><a href="https://twitter.com/gyeongjucity"><img src="./img/twitter.png" alt="경주 트위터"></a></li>
							<li id="four"><a href="http://guide.gyeongju.go.kr/deploy/"><img src="./img/mail.png" alt="경주 관광 홈페이지"></a></li>
						</ul>
					</div>
				</div>
				<div class="write">
					<h2>Message</h2>
					<form action="./insert.php" method="post">
						<span class="hidden">제목</span>
							<input type="text" maxlength="50" value="제목을 써 주세요." name="title"><br>
						<span class="hidden">이메일</span>
							<input type="email" value="email을 써 주세요" name="eamil"><br>
						<span class="hidden">이름</span>
							<input type="text" maxlength="50" value="이름을 써 주세요." name="writer"><br>
						<span class="hidden">내용</span>
							<textarea name="content" id="" cols="30" rows="10" placeholder="내용을 써 주세요."></textarea><br>
						<button>완료</button>
					</form>
				</div>
			</div>
		</div>
		<!--//content-->
	    <?php 
			include "./layout/footer.php";
		 ?>
	</div>
	<script src="./js/menu.js"></script>
	<script src="./js/input.js"></script>
	<script src="./js/hamburger.js"></script>
</body>
</html>