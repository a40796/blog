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
        <div class="articles">
           關於我
           <div class="about">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Fuga eligendi asperiores ea doloremque labore ullam debitis possimus. Eius laudantium provident sed labore minima. Veritatis et animi ut consequatur nemo fuga incidunt vitae ad non maiores earum unde pariatur modi, numquam facilis quibusdam excepturi harum ipsam fugit neque tenetur, voluptatibus rerum eveniet vel. Rerum quaerat officia doloremque amet facere perferendis minus distinctio dolore facilis laborum velit, soluta unde mollitia laboriosam saepe dolores, placeat voluptate animi aliquid consectetur, quae veniam deserunt voluptatum. Illum neque nemo, ipsa velit vitae dolorum asperiores in nostrum accusamus ipsam vero consequuntur facilis suscipit ex omnis molestias iure assumenda aliquam similique quam maiores! Tempore, facere necessitatibus nihil ipsum nisi nobis ratione mollitia obcaecati accusantium molestias maiores doloremque sed qui ex omnis soluta officia est ipsam dolor aut? Minima, eum recusandae iusto cumque repellendus vero alias amet. Mollitia expedita quod rerum laborum placeat, soluta accusamus recusandae suscipit, ullam saepe deserunt iusto voluptate illum. Ad rerum velit deleniti, ipsum, possimus sequi nulla dolore suscipit, dolores saepe minima vitae accusantium non minus soluta harum unde quos consectetur distinctio. Iste eveniet, et quam, repellat quidem nam sunt accusantium cupiditate in voluptate dicta, fugit nisi molestiae quisquam sequi dignissimos ipsum dolores eum dolor vero! Deserunt ex ducimus fugit. Eligendi, pariatur! Assumenda, impedit a, minima minus possimus quia illum cum facilis reiciendis et fugit! Autem tempora dicta beatae numquam perspiciatis est delectus corporis, illum cum fugit labore itaque totam vero impedit iure cupiditate? Repellendus maxime voluptatum provident architecto voluptas rem tenetur corrupti fugiat error a. Neque eveniet nam quidem alias rerum ea aliquid, mollitia autem magnam. Optio iste voluptatum officiis ipsam? Saepe ut debitis quidem cumque velit minus pariatur cum? Incidunt totam vitae temporibus dolores provident fugiat ducimus aperiam exercitationem. Magni aliquid molestiae quidem beatae tempore, ad repellat in hic, soluta necessitatibus porro perferendis.
           </div>
        </div>
    </div>
</body>
</html>