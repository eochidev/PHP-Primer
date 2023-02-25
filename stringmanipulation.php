<?php 
$title = "String Manipulation";
include 'includes/header.php' 
?>

    <h1>PHP String Manipulation</h1>
    
<?php
    //concatination
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "john jacob magtalas ";

        echo $phrase1 .', named Tiffany, '. $phrase2;

        echo "<br>";
        echo '<hr>';
    //string transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br>';
        echo 'Uppercase all of the letter:' .strtoupper($name). '<br>';
        echo 'Lowercase all of the letter:' .strtolower("THIS WAS AN UPPER CASE"). '<br>';
        echo '<hr>';

        echo 'Repeat String: ' .ucwords(str_repeat($name , 5)). '<br>';

        echo 'Get a substring: ' . substr($name,5,8).'<br>';

        echo 'Get position of string: ' .strpos($name, 'a'). '<br>';
        //RETURNS NULL

        echo 'Find character of "J": ' .strchr($name, 'j'). '<br>';
        echo 'Find character of "B": ' .strchr($name, 'c'). '<br>';
        echo 'Find character of "M": ' .strchr($name, 'o'). '<br>';
        echo 'Find character of "G": ' .strchr($name, 'm'). '<br>';

        echo 'Find the length of the string: ' .strlen($name). '<br>';

        echo 'Replace string with another: ' .str_replace("stand", "sit", $phrase2). '<br>';

    ?>


    <br>
    <br>
    <a href="index.php">Back</a>


    <?php require 'includes/footer.php'?>