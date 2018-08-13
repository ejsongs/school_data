<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<?php 
		include "./layout/header.php";
		include "./db/db.php";
	 ?>
	 <div class="wrap">
	 	<div class="hanburgerMenu">
	 	</div>
		<section class="bannerImg">
			<h2 class="hidden">배너지이밎</h2>
			<div class="banner">
				
			</div>
		</section>
		<section class="contactWrap">
			<h2 class="hidden">문의하기 틀</h2>
			<div class="container">
				<div class="contactStore">
					<div class="formWrap">
						<form action="./db/insert.php" method="post" >
								<div class="inputWrap">
									<div class="box">
										<div class="title">
											Title
										</div>
										<input type="text" name="title" class="title_input" placeholder="제목을 작성해주세요.">
									</div>
									<div class="box">
										<div class="title">
											Writer
										</div>
										<input type="text" name="name" placeholder="성명을 작성해주세요.">
									</div>
									<div class="box">
										<div class="title">
											E-mail
										</div>
										<input type="text" name="email" placeholder="이메일을 작성해주세요.">
									</div>
									<!-- <div class="box">
										<div class="title">
											Category
										</div>
										input 
										<div class="selectBox">
											<select name="category" id="category">
												<option value="food">음식</option>
												<option value="store">매장</option>
												<option value="etc">기타</option>
											</select>
										</div>
									</div> -->
									<div class="box">
										<div class="title">
											Category
										</div>
										<div class="selectBox">
											<select name="category" id="category">
												<option value="food">음식</option>
												<option value="store">매장</option>
												<option value="etc">기타</option>
											</select>
										</div>
									</div>
								</div>
								
							<div class="text">
								<div class="textarea_title">문의사항</div>
								<textarea name="about" id="about" cols="30" rows="10" placeholder="내용을 써주세요."></textarea>
							</div>
							<button >보내기</button>
						</form>
					</div>
				</div>
			</div>
		</section>

	 <?php 
	 	include "./layout/footer.php";
	  ?>
	 </div>
	 
	 <script src='./js/scroll.js'></script>
	 <script src="./js/hamburger.js"></script>
</body>
</html>