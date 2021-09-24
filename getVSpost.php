<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="getVSpost.php" method="get">
            <label htmlFor="num1">Num 1</label>
            <input type="number" name="num1" />
            <input type="submit" />
        </form>
        <form action="getVSpost.php" method="post">
            <label htmlFor="num2">Num 2</label>
            <input type="number" name="num2" />
            <input type="submit" />
        </form>

        <!--GET will show the data inserted in the URL as query, POST won't-->
        
        <?php
            echo $_GET["num1"];
            echo $_POST["num2"];
        ?>
    </div>
</body>
</html>