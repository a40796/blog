<?php

require_once('./conn.php');
$id = $_GET['id'];
$sql ='DELETE FROM `article` WHERE id = '.$id;
if($conn->query($sql)){
    header("Location:./admin.php");
}else{
    die("faild");
}


?>