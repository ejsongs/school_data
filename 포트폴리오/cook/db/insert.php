<?php
	include_once "../db/db.php";
	$insert = "
		insert into curious set 
		title = '{$_POST['title']}',
		name = '{$_POST['name']}',
		email = '{$_POST['email']}',
		category = '{$_POST['category']}',
		about = '{$_POST['about']}'";
	$rs = $pdo ->query($insert);
	echo "A";

?>
<script>
	location.href = '../board.php';
</script>