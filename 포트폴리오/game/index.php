<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>네이버 넌센스 퀴즈 </title>
	<link rel="stylesheet" href="./css/style.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="wrap">
		<div class="container">
			<div class="title">
				<h1><img src="./image/name.png" alt=""></h1>
			</div>	
		
			<div class="content">
				<div class="quiz">
					<h2>퀴즈 내용 </h2>
					<form action="#" onsubmit="return false;">
						<input type="text" class="answer" placeholder="정답을 입력하세요. " >
						<button class="answer_btn">확인</button>
					</form>
					<div class="correct">
						<h3>정답!</h3>
					</div>
					<div class="false">
					<h3>땡 ! 답은  : <div class="fa_answer"></div></h3>
					</div>
					<div class="check">
						<button>정답</button>
					</div>
				</div>
				<div class="img_button">
					<img src="./image/button.png" alt="<" class="left">
					<img src="./image/button.png" alt=">" class="right">
				</div>
			</div>
		</div>
	</div>
	<script src="./js/jquery.js"></script>
	<script src="./js/script.js"></script>
</body>
</html>
