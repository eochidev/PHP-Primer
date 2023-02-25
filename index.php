<?php 
$title = "Index";
include 'includes/header.php' 
?>

    <!-- Basic HTML -->
    <h1>Hello HTML World</h1>
    
    
    <?php

        echo 'Hello PHP';

    ?>

    <?php 
        //PHP variables
        $name = 'Jay';
        $age = 23;
        $sex = 'male';
        $course = 'BSIT';
        
        echo '<br>';
        echo $name;
        //PHP concatination
        echo '<h1> My Name is: ' .$name. '</h1>';
        
        echo '<h1> My Age is: ' .$age. '</h1>';

        echo "<h1> My Name is: $name </h1>";

        echo "<h1> My Sex is: $sex </h1>";
    ?>
<?php require 'includes/footer.php'?>