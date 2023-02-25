<?php 
$title = "While Do While";
include 'includes/header.php' 
?>

    <!-- Pre-Condition -->
    <h1>While Loop</h1>
    <?php 
        $grade = 0;
        while($grade < 10)
        {
            $grade++;
            echo '<p> I am less than 10!</p>';
        }

        echo 'EXIT LOOP';

    ?>
    <!-- Post Condition -->
    <h1>Do-Wwhile Loop</h1>
    <?php 

        $grade = 0;
        do{
            echo '<p>Im do while loop!</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP';

    ?>
    

    <br>
    <br>
    <a href="index.php">Back</a>

    <?php require 'includes/footer.php'?>