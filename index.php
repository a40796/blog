<?php
require_once('./conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav {
            position: fixed;
            left: 0;
            top: 0;
            background-color: #707070;
            width: 100vw;
            height: 62px;
        }

        .nav h1 {
            display: inline-block;
            color: white;
            margin: 0 20px;
        }

        .nav a {
            padding: 20px;
            display: inline-block;
            color: white;
            text-decoration: none;
        }

        .nav a:active {
            background: #bb9191;
        }

        .article {
            border: 1px dotted #707070;
        }

        .container {
            margin-top: 80px;
        }

        .article~.article {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="nav">
        <h1>BLOG</h1>
        <a href="index.php">首頁</a>
        <a href="about.php">關於我</a>
    </nav>
    <div class="container">
        <div class="articles">
            <?php

            $sql = 'SELECT * FROM `article` ORDER BY `category_id` ASC ';
            $result = $conn->query($sql);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $title = $row['title'];
                    echo "<div class='article'>";
                    echo  "<h1><a href='./article.php?id=$id '>$title</a></h1>";
                    echo "</div>";
                }
            }



            ?>
        </div>
    </div>
</body>
<script>
</script>

</html>