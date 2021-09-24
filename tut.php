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
    ?>
</body>
</html>