<?php
	include "./db/db.php";
		$select = "select * from curious";
	$rs = $pdo -> query($select);
	// $rs -> execute(); 
	$select2 = "select * from faq ORDER BY idx limit 0,8 ";
		$rs2 = $pdo -> query($select2);
		// $rs2 -> execute(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>board</title>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/board.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<?php 
		include "./layout/header.php";
	 ?>
	 <div class="wrap">
	 	<div class="hanburgerMenu"></div>
		<section class="banner">
			<h2 class="hidden">배너이미지</h2>
		</section>
		<section class="tabWrap">
			<h2 class="hidden">탭 : 질문사항 . faq </h2>
			<div class="tabWrap">
				<div class="tab">
					<ul>
						<li class="noticeTab now">질문사항</li>
						<li class="faqTab">FAQ</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="notification">
			<div class="container">
				<div class="view notice">
					<div class="sectionTitle">
						<h2>질문사항</h2>
						<p><b>서가앤쿡</b>에 대해 궁금한 점들을 물어봐 주세요.  </p>
					</div>
					<div class="list">
						<div class="top">
							<div class="idx">번호</div>
							<div class="title">제목</div>
							<div class="writer">글쓴이</div>
						</div>
						<?php
							while($data = $rs -> fetch()) {
						?>
						<div class="noticeList">
							<div class="bottom">
								<div class="idx"><?=$data['idx']?></div>
								<div class="title"><?=$data['title']?></div>
								<div class="writer"><?=$data['name']?></div>
							</div>
							<div class="bottomContent">
								<div class="answerImg">
									<img src="./image/answer.png" alt="내용" >
								</div>
								<div class="content">
									<?=$data['about']?>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				<div class="view faq">
					<div class="sectionTitle">
						<h2>자주 묻는 질문 </h2>
						<p><b>서가앤쿡</b>에 대해 궁금한 사항을 먼저 찾아보세요. </p>
					</div>
					<div class="list">
						<div class="top">
							<div class="idx">번호</div>
							<div class="title">제목</div>
							
						</div>
						<?php 
							while($data2 = $rs2 -> fetch()) {
						?>
						<div class="bottomList">
							<div class="bottom">
								<div class="idx"><?=$data2['idx']?></div>
								<div class="title"><?=$data2['title']?></div>
								<div class="arrow">
									<img src="./image/downarrow.png" alt="화살표">
								</div>
							</div>
							<div class="answerWrap">
								
								<div class="answer">
									<?=$data2['answer']?>
								</div>
							</div>
						</div>
						<?php 
							}
						 ?>
				</div>
			</div>
			</div>
		</section>
	 </div>
	  <?php 
	 	include "./layout/footer.php";
	  ?>
	 <script src='./js/scroll.js'></script>
	 <script src="./js/hamburger.js"></script>
	 <script src='./js/tab.js'></script>
</body>
</html>