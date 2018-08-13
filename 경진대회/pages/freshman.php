<?php
	include "db.php";
	$sql = "select * from member order by idx DESC limit 5 ";
	$stmh = $pdo -> prepare($sql);
	$stmh -> execute();
	$result =$stmh -> fetchAll();
?>
<link rel="stylesheet" href="/css/freshman.css">

<div id="banner">
    <h1>" 서울디지텍고등학교에 오신걸 환영합니다! "</h1>
    <ul class="banner_menu">
        <li>new</li>
        <li>Introduce</li>
    </ul>
</div>
<div class="contents">
	<div class="container">
		<!-- <div class="infor">
			<h1>입학안내</h1>
			<ul>
				<li class="school_img"></li>
				<li class="school_ex">
					입학안내 내용 
				</li>
			</ul>
		</div> -->
		<div class="way">
			<h2>입학전형</h2>
			<p>
					
			</p>
		</div>
		<div class="list_ask">

			<h2>문의내용</h2>
			<form action="qut_db" method="post">
        <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>제목</th>
            <th>글쓴이</th>
         </tr>
    <?php
    foreach($result as $row){
    ?>
               <tr>
                <td><?=$row['idx']?></td>
                <td><a href="view?idx=<?=$row['idx']?>"><?=$row['title']?></a></td>
                <td><?=$row['writer']?></td>
               </tr>
    <?php } ?>
            		
        </table>
		</div>
		<div class="ask">
			<h2>문의하기</h2>
			<form action="insert" method="POST" >
				<div class="mb10 clear">
					<input type="text" id="title" name="title" placeholder="글제목" size="30" maxlength="30" required="필수입력" class="input-control">
					<input type="text" id="name" name="writer" placeholder="글쓴이" size="30" maxlength="40" required="필수입력" class="input-control">
				</div>
					<textarea style="resize:none" name="main_text" id="text_area" maxlength="200" required="필수입력" placeholder="text" class="input-control"></textarea>
				<button class="btn btn-success">작성완료</button>
			</form>
				<!-- <div class="form">
						<div>
							<label for="title">
								<input type="text" id="title" name="title" placeholder="글제목" size="30" maxlength="30" required="입력하세요">
							</label>
							<label for="name">
								<input type="text" id="writer" name="writer" placeholder="작성자" size="30" maxlength="15" required="입력하세요
								">
							</label>
						</div>
				</div>
				<div class="text">
					<label for="text_area">
							<textarea name="text_area" id="text_area"  placeholder="글내용" maxlength="200" required="입력하세요"></textarea>
					</label>
					<br>
						<button>작성완료</button>
					</form> -->
				</div>
		</div>
	</div>
</div>