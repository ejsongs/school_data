<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>입학문의</title>
</head>
<body>
    <form action="./qut_db.php" method="post">
        <table>
           <tr>
                <td> 제목 : <input type="text" name="title"></td>
            </tr>
            <tr>
                <td> 작성자 : <input type="text" name="writer"></td>
            </tr>
            <tr>
                <td><textarea name="qut_text" id="qut_text" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>비밀번호 : <input type="text" name="pw"></td>
            </tr>
        </table>
        <button type="submit">글작성</button>
    </form>
</body>
</html>