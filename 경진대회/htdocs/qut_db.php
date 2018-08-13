<?php
include_once "db.php";
print_r($_POST);
$insert= "INSERT into member set title='{$_POST['title']}', writer='{$_POST['writer']}', qut_text='{$_POST['qut_text']}', pw = '{$_POST['pw']}', write_date = 'date("Y-m-d H:i:s")', name = '{$_POST["name"]}'"; 
$result= $pdo -> query($insert);

?>