<?php 
$title = "Switch Statement";
include 'includes/header.php' 
?>

    <h1>SWITCH STATEMENTS</h1>
    <?php 

        $grade = 'C';

        switch($grade)
        {
            case 'A' :
                echo '<h2 style="color:blue">You are Handsome!</h2>';
                break;

            case 'B':
                echo '<h2 style="color:pink">You are Pretty!</h2>';
                break;
                
            default;
                echo '<h2 style="color:green">Not in choices</h2>';
        }
    
    ?>

    <br>
    <br>
    <a href="index.php">Back</a>


    <?php require 'includes/footer.php'?>