<?php 
$title = "Simple Array";
include 'includes/header.php' 
?>

    <h1>Simple Arrays</h1>
    <?php 
    
        //variable
        $num = 3;

        //an array
        //one type only of data
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

        echo $numbers[0];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);

        echo "<p>Array Number is size: $size </p>";

        for($count = 0; $count < $size; $count++)
        {
            echo "<p>$numbers[$count]</p>";
        }

    
    ?>

    <br>
    <br>
    <a href="index.php">Back</a>


    <?php require 'includes/footer.php'?>