<?php
include "db.php";
print_r($_POST);
$pdo -> query("INSERT into member set title='{$_POST['title']}', writer='{$_POST['writer']}', qut_text='{$_POST['qut_text']}', pw = '{$_POST['pw']}'");
?>
<script>
	location.href="freshman"; 
</script>