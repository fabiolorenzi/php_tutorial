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
        <form action="form.php" method="get">
            <label htmlFor="name">Name</label>
            <input type="text" name="name" />
            <label htmlFor="surname">Surname</label>
            <input type="text" name="surname" />
            <button type="submit">Submit</button>
        </form>
    </div>

    <?php
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        echo("<p>Your name is $name and your surname is $surname</p>");
    ?>
</body>
</html>