<?php
include "./db.php";
$sql = "select * from member";
$stmh = $pdo -> prepare($sql);
$stmh -> execute();
$result =$stmh -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>입학문의</title>
</head>
<body>
    <form action="./qut_form.php" method="post">
        <table>
            <th>No.</th>
            <th>제목</th>
            <th>글쓴이</th>
            <th>Date</th>
            <th>조회수</th>
            <tr>
    <?php
    foreach($result as $row){
    ?>
                <td><?=$row['idx']?></td>
                <td><?=$row['title']?></td>
                <td><?=$row['writer']?></td>
                <td><?=$row['date']?></td>
                <td><?=$row['qut_count']?></td>
    <?php } ?>
            </tr>
        </table>
        <button type="submit">글쓰기</button>
    </form>
</body>
</html>