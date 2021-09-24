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
        <form action="checkbox.php" method="post">
            <label>Apple</Label>
            <input type="checkbox" name="fruits[]" value="apple" />
            <label>Banana</label>
            <input type="checkbox" name="fruits[]" value="banana" />
            <label>Cherry</label>
            <input type="checkbox" name="fruits[]" value="cherry" />
            <input type="submit" />
        </form>
    </div>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    ?>
</body>
</html>