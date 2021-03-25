<?php

require_once('./conn.php');
$id=$_GET['id'];
$sql = 'select A.id,A.title,A.content,C.name from article as A left join catagories as C on A.category_id = C.id where A.id = '.$id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$title = $row['title'];
$content = $row['content'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav{
            position: fixed;
            left: 0;
            top: 0;
            background-color:#707070;
            width: 100vw;
            height: 62px;
        }
        .nav h1{
            display: inline-block;
            color: white;
            margin: 0 20px;
        }
        .nav a{
            padding: 20px;
            display: inline-block;
            color: white;
            text-decoration: none;
        }
        .nav a:active{
              background: #bb9191;
        }
        .article{
            border: 1px dotted #707070;
        }
        .container{
            margin-top: 80px;
        }
        .article ~ .article{
           margin-top: 20px;
        }
        .about{
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <nav class="nav" >
        <h1>BLOG</h1>
        <a  href="index.php">首頁</a>
        <a href="about.php">關於我</a>
    </nav>
    <div class="container">
       <div class="single_article">
           <h1><?php echo $title ?></h1>
           <H2>分類:<?php  echo $row['name'];  ?></H2>
           <p><?php  echo $content  ?></p>
</body>
</html>