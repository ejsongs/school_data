<?php
include "/db.php";
    $_SESSION['id'] = $_POST['id'];
    if($_SESSION['id'] != " "){
        $sql = "select * from login_board where email='{$_POST['email']}'";
        $result = $db -> query($sql);
        $row = $result ->fetch();
        $_SESSION['name'] = $row['name'];
        if($_POST['password'] == $row['password']){
            echo "<script> alert('로그인 되었습니다'); location.href='../../index.php';</script>";
            $_SESSION['ok'] = true;
        }else{
            echo "<script> alert('아이디 또는 비밀번호를 잘못입력했습니다.'); history.go(-1);</script>";
        }
    }
?>
