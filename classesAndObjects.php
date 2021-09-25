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
        echo("<h2>Classes</h2>");
        class Book {
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        $book2 = new Book;
        $book2->title = "Lord of the rings";
        $book2->author = "Tolkien";
        $book2->pages = 700;

        echo $book2->author;

        echo("<br />");

        class Movie {
            var $title;
            var $author;
            var $vote;

            function __construct($code) {
                echo("$code inserted <br />");
            }
        };

        $movie1 = new Movie(0123);

        echo("<br />");
        echo("How to use contructor to create faster a new product");
        echo("<br />");
        echo("<br />");


        class Magazine {
            var $title;
            var $writer;
            var $price;

            function __construct($aTitle, $aWriter, $aPrice) {
                $this->title = $aTitle;
                $this->writer = $aWriter;
                $this->price = $aPrice;

            }
        };

        $mag1 = new Magazine("title1", "Jefferson", 4.99);
        echo $mag1->price;
        echo "<hr />";



        echo("<h2>Object Functions</h2>");
        class Student {
            var $name;
            var $gpa;

            function __construct($aName, $aGpa) {
                $this->name = $aName;
                $this->gpa = $aGpa;
            }

            function honours() {
                if ($this->gpa >= 3.5) {
                    return "true";
                }
                return "false";
            }
        };

        $stud1 = new Student("James", 4.0);
        $stud2 = new Student("Mary", 3.0);

        echo $stud1->honours();
        echo "<br />";
        echo $stud2->honours();
        echo("<hr />");



        echo("<h2>Getters and Setters</h2>");
        echo("<br />");
        class Serie {
            public $title;
            private $rating;

            // public == everyone can see it, use it and change it
            // private == anycode outside this class can't access that data

            function __construct($aTitle, $aRating) {
                $this->title = $aTitle;
                $this->rating = $aRating;
            }

            function getRating() {
                return $this->rating;
            }

            function setRating() {
                $this->rating = "dog";
            }
        }

        $serie1 = new Serie("Rick and Morty", "gp13");
        $serie2 = new Serie("Black Spot", "gp18");
        // echo $serie1->rating; -------- this is not working because the request is from outside that class
        echo $serie1->getRating(); // this is working because this function is inside that class
        // var is a general one used for studying purpose and it would be better to use public and private instead
        echo "<br />";
        echo "<br />";

        echo $serie2->getRating();
        echo "<br />";
        $serie2->setRating();
        echo $serie2->getRating();
        echo("<hr />");
    ?>
</body>
</html>