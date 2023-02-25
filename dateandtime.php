<?php 
$title = "Date and Time";
include 'includes/header.php' 
?>

    <h1>Date and Time Manipulation</h1>
    <?php

    $datenow = getdate();

        echo "Today's Date: <br>";
        echo $datenow['mday'] .'<br>';
        echo $datenow['mon'] ."<br>";
        echo $datenow['year'] ."<br>";

        echo "Todat's Date: " . $datenow['mon'] . '/' .  $datenow['mday'] . '/' .  $datenow['year'] . '<br>';

        echo time() .'<br>';

        print date("m/d/y"). '<br>';
        print date("G.i:s"). '<br>';
        print date("F Y ", time());


    ?>
    <br>
    <br>
    <a href="index.php">Back</a>


<?php require 'includes/footer.php'?>