<?php
require_once('./conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    <h1>文章管理</h1>  
    <a href="./add.php">新增文章</a>
    <a href="./admin_category.php">管理分類</a>
    <?php
    $sql = 'SELECT * FROM `article`  ';
    $result = $conn->query( $sql );
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo '<li>';
            echo $row['title'];
            echo "<a href='update.php?id=$row[id]'> 編輯</a>";
            echo "<a href='delete.php?id=$row[id]'> 刪除</a>";
            echo "<a></a>";
            echo '</li>';
        }
    }
    ?>
</body>
</html>