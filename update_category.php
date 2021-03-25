<?php
require_once('./conn.php');
$id=$_GET['id'];
$sql = 'SELECT * FROM `catagories` WHERE id = '.$id;
$result = $conn->query($sql );
$row = $result->fetch_assoc();
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
    <h1>編輯分類</h1>  
     <form method="POST" action="handle_update_category.php">
         名稱:
         <input type="text" name="name" value="<?php echo $row['name'] ?>" />
         <input type="hidden" name="id" value=" <?php echo $row['id'] ?> ">
         <input type="submit" value="提交" />
     </form>
</body>
</html>