<?php
require_once('./conn.php');
$id=$_GET['id'];
$sql = 'SELECT * FROM `article` WHERE id = '.$id;
$result = $conn->query($sql );
$row = $result->fetch_assoc();

$sql_cateogry = 'SELECT * FROM `catagories`';
$result_cateogry = $conn->query($sql_cateogry );
// $row_cateogry = $result_cateogry->fetch_assoc();



// print_r($row );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    <h1>編輯文章</h1>  
    <form method="POST" action="handle_update.php" value="<?php?>">
         <div>標題:<input type="text" name="title" value="<?php echo $row['title'] ?>"></div>
         <div>內容:   <textarea name="content" id="" cols="20" rows="10"><?php echo $row['content'] ?></textarea></div>
         <div>
             分類：<select name="category_id" id="">
             <?php
             
             while($row_cateogry=$result_cateogry->fetch_assoc()){
                 $id=$row_cateogry['id'];
                 $name=$row_cateogry['name'];
                 $is_checked = $row['category_id'] === $id ? "selected":"";
                 echo "<option value='$id' $is_checked >$name</option>";
             }
             
             ?>

             </select>
         </div>
         <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
         <input type="submit" value="提交" />
     </form>
</body>
</html>