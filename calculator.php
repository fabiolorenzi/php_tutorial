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
        <form action="calculator.php" method="get">
            <label htmlFor="num1">Num 1</label>
            <input type="number" name="num1" />
            <label htmlFor="num2">Num 2</label>
            <input type="number" name="num2" />
            <input type="submit" />
        </form>
    </div>

    <?php
        echo($_GET["num1"] + $_GET["num2"]);
    ?>
</body>
</html>