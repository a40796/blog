<?php
require_once('./conn.php');
$id=$_POST['id'];
$name=$_POST['name'];
if(empty($id)||empty($name)){
    die('empty data');
}
$sql="UPDATE `catagories` SET `name`= '$name' WHERE id = ".$id;
$result = $conn->query($sql);
if($result ){
    header('Location:./admin_category.php');
}else{
    die('failed = '.$conn->error);
}

?>