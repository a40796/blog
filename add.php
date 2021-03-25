<?php
require_once('./conn.php');
$sql = 'SELECT * FROM `catagories` ';
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    <h1>新增文章</h1>  
     <form method="POST" action="handle_add.php">
         <div>標題:<input type="text" name="title" /></div>
         <div>內容:   <textarea name="content" id="" cols="20" rows="10"></textarea></div>
    
         
         <div>
             分類:<select name="category_id" >
                 <?php
                 while($row = $result->fetch_assoc()){
                    $name = $row['name'];
                    $id = $row['id'];
                    echo "<option value='$id '> $name</option>";
                 }
                 ?>
             </select>
         </div>
         <input type="submit" value="提交" />
     </form>
</body>
</html>