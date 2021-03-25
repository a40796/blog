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
    <h1>分類管理</h1>  
    <a href="./add_category.php">新增分類</a>
    <a href="./addmin.php">管理文章</a>
    <?php
    $sql = 'SELECT * FROM `catagories` ';
    $result = $conn->query( $sql );
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo '<li>';
            echo $row['name'];
            echo "<a href='update_category.php?id=$row[id]'> 編輯</a>";
            echo "<a href='delete_category.php?id=$row[id]'> 刪除</a>";
            echo "<a></a>";
            echo '</li>';
        }
    }
    ?>
</body>
</html>