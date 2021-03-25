<?php

require_once('./conn.php');
$id = $_GET['id'];
$sql ='DELETE FROM `catagories` WHERE id = '.$id;
if($conn->query($sql)){
    header("Location:./admin_category.php");
}else{
    die("faild");
}


?>