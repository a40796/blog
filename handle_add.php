<?php
require_once('./conn.php');
$title = $_POST['title'];
$content = $_POST['content'];
$category_id = $_POST['category_id'];


if(empty($title)||empty($content)||empty($category_id)){
    die('empty data');
}

$sql = "INSERT INTO `article`(`title`, `content`, `category_id`) VALUES ('$title','$content','$category_id')";
$result = $conn->query($sql );
if($result){
    header("Location:./addmin.php");
}else{
    die("failed.".$conn->error);
}


?>



