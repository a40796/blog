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
    <h1>新增分類</h1>  
     <form method="POST" action="handle_add_category.php">
         名稱:
         <input type="text" name="name" />
         <input type="submit" value="提交" />
     </form>
</body>
</html>