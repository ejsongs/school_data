<?php
	include "./db/db.php";
	$select = "select * from news";
	$rs = $pdo->query($select);
	$rs -> execute();
	
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>자유게시판</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/board.css">
</head>
<body>
	<div class="wrap">
		<?php
			include "./layout/header.php";
		?>
		<div class="content">
			<div class="container">
				<article>
					<div class="top">
						<h2>공지사항</h2>
					</div>
					<div class="boardbox">
						<div class="boardtitle">
							<ul>									
								<li class="idx">idx</li>
								<li class="text">내용</li>
								<li class="date">등록자</li>
							</ul>
						</div>
							<?php
								while($data = $rs -> fetch()) {
							?>
						<div class="boardlist">
							<ul>
								<li class="idx"><?=$data['idx']?></li>
								<li class="text"><a href="#"><?=$data['content']?></a></li>
								<li class="date"><?=$data['name']?></li>
							</ul>
						</div>
						<?php
							}
						?>
						
					</div>
				</article>		
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