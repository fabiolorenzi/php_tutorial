<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.html";
    ?>
    <p>this is the body</p>

    <?php
        $title = "Including php file";
        $text = "successfull";
        $wordCount = 25;
        include "article.php";
    ?>
    <br />

    <?php
        include "includingFunc.php";
        getName("Jacob");
    ?>

    <?php
        include "footer.html";
    ?>
</body>
</html>