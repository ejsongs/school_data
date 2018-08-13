<?php
    include "./db.php";
    // $file = $_FILES['upload']['name'];
    // $file_dir = $_SERVER['DOCUMENT_ROOT']."/upload/";
    // $file_name_enc = md5(microtime()).$file;
    // $file_path = $file.dir.$file_name_enc; 
    // if($_FILES["upload"]["size"] < 500000) {
    // 	move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
    // } else {
    // 	echo "<script>alert('파일 용량이 너무 큼 ')</script>";
    // }
    $insert = "insert into recommend set title = '{$_POST['title']}' , content = '{$_POST['content']}', category='{$_POST['category']}'";
    $rs = $pdo -> query($insert);
    
?>
<script>
    location.href="../reference.php";
</script>