<?php
	require_once 'db.php';
	$pdo -> query("INSERT into member set title='{$_POST["title"]}', name = '{$_POST['writer']}', main_text='{$_POST['qut_text']}'" ); 
?>
<script>
	location.href='freshman.php'; 
</script>