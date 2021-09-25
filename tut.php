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
        echo("Hello World");
        echo "Hello World";
        echo("<h1>Hello everyone</h1>");
        echo "<hr />";



        echo("<h2>Variables</h2>");
        $characterName = "Andrew";
        $characterAge = 25;
        echo("<p>His name is $characterName</p> <br />");
        echo("He is $characterAge");
        echo("<hr />");



        echo("<h2>Types of Data</h2>");
        $string = "This is a string";
        $wholeNumber = 35;
        $floatNumber = 20.5;
        $boolean = false;
        null;
        echo $string;
        echo "<br />";
        echo $wholeNumber;
        echo "<br />";
        echo $floatNumber;
        echo "<br />";
        echo $boolean;
        echo("<hr />");



        echo("<h2>Working with strings</h2>");
        $example = "Hello";
        echo($example);
        echo("<br />");
        echo strtolower($example);
        echo("<br />");
        echo strtoupper($example);
        echo("<br />");
        echo strlen($example);
        echo("<br />");
        echo $example[1];
        echo("<br />");
        $example[0] = "J";
        echo $example;
        echo("<br />");

        $example2 = "Kumo Team";
        echo $example2;
        echo("<br />");
        echo str_replace("mo", "Panda", $example2);
        echo("<br />");
        echo substr($example2, 5);
        echo("<br />");



        echo("<hr />");
        echo("<h2>Working with numbers</h2>");
        echo 5 + 9;
        echo("<br />");
        echo 10 % 3;
        echo("<br />");
        echo (4+5) * 10;
        echo("<br />");
        $example = 10;
        echo $example;
        echo("<br />");
        $example++;
        echo $example;
        echo("<br />");
        $example--;
        echo $example;
        echo("<br />");
        echo ("Common operations of number");
        $example2 = -10.5;
        echo("<br />");
        echo $example2;
        echo("<br />");
        echo abs($example2);
        echo("<br />");
        echo pow($example2, 2);
        echo("<br />");
        echo sqrt(144);
        echo("<br />");
        echo max(100, 10);
        echo("<br />");
        echo min(100, 10);
        echo("<br />");
        echo round(3.2);
        echo("<br />");
        echo ceil(3.99);
        echo("<br />");
        echo floor(3.99);
        echo("<br />");
        echo("<hr />");



        echo("<h2>Arrays</h2>");
        $array = array("naem", 34, false, 45.6, "Helloooo");
        echo $array;
        echo("<br />");
        echo $array[0];
        echo("<br />");
        $array[0] = "name";
        echo $array[0];
        echo("<br />");
        $array[4] = 15;
        echo $array[4];
        echo("<br />");
        echo count($array);
        echo("<br />");
        echo("<hr />");



        echo("<h2>Associated Arrays</h2>");
        $asArray = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo("<br />");
        echo $asArray["Jim"];
        echo("<br />");
        echo count($asArray);
        echo("<hr />");
    ?>

    <!--FOR ASSOCIATED ARRAYS-->

    <form action="tut.php" method="post">
        <input type="text" name="student" />
        <input type="submit" />
    </form>

    <?php
        $name = $_POST["student"];
        $vote = $asArray[$_POST["student"]];
        echo "<p>name student: $name, vote: $vote</p>";
        echo("<hr />");



        echo "<h2>Functions</h2>";
        echo("<br />");
        function sayHi() {
            echo "Hello User";
        };
        sayHi();
        echo("<br />");
        function sayName($name, $age) {
            echo "Hello $name, you are $age";
        };
        sayName("James", 25);
        echo("<hr />");



        echo "<h2>Returns</h2>";
        function cube($num) {
            return $num * $num * $num;
        };
        $res = cube(4);
        echo $res;
        echo("<hr />");



        echo("<h2>If Statement</h2>");
        $isMale = true;
        $isTall = true;
        if ($isMale && $isTall) {
            echo "you are a tall male";
        } elseif ($isMale && !$isTall) {
            echo "You are male but short";
        } else {
            echo "you are not a male";
        };
        echo("<br />");
        echo("<hr />");



        echo("<h2>If Statement Comp</h2>");
        function getMax($n1, $n2) {
            if ($n1 >= $n2) {
                return $n1;
            } else {
                return $n2;
            };
        };
        echo getMax(5, 2);
        echo("<br />");
        echo("types: > < >= <= == !=");
        echo("<hr />");



        echo("<h2>Switch Statements</h2>");
        $grade = "B";
        switch($grade) {
            case "A+":
                echo "Great Job";
                break;
            case "B":
                echo "Good Job";
                break;
            case "C":
                echo "Not so Good Job";
                break;
            case "F":
                echo "Bad Job";
                break;
            default:
                echo "Invalid Grade";
        };
        echo("<br />");
        echo("<hr />");



        echo("<h2>While Loops</h2>");
        $index = 0;
        while ($index <= 10) {
            echo $index;
            echo("<br />");
            $index++;
        };
        echo("<br />");
        echo("<hr />");

    ?>
</body>
</html>