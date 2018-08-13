<?php
	include_once 'db.php'; 
	$select = "select * from member where idx='{$_GET['idx']}'"; 
	$rs = $pdo -> query($select); 
	$data = $rs -> fetch(); 
?>
	<div class="container" style="padding: 20px 0; ">
		<div class="box-control">
			<div class="box-title">
				<h1><?=$data["title"]?></h1>
			</div>
			<div class="box-content" style="min-height: 300px; ">
				<?=$data["qut_text"]?>
			</div>
		</div>
		<a href="/freshman" class="btn btn-info">뒤로가기</a>
	</div>