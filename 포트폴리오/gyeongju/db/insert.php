<?php
	include "./db.php";
	$insert = "insert into news set title = '{$_POST['title']}' , name='{$_POST['name']}' , content = '{$_POST['content']}' , email='{$_POST['email']}'";
	$rs = $pdo->query($insert);
?>
<script>
	location.href="./index.html";
</script>