<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>추천합니다.</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/reference.css">
</head>
<body>
	<div class="wrap">
	<?php 
		include "./layout/header.php";
	 ?>
		<div class="content">
			<div class="container">
				<div class="reference">
					<div class="top">
						<h2>추천합니다.</h2>
					</div>
					<div class="list">
						<div class="listTitle">
							<ul>
								<li class="category">분류</li>
								<li class="infor">장소</li>
								<li class="count">조회수</li>
							</ul>
						</div>
						<?php
							while($data = $rs -> fetch()){
						?>
						<div class="listText">
							<ul>
								<li class="category"><?=$data['category']?></li>
								<li class="infor"><a href="./view.php?idx=<?=$data['idx']?>"><?=$data['title']?></a></li>
								<li class="count"><?=$data['count']?></li>
							</ul>
						</div>
						<?php
							}
						?>
						
					</div>
					<div class="btnWrap">
						<button id="write" onclick="window.scrollTop(0,0);">글쓰기</button>
					</div>
			</div>
		</div>
			<!-- 글 쓰기  -->
			<div class="popupbg">
				<div class="popup">
					<form action="./db/insert2.php" method="post" enctype="multipart/form-data">
						<span class="hidden">분류</span>
						    <select name="category" id="category">
						    	<option value="분류를 선택해 주세요">===분류선택===</option>
						        <option value="음식">음식</option>
						        <option value="명소">명소</option>
                                <option value="기타">기타</option>
						    </select>
						<span class="hidden">title</span>
						    <input type="text" value="장소/위치/제목을 작성해주세요." name="title">
						<span class="hidden">content</span>
						    <textarea name="content" id="content" placeholder="내용을 써 주세요."></textarea>
						  <label for="file_upload">첨부파일</label>
						 	<input type="file" name="uplaod" id="file_upload">
				        <div class="btn_wrap">
				            <button id="finish">완료</button>
				            <button id="exit" type="reset" onclick="exit();">나가기</button>
				        </div>
					</form>
				</div>
			</div>
		</div>
		 <?php
		 	include "./layout/footer.php";
		 ?>
	</div>
	<script src="./js/writepopup.js"></script>
	<script src="./js/menu.js"></script>
	<script src="./js/hamburger.js"></script>
</body>
</html>